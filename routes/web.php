<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Middleware\AdminMiddleware;
use App\Livewire\PanelContent;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/service', function () {
    return view('service');
});

Route::get('/reservasi-grooming', [ReservationController::class, 'show'])->middleware("auth");
Route::post('/reservasi-grooming', [ReservationController::class, 'store'])->name('reservation.store')->middleware('auth');
Route::post('/reservasi-pet-hotel', [ReservationController::class, 'petHotelStore'])->name('reservation-hotel.store')->middleware('auth');

Route::get('/cek-reservasi', function () {
    return view('cek-reservasi');
});

// Route::get('/profile', function () {
//     return view('profile');
// })->name("profile");
Route::get('/profile', [ProfileController::class, 'show'])->middleware("auth")->name("profile");
Route::post('/profile', [ProfileController::class, 'update'])->middleware("auth")->name("profile.update");

Route::get('/eror-page', function () {
    return view('eror-page');
});
Route::middleware('auth')->group(function () {
    // Route untuk cancel order
    Route::post('/profile/reservations/{id}/cancel', [ProfileController::class, 'cancelOrder'])
        ->name('profile.reservations.cancel');
});

Route::get('/login', [AuthController::class, 'showLogin'])->middleware("guest")->name('login.show');
Route::get('/signup', [AuthController::class, 'showSignup'])->middleware("guest")->name('signup.show');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [ForgotPasswordController::class, 'show'])->middleware("guest")->name('password.forgot');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendEmail'])->name('password.request');
Route::get('/forgot-password-sent', [ForgotPasswordController::class, 'showEmailSent'])->middleware("guest")->name("password.sent");
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'show'])->middleware("guest")->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::middleware(['auth', AdminMiddleware::class])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/panel', PanelContent::class)->name('admin.panel');
    });
});