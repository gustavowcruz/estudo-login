@extends('layout.acesso')
@section('content')
<div class='m-10'>
    <form action="{{ route('usuario.store') }}" method="POST" class="w-full max-w-sm mx-auto">
        @csrf
        @method('POST')
        <h1 class='titulo text-2xl font-bold text-center mb-10'>Tela de cadastro minimalista</h1>
        <div class="items-center justify-center flex flex-col gap-4 allign-center">
            <div class='rounded'>
                <label class=" ">Nome</label>
                <input type="text" placeholder="Insira o nome" name="nome" class="bg-gray-200">
            </div>
            <div class='rounded'>
                <label class="">Email</label>
                <input type="text" placeholder="Insira o email" name="email" class="bg-gray-200">
            </div>
            <div class='rounded'>
                <label class="">Senha</label>
                <input type="password" placeholder="Insira a senha aqui" name="senha" class="bg-gray-200">
            </div>
        </div>
        <div class='items-center text-center'><button class="bg-blue-500 text-white py-2 px-4 rounded cursor-pointer shadow-xl mt-4" type="submit">Cadastrar</button></div>
    </form>
</div>
</body>
</html>
@endsection