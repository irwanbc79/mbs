<?php

namespace App\Http\Controllers;

use App\Mail\NewTicketNotification;
use App\Models\Ticket;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PublicTicketController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'client_name'  => ['required', 'string', 'max:120'],
            'client_email' => ['required', 'email', 'max:160'],
            'client_phone' => ['nullable', 'string', 'max:40'],
            'title'        => ['required', 'string', 'max:200'],
            'description'  => ['required', 'string', 'max:5000'],
            'category'     => ['nullable', 'string', 'in:bug,feature,question,maintenance,other'],
            'priority'     => ['nullable', 'string', 'in:low,medium,high,urgent'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak valid.',
                'errors'  => $validator->errors(),
            ], 422);
        }

        $data = $validator->validated();

        $ticket = Ticket::create([
            'client_name'  => $data['client_name'],
            'client_email' => $data['client_email'],
            'client_phone' => $data['client_phone'] ?? null,
            'title'        => $data['title'],
            'description'  => $data['description'],
            'category'     => $data['category'] ?? 'other',
            'priority'     => $data['priority'] ?? 'medium',
            'status'       => 'open',
        ]);

        try {
            Mail::to('info@morabangun.com')->send(new NewTicketNotification($ticket));
        } catch (\Throwable $e) {
            Log::warning('[TICKET_MAIL_FAIL] ' . $e->getMessage());
        }

        return response()->json([
            'success' => true,
            'message' => 'Tiket support Anda berhasil dikirim. Nomor tiket: ' . $ticket->ticket_number,
            'ticket_number' => $ticket->ticket_number,
        ]);
    }
}
