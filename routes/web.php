<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/reservasi-grooming', function () {
    return view('reservasi-grooming');
});

Route::get('/cek-reservasi', function () {
    return view('cek-reservasi');
});

Route::get('/detail-reservasi', function () {
    return view('detail-reservasi');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});