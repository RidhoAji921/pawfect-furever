<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

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

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup.show');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', function () {
    return view('forgot-password');
});