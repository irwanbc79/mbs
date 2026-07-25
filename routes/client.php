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

        // Authenticated Client Workspace
        Route::middleware('auth:client')->group(function () {
            Route::get('/dashboard', function () {
                return view('client.dashboard');
            })->name('client.dashboard');

            Route::post('/logout', function (Request $request) {
                Auth::guard('client')->logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()->route('client.login');
            })->name('client.logout');
        });
    });
