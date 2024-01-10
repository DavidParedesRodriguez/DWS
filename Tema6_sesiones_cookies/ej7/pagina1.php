<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Selección de Color</title>
    <h1>PAG1</h1>
</head>
<body>

<?php
// VERIFICAMOS QUE SE HA ENVIADO EL COLOR
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color'])) {
    $colorSeleccionado = $_POST['color'];

    //ESTABLECER LA COOKIE CON EL COLOR SELECCIONADO
    setcookie('color_fondo', $colorSeleccionado, 0, "/");
    // APLICAR EL COLOR DE FONDO A LA PÁGINA ACTUAL
    echo "<style>body { background-color: $colorSeleccionado; }</style>";
}
?>

<form method="post" action="">
    <label for="color">SELECT COLOR:</label>
    <select id="color" name="color" required>
        <option value="red">Rojo</option>
        <option value="green">Verde</option>
        <option value="blue">Azul</option>
        <option value="black">Negro</option>
    </select>

    <button type="submit">ENVIAR</button>
</form>

<?php

echo '<a href="pagina2.php">ENLACE PAG2.PHP</a>';
?>

<form method="post" action="">
    <button type="submit" name="eliminar_cookie">BORRAR</button>
</form>

<?php
// VERIFICAR SI HEMOS CLICADO EL BOTON PARA BORRAR LA COOKIE
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar_cookie'])) {
    
    //ELIMINAMOS LA COOKIE
    setcookie('color_fondo', '', time() - 3600, "/");

    // RECARGAR LA PÁGINA PARA APLICAR LOS CAMBIOS
    header('Location: pagina1.php');
    exit();
}
?>

</body>
</html>
