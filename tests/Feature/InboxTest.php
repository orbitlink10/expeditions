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

    public function test_attachment_uploads_are_validated_and_passed_to_sender(): void
    {
        $data = ['to' => 'guest@example.com', 'subject' => 'Itinerary', 'body' => 'Attached'];
        $file = \Illuminate\Http\UploadedFile::fake()->createWithContent('itinerary.txt', 'Safari itinerary');
        $sender = $this->mock(\App\Support\InboxSender::class);
        $sender->shouldReceive('send')->once()->with(\Mockery::on(fn ($input) =>
            $input['attachments'][0]->getClientOriginalName() === 'itinerary.txt'
        ));
        $this->withSession(['dashboard_authenticated' => true])->post(route('dashboard.inbox.send'), [...$data, 'attachments' => [$file]])
            ->assertSessionHasNoErrors()->assertRedirect(route('dashboard.inbox.index'));
        $this->post(route('dashboard.inbox.send'), [...$data, 'attachments' => [\Illuminate\Http\UploadedFile::fake()->create('large.pdf', 2049)]])
            ->assertSessionHasErrors('attachments.0');
        $this->post(route('dashboard.inbox.send'), [...$data, 'attachments' => array_map(fn () => \Illuminate\Http\UploadedFile::fake()->create('file.pdf', 1800), range(1, 3))])
            ->assertSessionHasErrors('attachments');
        $this->post(route('dashboard.inbox.send'), [...$data, 'attachments' => array_map(fn () => \Illuminate\Http\UploadedFile::fake()->create('file.txt', 1), range(1, 6))])
            ->assertSessionHasErrors('attachments');
    }

    public function test_compose_and_sending_require_login_and_validate_input(): void
    {
        $this->post(route('dashboard.inbox.send'))->assertRedirect(route('login'));
        $this->withSession(['dashboard_authenticated' => true])
            ->get(route('dashboard.inbox.index', ['compose' => 1]))
            ->assertOk()->assertSee('New message')->assertSee('Send email')->assertSee(route('dashboard.inbox.send'));
        $this->post(route('dashboard.inbox.send'), ['to' => 'invalid', 'subject' => "Hello\r\nBcc: victim@example.com", 'body' => 'Hello'])
            ->assertSessionHasErrors(['to', 'subject']);
    }

    public function test_send_success_and_failure_preserve_draft_without_exposing_errors(): void
    {
        $data = ['to' => 'guest@example.com', 'subject' => 'Safari', 'body' => 'Welcome'];
        $sender = $this->mock(\App\Support\InboxSender::class);
        $sender->shouldReceive('send')->once()->with($data)->andReturnNull();
        $this->withSession(['dashboard_authenticated' => true])->post(route('dashboard.inbox.send'), $data)
            ->assertRedirect(route('dashboard.inbox.index'))->assertSessionHas('status', 'Email sent successfully.');
        $sender->shouldReceive('send')->once()->andThrow(new \RuntimeException('secret SMTP password'));
        $this->from(route('dashboard.inbox.index', ['compose' => 1]))->post(route('dashboard.inbox.send'), $data)
            ->assertSessionHasErrors('send')->assertSessionHasInput('body', 'Welcome');
        $this->get(route('dashboard.inbox.index', ['compose' => 1]))->assertDontSee('secret SMTP password')->assertSee('Welcome');
    }

    public function test_smtp_password_is_encrypted_preserved_and_not_flashed(): void
    {
        $data = ['inbox_host' => 'mail.example.com', 'inbox_port' => 993, 'inbox_encryption' => 'ssl', 'inbox_username' => 'desk@example.com', 'inbox_password' => 'imap-secret', 'inbox_smtp_host' => 'smtp.example.com', 'inbox_smtp_port' => 587, 'inbox_smtp_encryption' => 'tls', 'inbox_smtp_password' => ' smtp-secret '];
        $this->withSession(['dashboard_authenticated' => true])->put(route('dashboard.inbox.settings'), $data)->assertSessionHasNoErrors();
        $stored = DB::table('site_settings')->where('key', 'inbox_smtp_password')->value('value');
        $this->assertSame(' smtp-secret ', Crypt::decryptString($stored));
        $this->put(route('dashboard.inbox.settings'), [...$data, 'inbox_smtp_password' => ''])->assertSessionHasNoErrors();
        $this->assertSame($stored, DB::table('site_settings')->where('key', 'inbox_smtp_password')->value('value'));
        $this->put(route('dashboard.inbox.settings'), [...$data, 'inbox_smtp_host' => 'bad/host'])
            ->assertSessionHasErrors('inbox_smtp_host')->assertSessionMissing('_old_input.inbox_smtp_password');
    }

    public function test_sender_uses_smtp_credentials_and_threads_replies(): void
    {
        $mailbox = $this->mock(InboxMailbox::class);
        $mailbox->shouldReceive('settings')->once()->andReturn([
            'inbox_username' => 'desk@example.com', 'inbox_password' => Crypt::encryptString('password'),
            'inbox_smtp_host' => 'smtp.example.com', 'inbox_smtp_port' => 587, 'inbox_smtp_encryption' => 'tls',
        ]);
        $mailbox->shouldReceive('read')->once()->with(1, 42)->andReturn(['selected' => ['message_id' => 'original@example.com']]);
        $mailer = app('mail.manager')->build(['transport' => 'array']);
        \Illuminate\Support\Facades\Mail::shouldReceive('build')->once()->with(\Mockery::on(fn ($config) =>
            $config['host'] === 'smtp.example.com' && $config['password'] === 'password' && $config['require_tls'] === true
        ))->andReturn($mailer);
        $file = \Illuminate\Http\UploadedFile::fake()->createWithContent('itinerary.txt', 'Safari itinerary');
        app(\App\Support\InboxSender::class)->send(['to' => 'guest@example.com', 'subject' => 'Re: Safari', 'body' => 'Welcome', 'reply_uid' => 42, 'attachments' => [$file]]);
        $sent = $mailer->getSymfonyTransport()->messages()->first()->getOriginalMessage();
        $this->assertSame('desk@example.com', $sent->getFrom()[0]->getAddress());
        $this->assertSame('guest@example.com', $sent->getTo()[0]->getAddress());
        $this->assertSame('Welcome', $sent->getTextBody());
        $this->assertCount(1, $sent->getAttachments());
        $this->assertSame('itinerary.txt', $sent->getAttachments()[0]->getFilename());
        $this->assertSame('Safari itinerary', base64_decode($sent->getAttachments()[0]->bodyToString()));
        $this->assertSame('original@example.com', $sent->getHeaders()->get('In-Reply-To')->getId());
    }

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
