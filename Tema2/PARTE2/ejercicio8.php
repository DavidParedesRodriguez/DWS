<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <?php

    /*Dadas las edades y alturas de 5 alumnos introducidos en un array, mostrar la edad y la
estatura media, la cantidad de alumnos mayores de 18 años, y la cantidad de alumnos que
miden más de 1.75

Variables:
-Array con altura y edad: arrayAlturaEdad
-edadMedia
alturaMedia
alumnosMayores18
alumnosAlturaMayor175*/

    $arrayEdadAltura = array(21, 1.71, 22, 1.70, 20, 1.89, 19, 1.80, 26, 1.75);

    #edad media
    $edadTotal = 0;
    $contadorEdad = 0;

    #altura Media
    $alturaTotal = 0;
    $contadorAltura = 0;

    #contador mayor de edad
    $contadorMayorEdad = 0;

    #contador altura mayor a 1.75
    $contadorAltura175 = 0;


    #En este bucle para no tener un abundante código, vamos a calcular la edad y la altura media
    $longitudArrayMedias = count($arrayEdadAltura);

    for ($i = 0; $i < $longitudArrayMedias; $i++) {
        $edadTotal += $arrayEdadAltura[$i];
        $contadorEdad++;
        $i++;
        $alturaTotal += $arrayEdadAltura[$i];
        $contadorAltura++;
    }

    #Una vez obtenida la suma de todas las edades y la cantidad de alumnos, calculamos la edad media
    $edadMedia = $edadTotal / $contadorEdad;
    echo "La edad media es de " . intval($edadMedia) . " años";
    echo "<br>";

    #Una vez obtenida la suma de todas las alturas y la cantidad de alumnos, calculamos la altura media
    $alturaMedia = $alturaTotal / $contadorAltura;
    echo "La altura media es de " . $alturaMedia . " cm";
    echo "<br>";

    #En este bucle vamos a contar cuantos alumnos sonn mayores de edad y la cantidad de alumnos que miden más de 1.75
    $lobgitudAlturaEdadMayor = count($arrayEdadAltura);

    for ($i = 0; $i < $lobgitudAlturaEdadMayor; $i++) {

        if ($arrayEdadAltura[$i] > 18) {
            $contadorMayorEdad++;
        }
        $i++;
        if ($arrayEdadAltura[$i] > 1.75) {
            $contadorAltura175++;
        }
    }

    echo "La cantidad de alumnos mayores de 18 años son " . $contadorMayorEdad;
    echo "<br>";
    echo "La cantidad de alumnos con una altura mayor de 1.75 es de " . $contadorAltura175;
    ?>
</body>

</html>