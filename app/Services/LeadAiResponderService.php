<?php

namespace App\Services;

use App\Models\AiRun;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class LeadAiResponderService
{
    /**
     * Generate an AI-crafted response draft and solution recommendation for a lead.
     */
    public function generateResponse(Lead $lead): array
    {
        $startTime = microtime(true);
        $apiKey = config('services.gemini.key', env('GEMINI_API_KEY'));

        $prompt = <<<PROMPT
Anda adalah AI Business Consultant dari PT Mora Bangun Nusantara (MBS Solusi Vertikal).
Tugas Anda adalah merespons lead masuk dari calon klien berikut:
- Nama: {$lead->name}
- Perusahaan: {$lead->company}
- Layanan diminati: {$lead->service_interest}
- Pesan/Kebutuhan: {$lead->notes}

Solusi Vertikal MBS yang tersedia:
1. Portal Forwarder & Logistik (H2H CEISA Bea Cukai)
2. CEISA 4.0 Integration
3. SIM Sekolah & Pesantren
4. SIM Klinik & Rumah Sakit
5. SIM Umroh & Travel
6. SIM Kontraktor & Konstruksi
7. SIM Bengkel & Otomotif
8. SIM Properti & Real Estate
9. SIM Koperasi & Simpan Pinjam
10. SIM Trucking & Armada
11. SIM Percetakan & Packaging
12. SIM Reseller & Distro
13. SIM Manajemen Kos & Kontrakan
14. SIM Jastip (Jasa Titip)
15. Website & Company Profile Premium (M1/M2)
16. Custom ERP System (M3)

Format Output JSON:
{
    "solution_recommended": "Nama Solusi Vertikal",
    "complexity_tier": "S / M / L / XL",
    "suggested_reply_wa": "Teks pesan balasan ramah dan profesional via WhatsApp...",
    "suggested_reply_email": "Teks balasan email profesional...",
    "estimated_terms": [
        {"term": "Termin 1 - DP (Down Payment)", "percentage": 50},
        {"term": "Termin 2 - UAT & Handover", "percentage": 50}
    ]
}
PROMPT;

        $promptHash = hash('sha256', $prompt);
        $result = null;

        if ($apiKey) {
            try {
                $response = Http::post("https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key={$apiKey}", [
                    'contents' => [
                        ['parts' => [['text' => $prompt]]]
                    ]
                ]);

                if ($response->successful()) {
                    $rawText = $response->json('candidates.0.content.parts.0.text', '');
                    preg_match('/\{.*\}/s', $rawText, $matches);
                    if (!empty($matches[0])) {
                        $result = json_decode($matches[0], true);
                    }
                }
            } catch (\Throwable $e) {
                Log::warning('[AI_LEAD_RESPONDER_FAIL] ' . $e->getMessage());
            }
        }

        // Fallback if AI API key is not configured or fails
        if (!$result) {
            $solutionMap = [
                'erp'     => 'Portal Logistik & ERP Custom (M3)',
                'website' => 'Company Profile & Website Premium (M1/M2)',
                'mobile'  => 'Mobile Application Solutions',
                'chatbot' => 'AI Chatbot & Assistant',
            ];
            $recommended = $solutionMap[$lead->service_interest] ?? 'Solusi Vertikal MBS Custom';

            $result = [
                'solution_recommended'  => $recommended,
                'complexity_tier'       => 'M',
                'suggested_reply_wa'    => "Halo Kak {$lead->name}, terima kasih telah menghubungi PT Mora Bangun Nusantara (MBS). Kami telah menerima permintaan Anda terkait {$recommended} untuk {$lead->company}. Tim kami siap berdiskusi untuk memberikan demo dan penawaran terbaik.",
                'suggested_reply_email' => "Yth. Bpk/Ibu {$lead->name},\n\nTerima kasih atas minat Anda pada layanan MBS Solusi Vertikal ({$recommended}). Kami telah meninjau kebutuhan {$lead->company} dan ingin mengundang Anda untuk sesi konsultasi singkat.",
                'estimated_terms'       => [
                    ['term' => 'Termin 1 - DP 50%', 'percentage' => 50],
                    ['term' => 'Termin 2 - Pelunasan 50%', 'percentage' => 50]
                ]
            ];
        }

        $latencyMs = (int) ((microtime(true) - $startTime) * 1000);

        // Record AI Run for cost & observability tracking
        AiRun::create([
            'feature'      => 'lead_qualification',
            'model'        => $apiKey ? 'gemini-1.5-flash' : 'rule_engine_fallback',
            'prompt_hash'  => $promptHash,
            'input_tokens' => strlen($prompt) / 4,
            'output_tokens'=> strlen(json_encode($result)) / 4,
            'cost'         => 0.0001,
            'latency_ms'   => $latencyMs,
            'output'       => $result,
            'approved_by'  => auth()->id(),
        ]);

        return $result;
    }
}
