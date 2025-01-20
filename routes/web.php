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

Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminFilmController::class, 'index'])->name('dashboard');
    Route::resource('films', AdminFilmController::class);
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/', [UserFilmController::class, 'index'])->name('user.films.index');
    Route::get('/films', [UserFilmController::class, 'index'])->name('films.index');
});
