<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('components.layouts.app');
});

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::get('resetpassword', function () {
    return view('auth.reset-password');
})->name('resetpassword');

Route::get('setresetpassword', function () {
    return view('auth.set-reset-password');
})->name('setresetpassword');

Route::get('verify/email', function () {
    return view('auth.confirmation-email');
})->name('verifyemail');

Route::get('verify/email/success', function () {
    return view('auth.signin-after-confirmation-email');
})->name('verifyemailsuccess');

Route::get('successfully/updated/password', function () {
    return view('auth.successfully-updated-password');
})->name('successfullyupdatedpassword');
