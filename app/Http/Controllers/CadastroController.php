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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        User::create([
            'name' => $request->input('nome'),
            'email' =>$request->input('email'),
            'password' =>$request->input('senha')
        ]);
        session()->flash('mensagem', 'Usuário cadastrado com sucesso!');
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
