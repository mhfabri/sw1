<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // email: adm@email.com
    //senha: 1234

    if ($email == 'adm@gmail.com' && $senha == '1234') {
        // echo"Vamos para area restrita";
        $nome = "Fabri";
        header('Location: restrita.php?nome='.$nome);
    } else {
        // echo"Email ou senha errada, volte para o formulário";
        header('Location: error.php');
        
    }
?>