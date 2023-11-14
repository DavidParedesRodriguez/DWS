<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php

    $numeros = array(10, 2, 3, 4, 5, 9, 0, 10, 8, -6);
    $total = 0;
    $contador = 0;

    foreach ($numeros as $numero) {

        if ($numero > 0) {
            echo $numero . " es mayor a 0<br>";
            $total += $numero;
            $contador++;
        } elseif ($numero < 0) {
            echo $numero . " es menor a 0<br>";
            break;
        }
    }

    if ($contador > 0) {
        $media = $total / $contador;
        echo "La média es de " . $media . "<br>";
    } elseif ($contador <= 0) {
        echo "No se ha introducido número válido";
    }
    ?>
</body>

</html>