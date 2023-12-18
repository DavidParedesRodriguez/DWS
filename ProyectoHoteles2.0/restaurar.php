<?php
// Conexión a la base de datos (reemplaza con tus propias credenciales)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hotel";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Script para restaurar la tabla 'hoteles'
$sqlRestaurar = "
    -- Elimina la tabla 'hoteles' si existe
    DROP TABLE IF EXISTS hoteles;
";

// Ejecutar el script para eliminar la tabla
if ($conn->query($sqlRestaurar) === TRUE) {
    echo "Tabla 'hoteles' eliminada correctamente.\n";

    // Script para crear la tabla 'hoteles' de nuevo
    $sqlCrearTabla = "
        -- Crea la tabla 'hoteles' de nuevo
        CREATE TABLE hoteles (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(255) NOT NULL,
            categoria INT NOT NULL,
            numero_habitacion VARCHAR(255) NOT NULL,
            poblacion VARCHAR(255) NOT NULL,
            direccion VARCHAR(255) NOT NULL
        );
    ";

    // Ejecutar el script para crear la tabla de nuevo
    if ($conn->query($sqlCrearTabla) === TRUE) {
        echo "Tabla 'hoteles' creada correctamente.\n";

        // Inserción de datos por defecto
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

        // Ejecutar la inserción de datos por defecto
        if ($conn->query($sqlInsercion) === TRUE) {
            echo "Datos por defecto insertados correctamente.\n";
        } else {
            echo "Error al insertar datos por defecto: " . $conn->error;
        }
    } else {
        echo "Error al crear la tabla 'hoteles': " . $conn->error;
    }
} else {
    echo "Error al eliminar la tabla 'hoteles': " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
