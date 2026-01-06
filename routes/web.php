<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesoController;

// Página principal (login)
Route::get('/', [AccesoController::class, 'showLogin'])->name('login.index');

// Pantalla principal después del login
Route::get('/index', function () {
    return view('index.index'); 
})->name('index.index');

// Cerrar sesión
Route::post('/logout', [AccesoController::class, 'logout'])->name('logout');

Route::get('/waiting', [AccesoController::class, 'showWaiting'])->name('waiting');

Route::post('/login', [AccesoController::class, 'login'])->name('login.process');