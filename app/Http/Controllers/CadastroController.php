<?php

namespace App\Http\Controllers;
use App\Http\Requests\CadastroRequest;
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

    public function store(CadastroRequest $request)
    {        
        User::create([
            'name' => $request->input('nome'),
            'email' =>$request->input('email'),
            'password' =>$request->input('senha')
        ]);
        session()->flash('mensagem', 'Usuário cadastrado com sucesso!');
        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }
}
