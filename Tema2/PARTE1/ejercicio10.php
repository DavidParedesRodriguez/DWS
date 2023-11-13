<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>

    <?php


    $codigo = 1;
    $nombre = "Tom";
    $apellidos = "Smith";
    $puesto = "Vendedor";
    $sueldo = 75000;
    $edad = 26;
    $num_hijos = 0;
    $sucursal = "New York";

    echo "Retención 1.- Si es Vendedor y el Sueldo mayor a 70000 aplicar una retención del 10%
    sobre el sueldo y en caso contrario el 20%";
    echo "<br>";


    if ($puesto === "Vendedor" and $sueldo > 70000) {
        $sueldoRet1 = $sueldo - ($sueldo * 0.05);
        echo "Como el sueldo es mayor a 70000 tiene una retencion del 5% por lo que el sueldo se le queda en " . $sueldoRet1 ."€";
    } elseif ($puesto === "Vendedor" and $sueldo < 70000) {
        $sueldoRet1 = $sueldo - ($sueldo * 0.20);
        echo "Como el sueldo es menor a 70000 tiene una retencion del 20% por lo que el sueldo se le queda en " . $sueldoRet1 ."€";
    }
    echo "<br>";
    echo "<br>";
    echo "Retención 2.- Si tiene más de 50 años o más de 2 hijos aplicar una retención del 5% sobre
    el sueldo y en caso contrario el 10%";
    echo "<br>";

    if ($edad > 50 or $num_hijos > 2) {
        $sueldoRet2 = $sueldo - ($sueldo * 0.05);
        echo "Como tiene más de 50 años o más de 2 hijos se le aplica una retencion del 5% por lo que el sueldo se le queda en " . $sueldoRet2 ."€";
    } elseif ($edad < 50 or $num_hijos > 2) {
        $sueldoRet2 = $sueldo - ($sueldo * 0.10);
        echo "Como tiene menos de 50 años o menos de 2 hijos se le aplica una retencion del 10% por lo que el sueldo se le queda en " . $sueldoRet2 ."€";
    }

    echo "<br>";
    echo "<br>";
    echo "Retención 3.- Si el sueldo es mayor de 50000 y menor de 80000 aplicar una retención
    del 5% sobre el sueldo y en caso contrario el 12% ";
    echo "<br>";

    if ($sueldo > 50000 || $sueldo < 80000) {
        $sueldoRet3 = $sueldo - ($sueldo * 0.05);
        echo "Como tiene un sueldo mayor de 50000 y menor de 80000 se aplica una retención del 5% por lo que el sueldo se le queda en " . $sueldoRet3 ."€";
    } elseif ($sueldo < 50000 || $sueldo > 80000) {
        $sueldoRet3 = $sueldo - ($sueldo * 0.12);
        echo "Como tiene un sueldo menor de 50000 y mayor de 80000 se aplica una retención del 12% por lo que el sueldo se le queda en " . $sueldoRet3 ."€";
    }

    echo "<br>";
    echo "<br>";
    echo "Retención 4.- Si tiene 1 o 2 hijos aplicar una retención del 10% sobre el sueldo y en caso
    contrario el 5% ";
    echo "<br>";

    if ($num_hijos == 1 or $num_hijos == 2) {
        $sueldoRet4 = $sueldo - ($sueldo * 0.10);
        echo "Como tiene 1 o 2 hijos se aplica una retención del 10% por lo que el sueldo se le queda en ". $sueldoRet4 ."€";
    }elseif ($num_hijos != 1 or $num_hijos != 2) {
        $sueldoRet4 = $sueldo - ($sueldo * 0.05);
        echo "Como no tiene 1 o 2 hijos se aplica una retención del 5% por lo que el sueldo se le queda en ". $sueldoRet4 ."€";
    }


    echo "<br>";
    echo "<br>";
    echo "Retención 5.- Si el sueldo es mayor de 80000 o no tiene hijos aplicar una retención del
    15% sobre el sueldo y en caso contrario el 5%";
    echo "<br>";

    if ($sueldo > 80000 or $num_hijos == 0) {
        $sueldoRet5 = $sueldo - ($sueldo * 0.15);
        echo "Como el sueldo es mayor de 80000 o no tiene hijos se le aplica una retencion del 15% por lo que el sueldo se queda en ". $sueldoRet5 ."€";
    }elseif ($sueldo < 80000 or $num_hijos != 0) {
        $sueldoRet5 = $sueldo - ($sueldo * 0.05);
        echo "Como el sueldo es menor de 80000 o tiene hijos se le aplica una retencion del 5% por lo que el sueldo se queda en ". $sueldoRet5 ."€";
    }
    ?>

    

</body>

</html>