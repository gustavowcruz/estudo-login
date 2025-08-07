<?php

use App\Http\Controllers\{CadastroController, AuthController, DashboardController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [CadastroController::class, 'index'])->name('usuario.index');
Route::get('/cadastro', [CadastroController::class, 'create'])->name('usuario.create');
Route::post('/store', [CadastroController::class, 'store'])->name('usuario.store');

// login

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/autenticar', [AuthController::class, 'autenticar'])->name('login.autenticar');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');