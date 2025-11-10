<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $contact;
    public $messageContent;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $contact, $messageContent)
    {
        $this->name = $name;
        $this->email = $email;
        $this->contact = $contact;
        $this->messageContent = $messageContent;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Message Mail',
            from: 'hello@artistryminds.com', // Use a string directly here
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'contact', // Make sure you have a contact.blade.php view
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'contact' => $this->contact,
                'messageContent' => $this->messageContent,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
