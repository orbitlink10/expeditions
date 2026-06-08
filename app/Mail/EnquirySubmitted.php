<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquirySubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public readonly array $enquiry,
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [
                new Address($this->enquiry['email'], $this->enquiry['name']),
            ],
            subject: 'Caracal Expeditions safari enquiry',
        );
    }

    public function content(): Content
    {
        return new Content(
            text: 'emails.enquiry-submitted',
        );
    }
}
