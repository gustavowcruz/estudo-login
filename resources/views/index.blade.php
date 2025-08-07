<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app-CCFCCQz7.css') }}">
    <title>Document</title>
</head>
<body>
    
    lista de usuarios ativos
    @foreach($usuario as $user)     
        <div class="user-item">
            <h2>{{ $user->name }}</h2>
            <p>{{ $user->email }}</p>        
        </div>
    @endforeach
</body>
</html>
