<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Resultado de la Actualización</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #032d30;
            color: black;
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
    <div id="mensaje-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener datos del formulario
            $idHotel = $_POST["idHotel"];
            $nuevoNombre = $_POST["nuevoNombre"];
            $nuevaCategoria = $_POST["nuevaCategoria"];
            $nuevoNumeroHabitacion = $_POST["nuevoNumeroHabitacion"];
            $nuevaPoblacion = $_POST["nuevaPoblacion"];
            $nuevaDireccion = $_POST["nuevaDireccion"];

            // Conexión a la base de datos
            $servername = "localhost";
            $username = "David";
            $password = "Par280502";
            $dbname = "hotel";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Actualizar el registro en la base de datos
            $sqlActualizar = "UPDATE hoteles SET nombre='$nuevoNombre', categoria=$nuevaCategoria, 
                              numero_habitacion='$nuevoNumeroHabitacion', poblacion='$nuevaPoblacion', 
                              direccion='$nuevaDireccion' WHERE id=$idHotel";

            if ($conn->query($sqlActualizar) === TRUE) {
                echo "<p>Hotel actualizado correctamente.</p>";
            } else {
                echo "<p>Error al actualizar el hotel: " . $conn->error . "</p>";
            }

            // Cerrar conexión
            $conn->close();
        } else {
            // Redirigir si no es una solicitud POST válida
            echo "<p>No se ha recibido una solicitud POST válida.</p>";
        }
        ?>
        
        <form action="seleccionar_modificar_hotel.php" method="get">
            <button type="submit">Volver a Seleccionar Hotel</button>
        </form>
    </div>
</body>

</html>

