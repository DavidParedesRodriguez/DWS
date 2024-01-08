<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
</head>
<body>

<?php
// Verificar si se enviaron las credenciales
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
    $clave = isset($_POST['clave']) ? $_POST['clave'] : '';

    // Validar las credenciales 
    if ($usuario === 'david' && $clave === 'clave') {
        // Establecer una cookie para la sesión actual
        setcookie('sesion_valida', '1', 0, "/");
        // Mostrar un mensaje y redirigir 
        echo "<p>Inicio de sesión exitoso. Redirigiendo...</p>";
        echo '<script>window.location.href = "menu.php";</script>';
        exit();
    } else {
        echo "<p>Credenciales incorrectas. Inténtalo de nuevo.</p>";
    }
}
?>
<p>usuario: david y contraseña: clave</p>

<form method="post" action="">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" required>

    <label for="clave">Clave:</label>
    <input type="password" id="clave" name="clave" required>

    <button type="submit">Iniciar Sesión</button>
</form>

</body>
</html>


