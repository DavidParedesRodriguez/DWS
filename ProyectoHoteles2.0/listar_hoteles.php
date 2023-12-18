<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Listar Hoteles</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #032d30;
            color: white;
        }

        #listado-container {
            width: 80%;
            max-width: 800px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #d8ad5d;

        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #d8ad5d;
            color: white;
        }

        #botones {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        button {
            margin: 0;
            padding: 10px 20px;
            font-size: 20px;
            background-color: #d8ad5d;
            color: white;
            border-radius: 10px;
            cursor: pointer;
        }


        #volver-btn {
            background-color: #888;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="listado-container">
        <h2>Listado de Hoteles</h2>

        <table>
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Número de Habitación</th>
                <th>Población</th>
                <th>Dirección</th>
            </tr>

            <?php

            $contenidoCSV = file_get_contents('hoteles.csv');


            $lineas = explode(PHP_EOL, $contenidoCSV);
            foreach ($lineas as $linea) {

                if (!empty($linea)) {
                    $datosHotel = explode(',', $linea);

                    if (count($datosHotel) >= 5) {
                        echo '<tr>';
                        foreach ($datosHotel as $dato) {
                            echo '<td>' . $dato . '</td>';
                        }
                        echo '</tr>';
                    } else {
                        echo '<p>Error en el formato de los datos</p>';
                    }
                }
            }
            ?>
        </table>

        <div id="botones">

            <a href="index.html" id="volver-btn">
                <button type="button">Volver al inicio</button>
            </a>
        </div>
    </div>
</body>

</html>