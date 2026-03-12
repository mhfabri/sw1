<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa dados</title>
</head>
<body>
    
    <?php

        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $idade = $_GET['idade'];

        $ano_atual = date('Y');
        $ano_nasc = $ano_atual - $idade;
    ?>
    <p>o nome dele é: <?php echo $nome; ?></p>
    <p>a idade dele é: <?php echo $idade; ?></p>
    <p>o email dele é: <?php echo $email; ?></p>
    <p>seu ano de nascimento é: <?php echo $ano_nasc; ?></p>
    

</body>
</html>