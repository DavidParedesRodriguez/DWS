<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Modificar Hotel</title>
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

        form {
            width: 80%;
            max-width: 600px;
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
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
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idHotel = $_POST["hotel"];

        // Conexión a la base de datos
        $servername = "localhost";
        $username = "David";
        $password = "Par280502";
        $dbname = "hotel";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Obtener detalles del hotel seleccionado
        $sql = "SELECT * FROM hoteles WHERE nombre = '$idHotel'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $hotel = $result->fetch_assoc();
        } else {
            echo "No se encontró el hotel seleccionado.";
            exit();
        }

        // Cerrar conexión
        $conn->close();
    } else {
        header('Location: seleccionar_modificar_hotel.php');
        exit();
    }
    ?>

    <form action="guardar_modificacion_hotel.php" method="post">
        <input type="hidden" name="idHotel" value="<?php echo $hotel['id']; ?>">
        <label for="nuevoNombre">Nuevo Nombre:</label>
        <input type="text" name="nuevoNombre" id="nuevoNombre" value="<?php echo $hotel['nombre']; ?>" required>
        <label for="nuevaCategoria">Nueva Categoría (del 1 al 5):</label>
        <input type="number" name="nuevaCategoria" id="nuevaCategoria" min="1" max="5" value="<?php echo $hotel['categoria']; ?>" required>
        <label for="nuevoNumeroHabitacion">Nuevo Número de habitación:</label>
        <input type="text" name="nuevoNumeroHabitacion" id="nuevoNumeroHabitacion" value="<?php echo $hotel['numero_habitacion']; ?>" required>
        <label for="nuevaPoblacion">Nueva Población:</label>
        <input type="text" name="nuevaPoblacion" id="nuevaPoblacion" value="<?php echo $hotel['poblacion']; ?>" required>
        <label for="nuevaDireccion">Nueva Dirección:</label>
        <input type="text" name="nuevaDireccion" id="nuevaDireccion" value="<?php echo $hotel['direccion']; ?>" required>

        <button type="submit">Guardar Modificación</button>
    </form>
</body>

</html>



