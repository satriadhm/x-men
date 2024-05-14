<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class,'index']);
Route::post('/login-check', [LoginController::class,'login'])->name('login-check');
Route::get('/dashboard-talent', [DashboardController::class,'index']);
