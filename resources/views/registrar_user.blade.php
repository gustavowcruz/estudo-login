@extends('layout.acesso')
@section('content')
<div class='m-10'>
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                {{-- depois trocar por um svg talvez MAS DEIXE O CSS PRO FINAL --}}
                    <li class="before:content-['⚠️']">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('usuario.store') }}" autocomplete="off" method="POST" class="w-full max-w-sm mx-auto">
        @csrf
        @method('POST')
        <h1 class='titulo text-2xl font-bold text-center mb-10'>Tela de cadastro minimalista</h1>
        <div class="items-center justify-center flex flex-col gap-4 allign-center">
            <div class='rounded flex flex-col'>
                <label class=" ">Nome</label>
                <input type="text" value="{{ old('nome') }}" placeholder="Insira o nome" name="nome" class="bg-gray-200">
            </div>
            <div class='rounded flex flex-col'>
                <label class="">Email</label>
                <input type="text" value="{{ old('email') }}" placeholder="Insira o email" name="email" class="bg-gray-200">
            </div>
            <div class='rounded flex flex-col'>
                <label class="">Senha</label>
                <input type="password" placeholder="Insira a senha aqui" name="senha" class="bg-gray-200">
            </div>
            <div class="rounded flex flex-col">
                <label class="">Confirme a Senha</label>
                <input type="password" placeholder="Confirme a senha aqui" name="senha_confirmation" class="bg-gray-200">
            </div>
        </div>
        <div class='items-center text-center'><button class="bg-blue-500 text-white py-2 px-4 rounded cursor-pointer shadow-xl mt-4" type="submit">Cadastrar</button></div>
    </form>
</div>
@endsection
