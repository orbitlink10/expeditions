<?php

namespace App\Http\Controllers;

use App\Mail\EnquirySubmitted;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use Throwable;

class EnquiryController extends Controller
{
    public function __invoke(): View
    {
        $companyEmail = config('company.email');
        $companyPhone = config('company.phone');

        return view('enquire', [
            'title' => 'Enquire | Caracal Expeditions',
            'description' => 'Send a safari enquiry to Caracal Expeditions or call the team directly.',
            'brand' => [
                'name' => 'Caracal',
                'subtitle' => 'Expeditions',
                'full_name' => 'Caracal Expeditions',
                'logo_url' => asset('images/caracal-expeditions-profile.jpg'),
            ],
            'companyEmail' => $companyEmail,
            'companyDirectEmailUrl' => config('company.direct_email_url'),
            'companyPhone' => $companyPhone,
            'companyPhoneLabel' => config('company.phone_label'),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'telephone' => ['required', 'string', 'max:60'],
            'contact_preference' => ['required', 'in:Email,Phone'],
            'adults' => ['required', 'integer', 'min:1', 'max:99'],
            'children' => ['nullable', 'integer', 'min:0', 'max:12'],
            'arrival_date' => ['nullable', 'date'],
            'departure_date' => ['nullable', 'date', 'after_or_equal:arrival_date'],
            'message' => ['nullable', 'string', 'max:4000'],
        ]);

        $childCount = (int) ($validated['children'] ?? 0);
        $childAges = [];

        for ($index = 1; $index <= $childCount; $index += 1) {
            $field = 'child_age_'.$index;

            $request->validate([
                $field => ['required', 'integer', 'min:0', 'max:17'],
            ]);

            $childAges[] = (int) $request->input($field);
        }

        $validated['child_ages'] = $childAges;

        try {
            Mail::to(config('company.email'))->send(new EnquirySubmitted($validated));
        } catch (Throwable $exception) {
            Log::error('Enquiry email failed to send.', [
                'recipient' => config('company.email'),
                'exception' => $exception,
            ]);

            return back()
                ->withInput()
                ->with('enquiry_error', 'Sorry, your enquiry could not be sent right now. Please email or call us directly.');
        }

        return back()->with('enquiry_status', 'Thank you. Your enquiry has been sent to Caracal Expeditions.');
    }
}
