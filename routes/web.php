<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'index']);
Route::post('login', [AuthController::class, 'login']);
Route::get('registration', [AuthController::class, 'registration']);
Route::post('register', [AuthController::class, 'register']);
Route::get('signout', [AuthController::class, 'signOut']);


Route::get('dashboard', [AuthController::class, 'dashboard']);
