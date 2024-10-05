<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M7 UF1 Ejercicio 4</title>
    <style>
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <?php
            $columna = 5;
            $fila = 4;
            for ($i = 0; $i <= $fila; $i++) {
                echo "<tr>";
                for ($j = 0; $j <= $columna; $j++) {
                    if ($i == 0 && $j == 0) {
                        echo "<td></td>";
                    } elseif ($i == 0) {
                        echo "<td>".($i+$j)."</td>";
                    } elseif ($j == 0) {
                        echo "<td>".chr(65 + $i - 1)."</td>";
                    } else {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>