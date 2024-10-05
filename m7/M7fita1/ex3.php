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
            $fila = 5;
            for ($i = 0; $i < $columna; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $fila; $j++) {
                    echo "<td>".($i+$j)."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>