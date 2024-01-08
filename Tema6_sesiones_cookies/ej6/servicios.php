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
    <title>Página</title>
</head>
<body>

<h1>Contenido de la Página</h1>
<p>Esta es la página Servicios</p>

</body>
</html>
