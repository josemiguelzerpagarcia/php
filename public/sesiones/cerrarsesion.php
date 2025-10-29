<?php
    session_start();
    session_destroy();

    header("Location: contador.php");
?>