<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "David";
$password = "Par280502";
$dbname = "hotel";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $categoria = $_POST["categoria"];
    $numero_habitacion = $_POST["numero_habitacion"];
    $poblacion = $_POST["poblacion"];
    $direccion = $_POST["direccion"];

    // Consulta SQL para insertar el nuevo hotel en la base de datos
    $sql = "INSERT INTO hoteles (nombre, categoria, numero_habitacion, poblacion, direccion)
            VALUES ('$nombre', $categoria, '$numero_habitacion', '$poblacion', '$direccion')";

    if ($conn->query($sql) === TRUE) {
        header('Location: formulario.php?exito=1');
        exit();
    } else {
        header('Location: formulario.php?error=1');
        exit();
    }
} else {
    header('Location: formulario.php?error=1');
    exit();
}

// Cerrar conexión
$conn->close();
?>


