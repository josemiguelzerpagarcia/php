<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablas de multiplicar</title>
</head>
<body>
    <h1>Elegiras la tala de multilicar del numero que quieras aqui abajo</h1>

    <form method="post">
    <label for="numero">Escribe un numero</label>
    <input type="number" name="numero">
    <input type="submit" value="Enviar">
    </form>
    <?php
        $resultado = "<table border='1'>";
        if(isset($_POST['numero'])){
            $numero = $_POST['numero'];
            for ($i=0; $i <= 10 ; $i++) {
                $aux = $i * $numero;
                $resultado += "<tr><td>$i * $numero = $aux</td></tr>";
            }
            $resultado += "</table>";
            echo $resultado;
        }
    ?>
</body>
</html>