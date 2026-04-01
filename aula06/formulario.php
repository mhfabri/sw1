<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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