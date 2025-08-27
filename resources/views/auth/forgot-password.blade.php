<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Esqueceu a senha</title>
</head>
<body>
    <div>
        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif
        <h1>Esqueceu a senha</h1>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <button type="submit">Enviar link de redefinição de senha</button>
        </form>
    </div>
</body>
</html>
