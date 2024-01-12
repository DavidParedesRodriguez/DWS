<?php
session_start();

// Verificar si ya hay una hora de entrada en la sesión
if (!isset($_SESSION['hora_entrada'])) {
    // Si no hay, almacenar la hora de entrada
    $_SESSION['hora_entrada'] = date("H:i:s");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Tiempo</title>
</head>
<body>

<h1>Bienvenido</h1>

<p>Ha ingresado a la página a las <?php echo $_SESSION['hora_entrada']; ?></p>

<a href="salir.php">SALIR</a>

</body>
</html>
