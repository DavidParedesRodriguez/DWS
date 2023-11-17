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

    #-------------------------------------------------------1. Mostrar el listado de hoteles:-------------------------------------------------------
    function mostrarHoteles($hoteles)
    {
        foreach ($hoteles as $hotel) {
            echo "Nombre: " . $hotel['Nombre'] . "<br>Categoria: " . $hotel['Cat'] . "<br>Habitación: " . $hotel['Hab'] . "<br>Población: "
                . $hotel['Población'] . "<br>Dirección: " . $hotel['Dirección'] . "<br><br>";
        }
    }
    #echo mostrarHoteles($hoteles);


    #-------------------------------------------------------2. Mostrar el listado de hoteles de más de 100 habitaciones:-------------------------------------------------------
    function mostrarHotelesMas100Habitaciones($hoteles)
    {
        $listadoHoteles = "Hoteles con más de 100 habitaciones són:<br><br>";
        foreach ($hoteles as $hotel) {

            if ($hotel['Hab'] > 100) {
                $listadoHoteles .=  "Nombre: " . $hotel['Nombre'] . "<br>Categoria: " . $hotel['Cat'] . "<br>Habitación: " . $hotel['Hab'] . "<br>Población: "
                    . $hotel['Población'] . "<br>Dirección: " . $hotel['Dirección'] . "<br><br>";
            }
        }

        echo $listadoHoteles;
    }

    #echo mostrarHotelesMas100Habitaciones($hoteles);


    #-------------------------------------------------------3. Mostrar el listado de hoteles de menos de 100 habitaciones y 3 estrellas:-------------------------------------------------------
    function mostrarHotelesMenos100HabitacionesY3Estrellas($hoteles)
    {
        $listadoHoteles = "Hoteles con menos de 100 habitaciones y 3 estrellas són:<br><br>";
        foreach ($hoteles as $hotel) {

            if ($hotel['Hab'] < 100 and $hotel['Cat'] < 3) {
                $listadoHoteles .=  "Nombre: " . $hotel['Nombre'] . "<br>Categoria: " . $hotel['Cat'] . "<br>Habitación: " . $hotel['Hab'] . "<br>Población: "
                    . $hotel['Población'] . "<br>Dirección: " . $hotel['Dirección'] . "<br><br>";
            }
        }

        echo $listadoHoteles;
    }

    #echo mostrarHotelesMenos100HabitacionesY3Estrellas($hoteles);


    #-------------------------------------------------------4. Borrar el hotel Acta del Carmen y mostrar el listado de hoteles:-------------------------------------------------------
    function borrarHotelActaDelCarmen($hoteles)
    {
        foreach ($hoteles as $key => $hotel) {

            if ($hotel['Nombre'] == 'Acta del Carmen') {
                unset($hoteles[$key]);
            }
        }

        echo mostrarHoteles($hoteles);
    }

    #echo borrarHotelActaDelCarmen($hoteles);


    #-------------------------------------------------------5. Borrar todos los hoteles y mostrar un mensaje “No hay hoteles en la base de datos”, al intentar mostrar el listado de hoteles:-------------------------------------------------------
    function borrarTodosLosHoteles($hoteles)
    {
        $hoteles = array(); //Asignamos a un Array Vacio

        echo "Todos los Hoteles han sido borrados";
    }

    #echo borrarTodosLosHoteles($hoteles);


    #-------------------------------------------------------6. Añadir los siguientes hoteles al array y mostrar el listado:-------------------------------------------------------

    function añadirHoteles($hoteles)
    {
        $nuevosHoteles = array(
            array(
                'Nombre' => 'Astoria Palace (Ayre Fiesta)',
                'Cat' => '4',
                'Hab' => 204,
                'Población' => '46002 Valencia',
                'Dirección' => 'Plaza Rodrigo Botet, 5'
            ),
            array(
                'Nombre' => 'Balneario Las Arenas',
                'Cat' => 'Lujo',
                'Hab' => 253,
                'Población' => '46011 Valencia',
                'Dirección' => 'Eugenia Viñes, 22-24'
            )
        );

        $hoteles = array_merge($hoteles, $nuevosHoteles);

        echo "Listado de los nuevos hoteles:<br><br>";
        echo mostrarHoteles($hoteles);
    }

    echo añadirHoteles($hoteles);
    ?>
</body>

</html>