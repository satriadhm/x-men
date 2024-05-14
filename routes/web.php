<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login-check', [LoginController::class, 'login'])->name('login-check');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register-check', [RegisterController::class, 'register'])->name('register-check');

