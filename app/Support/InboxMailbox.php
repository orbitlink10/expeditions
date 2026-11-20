<?php

namespace App\Support;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Webklex\PHPIMAP\ClientManager;

class InboxMailbox
{
    public function settings(): array
    {
        return DB::table('site_settings')->where('key', 'like', 'inbox_%')->pluck('value', 'key')->all();
    }

    public function read(int $page, ?int $uid = null, string $search = ''): array
    {
        $settings = $this->settings();
        $client = (new ClientManager)->make([
            'host' => $settings['inbox_host'],
            'port' => (int) $settings['inbox_port'],
            'encryption' => $settings['inbox_encryption'],
            'validate_cert' => true,
            'protocol' => 'imap',
            'username' => $settings['inbox_username'],
            'password' => Crypt::decryptString($settings['inbox_password']),
            'timeout' => 15,
        ]);

        try {
            $client->connect();
            $folder = $client->getFolderByPath('INBOX');
            $query = $folder->query()->all()->leaveUnread()->setFetchBody(false)->setFetchOrder('desc');
            if ($search !== '') {
                $query->whereText($search);
            }
            $messages = $query->paginate(50, $page, 'page');
            // IMAP servers may return fetched headers in ascending order even
            // when the query selected the newest UIDs first. Restore arrival
            // order explicitly before rendering each page.
            $messages->setCollection(
                $messages->getCollection()
                    ->sortByDesc(fn ($message) => (int) (string) $message->getUid())
                    ->values()
            );
            $selected = null;
            if ($uid !== null) {
                $message = $folder->query()->leaveUnread()->getMessageByUid($uid);
                $selected = [
                    'reply_to' => $message->getReplyTo()->first()?->mail ?? $message->getFrom()->first()?->mail,
                    'message_id' => trim((string) $message->getMessageId(), '<> '),
                    'subject' => (string) $message->getSubject(),
                    'from' => (string) $message->getFrom(),
                    'date' => (string) $message->getDate(),
                    'body' => $message->getTextBody() ?: html_entity_decode(strip_tags(preg_replace('/<(script|style)\b[^>]*>.*?<\/\1>/is', '', $message->getHTMLBody() ?: '')), ENT_QUOTES | ENT_HTML5, 'UTF-8'),
                ];
                $message->setFlag('Seen');
            }

            return [
                'messages' => $messages->through(fn ($message) => [
                    'unread' => ! $message->hasFlag('Seen') && (int) (string) $message->getUid() !== $uid,
                    'uid' => (int) (string) $message->getUid(),
                    'subject' => (string) $message->getSubject(),
                    'from' => (string) $message->getFrom(),
                    'date' => (string) $message->getDate(),
                ])->withQueryString(),
                'selected' => $selected,
                'unreadCount' => $folder->query()->whereUnseen()->count(),
            ];
        } finally {
            $client->disconnect();
        }
    }
}
