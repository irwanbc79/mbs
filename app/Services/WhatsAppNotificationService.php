<?php

namespace App\Services;

use App\Models\WaLog;
use App\Models\WaTemplate;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsAppNotificationService
{
    /**
     * Send a WhatsApp message to a recipient phone number with logging.
     */
    public function sendMessage(string $phone, string $message, ?string $templateCode = null): bool
    {
        $provider = env('WA_PROVIDER', 'fonnte');
        $apiKey = env('WA_API_KEY');
        $formattedPhone = $this->formatPhoneNumber($phone);
        $success = false;
        $responsePayload = null;

        if ($apiKey && $provider === 'fonnte') {
            try {
                $response = Http::withHeaders([
                    'Authorization' => $apiKey,
                ])->post('https://api.fonnte.com/send', [
                    'target'  => $formattedPhone,
                    'message' => $message,
                ]);

                $responsePayload = $response->body();
                $success = $response->successful() && ($response->json('status') === true);
            } catch (\Throwable $e) {
                Log::warning('[WA_SEND_FAIL] ' . $e->getMessage());
                $responsePayload = $e->getMessage();
            }
        } else {
            // Simulated local log for development/staging
            Log::info("[WA_SIMULATED_SEND] To: {$formattedPhone} | Message: {$message}");
            $responsePayload = 'Simulated delivery log (No WA_API_KEY configured)';
            $success = true;
        }

        // Record in WA Logs
        WaLog::create([
            'recipient_phone'  => $formattedPhone,
            'message'          => $message,
            'status'           => $success ? 'sent' : 'failed',
            'response_payload' => $responsePayload,
        ]);

        return $success;
    }

    /**
     * Send a message based on a stored WaTemplate with dynamic variable replacement.
     */
    public function sendTemplatedMessage(string $phone, string $templateCode, array $variables): bool
    {
        $template = WaTemplate::where('code', $templateCode)->first();
        if (!$template) {
            $content = $variables['message'] ?? 'Notifikasi dari PT Mora Bangun Nusantara';
        } else {
            $content = $template->content;
            foreach ($variables as $key => $value) {
                $content = str_replace("{{$key}}", $value, $content);
            }
        }

        return $this->sendMessage($phone, $content, $templateCode);
    }

    private function formatPhoneNumber(string $phone): string
    {
        $cleaned = preg_replace('/[^0-9]/', '', $phone);
        if (str_starts_with($cleaned, '0')) {
            return '62' . substr($cleaned, 1);
        }
        return $cleaned;
    }
}
