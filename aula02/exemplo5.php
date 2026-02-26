<?php
    $dia = "domingo";
    switch ($dia) {
        case "segunda":
            echo"início da semana!";
            break;
        case "sexta":
            echo"Fim de semana chegando!";
            break;
        case "sabado" || "domingo":
            echo "Fim de semana!";
            break;
        default:
            echo"Dia normal.";
    }
?>