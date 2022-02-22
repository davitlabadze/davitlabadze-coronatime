<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Livewire\Auth\ConfirmationEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SetResetPassword;
use App\Http\Livewire\Auth\SigninAfterConfirmationEmail;
use App\Http\Livewire\Auth\SuccessfullyUpdatedPassword;
use App\Http\Livewire\Country;
use App\Http\Livewire\Worldwide;
use Illuminate\Auth\Events\Verified;

Route::get('/lang/{lang}', [LanguageController::class,'change'])->name('change-lang');
Route::get('/', function () {
    if (auth()->check() === false) {
        return redirect()->route('login');
    } elseif (auth()->check() === true) {
        return redirect()->route('worldwide');
    }
});
Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
});

Route::middleware(['auth','verified'])->group(function () {
    Route::get('dashboard/worldwide', Worldwide::class)->name('worldwide');
    Route::get('dashboard/country', Country::class)->name('country');
    Route::get('signin', SigninAfterConfirmationEmail::class)->name('signed');
});

Route::get('verify', ConfirmationEmail::class)->name('verify');

Route::get('email/verify', function () {
    return redirect()->route('verify', app()->getLocale());
})->middleware(['auth'])->name('verification.notice');

Route::get('email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('signed', app()->getLocale());
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/forgot-password', ResetPassword::class)->middleware('guest')->name('password.request');
Route::get('/reset-password/{token}', SetResetPassword::class)->name('password.reset');
Route::get('/reset-password', SuccessfullyUpdatedPassword::class)->name('password.update');
