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
        
        validator(request()->all(), [ // que eu saiba isso aqui tem que ser passado no request personalizado
            'email' => ['required', 'email'],
            'password' => ['required'],
        ])->validate();

        $remember = $request->filled('remember');
        if (Auth::attempt($request->only(['email', 'password']), $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
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

}
