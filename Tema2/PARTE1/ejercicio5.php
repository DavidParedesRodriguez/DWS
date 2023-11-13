<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php 
    /*Hacer un programa en php que 
    calcule el mayor de dos números almacenados en dos variables usando la condicion if. */
    
    $variable1 = 5;
    $variable2 = 10;

    if ($variable1 > $variable2) {
        echo "La variable1 con valor ". $variable1 . " es más grande que la variable2 con valor ". $variable2;
    }else{
        echo "La variable1 con valor ". $variable1 . " es menor que la variable2 con valor ". $variable2;
    }
    ?>
</body>
</html>