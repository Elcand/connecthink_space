<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/list', function () {
    return view('studio');
});

Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
