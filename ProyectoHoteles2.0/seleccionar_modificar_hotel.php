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

// Obtener la lista de hoteles para el menú desplegable
$sql = "SELECT id, nombre FROM hoteles";
$result = $conn->query($sql);

// Cerrar conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Seleccionar Hotel para Modificar</title>
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

        #seleccion-container {
            width: 100%;
            max-width: 600px;
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
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
    <div id="seleccion-container">
        <h2>Seleccionar Hotel para Modificar</h2>

        <form action="formulario_modificar_hotel.php" method="post">
            <label for="hotel">Selecciona un hotel:</label>
            <select name="hotel" id="hotel" required>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row["id"] . '">' . $row["nombre"] . '</option>';
                }
                ?>
            </select>

            <button type="submit">Modificar Hotel</button>
        </form>

        <div id="botones">
            <a href="index.html" id="volver-btn">
                <button type="button">Volver al inicio</button>
            </a>
        </div>
    </div>
</body>

</html>
