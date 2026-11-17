<?php

namespace App\Support;

use Illuminate\Contracts\Encryption\DecryptException;
use Throwable;
use Webklex\PHPIMAP\ClientManager;
use Webklex\PHPIMAP\Exceptions\AuthFailedException;
use Webklex\PHPIMAP\Exceptions\ConnectionFailedException;
use Webklex\PHPIMAP\Exceptions\MessageNotFoundException;

class InboxFailure
{
    public static function message(Throwable $exception): string
    {
        return match (true) {
            $exception instanceof DecryptException => 'The saved mailbox password could not be decrypted on this server. Re-enter and save the password in Email settings.',
            $exception instanceof AuthFailedException => 'The email server rejected the login. Check the email username and password in Email settings. Enable IMAP and use an app password if your provider requires one.',
            $exception instanceof ConnectionFailedException => 'Unable to connect securely to the IMAP server. Check the server name, port and encryption in Email settings. The hosting server must allow outbound IMAP connections and trust the mail server certificate.',
            $exception instanceof MessageNotFoundException => 'This message is no longer available. Refresh the inbox to see the current messages.',
            ! class_exists(ClientManager::class) => 'The IMAP library is missing on this server. Install the application dependencies with composer install --no-dev --optimize-autoloader, then refresh Inbox.',
            default => 'Unable to read the mailbox because of a server error. Ask the administrator to check the latest "Inbox read failed" entry in the application log.',
        };
    }
}
