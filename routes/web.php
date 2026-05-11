<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Public contact endpoint (mocked — logs lead to storage/logs/laravel.log)
Route::post('/contact',     [ContactController::class, 'store'])->name('contact.store');
Route::post('/api/contact', [ContactController::class, 'store'])->name('contact.store.api');
