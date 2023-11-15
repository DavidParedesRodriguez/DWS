<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>

<body>
    <?php

    /*Una empresa necesita una página para gestionar las facturas. En cada factura figura: el
código del artículo, la cantidad vendida en litros y el precio por litro. Se pide introducir en un
array multidimensional 5 facturas introducidas e indicar la Facturación total, cantidad en litros
vendidos del artículo 1 y cuantas facturas se emitieron de más de 600 €.*/

    $facturas = array(
        array('codigo_articulo' => 1, 'cantidad_litros' => 100, 'precio_litro' => 5),
        array('codigo_articulo' => 2, 'cantidad_litros' => 80, 'precio_litro' => 8),
        array('codigo_articulo' => 1, 'cantidad_litros' => 150, 'precio_litro' => 6),
        array('codigo_articulo' => 3, 'cantidad_litros' => 120, 'precio_litro' => 7),
        array('codigo_articulo' => 2, 'cantidad_litros' => 70, 'precio_litro' => 9)
    );
    $facturacionTotal = 0;
    $cantidadLitrosVendidosArticulo1 = 0;
    $facturasMayores600 = 0;


    foreach ($facturas as $factura) {
        $cantidadFactura = $factura['cantidad_litros'] * $factura['precio_litro'];
        $facturacionTotal += $cantidadFactura;

        if ($factura['codigo_articulo'] == 1) {
            $cantidadLitrosVendidosArticulo1 += $factura['cantidad_litros'];
        }

        if ($cantidadFactura > 600) {
            $facturasMayores600++;
        }
    }

    echo "La facturación total es " . $facturacionTotal . "€<br>";
    echo "Cantidad de litros vendidos del artículo 1 es de ". $cantidadLitrosVendidosArticulo1 .  "L<br>";
    echo "Facturas emitidas mayor de 600€ son " . $facturasMayores600;
    ?>
</body>

</html>