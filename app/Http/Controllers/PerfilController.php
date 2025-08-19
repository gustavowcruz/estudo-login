<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PerfilController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function edit()
    {
        $usuario = User::findOrFail(Auth::id());
        return view('users.alterar-dados', compact('usuario'));
    }

    public function update(Request $request)
    {
        $usuario = User::findOrFail(Auth::id());
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'senha' => 'nullable|string|min:8|confirmed',
        ]);

        $usuario->name = $request->input('nome');
        $usuario->email = $request->input('email');

        if ($request->filled('senha')) {
            $usuario->password = bcrypt($request->input('senha'));
        }

        return redirect()->route('perfil.index')->with('success', 'Perfil atualizado com sucesso!');
    }
}
