<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Livewire\Auth\ConfirmationEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SetResetPassword;
use App\Http\Livewire\Auth\SigninAfterConfirmationEmail;
use App\Http\Livewire\Country;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Worldwide;
use App\Models\Invoice;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Auth;
//reset pass
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('signed');
})->middleware(['auth', 'signed'])->name('verification.verify');


// Route::post('/email/verification-notification', function (Request $request) {
//     $request->user()->sendEmailVerificationNotification();

//     return back()->with('message', 'Verification link sent!');
// })->middleware(['auth', 'throttle:6,1'])->name('verification.send');



// reset password
Route::get('/forgot-password', ResetPassword::class)->middleware('guest')->name('password.request');
// Route::get('/forgot-passwords', ConfirmationEmail::class)->middleware('guest')->name('password.email');
// Route::post('/forgot-password', ResetPassword::class)->middleware('guest')->name('password.email');
// Route::get('/forgot-password', function () {
//     return view('livewire.auth.reset-password');
// })->middleware('guest')->name('password.request');


Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password', SetResetPassword::class)->name('reset');

Route::get('/reset-password/{token}', function ($token) {
    return redirect()->route('reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

// Route::get('/reset-password/{token}', function ($token) {
//     return view('auth.verify-mail', ['token' => $token]);
// })->middleware('guest')->name('password.reset');



Route::post('/reset-password', function (Request $request) {
    // dd($request->all());
    $request->validate([
        'token' => 'required',
        // 'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);
    dd($request->all());

    $status = Password::reset(
        $request->only('password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );


    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
