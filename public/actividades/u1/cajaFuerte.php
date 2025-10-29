<?php
    $intentos = 3;
    $abierto = true;
    $contraseña = 0670;
    $numero = $_GET['numero'];
    if ($intentos <= 1) {
        echo "te has quedado sin intentos";
    } else {
        if ($numero == $contraseña){
            echo "<h1> La caja fuewrte se ha abierto satisfactoriamente </h1>";
        }
        else{
            echo "<h1>Te quedan $intentos intentos</h1>";
        }
    }
    $intentos--;
?>
