<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugador 2</title>
</head>
<body>
    <h1>Buenas jugador 2:</h1>
    <p>Debe adivinar el numero introducido por el jugador 1</p>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method ="post">
    <input name= "numero" type="hidden" value="<?= $numero ?>">
    <input name="adivina" type="number" value="<?= $prueba ?>">
    <input type="submit" value="Comprobar">
    </form>

    <?= 
        $numero= $_POST["numero"];
        $numero= $_POST["adivina"];
        
        if($numero == $prueba){
            print '<h1>Correcto!</h1>';
        }elseif($numero > $prueba){
            print '<h1>Más grande!</h1>';
        }elseif($numero < $adivina){
            print '<h1>Más pequeño!</h1>';;
        } 
    ?>
</body>
</html>