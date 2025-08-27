<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redefinir Senha</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-4">
        <div class="bg-white p-8 rounded shadow-md text-center max-w-md w-full">
            <h1 class="text-2xl font-bold mb-4 text-gray-800">Redefinir Senha</h1>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="mb-4 text-left">
                    <label for="password" class="block text-gray-700 mb-2">Nova Senha</label>
                    <input type="password" id="password" name="password" required
                        class="w-full p-2 border rounded dark:bg-gray-700 dark:text-white">
                </div>

                <div class="mb-6 text-left">
                    <label for="password_confirmation" class="block text-gray-700 mb-2">Confirme a Nova Senha</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="w-full p-2 border rounded dark:bg-gray-700 dark:text-white">
                </div>

                <button type="submit" class="bg-blue-500 text-white py-2 px-6 rounded hover:bg-blue-600 w-full">
                    Alterar Senha
                </button>
            </form>
        </div>
    </div>
</body>
</html>
