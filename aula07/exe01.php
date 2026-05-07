
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .par{
            background-color: red;
        }
        .impar{
            background-color: blue;
        }
    </style>
</head>
<body>
    
    <table>
        <?php
            for ($i=1; $i <= 8; $i++) { 
                if($i%2 == 0){
                    $classe = "par";
                }
                else{
                    $classe = "impar";
                }
                echo"<tr class='$classe'>";
                for ($j=1; $j <=4 ; $j++) { 
                    echo"<td>Linha $i - Coluna $j</td>";
                }
                echo"</tr>";
            }
        ?>
    </table>


</body>
</html>
