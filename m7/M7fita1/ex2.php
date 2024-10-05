<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M7 UF1 Ejercicio 2</title>
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
        <tr>
            <?php
                $char = 6;
                for ($i = 0; $i < $char; $i++) { 
                    echo "<td>".chr(65 + $i)."</td>";
                }
            ?>
        </tr>
        <tr>
            <?php
                $num = 6;
                for ($i = 0; $i < $num; $i++) { 
                    echo "<td>$i</td>";
                }
            ?>
        </tr>
    </table>
</body>
</html>