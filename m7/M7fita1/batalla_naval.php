<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
    <style>
        table, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <?php
            $numeros = 10;
            $lletres = 10;
            for ($i = 0; $i <= $numeros; $i++) {
                echo "<tr>";
                for ($j = 0; $j <= $lletres; $j++) {
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