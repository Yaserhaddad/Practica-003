<?php
   error_reporting(E_ALL ^ E_NOTICE);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>
    <?= 
    $oculto=" ";
    if($numero === $prueba){
        print '<h1>Correcto!</h1>';
    }elseif($numero > $prueba){
        print '<h1>Más grande!</h1>';
    }elseif($numero < $adivina){
        print '<h1>Más pequeño!</h1>';;
    } 
    ?>
    </h1>
</body>
</html>