<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 3</title>
</head>
<body>
    <table style="border: 1px solid black; border-collapse: collapse;">
        <?php
            
            $num_filas = 3;
            $num_colum = 4;
            for($i = 0; $i <= $num_filas; $i++){
                echo "<tr>";
                echo "<td style='border: 1px solid black; padding: 5px;'>$i</td>";
                
                for($j = 1; $j <= $num_colum; $j++){
                    echo "<td style='border: 1px solid black; padding: 5px;'>" . ($i + $j) . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>