<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
        // Otras rutas protegidas para administradores
    });
    
    Route::middleware(['role:user'])->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        // Otras rutas protegidas para usuarios normales
    });

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');




Route::get('/mejores-juegos', [UserController::class, 'bestGame'])->name('mejores-juegos');
Route::get('/piano-game', [UserController::class, 'pianoGame'])->name('piano-game');
Route::get('/math-game', [UserController::class, 'mathGame'])->name('math-game');
Route::get('/actividades', [UserController::class, 'act'])->name('actividades');
Route::get('/users', [UserController::class, 'users'])->name('users');

require __DIR__.'/auth.php';
