<?php
// Función para establecer una cookie
function setCookieNombre($nombre) {
    $duracion = time() + (30 * 24 * 60 * 60); // 30 días de duración
    setcookie('nombre', $nombre, $duracion, "/");
}

// Obtener el nombre almacenado en la cookie
$nombreAlmacenado = isset($_COOKIE['nombre']) ? $_COOKIE['nombre'] : '';

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
    $nombreFormulario = $_POST['nombre'];
    if ($nombreAlmacenado !== $nombreFormulario) {
        // Si el nombre es diferente al almacenado, mostrar el mensaje de bienvenida
        $bienvenida = "¡Bienvenido, $nombreFormulario!";
        setCookieNombre($nombreFormulario);
    } else {
        // Si el nombre es el mismo, mostrar el mensaje de bienvenida de nuevo
        $bienvenida = "¡Bienvenido de nuevo, $nombreAlmacenado!";
    }
} else {
    $bienvenida = '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido</title>
</head>
<body>

<?php if ($bienvenida !== ''): ?>
    <p><?php echo $bienvenida; ?></p>
<?php endif; ?>

<form method="post" action="">
    <label for="nombre">Introduce tu nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <button type="submit">Enviar</button>
</form>

</body>
</html>



