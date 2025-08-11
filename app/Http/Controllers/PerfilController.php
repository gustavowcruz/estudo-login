<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function edit()
    {
        return view('editar_perfil');
    }

    public function update(Request $request)
    {
        // Lógica para atualizar o perfil do usuário
        
    }
}
