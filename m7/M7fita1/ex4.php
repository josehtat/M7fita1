<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 4</title>
</head>
<body>
<table style="border: 1px solid black; border-collapse: collapse;">
        <?php
            $num_filas = 3;
            $num_colum = 4;

            for ($i = 0; $i <= $num_filas; $i++) {
                echo "<tr>";

                for ($j = 0; $j <= $num_colum; $j++) {
                    if ($i == 0 && $j == 0) {
                        echo "<td style='border: 1px solid black; padding: 5px;'>&nbsp;</td>";
                    } elseif ($i == 0) {
                        echo "<td style='border: 1px solid black; padding: 5px;'>".chr(65 + $j - 1)."</td>";
                    } elseif ($j == 0) {
                        echo "<td style='border: 1px solid black; padding: 5px;'>".$i."</td>";
                    } else {
                        echo "<td style='border: 1px solid black; padding: 5px;'>&nbsp;</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>