<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
    <div class="container">
        <form action="processa.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
            </div>
            <input class="btn btn-primary" type="submit" value="LOGAR">
            <!-- <button type="submit" class="btn btn-primary">Logar</button> -->
        </form> 
    </div>
    <?php
        if (isset($_GET['erro'])) {
            echo "<script>alert('Email ou senha incorretos!');</script>";
        }
    ?>
</body>
</html>