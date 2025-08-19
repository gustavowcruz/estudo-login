<?php

use App\Http\Controllers\{CadastroController, AuthController, PerfilController, AlbumController, ContatoController};
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

Route::group(['middleware' => ['auth']], function() {
    //logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [PerfilController::class, 'index'])->name('dashboard');

    //album
    Route::get('albuns/create', [AlbumController::class, 'create'])->name('albuns.create');
    Route::post('albuns', [AlbumController::class, 'store'])->name('albuns.store');
    Route::get('albuns/{album}', [AlbumController::class, 'show'])->name('albuns.show');
    Route::get('albuns/{album}/edit', [AlbumController::class, 'edit'])->name('albuns.edit');
    Route::put('albuns/{album}', [AlbumController::class, 'update'])->name('albuns.update');
    Route::delete('albuns/{album}', [AlbumController::class, 'destroy'])->name('albuns.destroy');
});

//email

Route::get('/contato', [ContatoController::class, 'index'])->name('mail.contato');
Route::post('/contato', [ContatoController::class, 'store'])->name('mail.contato.store');

// Rotas de verificação de email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard')->with('success', 'Email verificado com sucesso!');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Link de verificação enviado!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

