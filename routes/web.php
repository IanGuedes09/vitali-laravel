<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginCustomController;
use App\Http\Controllers\Auth\RegisterCustomController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginCustomController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginCustomController::class, 'login'])->name('login.submit');

    Route::get('/register', [RegisterCustomController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterCustomController::class, 'register'])->name('register.submit');

    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
});

// Logout acessível para quem está autenticado
Route::post('/logout', [LoginCustomController::class, 'logout'])->name('logout');

