<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #292929, #000000);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .box {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.1));
            backdrop-filter: blur(15px);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .typewriter {
            font-size: 1.5rem;
            border-right: 2px solid white;
            white-space: nowrap;
            overflow: hidden;
            width: 0;
            animation: typing 4s steps(40, end) forwards, blink 0.7s infinite;
        }

        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        @keyframes blink {
            50% { border-color: transparent }
        }
    </style>
</head>
<body>

    <div class="box">
        <h2 class="mb-4">❌|Erro ao entrar na pagina</h2>

        <div class="typewriter">
            <p>Voce digitou a senha ou o usuario errado, tente novamente!</p>
        </div>
        <a class="btn btn-primary" href="formulario.php">Voltar</a>
    </div>
    
</body>
</html>