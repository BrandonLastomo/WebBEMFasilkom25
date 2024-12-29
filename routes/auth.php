<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PeminjamSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisteredUserController::class, 'create'])
  ->middleware('guest')
  ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
  ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
  ->middleware('guest')
  ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
  ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
  ->middleware('guest')
  ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
  ->middleware('guest')
  ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
  ->middleware('guest')
  ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
  ->middleware('guest')
  ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
  ->middleware('auth')
  ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
  ->middleware(['auth', 'signed', 'throttle:6,1'])
  ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
  ->middleware(['auth', 'throttle:6,1'])
  ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
  ->middleware('auth');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
  ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
  ->middleware('auth')
  ->name('logout');



/**
 * PKKMB
 */

Route::prefix('pkkmb2021')->group(function () {
  Route::get('/daftar', [RegisteredUserController::class, 'createMaba'])
    ->middleware('guest')
    ->name('pkkmb.daftar');

  Route::post('/daftar', [RegisteredUserController::class, 'storeMaba'])
    ->middleware('guest')
    ->name('pkkmb.store');

  Route::get('/login', [AuthenticatedSessionController::class, 'createMaba'])
    ->middleware('guest')
    ->name('pkkmb.login');

  Route::post('/login', [AuthenticatedSessionController::class, 'storeMaba'])
    ->middleware('guest');

  Route::post('/logout', [AuthenticatedSessionController::class, 'destroyMaba'])
    ->middleware('auth:maba')
    ->name('pkkmb.logout');
});

/**
 * Pinjam-Bem
 */

Route::prefix('pinjam-bem')->group(function () {
  Route::get('/daftar', [RegisteredUserController::class, 'createPeminjam'])
    ->middleware('guest')
    ->name('pinjam.daftar');

  Route::post('/daftar', [RegisteredUserController::class, 'storePeminjam'])
    ->middleware('guest')
    ->name('pinjam.store');


  Route::get('/login', [AuthenticatedSessionController::class, 'createPeminjam'])
    ->middleware('guest')
    ->name('pinjam.login');

  Route::post('/login', [AuthenticatedSessionController::class, 'storePeminjam'])
    ->middleware('guest');

    Route::get('/password/forgot',[PeminjamSessionController::class,'showForgotForm'])
    ->name('forgot.password.form')->middleware('guest');
    Route::post('/password/forgot',[PeminjamSessionController::class,'sendResetLink'])
    ->name('forgot.password.link')->middleware('guest');
    Route::get('/password/reset/{token}',[PeminjamSessionController::class,'showResetForm'])
    ->name('reset.password.form')->middleware('guest');
    Route::post('/password/reset',[PeminjamSessionController::class,'resetPassword']
    )->name('reset.password')->middleware('guest');

  Route::post('/logout', [AuthenticatedSessionController::class, 'destroyPeminjam'])
    ->middleware('auth:peminjam')
    ->name('pinjam.logout');
});
