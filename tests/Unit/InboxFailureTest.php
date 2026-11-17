<?php

namespace Tests\Unit;

use App\Support\InboxFailure;
use Illuminate\Contracts\Encryption\DecryptException;
use PHPUnit\Framework\TestCase;
use Webklex\PHPIMAP\Exceptions\AuthFailedException;
use Webklex\PHPIMAP\Exceptions\ConnectionFailedException;
use Webklex\PHPIMAP\Exceptions\MessageNotFoundException;

class InboxFailureTest extends TestCase
{
    public function test_failures_have_specific_safe_messages(): void
    {
        foreach ([
            [new AuthFailedException('secret'), 'rejected the login'],
            [new ConnectionFailedException('secret'), 'connect securely'],
            [new DecryptException('secret'), 'could not be decrypted'],
            [new MessageNotFoundException('secret'), 'no longer available'],
            [new \RuntimeException('secret'), 'application log'],
        ] as [$exception, $expected]) {
            $message = InboxFailure::message($exception);
            $this->assertStringContainsString($expected, $message);
            $this->assertStringNotContainsString('secret', $message);
        }
    }
}
