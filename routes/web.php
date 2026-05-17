<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublicTicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/harga', fn() => view('harga'))->name('harga');

Route::get('/blog',        [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::post('/contact',     [ContactController::class, 'store'])->name('contact.store');
Route::post('/api/contact', [ContactController::class, 'store'])->name('contact.store.api');

Route::post('/support',     [PublicTicketController::class, 'store'])->name('support.store');
Route::post('/api/support', [PublicTicketController::class, 'store'])->name('support.store.api');
