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
            $selected = null;
            if ($uid !== null) {
                $message = $folder->query()->leaveUnread()->getMessageByUid($uid);
                $selected = [
                    'subject' => (string) $message->getSubject(),
                    'from' => (string) $message->getFrom(),
                    'date' => (string) $message->getDate(),
                    'body' => $message->getTextBody() ?: html_entity_decode(strip_tags(preg_replace('/<(script|style)\b[^>]*>.*?<\/\1>/is', '', $message->getHTMLBody() ?: '')), ENT_QUOTES | ENT_HTML5, 'UTF-8'),
                ];
            }

            return [
                'messages' => $messages->through(fn ($message) => [
                    'uid' => (int) (string) $message->getUid(),
                    'subject' => (string) $message->getSubject(),
                    'from' => (string) $message->getFrom(),
                    'date' => (string) $message->getDate(),
                ])->withQueryString(),
                'selected' => $selected,
            ];
        } finally {
            $client->disconnect();
        }
    }
}
