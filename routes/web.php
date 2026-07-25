<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublicTicketController;
use App\Http\Controllers\SitemapController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Main Website Routes (For main domain and local development)
Route::group([], function () {
    Route::get('/', function (Request $request) {
        $host = request()->getHost();
        $clientDomain = config('domains.client', 'client.morabangun.com');
        
        if ($host === $clientDomain || str_starts_with($host, 'client.')) {
            if (Auth::guard('client')->check() || $request->has('demo')) {
                return view('client.dashboard');
            }
            return view('client.login');
        }

        return view('welcome');
    })->name('home');

    Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
    Route::get('/harga', fn() => view('harga'))->name('harga');

    Route::get('/blog',        [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

    Route::view('/solusi', 'solusi.index')->name('solusi.index');
    Route::view('/solusi/portal-forwarder', 'solusi.portal-forwarder')->name('solusi.portal-forwarder');
    Route::view('/solusi/ceisa', 'solusi.ceisa')->name('solusi.ceisa');
    Route::view('/solusi/sekolah', 'solusi.sekolah')->name('solusi.sekolah');
    Route::view('/solusi/distributor', 'solusi.distributor')->name('solusi.distributor');
    Route::view('/solusi/klinik', 'solusi.klinik')->name('solusi.klinik');
    Route::view('/solusi/umroh', 'solusi.umroh')->name('solusi.umroh');
    Route::view('/solusi/kontraktor', 'solusi.kontraktor')->name('solusi.kontraktor');
    Route::view('/solusi/bengkel', 'solusi.bengkel')->name('solusi.bengkel');
    Route::view('/solusi/properti', 'solusi.properti')->name('solusi.properti');
    Route::view('/solusi/koperasi', 'solusi.koperasi')->name('solusi.koperasi');
    Route::view('/solusi/trucking', 'solusi.trucking')->name('solusi.trucking');
    Route::view('/solusi/percetakan', 'solusi.percetakan')->name('solusi.percetakan');
    Route::view('/solusi/reseller', 'solusi.reseller')->name('solusi.reseller');
    Route::view('/solusi/kos', 'solusi.kos')->name('solusi.kos');
    Route::view('/solusi/jastip', 'solusi.jastip')->name('solusi.jastip');
});

// Global API & Post Endpoints
Route::post('/contact',     [ContactController::class, 'store'])->name('contact.store');
Route::post('/api/contact', [ContactController::class, 'store'])->name('contact.store.api');

Route::post('/support',     [PublicTicketController::class, 'store'])->name('support.store');
Route::post('/api/support', [PublicTicketController::class, 'store'])->name('support.store.api');

// Admin Locale Switcher Route
Route::get('/admin/locale/{lang}', function (string $lang) {
    if (in_array($lang, ['id', 'en'])) {
        session(['admin_locale' => $lang]);
    }
    return back();
})->name('admin.locale.switch');

