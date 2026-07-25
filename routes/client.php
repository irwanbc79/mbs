<?php

use App\Http\Middleware\RejectFilamentOnClientDomain;
use App\Http\Middleware\SetClientSessionCookie;
use Illuminate\Support\Facades\Route;

Route::domain(config('domains.client', 'client.morabangun.com'))
    ->middleware(['web', SetClientSessionCookie::class, RejectFilamentOnClientDomain::class])
    ->group(function () {

        Route::get('/login', function () {
            return view('client.login');
        })->name('client.login');

        Route::middleware('auth:client')->group(function () {
            Route::get('/', function () {
                return view('client.dashboard');
            })->name('client.dashboard');
        });
    });
