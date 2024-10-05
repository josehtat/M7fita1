<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M7 UF1 Ejercicio 1</title>
    <style>
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10;
        }
    </style>
</head>
<body>
    <table>
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