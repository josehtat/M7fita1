<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>

<h1>Intro PHP 1</h1>

<form>
    <?php
    $nom_usuari = "manolo";
    echo "Introdueix el teu nom:<input type='text' name='nom' value='$nom_usuari' />";
    ?>
    <button>Envia</button>
</form>

<?php
    if( isset($_GET["nom"]) )
    for($i=1;$i<10;$i++) {
        echo "<br>".$_GET["nom"];
    }
?>

</body>
</html>