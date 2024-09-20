<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex2</title>
</head>
<body>
    <table style="border: 1px solid black; border-collapse: collapse;">
        <tr>
            <?php
                
                for($i = 0; $i < 8; $i++){
                    echo "<td style='border: 1px solid black; border-collapse: collapse;'>".chr(65 + $i)."</td>";

                }
            ?>

        </tr>

    </table>
    <table style="border: 1px solid black; border-collapse: collapse;">
        <tr>
            <?php
                $num = 8;
                for($i = 0; $i <= $num; $i++){

                    echo "<td style='border: 1px solid black; border-collapse: collapse;'> $i </td>";

                }
            ?>

        </tr>

    </table>
    
</body>
</html>

