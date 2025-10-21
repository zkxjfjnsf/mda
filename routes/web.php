<?php

use Illuminate\Support\Facades\Route;
use App\Models\Portofolio;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/kontak', function () {
    return view('kontak');
});


