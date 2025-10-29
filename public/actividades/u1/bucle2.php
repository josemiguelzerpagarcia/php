<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2 de bucle</title>
</head>
<body>
    <?php
    $i = 0;
     while ($i <= 100) {
        if ($i % 5 == 0){
            echo "el numero $i es multiplo de 5" . "<br>";
        }
        $i++;
     }
    ?>
</body>
</html>