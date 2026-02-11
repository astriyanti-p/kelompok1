<?php

use Illuminate\Support\Facades\Route;

// Route bawaan Laravel
Route::get('/', function () {
    return view('welcome');
});

// Route baru untuk tes kamu (taruh di luar, jangan di dalam yang lain)
Route::get('/tes-push', function () {
    return "<h1>Pria Solo !</h1><p>aku adalah pria  solo yang sangat amat sigma cuyy !!.</p>";
});
Route::get('/laporan-aku', function () {
    return view('kata-kata');
});
