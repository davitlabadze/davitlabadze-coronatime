<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Country;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Worldwide;

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



Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
});
Route::get('dashboard', Dashboard::class)->name('dashboard');
Route::get('dashboard/worldwind', Worldwide::class)->name('worldwind');
Route::get('dashboard/country', Country::class)->name('country');
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        view('layouts.app');
    });
});
