<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

#Welcome route
Route::get('/', function () {
    return view('welcome');
});

#Routes to login
Route::get('login', [LoginController::class, "showLoginForm"])->name('login');
Route::post('login',[LoginController::class, "login"]);

#Routes for logged in users
Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::post('logout',[LoginController::class, "logout"])->name('logout');
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});