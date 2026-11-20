<?php

namespace App\Support;

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class InboxSender
{
    public function send(array $data): void
    {
        $settings = app(InboxMailbox::class)->settings();
        if (empty($settings['inbox_smtp_host']) || empty($settings['inbox_smtp_port'])) {
            throw new \RuntimeException('Outgoing mail is not configured.');
        }
        $original = ! empty($data['reply_uid'])
            ? app(InboxMailbox::class)->read(1, (int) $data['reply_uid'])['selected']
            : null;
        if (! empty($data['reply_uid']) && ! $original) {
            throw new \RuntimeException('Original email unavailable.');
        }
        $mailer = Mail::build([
            'transport' => 'smtp',
            'scheme' => $settings['inbox_smtp_encryption'] === 'ssl' ? 'smtps' : 'smtp',
            'require_tls' => true,
            'host' => $settings['inbox_smtp_host'],
            'port' => (int) $settings['inbox_smtp_port'],
            'username' => ($settings['inbox_smtp_username'] ?? '') ?: $settings['inbox_username'],
            'password' => Crypt::decryptString($settings['inbox_smtp_password'] ?? $settings['inbox_password']),
            'timeout' => 20,
        ]);
        $sent = $mailer->raw($data['body'], function (Message $message) use ($settings, $data, $original) {
            $message->from($settings['inbox_username'], config('app.name'))->to($data['to'])->subject($data['subject']);
            foreach ($data['attachments'] ?? [] as $file) {
                $message->attach($file->getRealPath(), [
                    'as' => basename(str_replace('\\', '/', $file->getClientOriginalName())),
                    'mime' => $file->getMimeType() ?: 'application/octet-stream',
                ]);
            }
            if (! empty($original['message_id'])) {
                $headers = $message->getSymfonyMessage()->getHeaders();
                $headers->addIdHeader('In-Reply-To', $original['message_id']);
                $headers->addIdHeader('References', $original['message_id']);
            }
        });
        if (! $sent) {
            throw new \RuntimeException('Message was not sent.');
        }
    }
}
