<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST">
        <label for="">Colunas</label>
        <input type="number" name="coluna" id="coluna">
        <label for="">Linhas</label>
        <input type="number" name="linha" id="">
        <button type="submit">Gerar</button>
    </form>
    <br>

        <?php


                $linhas = $_POST['linhas'];
                $colunas = $_POST['colunas'];

                echo "<table>";

                $i = 1;

                // WHILE das linhas
                while($i <= $linhas) {

                    echo "<tr>";

                    $j = 1;

                    // WHILE das colunas
                    while($j <= $colunas) {

                        echo "<td>L$i C$j</td>";

                        $j++;
                    }

                    echo "</tr>";

                    $i++;
                }

                echo "</table>";
            

        ?>


    
</body>
</html>