<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>
    <?php

    /*Y realiza las siguientes acciones (cada una de las acciones deberán implementarse en
funciones):
• Mostrar el listado de hoteles
• Mostrar el listado de hoteles de más de 100 habitaciones
• Mostrar el listado de hoteles de menos de 100 habitaciones y 3 estrellas
• Borrar el hotel Acta del Carmen y mostrar el listado de hoteles
• Borrar todos los hoteles y mostrar un mensaje “No hay hoteles en la base de datos”, al intentar mostrar el listado de hoteles
• Añadir los siguientes hoteles al array y mostrar el listado*/

$hoteles = array(
    array(
        'Nombre' => 'Abashiri (NH)',
        'Cat' => '3*',
        'Hab' => 168,
        'Población' => '46013 Valencia',
        'Dirección' => 'Avenida Ausias March, 59'
    ),
    array(
        'Nombre' => 'Abba Acteon (Abba Hoteles)',
        'Cat' => '4*',
        'Hab' => 189,
        'Población' => '46023 Valencia',
        'Dirección' => 'Escultor Vicente Bertrán Grimal, 2'
    ),
    array(
        'Nombre' => 'Acta Atarazanas',
        'Cat' => '4*',
        'Hab' => 42,
        'Población' => '46011 Valencia',
        'Dirección' => 'Plaza Tribunal de las Aguas, 4'
    ),
    array(
        'Nombre' => 'Acta del Carmen',
        'Cat' => '3*',
        'Hab' => 25,
        'Población' => '46003 Valencia',
        'Dirección' => 'Blanquerías, 11'
    ),
    array(
        'Nombre' => 'AC Valencia (AC Hotels)',
        'Cat' => '4*',
        'Hab' => 183,
        'Población' => '46023 Valencia',
        'Dirección' => 'Avenida de Francia, 67'
    ),
    array(
        'Nombre' => 'Ad Hoc Monumental Valencia',
        'Cat' => '3*',
        'Hab' => 28,
        'Población' => '46003 Valencia',
        'Dirección' => 'Boix, 4'
    ),
    array(
        'Nombre' => 'Alkazar',
        'Cat' => '1*',
        'Hab' => 18,
        'Población' => '46002 Valencia',
        'Dirección' => 'Mosén Femades, 11'
    )
);

function mostrarHoteles($hoteles){
    foreach ($hoteles as $hotel) {
        echo "Nombre: " . $hotel['Nombre'] . "<br>Categoria: " . $hotel['Cat'] . "<br>Habitación: " . $hotel['Hab'] . "<br>Población: " 
        . $hotel['Población'] . "<br>Dirección: " . $hotel['Dirección'] . "<br><br>";
    }
}
    echo mostrarHoteles($hoteles);
    ?>
</body>

</html>