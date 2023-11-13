<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php
    /* crear un archivo php que, dados dos números almacenados en dos variables, nos muestre por pantalla
    el mayor de ellos o la frase "Los números son iguales" si son iguales. Usar la estructura switch 
    y el operador nave espacial*/

    $numero1 = 5;
    $numero2 = 5;

    $resultado = $numero1 <=> $numero2;

    switch ($resultado) {
        case 0:
            echo "Los números son iguales";
            break;

        case -1:
            echo  "La variable1, la cual su valor es ". $numero1 ." , es menor a la variable2, la cual su valor es ". $numero2;
            break;

        case 1:
            echo  "La variable1, la cual su valor es ". $numero1 ." , es mayor a la variable2, la cual su valor es ". $numero2;
            break;
        default:
            # code...
            break;
    }

    ?>
</body>

</html>