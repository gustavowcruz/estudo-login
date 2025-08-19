<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Disco's Collection</title>
</head>
<body class="bg-white">
    <header class="header dark:text-white bg-black p-4 font-bold flex justify-between">
        <a href="{{route('dashboard')}}" class='border border-white rounded-lg p-2 hover:bg-white hover:text-black transition-colors duration-500'>Home</a>
        <div class='flex items-center space-x-2'> Teste trabalhe vite</div>
        <div class="flex items-center space-x-2"> one after one </div>
    </header>
    {{ $slot }}
</body>
</html>
