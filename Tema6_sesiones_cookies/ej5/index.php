<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recordar Dirección de Correo</title>
    <h1>Ejercicio 5.BORRAR COOKIE</h1>
</head>
<body>

<form method="post" action="procesar.php">
    <label for="correo">Dirección de Correo:</label>
    <input type="email" id="correo" name="correo" required>
    
    <label>
        <input type="checkbox" name="recordar"> Recordar dirección
    </label>
    
    <button type="submit">Enviar</button>
</form>

</body>
</html>
