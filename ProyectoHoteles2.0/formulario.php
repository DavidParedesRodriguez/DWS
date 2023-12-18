<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario de Hotel</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #032d30; 
        }

        #formulario-container {
            width: 100%; 
            max-width: 600px; 
            text-align: center;
            background-color: white; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        #botones {
            display: flex;
            justify-content: space-between;
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
    <div id="formulario-container">
        <?php
        if (isset($_GET['exito']) && $_GET['exito'] == 1) {
            echo '<div style="margin-top: 10px;"><p style="color: green;">Hotel añadido correctamente.</p></div>';
        }
        ?>

        <form action="añadir_hotel.php" method="post">
            <label for="nombre">Nombre del hotel:</label>
            <input type="text" name="nombre" id="nombre" required>
            
            <label for="categoria">Categoría (del 1 al 5):</label>
            <input type="number" name="categoria" id="categoria" min="1" max="5" required>
            
            <label for="numero_habitacion">Número de habitación:</label>
            <input type="number" pattern="\d*" name="numero_habitacion" id="numero_habitacion" required>
            
            <label for="poblacion">Población:</label>
            <input type="text" name="poblacion" id="poblacion" required>
            
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" required>

            <div id="botones">
                <button type="submit">Añadir Hotel</button>
                
                <a href="index.html" id="volver-btn">
                    <button type="button">Volver al inicio</button>
                </a>
            </div>
        </form>
    </div>
</body>
</html>
