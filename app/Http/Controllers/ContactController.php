<?php

namespace App\Http\Controllers;

use App\Mail\NewLeadNotification;
use App\Models\Lead;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
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
            'company'  => ['nullable', 'string', 'max:160'],
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

        $lead = Lead::create([
            'name'             => $data['name'],
            'email'            => $data['email'],
            'phone'            => $data['phone'] ?? null,
            'company'          => $data['company'] ?? null,
            'service_interest' => $this->guessService($data['industry'] ?? ''),
            'source'           => 'website',
            'status'           => 'new',
            'notes'            => $data['message'],
        ]);

        try {
            Mail::to('info@morabangun.com')->send(new NewLeadNotification($lead));
        } catch (\Throwable $e) {
            Log::warning('[LEAD_MAIL_FAIL] ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Pesan Anda berhasil terkirim. Tim kami akan menghubungi Anda segera.',
        ]);
    }

    private function guessService(string $industry): string
    {
        $map = [
            'logistik' => 'erp', 'freight' => 'erp', 'ekspor' => 'erp',
            'website'  => 'website', 'toko'    => 'website',
            'mobile'   => 'mobile', 'android' => 'mobile', 'ios' => 'mobile',
            'chatbot'  => 'chatbot', 'ai'      => 'chatbot',
        ];
        foreach ($map as $keyword => $service) {
            if (str_contains(strtolower($industry), $keyword)) {
                return $service;
            }
        }
        return 'other';
    }
}
