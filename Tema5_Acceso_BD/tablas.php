<?php

// Configuración de la conexión a la base de datos en XAMPP
$servername = "localhost"; // En XAMPP, el servidor suele estar en localhost
$username = "root"; // El nombre de usuario predeterminado en XAMPP
$password = "root"; // La contraseña predeterminada en XAMPP es generalmente una cadena vacía
$databaseName = "TIENDA"; // Nombre de la base de datos

// Datos para insertar en la tabla "fabricante"
$datosFabricante = array(
    array(1, 'Kingston'),
    array(2, 'Adata'),
    array(3, 'Logitech'),
    array(4, 'Lexar'),
    array(5, 'Seagate')
);

// Datos para insertar en la tabla "articulos"
$datosArticulos = array(
    array(1, 'Teclado', 10, 3),
    array(2, 'Disco duro 300 Gb', 50, 5),
    array(3, 'Mouse', 8, 3),
    array(4, 'Memoria USB', 14, 4),
    array(5, 'Memoria RAM', 29, 1),
    array(6, 'Disco duro extraíble 250 Gb', 65, 5),
    array(7, 'Memoria USB', 27, 1),
    array(8, 'DVD Rom', 45, 2),
    array(9, 'CD Rom', 200, 2),
    array(10, 'Tarjeta de red', 18, 3)
);

// Crear conexión
$conn = new mysqli($servername, $username, $password, $databaseName);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Insertar datos en la tabla "fabricante"
foreach ($datosFabricante as $datos) {
    $codigo = $datos[0];
    $nombre = $datos[1];

    $sqlInsertFabricante = "INSERT INTO fabricante (codigo, nombre) VALUES ($codigo, '$nombre')";

    if ($conn->query($sqlInsertFabricante) === TRUE) {
        echo "Datos insertados en la tabla 'fabricante' con éxito\n";
    } else {
        echo "Error al insertar datos en la tabla 'fabricante': " . $conn->error . "\n";
    }
}

// Insertar datos en la tabla "articulos"
foreach ($datosArticulos as $datos) {
    $codigo = $datos[0];
    $nombre = $datos[1];
    $precio = $datos[2];
    $fabricante = $datos[3];

    $sqlInsertArticulos = "INSERT INTO articulos (codigo, nombre, precio, fabricante) VALUES ($codigo, '$nombre', $precio, $fabricante)";

    if ($conn->query($sqlInsertArticulos) === TRUE) {
        echo "Datos insertados en la tabla 'articulos' con éxito\n";
    } else {
        echo "Error al insertar datos en la tabla 'articulos': " . $conn->error . "\n";
    }
}

// Cerrar la conexión
$conn->close();

?>

