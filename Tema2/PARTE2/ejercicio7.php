<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <?php

    $numeros = array(10, 2, 3, -4, 0, 9, 0, 10, 8, -6);

    $numerosPositivos = 0;
    $contadorNumerosPositivos = 0;
    $arrayNumerosPositivos = array();

    $numerosNegativos = 0;
    $contadorNumerosNegativos = 0;
    $arrayNumerosNegativos = array();

    $contadorNumerosCeros = 0;

    foreach ($numeros as $numero) {

        if ($numero > 0) {
            $numerosPositivos += $numero;
            $contadorNumerosPositivos++;
            array_push($arrayNumerosPositivos, $numero);
        } elseif ($numero < 0) {
            $numerosNegativos += $numero;
            $contadorNumerosNegativos++;
            array_push($arrayNumerosNegativos, $numero);
        } elseif ($numero == 0) {
            $contadorNumerosCeros++;
        }
    }


    #para imprimir el array entero
    $textNumeroArray = "";
    $longitudArray = count($numeros);
    for ($i = 0; $i < $longitudArray; $i++) {
        if ($i < ($longitudArray - 1)) {
            $textNumeroArray .= $numeros[$i] . ", ";
        } else {
            $textNumeroArray .= $numeros[$i];
        }
    }

    #Para imprimir todos los números positivos
    $textNumerosPositivos = "";
    $longitudNumerosPositivos = count($arrayNumerosPositivos);
    for ($i = 0; $i < $longitudNumerosPositivos; $i++) {
        if ($i < ($longitudNumerosPositivos - 1)) {
            $textNumerosPositivos .= $arrayNumerosPositivos[$i] . ", ";
        } else {
            $textNumerosPositivos .= $arrayNumerosPositivos[$i];
        }
    }

    #Para imprimir todos los números negativos
    $textNumerosNegativos = "";
    $longitudNumerosNegativos = count($arrayNumerosNegativos);
    for ($i = 0; $i < $longitudNumerosNegativos; $i++) {
        if ($i < ($longitudNumerosNegativos - 1)) {
            $textNumerosNegativos .= $arrayNumerosNegativos[$i] . ", ";
        } else {
            $textNumerosNegativos .= $arrayNumerosNegativos[$i];
        }
    }

    echo "· El array que hemos introducido y el cual se basa nuestro ejercicio es el siguiente:<br> " . $textNumeroArray;
    echo "<br><br>";

    $mediaNumerosPositivos = $numerosPositivos / $contadorNumerosPositivos;
    echo "· Números Positivos:<br>Han habido " . $contadorNumerosPositivos . " números positivos, 
    los cuales han sido:<br>" .  $textNumerosPositivos . " la média de estos números es de " . $mediaNumerosPositivos;
    echo "<br><br>";

    $mediaNumerosNegativos = $numerosNegativos / $contadorNumerosNegativos;
    echo "· Números Negativos:<br>Han habido " . $contadorNumerosNegativos . " números negativos, 
    los cuales han sido:<br>" . $textNumerosNegativos . " la média de estos números es de " . $mediaNumerosNegativos;
    echo "<br><br>";

    echo "· Han habido " . $contadorNumerosCeros . " números 0";

    ?>
</body>

</html>