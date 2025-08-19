<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Estudo Login')</title>
    
    {{-- tailwind --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="min-h-screen bg-white h-full w-full">
    <header class='dark:text-white text-center fixed w-full top-0'> Oi sou um cabeçalho</header>
    @yield('content')
</body>
</html>