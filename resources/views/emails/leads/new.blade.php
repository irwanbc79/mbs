<x-mail::message>
# 🔔 Lead Baru Masuk

Ada prospek baru yang menghubungi melalui website **morabangun.com**.

<x-mail::panel>
**Nama:** {{ $lead->name }}
**Perusahaan:** {{ $lead->company ?: '-' }}
**Email:** {{ $lead->email ?: '-' }}
**Telepon:** {{ $lead->phone ?: '-' }}
**Layanan:** {{ match($lead->service_interest) {
    'website' => 'Website',
    'erp' => 'ERP',
    'mobile' => 'Mobile App',
    'chatbot' => 'Chatbot AI',
    'custom' => 'Custom Dev',
    default => 'Lainnya'
} }}
**Sumber:** {{ match($lead->source) {
    'website' => 'Website',
    'whatsapp' => 'WhatsApp',
    'referral' => 'Referral',
    default => $lead->source
} }}
</x-mail::panel>

@if($lead->notes)
**Pesan Klien:**
{{ $lead->notes }}
@endif

<x-mail::button :url="config('app.url') . '/admin/leads'">
Lihat di Admin Panel
</x-mail::button>

Segera follow-up untuk meningkatkan peluang konversi.

Salam,
**MBS Admin System**
</x-mail::message>
