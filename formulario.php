<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
:root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --accent: #06b6d4;
            --dark: #0f172a;
            --light: #f8fafc;
            --gray: #64748b;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            min-height: 100vh;
            padding: 40px 20px;
            color: var(--light);
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 100px;
            background-color: rgba(15, 23, 42, 0.7);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 15px;
            position: relative;
        }
        
        #username, #password, .verify{
            display: block;
            margin: 10px auto;
        }

        #username, #password {
            padding: 10px;
            border-radius: 5px;
            border: none;
            width: 80%;
            max-width: 700px;
            font-size: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        h1 {
            color: white;
            text-align: center;
            font-size: 36px;
            margin: 10px 0 40px 0;
            letter-spacing: 1px;
            width: 100%;
            font-weight: 600;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
        }
        
        h1::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 10rem;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <h1>Pagina de login</h1>
    <div class="container">
        <form action="processa.php" method="POST">
            <div class="mb-3">
                <!-- <label for="exampleInputEmail1" class="form-label" id="username">Email</label> -->
                <input type="email" class="form-control" id="username" aria-describedby="emailHelp" name="email" placeholder="Email">
            <div class="mb-3">
                <!-- <label for="exampleInputPassword1" class="form-label" id="password">Senha</label> -->
                <input type="password" class="form-control" id="password" name="senha" placeholder="Senha">
            </div>
            <input class="btn btn-primary verify" type="submit" value="LOGAR">
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