<?php

namespace Tests\Feature;

use App\Mail\EnquirySubmitted;
use App\Models\Enquiry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class DashboardManagementTest extends TestCase
{
    use RefreshDatabase;

    private function payload(): array
    {
        return ['name' => 'Traveller', 'email' => 'traveller@example.com', 'telephone' => '+254700000000', 'contact_preference' => 'Email', 'adults' => 2, 'children' => 0, 'message' => '<script>alert(1)</script>'];
    }

    public function test_management_routes_require_dashboard_login(): void
    {
        $this->get(route('dashboard.enquiries.index'))->assertRedirect(route('login'));
        $this->get(route('dashboard.settings.edit'))->assertRedirect(route('login'));
        $this->put(route('dashboard.settings.update'), [])->assertRedirect(route('login'));
    }

    public function test_saved_settings_control_notification_recipient_and_public_contact_details(): void
    {
        Mail::fake();
        $this->withSession(['dashboard_authenticated' => true])->put(route('dashboard.settings.update'), [
            'notification_email' => 'desk@example.com', 'notifications_enabled' => 1, 'email' => 'hello@example.com',
            'phone' => '+254711222333', 'phone_label' => '+254 711 222 333', 'whatsapp_phone' => '254711222333',
        ])->assertRedirect()->assertSessionHas('status');
        $this->post(route('enquire.store'), $this->payload())->assertSessionHas('enquiry_status');
        Mail::assertSent(EnquirySubmitted::class, fn ($mail) => $mail->hasTo('desk@example.com'));
        $this->get(route('enquire'))->assertSee('hello@example.com')->assertSee('tel:+254711222333', false)->assertSee('https://wa.me/254711222333', false);
        $this->get(route('dashboard.enquiries.index'))->assertOk()->assertSee('traveller@example.com')->assertDontSee('<script>alert(1)</script>', false);
        $this->patch(route('dashboard.enquiries.update', Enquiry::first()), ['status' => 'contacted'])->assertRedirect();
        $this->assertDatabaseHas('enquiries', ['status' => 'contacted']);
        $this->get(route('dashboard.settings.edit'))->assertOk();
    }

    public function test_enquiry_is_saved_when_mail_fails_and_can_be_retried(): void
    {
        Mail::shouldReceive('to')->once()->andThrow(new \RuntimeException('Mail unavailable'));
        $this->post(route('enquire.store'), $this->payload())->assertSessionHas('enquiry_status');
        $this->assertDatabaseHas('enquiries', ['email' => 'traveller@example.com', 'notification_status' => 'failed']);
        Mail::swap(new \Illuminate\Mail\MailManager($this->app));
        Mail::fake();
        $this->withSession(['dashboard_authenticated' => true])->post(route('dashboard.enquiries.notify', Enquiry::first()))->assertSessionHas('status');
        $this->assertDatabaseHas('enquiries', ['notification_status' => 'sent']);
        Mail::assertSent(EnquirySubmitted::class);
    }

    public function test_disabled_notifications_still_save_enquiries(): void
    {
        Mail::fake();
        config(['company.notifications_enabled' => false]);
        $this->post(route('enquire.store'), $this->payload())->assertSessionHas('enquiry_status');
        $this->assertDatabaseHas('enquiries', ['notification_status' => 'disabled']);
        Mail::assertNothingSent();
    }

    public function test_invalid_enquiry_does_not_create_a_record(): void
    {
        Mail::fake();
        $this->post(route('enquire.store'), [...$this->payload(), 'adults' => 0])->assertSessionHasErrors('adults');
        $this->assertDatabaseCount('enquiries', 0);
        Mail::assertNothingSent();
    }
}
