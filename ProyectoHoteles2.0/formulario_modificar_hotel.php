<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idHotel = $_POST["idHotel"];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "David";
    $password = "Par280502";
    $dbname = "hotel";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $categoria = $_POST["categoria"];
    $numero_habitacion = $_POST["numero_habitacion"];
    $poblacion = $_POST["poblacion"];
    $direccion = $_POST["direccion"];

    // Actualizar el hotel en la base de datos
    $sqlActualizarHotel = "UPDATE hoteles SET 
        nombre = '$nombre',
        categoria = '$categoria',
        numero_habitacion = '$numero_habitacion',
        poblacion = '$poblacion',
        direccion = '$direccion'
        WHERE id = '$idHotel'";

    if ($conn->query($sqlActualizarHotel) === TRUE) {
        echo "Hotel actualizado correctamente.\n";
    } else {
        echo "Error al actualizar el hotel: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
} else {
    header('Location: seleccionar_modificar_hotel.php'); // Redirige si no es una solicitud POST válida
    exit();
}
?>
