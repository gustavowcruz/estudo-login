<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app-CCFCCQz7.css') }}">
    <title>Teste</title>
</head>
<body>
    <header class="bg-white fixed top-0 left-0 right-0 shadow">
        <h1 class="text-2xl font-bold">Sou um cabeçalho</h1>
    </header>
    <div class="max-w-[100%] mx-auto p-4 bg-gray-100 min-h-screen pt-16">
        @if(Auth::user() !== null)
            <ul>
                <li>Bem vindo(a) <span class='bg-green-300 rounded-sm px-1'> {{ auth()->user()->name }}</span></li>
            </ul>
        @else
            <h1>Usuário não autenticado</h1>
        @endif

        <a href="{{route('albuns.create')}}" class="add-btn bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600 mt-10  rounded-[50%]">Add</a>

        <div class='add-item-container'>
            
        </div>

        <a class='cursor-pointer' href="{{ route('logout') }}">
            <button class="bg-blue-500 relative text-white px-2 py-1 rounded hover:bg-blue-600 mt-10">Sair</button>
        </a>
    </div>
</body>
</html>