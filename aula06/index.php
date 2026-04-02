<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page restrita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        
        body {
            height: 100vh;
            background: linear-gradient(135deg, #888888, #000000);
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
        h1{
            display: block;
            
        }

        .colorbtn{
            background: linear-gradient(135deg, rgb(117, 13, 13), rgb(0, 0, 0));
            color: white;
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
        <h1>Monte sua pagina restrita.</h1>
        <p class="typewriter">aqui você pode montar uma pagina restrita apenas sua, que apenas vc pode acessar.</p>
        <a class="btn colorbtn" href="formulario.php">Faça login agora!</a>
    </div>
</body>
</html>