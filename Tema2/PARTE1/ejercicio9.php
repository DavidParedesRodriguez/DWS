<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>

<body>

    <?php
    /*Crear una página que calcule el importe final de una factura. Debemos crear dos variables
que contendrán el precio de un producto y las unidades adquiridas. Además, crear una
constante llamada IVA del 21%. Debemos calcular y devolver el precio del producto, las
unidades adquiridas, el importe base de la factura, el importe del IVA y el importe final de la
factura.

Variables:
-precioProducto
-unidadesAdquiridas
-importeBase
-importeIVA
-importeFinal*/

    $precioProducto = 20;
    $unidadesAdquiridas = 5;
    const IVA = 0.21;

    #importe base de la factura

    $importeBase =  $precioProducto * $unidadesAdquiridas;

    #importe del IVA
    $importeIVA = $importeBase * IVA;
   
    #importe final de la factura
    $importeFinal = $importeBase + $importeIVA;

    echo "Precio del producto: ". $precioProducto;
    echo "<br>";
    echo "Unidades adquiridas del producto: ". $unidadesAdquiridas;
    echo "<br>";
    echo "Importe base de la factura: ". $importeBase;
    echo "<br>";
    echo "Importe del IVA: ". $importeIVA;
    echo "<br>";
    echo "Importe final de la factura: ". $importeFinal;
    




    ?>

</body>

</html>