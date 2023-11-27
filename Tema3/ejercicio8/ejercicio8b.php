<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8b</title>
</head>
<body>

<h2>Resultado de la Comprobación</h2>

<?php
// Función para recoger y limpiar los datos
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var])) ? strip_tags(trim(htmlspecialchars($_REQUEST[$var]))) : '';
    return $tmp;
}

// Recoger los datos
$dato = recoge('dato');
$tipo = recoge('tipo');

// Validar el tipo de dato
if ($tipo == 'email' && filter_var($dato, FILTER_VALIDATE_EMAIL)) {
    echo "<p>El dato '$dato' es un email válido.</p>";
} elseif ($tipo == 'numeros' && is_numeric($dato)) {
    echo "<p>El dato '$dato' es un número.</p>";
} elseif ($tipo == 'dni' && preg_match('/^[0-9]{8}[A-Za-z]$/', $dato)) {
    echo "<p>El dato '$dato' es un DNI válido.</p>";
} else {
    echo "<p>El dato '$dato' no coincide con el tipo seleccionado.</p>";
}
?>

</body>
</html>