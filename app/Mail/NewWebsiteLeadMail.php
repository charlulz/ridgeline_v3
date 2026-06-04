<?php

namespace App\Mail;

use App\Models\Lead;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewWebsiteLeadMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Lead $lead,
        public ?int $jobProgressCustomerId = null,
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New website lead: ' . $this->lead->name,
        );
    }

    public function content(): Content
    {
        return new Content(
            text: 'mail.new-website-lead',
        );
    }
}
