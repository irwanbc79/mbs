<?php

use App\Http\Middleware\RejectFilamentOnClientDomain;
use App\Http\Middleware\SetClientSessionCookie;
use App\Services\ClientMagicLinkService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::domain(config('domains.client', 'client.morabangun.com'))
    ->middleware(['web', SetClientSessionCookie::class, RejectFilamentOnClientDomain::class])
    ->group(function () {

        // Guest / Public Access
        Route::get('/', function (Request $request) {
            if (Auth::guard('client')->check() || $request->has('demo')) {
                return view('client.dashboard');
            }
            return view('client.login');
        })->name('client.index');

        Route::get('/login', function (Request $request) {
            if (Auth::guard('client')->check() && !$request->has('demo')) {
                return redirect()->route('client.dashboard');
            }
            return view('client.login');
        })->name('client.login');

        // Alias default 'login' named route for Laravel auth redirects
        Route::get('/login-auth', function () {
            return redirect()->route('client.login');
        })->name('login');

        Route::get('/dashboard', function (Request $request) {
            // Seed initial demo tickets if empty
            if (\App\Models\Ticket::count() === 0) {
                \App\Models\Ticket::create([
                    'ticket_number' => 'TKT-' . date('Ymd') . '-001',
                    'client_name'   => 'PT Trans Logistik Utama',
                    'client_email'  => 'admin@translogistik.co.id',
                    'client_phone'  => '081234567890',
                    'title'         => 'Integrasi Webhook CEISA 4.0 Response BC 2.0',
                    'description'   => 'Mohon bantuan pengecekan callback webhook dari DJBC untuk penarikan dokumen BC 2.0 secara otomatis.',
                    'priority'      => 'high',
                    'status'        => 'in_progress',
                    'category'      => 'feature',
                ]);

                \App\Models\Ticket::create([
                    'ticket_number' => 'TKT-' . date('Ymd') . '-002',
                    'client_name'   => 'PT Trans Logistik Utama',
                    'client_email'  => 'admin@translogistik.co.id',
                    'client_phone'  => '081234567890',
                    'title'         => 'Permintaan Tambahan User Account Staging',
                    'description'   => 'Penambahan 2 akun pengguna baru untuk tim operasional lapangan pada portal staging.',
                    'priority'      => 'medium',
                    'status'        => 'resolved',
                    'category'      => 'question',
                ]);
            }

            $tickets = \App\Models\Ticket::latest()->get();
            $invoices = \App\Models\Invoice::latest()->get();

            return view('client.dashboard', compact('tickets', 'invoices'));
        })->name('client.dashboard');

        Route::post('/tickets', function (Request $request) {
            $validated = $request->validate([
                'title'       => 'required|string|max:255',
                'category'    => 'required|string|max:100',
                'priority'    => 'required|string|in:low,medium,high,urgent',
                'description' => 'required|string',
            ]);

            $count = \App\Models\Ticket::whereDate('created_at', today())->count() + 1;
            $ticketNumber = 'TKT-' . date('Ymd') . '-' . str_pad($count, 3, '0', STR_PAD_LEFT);

            $ticket = \App\Models\Ticket::create([
                'ticket_number' => $ticketNumber,
                'client_name'   => 'PT Trans Logistik Utama',
                'client_email'  => 'admin@translogistik.co.id',
                'client_phone'  => '081234567890',
                'title'         => $validated['title'],
                'category'      => $validated['category'],
                'priority'      => $validated['priority'],
                'description'   => $validated['description'],
                'status'        => 'open',
            ]);

            return redirect()->route('client.dashboard', ['tab' => 'tickets'])->with('success', 'Tiket support #' . $ticket->ticket_number . ' berhasil dibuat! Tim MBS akan segera merespons.');
        })->name('client.tickets.store');

        Route::post('/login', function (Request $request) {
            $credentials = $request->validate([
                'email'    => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::guard('client')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('client.dashboard');
            }

            return back()->withErrors([
                'email' => 'Kredensial yang diberikan tidak cocok dengan catatan kami.',
            ])->onlyInput('email');
        })->name('client.login.post');

        // Magic Link Token Consumption
        Route::get('/masuk/{token}', function (string $token, ClientMagicLinkService $magicService) {
            $user = $magicService->consumeMagicToken($token);
            if ($user) {
                Auth::guard('client')->login($user);
                return redirect()->route('client.dashboard')->with('success', 'Selamat datang kembali di Portal Klien!');
            }
            return redirect()->route('client.login')->with('error', 'Token Magic Link tidak valid atau telah kadaluwarsa.');
        })->name('client.magic');

        // Authenticated Actions
        Route::middleware('auth:client')->group(function () {
            Route::post('/logout', function (Request $request) {
                Auth::guard('client')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()->route('client.login');
            })->name('client.logout');
        });
    });
