<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

#Welcome route
Route::get('/', function () {
    return view('welcome');
});

#Routes to login
Route::get('login', [LoginController::class, "showLoginForm"])->name('login');
Route::post('login',[LoginController::class, "login"]);

#Routes for logged users
Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::post('logout',[LoginController::class, "logout"])->name('logout');
    Route::get('home',[UserController::class, "index"])->name('home');
    Route::get('createUser',[UserController::class, "create"])->name('createUser');
    Route::post('createUser',[UserController::class, "store"])->name('createUser');
    Route::get('showUser/{user}', [UserController::class, "show"])->name('showUser');
    Route::delete('userDelete/{user}',[UserController::class, "destroy"])->name('deleteUser');
    Route::get('editUser/{user}', [UserController::class, "edit"])->name('editUser');
    Route::put('editUser/{user}', [UserController::class, "update"])->name('editUser');
});