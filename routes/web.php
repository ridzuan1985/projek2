<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Selamat-Datang', function () {
    return view('Latihan.Selamat');
});
Route::get('/laman-utama', function () {
    return view('Latihan.index');
});