<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name'     => ['required', 'string', 'max:120'],
            'email'    => ['required', 'email', 'max:160'],
            'phone'    => ['nullable', 'string', 'max:40'],
            'company'  => ['required', 'string', 'max:160'],
            'industry' => ['nullable', 'string', 'max:60'],
            'message'  => ['required', 'string', 'max:5000'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak valid. Periksa kembali isian Anda.',
                'errors'  => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();
        $data['submitted_at'] = now()->toIso8601String();
        $data['ip']           = $request->ip();

        // === MOCK: log lead to storage/logs/laravel.log ===
        Log::channel('stack')->info('[MORABANGUN_CONTACT_LEAD]', $data);

        // Mailer driver is `log` by default → email body also lands in laravel.log
        try {
            Mail::raw(
                "Lead baru dari morabangun.com\n\n" .
                "Nama       : {$data['name']}\n" .
                "Email      : {$data['email']}\n" .
                "WhatsApp   : " . ($data['phone'] ?? '-') . "\n" .
                "Perusahaan : {$data['company']}\n" .
                "Skala      : " . ($data['industry'] ?? '-') . "\n" .
                "Pesan      :\n{$data['message']}\n\n" .
                "Dikirim    : {$data['submitted_at']}\n" .
                "IP         : {$data['ip']}",
                function ($m) use ($data) {
                    $m->to('info@morabangun.com')
                      ->subject('[Lead] ' . $data['company'] . ' — ' . $data['name'])
                      ->replyTo($data['email'], $data['name']);
                }
            );
        } catch (\Throwable $e) {
            // Mail failure should NOT break the UX — we already logged the lead.
            Log::warning('[MORABANGUN_CONTACT_MAIL_FAIL] ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Pesan Anda berhasil terkirim. Tim kami akan menghubungi Anda segera.',
        ]);
    }
}
