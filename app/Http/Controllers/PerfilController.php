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
            // 'senha' => 'nullable|string|min:8|confirmed',
        ]);

        try {
            $usuario->update([
                'name' => $request->input('nome'),
                'email' => $request->input('email'),
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Erro ao atualizar perfil']);
        }

        // if ($request->filled('senha')) {
        //     $usuario->password = bcrypt($request->input('senha'));
        // }

        return redirect()->route('dashboard')->with('success', 'Perfil atualizado com sucesso!');
    }
}
