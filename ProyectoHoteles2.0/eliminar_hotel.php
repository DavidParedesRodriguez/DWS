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

    // Obtener información del hotel antes de eliminarlo
    $sqlObtenerInfo = "SELECT nombre FROM hoteles WHERE id = '$idHotel'";
    $result = $conn->query($sqlObtenerInfo);

    $nombreHotel = "";
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombreHotel = $row["nombre"];
    }

    // Script para eliminar el hotel
    $sqlEliminarHotel = "DELETE FROM hoteles WHERE id = '$idHotel'";

    if ($conn->query($sqlEliminarHotel) === TRUE) {
        $mensaje = "El Hotel ". $nombreHotel. " con identificador " .$idHotel." ha sido eliminado correctamente.";
    } else {
        $mensaje = "Error al eliminar el hotel: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
} else {
    $mensaje = "No se ha recibido una solicitud POST válida.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Borrar Hotel</title>
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
            font-family: Arial, sans-serif;
        }

        #mensaje-container {
            width: 100%;
            max-width: 600px;
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    <div id="mensaje-container">
        <p style = "color:#032d30"><?php echo $mensaje; ?></p>
        <div id="botones">
            <a href="borrar_hotel.php" id="volver-btn">
                <button type="button">Volver</button>
            </a>
        </div>
    </div>
</body>

</html>

