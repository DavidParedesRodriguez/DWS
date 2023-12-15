<?php

// Configuración de la conexión a la base de datos en XAMPP
$servername = "localhost"; // En XAMPP, el servidor suele estar en localhost
$username = "root"; // El nombre de usuario predeterminado en XAMPP
$password = "root"; // La contraseña predeterminada en XAMPP es generalmente una cadena vacía

// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Crear una base de datos llamada "TIENDA"
$databaseName = "TIENDA";
$sqlCreateDatabase = "CREATE DATABASE $databaseName";

if ($conn->query($sqlCreateDatabase) === TRUE) {
    echo "Base de datos '$databaseName' creada con éxito\n";
} else {
    echo "Error al crear la base de datos: " . $conn->error . "\n";
}

// Cerrar la conexión
$conn->close();

?>
