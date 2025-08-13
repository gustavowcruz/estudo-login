<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout.acesso')
    @section('title', 'Contato')
    @section('content')

    <div class="m-10">
        <div class="w-full max-w-lg mx-auto bg-black p-6 rounded shadow-lg">
            @if(session('success'))
                <div class="bg-green-500 text-white p-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="bg-red-500 text-white p-2 rounded mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('mail.contato.store') }}" method="POST">
                @csrf
                
                <h1 class="text-2xl font-bold text-center mb-6 dark:text-white">Entre em Contato</h1>
                
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <label class="dark:text-white">Nome</label>
                        <input type="text" name="nome" value="{{ old('nome') }}" placeholder="Seu nome" 
                               class="p-2 rounded dark:bg-gray-800 dark:text-white" required>
                    </div>
                    
                    <div class="flex flex-col gap-2">
                        <label class="dark:text-white">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Seu email" 
                               class="p-2 rounded dark:bg-gray-800 dark:text-white" required>
                    </div>
                    
                    <div class="flex flex-col gap-2">
                        <label class="dark:text-white">Mensagem</label>
                        <textarea name="mensagem" rows="5" placeholder="Sua mensagem..." 
                                  class="p-2 rounded dark:bg-gray-800 dark:text-white" required>{{ old('mensagem') }}</textarea>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded hover:bg-blue-600">
                            Enviar Mensagem
                        </button>
                    </div>
                </div>
            </form>
            
            <div class="text-center mt-4">
                <a href="{{ route('dashboard') }}" class="dark:text-white underline hover:text-yellow-300">
                    Voltar ao Dashboard
                </a>
            </div>
        </div>
    </div>

    @endsection
</body>
</html>
