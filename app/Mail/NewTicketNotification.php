<?php

namespace App\Mail;

use App\Models\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewTicketNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Ticket $ticket) {}

    public function envelope(): Envelope
    {
        $priority = strtoupper($this->ticket->priority);
        return new Envelope(
            subject: "🎫 [{$priority}] Tiket Baru: {$this->ticket->title}",
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.tickets.new',
            with: ['ticket' => $this->ticket],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
