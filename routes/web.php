<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/blog',        [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Public contact endpoint (mocked — logs lead to storage/logs/laravel.log)
Route::post('/contact',     [ContactController::class, 'store'])->name('contact.store');
Route::post('/api/contact', [ContactController::class, 'store'])->name('contact.store.api');
