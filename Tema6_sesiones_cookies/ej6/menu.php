<?php
// Verificar si la cookie de sesión es válida
if (!isset($_COOKIE['sesion_valida']) || $_COOKIE['sesion_valida'] !== '1') {
    // Si la cookie no es válida, redirigir al inicio de sesión
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
</head>
<body>

<h1>Menú</h1>
<ul>
    <li><a href="empresa.php">Empresa</a></li>
    <li><a href="servicios.php">Servicios</a></li>
    <li><a href="contacto.php">Contacto</a></li>
</ul>

</body>
</html>

