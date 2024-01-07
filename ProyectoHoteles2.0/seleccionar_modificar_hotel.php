<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Seleccionar y Modificar Hotel</title>
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

        #contenedor-formularios {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #seleccionar-container {
            width: 100%;
            max-width: 600px;
            text-align: center;
            background-color: white;
            padding: 75px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: -60px;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
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
    </style>
</head>

<body>
    <div id="contenedor-formularios">
        <!-- Lista de hoteles con formulario para seleccionar uno -->
        <form action="formulario_modificar_hotel.php" method="post" id="seleccionar-container">
            <label for="hotel">Selecciona un hotel:</label>
            <select name="hotel" id="hotel">
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

                // Obtener nombres de hoteles desde la base de datos
                $sql = "SELECT nombre FROM hoteles";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["nombre"] . '">' . $row["nombre"] . '</option>';
                    }
                } else {
                    echo '<option value="" disabled>No hay hoteles disponibles</option>';
                }

                // Cerrar conexión
                $conn->close();
                ?>
            </select>
            <div id="botones-container">
                <button type="submit">Modificar Hotel</button>
            </div>
        </form>

        
        <form action="index.html" method="get">
            <button type="submit">Volver al Inicio</button>
        </form>
    </div>
</body>

</html>


