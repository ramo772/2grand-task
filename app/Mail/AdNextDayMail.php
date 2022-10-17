<?php

namespace App\Mail;

use App\Models\Advertiser;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdNextDayMail extends Mailable
{
    use Queueable, SerializesModels;
    public $advertiser;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Advertiser $advertiser)
    {
        $this->advertiser = $advertiser;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('2grand_task@gmail.com', '2grandTask'),
            subject: 'Ad Next Day Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.email',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
