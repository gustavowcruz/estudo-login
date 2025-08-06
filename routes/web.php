<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', [CadastroController::class, 'create'])->name('usuario.create');
