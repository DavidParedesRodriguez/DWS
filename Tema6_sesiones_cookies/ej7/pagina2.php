<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Color Seleccionado</title>
    <h1>PAG2</h1>
</head>
<body>

<?php
// VERIFICAMOS SI EXISTE LA COOKIE CON EL COLOR DE FONDO
if (isset($_COOKIE['color_fondo'])) {
    $colorFondo = $_COOKIE['color_fondo'];
    echo "<style>body { background-color: $colorFondo; }</style>";
    echo "<p>Color de fondo seleccionado: $colorFondo</p>";
} else {
    echo "<p>No se ha seleccionado ningún color de fondo.</p>";
}


echo '<a href="pagina1.php">Volver a la página inicial</a>';
?>

</body>
</html>


