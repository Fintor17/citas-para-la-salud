<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

// Ruta para la página de inicio pública (sin autenticación)
Route::get('/', function () {
    return view('usuarios.index');
});

// Rutas para el controlador de registros
Route::get('/usuarios', [RegistrosController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [RegistrosController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [RegistrosController::class, 'store'])->name('usuarios.store');

// Ruta para el inicio de pacientes, protegida por middleware de autenticación
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/usuarios/inicio-pacientes', [HomeController::class, 'index'])->name('inicio.pacientes');
});

// Ruta para el inicio de sesión
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Rutas para el perfil del usuario autenticado
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
