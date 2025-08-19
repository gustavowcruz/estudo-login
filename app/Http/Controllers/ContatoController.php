<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contato;
use App\Mail\EmailVerification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mail.contato');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('contato.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $envio = Mail::to($user->email)->send(new Contato([
            'fromName' => $request->input('nome'),
            'fromEmail' => $request->input('email'),
            'message' => $request->input('mensagem'),
        ]));

        Mail::to($user->email)->send(new EmailVerification($user));

        var_dump(['email enviado', $envio]);
        // return redirect()->route('mail.contato')->with('success', 'Email enviado com sucesso!');
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
