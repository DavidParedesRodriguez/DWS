<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php

    $numeros = array(1, 2, 3, 4, -5, -9, 0, -10, 8);
    $longitud = count($numeros);

    for ($i = 0; $i < $longitud; $i++) {
        if ($numeros[$i] > 0) {
            echo $numeros[$i] . " es mayor a 0.<br>";
        } elseif ($numeros[$i] < 0) {
            echo $numeros[$i] . " es mayor a 0.<br>";
        } elseif ($numeros[$i] == 0) {
            echo $numeros[$i] . " es igual a 0, por tanto salimos del bucle.<br>";
            break;
        }
    }

    ?>
</body>

</html>