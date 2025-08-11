@extends('layout.acesso')
@section('title', 'Login')
@section('content')
<div class='m-10'>
    <div class="w-100% bg-black p-4 rounded shadow-lg">
        @if($errors->any())
            <div class="bg-red-500 text-white p-2 rounded mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @elseif(session('success'))
            <div class="bg-green-500 text-white p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('login.autenticar') }}" method="POST" class="">
            @csrf
            @method('POST')

            <h1 class='titulo text-2xl font-bold text-center mb-10 dark:text-white'>Tela de Login minimalista</h1>
            <div class="w-100% flex flex-col gap-4 items-center">
                <div class='inline-flex flex-col gap-2 items-start'>
                    <label class='dark:text-white'>Email</label>
                    <input type="text" placeholder="Insira o email" name="email" class="p-2 rounded dark:bg-gray-800 dark:text-white">
                </div>
                <div class='inline-flex flex-col gap-2 items-start'>
                    <label class='dark:text-white'>Senha</label>
                    <div class="relative">
                        <input type="password" placeholder="Insira a senha aqui" name="password" class="p-2 rounded dark:bg-gray-800 dark:text-white">
                        {{-- <span class='text-white absolute right-2 top-1/2 transform -translate-y-1/2 cursor-pointer'>Exibir Senha</span> --}}
                    </div>
                </div>

                <div class='inline-flex items-center gap-2'>
                    <input type="checkbox" name="remember" class="rounded dark:bg-gray-800 dark:text-white">
                    <label class='dark:text-white'>Lembrar-me</label>
                </div>
            </div>
            <div class='items-center text-center justify-center gap-4 mt-4'>
                <button class="bg-blue-500 text-white py-2 px-4 rounded cursor-pointer shadow-xl mt-4" type="submit">Entrar</button>
            </div>
        </form>
        <div class='items-center text-center justify-center gap-4 mt-4'>
            <a class='dark:text-white underline hover:text-yellow-300 focus:outline-none' href="{{ route('usuario.create') }}"><p>Não possui conta ainda? Cadastre-se</p></a>
        </div>
    </div>
</div>
@endsection