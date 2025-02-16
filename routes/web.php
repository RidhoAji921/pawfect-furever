<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Middleware\AdminMiddleware;
use App\Livewire\PanelContent;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/service', function () {
    return view('service');
});

Route::get('/reservasi-grooming', [ReservationController::class, 'show'])->middleware("auth");
Route::post('/reservasi-grooming', [ReservationController::class, 'store'])->name('store');

Route::get('/cek-reservasi', function () {
    return view('cek-reservasi');
});

Route::get('/detail-reservasi', function () {
    return view('detail-reservasi');
})->name("detail-reservasi");;

Route::get('/eror-page', function () {
    return view('eror-page');
});

Route::get('/login', [AuthController::class, 'showLogin'])->middleware("guest")->name('login.show');
Route::get('/signup', [AuthController::class, 'showSignup'])->middleware("guest")->name('signup.show');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::middleware(['auth', AdminMiddleware::class])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/panel', PanelContent::class)->name('admin.panel');
    });
});