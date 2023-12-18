<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Agrega el enlace a tu archivo de estilos común -->
    <title>Restaurar Base de Datos</title>
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
            font-family: Arial, sans-serif; /* Ajusta el tipo de letra según tus preferencias */
        }

        #contenido-container {
            text-align: center;
        }

        #mensaje {
            margin-top: 20px;
        }

        #boton-volver {
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
    </style>
</head>

<body>
    <div id="contenido-container">
        <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "David";
        $password = "Par280502";
        $dbname = "hotel";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        $sqlRestaurar = "
            DROP TABLE IF EXISTS hoteles;
        ";

        if ($conn->query($sqlRestaurar) === TRUE) {
            echo "<p>Tabla 'hoteles' eliminada correctamente.</p>";

            $sqlCrearTabla = "
                CREATE TABLE hoteles (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    nombre VARCHAR(255) NOT NULL,
                    categoria INT NOT NULL,
                    numero_habitacion VARCHAR(255) NOT NULL,
                    poblacion VARCHAR(255) NOT NULL,
                    direccion VARCHAR(255) NOT NULL
                );
            ";

            if ($conn->query($sqlCrearTabla) === TRUE) {
                echo "<p>Tabla 'hoteles' creada correctamente.</p>";

                $sqlInsercion = "
                    INSERT INTO hoteles (nombre, categoria, numero_habitacion, poblacion, direccion)
                    VALUES
                        ('Abashiri (NH)', 3, 168, '46013 Valencia', 'Avenida Ausias March, 59'),
                        ('Abba Acteon (Abba Hoteles)', 4, 189, '46023 Valencia', 'Escultor Vicente Bertrán'),
                        ('Acta Atarazanas', 4, 42, '46011 Valencia', 'Plaza Tribunal de las Aguas, 4'),
                        ('Acta del Carmen', 3, 25, '46003 Valencia', 'Blanquerías, 11'),
                        ('AC Valencia (AC Hotels)', 4, 183, '46023 Valencia', 'Avenida de Francia, 67'),
                        ('Ad Hoc Monumental Valencia', 3, 28, '46003 Valencia', 'Boix, 4'),
                        ('Alkazar', 1, 18, '46002 Valencia', 'Mosén Femades, 11');
                ";

                if ($conn->query($sqlInsercion) === TRUE) {
                    echo "<p>Datos por defecto insertados correctamente.</p>";
                } else {
                    echo "<p>Error al insertar datos por defecto: " . $conn->error . "</p>";
                }
            } else {
                echo "<p>Error al crear la tabla 'hoteles': " . $conn->error . "</p>";
            }
        } else {
            echo "<p>Error al eliminar la tabla 'hoteles': " . $conn->error . "</p>";
        }

        // Cerrar conexión
        $conn->close();
        ?>
        <!-- Botón para volver -->
        <div id="boton-volver">
            <a href="index.html">
                <button type="button">Volver al inicio</button>
            </a>
        </div>
    </div>
</body>

</html>

