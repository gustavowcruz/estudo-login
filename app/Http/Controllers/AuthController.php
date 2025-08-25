<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // aqui exibe a tela de login
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('login');
    }

    //o login de fato é efetuado aqui
    public function autenticar(Request $request){

        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->filled('remember');

        if (Auth::attempt($credenciais, $remember)) {
            $user = Auth::user();

            // Verifica se o email está verificado usando o campo email_verified_at

            if (!$user->hasVerifiedEmail()) {
            // Auth::logout();
            return redirect()->route('verification.notice');
        }

            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'O email informado está incorreto.'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        // Lógica para enviar o link de redefinição de senha

        return back()->with('message', 'Link de redefinição de senha enviado!');
    }

}
