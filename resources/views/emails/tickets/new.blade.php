<x-mail::message>
# 🎫 Tiket Support Baru

Klien mengajukan permintaan support melalui website **morabangun.com**.

<x-mail::panel>
**No. Tiket:** {{ $ticket->ticket_number }}
**Prioritas:** {{ strtoupper($ticket->priority) }}
**Kategori:** {{ match($ticket->category) {
    'bug' => 'Bug / Error',
    'feature' => 'Permintaan Fitur',
    'question' => 'Pertanyaan',
    'maintenance' => 'Maintenance',
    default => 'Lainnya'
} }}
**Klien:** {{ $ticket->client_name }}
**Email:** {{ $ticket->client_email ?: '-' }}
**Telepon:** {{ $ticket->client_phone ?: '-' }}
</x-mail::panel>

**Masalah:** {{ $ticket->title }}

**Detail:**
{{ $ticket->description }}

@if($ticket->priority === 'urgent')
> ⚠️ **Tiket ini bertanda URGENT** — harap ditangani sesegera mungkin.
@endif

<x-mail::button :url="config('app.url') . '/admin/tickets'">
Tangani Tiket Ini
</x-mail::button>

Salam,
**MBS Admin System**
</x-mail::message>
