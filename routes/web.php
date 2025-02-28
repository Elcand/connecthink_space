<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/studio', [StudioController::class, 'studio']);

Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
