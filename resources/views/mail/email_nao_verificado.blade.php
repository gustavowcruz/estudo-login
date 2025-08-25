<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email não verificado</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
        <div class="bg-white p-8 rounded shadow-md text-center max-w-md w-full">
            <h1 class="text-2xl font-bold mb-4 text-gray-800">Email não verificado</h1>
            <p class="mb-6 text-gray-600">Por favor, verifique seu email para continuar. Verifique sua caixa de entrada e clique no link de verificação enviado.</p>
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition-colors cursor-pointer duration-300">
                    Reenviar Email de Verificação
                </button>
            </form>
        </div>
    </div>
</body>
</html>
