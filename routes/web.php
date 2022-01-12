<?php

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
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Worldwide;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('login', Login::class)->name('login');

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', Login::class)->name('login');
        Route::get('register', Register::class)->name('register');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', function () {
            view('layouts.app');
        });

        Route::get('dashboard', Dashboard::class)->name('dashboard');
        Route::get('dashboard/worldwind', Worldwide::class)->name('worldwind');
        Route::get('dashboard/country', Country::class)->name('country');
        Route::get('signin', SigninAfterConfirmationEmail::class)->name('signed');
    });
    Route::get('verify', ConfirmationEmail::class)->name('verify');


    Route::get('/email/verify', function () {
        return redirect()->route('verify');
    })->middleware(['auth'])->name('verification.notice');

    Route::get('email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect()->route('signed');
    })->middleware(['auth', 'signed'])->name('verification.verify');

    // reset password
    Route::get('/forgot-password', ResetPassword::class)->middleware('guest')->name('password.request');
    // Route::post('/forgot-password', ResetPassword::class)->middleware('guest')->name('password.email');
    Route::get('/reset-password/{token}', SetResetPassword::class)->name('password.reset');
    Route::get('/reset-password', SuccessfullyUpdatedPassword::class)->name('password.update');
});
