<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>

    <?php

    $dia = 1;

    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miercoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;

        default:
            echo "Dia no válido";
            break;
    }
    echo "<br>";
    $diaSemana = 'LUNES';

    switch ($diaSemana) {
        case 'LUNES':
            echo "1";
            break;
        case 'MARTES':
            echo "2";
            break;
        case 'MIERCOLES':
            echo "3";
            break;
        case 'JUEVES':
            echo "4";
            break;
        case 'VIERNES':
            echo "5";
            break;
        case 'SABADO':
            echo "6";
            break;
        case 'DOMINGO':
            echo "7";
            break;

        default:
            echo 'Día no válido';
            break;
    }

    ?>

</body>

</html>