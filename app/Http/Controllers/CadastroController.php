<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class CadastroController extends Controller
{
    protected $user;

    public function index()
    {
        $usuario = new User();
        $usuario = User::all();
        return view('index',compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registrar_user');
    }

    public function store(Request $request)
    {        
        User::create([
            'name' => $request->input('nome'),
            'email' =>$request->input('email'),
            'password' =>$request->input('senha')
        ]);
        session()->flash('mensagem', 'Usuário cadastrado com sucesso!');
        return redirect()->route('login');
    }
}
