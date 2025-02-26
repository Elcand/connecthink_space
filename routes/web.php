<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/list', function () {
    return view('studio');
});

Route::get('/contact', function () {
    return view('contact');
});
