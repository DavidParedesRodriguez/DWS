<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Dirección de Correo</title>
</head>
<body>

<?php
$correoRecordado = isset($_COOKIE['correo']) ? $_COOKIE['correo'] : '';

if ($correoRecordado !== '') {
    echo "<p>La dirección de correo recordada es: $correoRecordado</p>";
} else {
    echo "<p>No se recordó ninguna dirección de correo.</p>";
}
?>

</body>
</html>
