<?php
session_start();

// Verificar si se enviaron las credenciales
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $clave = isset($_POST['clave']) ? $_POST['clave'] : '';

    // Validar las credenciales 
    if ($usuario === 'admin' && $clave === '123') {
        // Establecer una variable de sesión para indicar que el usuario está autenticado
        $_SESSION['usuario_autenticado'] = true;
        header('Location: ejercicio11b.php');
        exit();
    } else {
        echo "<p>Credenciales incorrectas. Inténtalo de nuevo.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
</head>
<body>

<?php

if (isset($_SESSION['usuario_autenticado']) && $_SESSION['usuario_autenticado']) {
    echo "<h1>Bienvenido al Panel de Administración</h1>";
    echo '<a href="ejercicio11a.html">Volver</a>';
    
} else {
    echo "<p>No tienes acceso al Panel de Administración.</p>";
    echo '<a href="ejercicio11a.html">Volver</a>';
}
?>

</body>
</html>
