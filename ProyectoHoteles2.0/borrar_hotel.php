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

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
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
    <div id="formulario-container">
        <form action="eliminar_hotel.php" method="post">
            <label style = "color:#032d30" for="idHotel">Identificador del Hotel:</label>
            <input type="text" name="idHotel" id="idHotel" required>

            <div id="botones">
                <button type="submit">Borrar Hotel</button>

                <a href="index.html" id="volver-btn">
                    <button type="button">Volver al inicio</button>
                </a>
            </div>
        </form>
    </div>
</body>

</html>
