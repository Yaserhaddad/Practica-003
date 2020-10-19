<?php
error_reporting(E_ALL ^ E_NOTICE);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el numero oculto</title>
</head>
<body>
    <h1>Buenas jugador 1: </h1>
    <p>El juego consiste en: El jugador 1 debe introducir un número y el jugador 2 deberá adivinar de que número se trata.</p>
    <form action="adivina2.php" method="post">
        <input name="introducido" type="number" value="<?= $numero?>" >
        <input name= "enviado" type="submit" value="enviar">
    </form>

</body>
</html>