<?php

namespace App\Support;

use App\Mail\EnquirySubmitted;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EnquiryNotifier
{
    public function send(Enquiry $enquiry): bool
    {
        if (! filter_var(config('company.notifications_enabled', true), FILTER_VALIDATE_BOOLEAN)) {
            $enquiry->update(['notification_status' => 'disabled']);
            return false;
        }
        $recipient = config('company.notification_email') ?: config('company.email');
        $enquiry->update(['notification_email' => $recipient, 'notification_status' => 'pending']);
        try {
            Mail::to($recipient)->send(new EnquirySubmitted($enquiry->mailData()));
        } catch (Throwable $exception) {
            $enquiry->update(['notification_status' => 'failed']);
            Log::error('Enquiry notification failed.', ['enquiry_id' => $enquiry->id, 'exception' => $exception]);
            return false;
        }
        $enquiry->update(['notification_status' => 'sent', 'notified_at' => now()]);
        return true;
    }
}
