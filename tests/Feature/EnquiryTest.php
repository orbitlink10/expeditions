<?php

namespace Tests\Feature;

use App\Mail\EnquirySubmitted;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class EnquiryTest extends TestCase
{
    public function test_enquiry_page_has_direct_email_and_call_actions(): void
    {
        config(['company.email' => 'info@caracalexpeditions.co.ke']);

        $this
            ->get(route('enquire'))
            ->assertOk()
            ->assertSee('form="enquiry-form"', false)
            ->assertSee('mailto:info@caracalexpeditions.co.ke?subject=Caracal%20Expeditions%20Enquiry', false)
            ->assertSee('tel:+254701942724', false);
    }

    public function test_enquiry_form_sends_email_to_company(): void
    {
        Mail::fake();
        config(['company.email' => 'info@caracalexpeditions.co.ke']);

        $response = $this->post(route('enquire.store'), [
            'name' => 'Jane Traveller',
            'email' => 'jane@example.com',
            'telephone' => '+254700000000',
            'contact_preference' => 'Email',
            'adults' => 2,
            'children' => 1,
            'child_age_1' => 8,
            'arrival_date' => '2026-07-10',
            'departure_date' => '2026-07-15',
            'message' => 'We would like a private safari.',
        ]);

        $response
            ->assertRedirect()
            ->assertSessionHas('enquiry_status', 'Thank you. Your enquiry has been sent to Caracal Expeditions.');

        Mail::assertSent(EnquirySubmitted::class, function (EnquirySubmitted $mail): bool {
            return $mail->hasTo('info@caracalexpeditions.co.ke')
                && $mail->enquiry['name'] === 'Jane Traveller'
                && $mail->enquiry['child_ages'] === [8];
        });
    }
}
