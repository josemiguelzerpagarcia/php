<?php
require_once "funciones.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= sumar(3,4) ?></h1>
    <h2><?= media([3,4, 5, 7, 1]) ?></h2> 
    <h2><?= potencia(3,3) ?></h2> 
    <h2><?= if (esPar(4)){
        echo "Es par";
    } else {
        echo "no es par"
    } ?></h2> 
</body>
</html>