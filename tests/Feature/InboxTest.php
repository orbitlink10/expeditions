<?php

namespace Tests\Feature;

use App\Support\InboxMailbox;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class InboxTest extends TestCase
{
    use RefreshDatabase;

    public function test_inbox_requires_login_and_shows_setup_when_unconfigured(): void
    {
        $this->get(route('dashboard.inbox.index'))->assertRedirect(route('login'));
        $this->put(route('dashboard.inbox.settings'))->assertRedirect(route('login'));
        $this->withSession(['dashboard_authenticated' => true])->get(route('dashboard.inbox.index'))
            ->assertOk()->assertSee('Connect your email')
            ->assertSee('id="dashboard-sidebar"', false)
            ->assertSee('dashboard-header', false)
            ->assertSee('email-app--embedded', false);
    }

    public function test_credentials_are_encrypted_preserved_and_never_flashed(): void
    {
        $data = ['inbox_host' => 'mail.example.com', 'inbox_port' => 993, 'inbox_encryption' => 'ssl', 'inbox_username' => 'desk@example.com', 'inbox_password' => ' secret-password '];
        $this->withSession(['dashboard_authenticated' => true])->put(route('dashboard.inbox.settings'), $data)->assertSessionHasNoErrors();
        $stored = DB::table('site_settings')->where('key', 'inbox_password')->value('value');
        $this->assertSame(' secret-password ', Crypt::decryptString($stored));
        $this->put(route('dashboard.inbox.settings'), [...$data, 'inbox_password' => ''])->assertSessionHasNoErrors();
        $this->assertSame($stored, DB::table('site_settings')->where('key', 'inbox_password')->value('value'));
        $this->get(route('dashboard.settings.edit'))->assertOk()->assertDontSee($stored)->assertDontSee('secret-password');
        $this->put(route('dashboard.inbox.settings'), [...$data, 'inbox_host' => 'invalid/host'])->assertSessionHasErrors('inbox_host')->assertSessionMissing('_old_input.inbox_password');
    }

    public function test_messages_are_escaped_and_connection_failures_are_actionable(): void
    {
        $mock = $this->mock(InboxMailbox::class);
        $mock->shouldReceive('settings')->andReturn(['inbox_host' => 'mail.example.com', 'inbox_password' => 'encrypted']);
        $mock->shouldReceive('read')->once()->with(1, 12)->andReturn([
            'messages' => new LengthAwarePaginator([], 0, 15),
            'selected' => ['subject' => 'Hello', 'from' => 'sender@example.com', 'date' => 'Today', 'body' => '<script>alert(1)</script>'],
        ]);
        $this->withSession(['dashboard_authenticated' => true])->get(route('dashboard.inbox.index', ['message' => 12]))->assertOk()->assertSee('Hello')->assertDontSee('<script>alert(1)</script>', false);
        $mock->shouldReceive('read')->once()->with(1, null)->andThrow(new \RuntimeException('sensitive details'));
        $this->get(route('dashboard.inbox.index'))->assertOk()->assertSee('Unable to read the mailbox')->assertDontSee('sensitive details');
    }

    public function test_email_search_is_sent_to_mailbox_and_rows_link_to_reader(): void
    {
        $mock = $this->mock(InboxMailbox::class);
        $mock->shouldReceive('settings')->andReturn(['inbox_host' => 'mail.example.com', 'inbox_password' => 'encrypted']);
        $mock->shouldReceive('read')->once()->with(1, null, 'safari')->andReturn([
            'messages' => new LengthAwarePaginator([
                ['uid' => 42, 'from' => 'traveller@example.com', 'subject' => 'Safari booking', 'date' => '2026-11-17', 'unread' => true],
                ['uid' => 41, 'from' => 'reader@example.com', 'subject' => 'Already read', 'date' => '2026-11-16', 'unread' => false],
            ], 1, 50),
            'selected' => null,
            'unreadCount' => 2,
        ]);
        $this->withSession(['dashboard_authenticated' => true])
            ->get(route('dashboard.inbox.index', ['q' => 'safari']))
            ->assertOk()->assertSee('Emails')->assertSee('Search results')
            ->assertSee('Safari booking')->assertSee('message=42')->assertSee('emails.css')
            ->assertSee('class="email-row is-unread"', false)
            ->assertSee('class="email-row"', false)
            ->assertSee('aria-label="2 unread emails"', false);
    }
}
