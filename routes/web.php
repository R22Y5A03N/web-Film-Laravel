<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FilmController as AdminFilmController;
use App\Http\Controllers\User\FilmController as UserFilmController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'register']);

