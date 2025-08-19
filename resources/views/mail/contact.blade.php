<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Email</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            line-height: 1.6;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 300;
        }
        .content {
            padding: 40px 30px;
            text-align: center;
        }
        .content h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .content p {
            color: #666;
            font-size: 16px;
            margin-bottom: 25px;
        }
        .verify-button {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            font-size: 16px;
            margin: 20px 0;
            transition: transform 0.2s;
        }
        .verify-button:hover {
            transform: translateY(-2px);
        }
        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #eee;
        }
        .footer p {
            color: #888;
            font-size: 14px;
            margin: 5px 0;
        }
        .security-note {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
        }
        .security-note p {
            color: #856404;
            margin: 0;
            font-size: 14px;
        }
        .icon {
            font-size: 48px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <h1>{{ config('app.name', 'Laravel') }}</h1>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="icon">📧</div>

            <h2>Verifique seu Email</h2>

            <p>Olá <strong>{{ $user->name ?? 'Usuário' }}</strong>,</p>

            <p>Obrigado por se cadastrar! Para completar seu registro e ativar sua conta, clique no botão abaixo para verificar seu endereço de email.</p>

            <a href="{{ $verificationUrl ?? '#' }}" class="verify-button">
                Verificar Email
            </a>

            <div class="security-note">
                <p><strong>🔒 Nota de Segurança:</strong> Este link expira em 60 minutos por questões de segurança.</p>
            </div>

            <p>Se você não conseguir clicar no botão, copie e cole o link abaixo no seu navegador:</p>
            <p style="word-break: break-all; color: #667eea; font-size: 14px;">
                {{ $verificationUrl ?? 'Link de verificação aqui' }}
            </p>

            <p style="margin-top: 30px; font-size: 14px; color: #888;">
                Se você não criou uma conta conosco, pode ignorar este email com segurança.
            </p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos os direitos reservados.</p>
            <p>Este é um email automático, por favor não responda.</p>
        </div>
    </div>
</body>
</html>
