<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app-CCFCCQz7.css') }}">
    <title>Registro</title>
</head>
<body>
    <div class="w-100%">
    <form>
        @csrf
        @method('POST')

        <h1 class='titulo text-2xl font-bold text-center mb-10'>Tela de cadastro minimalista</h1>
        <div class="w-100% grid grid-cols-2 gap-1">
            <div class=''>
                <label>Nome</label>
                <input type="text" placeholder="Insira o nome" name="nome">
            </div>
            <div class=''>
                <label>Email</label>
                <input type="text" placeholder="Insira o email" name="email">
            </div>
            <div>
                <label>Senha</label>
                <input type="password" placeholder="Insira a senha aqui" name="senha">
            </div>
        </div>
        <div class='items-center text-center'><button class="bg-blue-500 text-white py-2 px-4 rounded cursor-pointer shadow-xl" type="submit">Cadastrar</button></div>
    </form>
</div>
</body>
</html>
