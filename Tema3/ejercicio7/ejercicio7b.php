<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7b</title>
</head>
<body>

<h2>Datos Recogidos</h2>

<?php
// Función para recoger y limpiar los datos
function recoge($var)
{
    $tmp = (isset($_REQUEST[$var])) ? strip_tags(trim(htmlspecialchars($_REQUEST[$var]))) : '';
    return $tmp;
}

// Recoger los datos
$nombre = recoge('nombre');
$sexo = recoge('sexo');
$edad = recoge('edad');
$peso = recoge('peso');
$estadoCivil = recoge('estadoCivil');
$aficiones = isset($_REQUEST['aficiones']) ? $_REQUEST['aficiones'] : array();

// Verificar si el nombre tiene valor
echo "<lu>";
if (!empty($nombre)) {
    echo "<li>NOMBRE: $nombre</li>";
} else {
    echo "<p>El nombre está vacío.</p>";
}

// Mostrar el resto de los datos

echo "<li>SEXO: $sexo</li>";
echo "<li>EDAD: $edad</li>";
echo "<li>PESO: $peso kg</li>";
echo "<li>ESTADOCIVIL: $estadoCivil</li>";

echo "<li>Aficiones:";
if (!empty($aficiones)) {
    
    foreach ($aficiones as $aficion) {
        echo " ".$aficion . "</li>";
    }
    
} else {
    echo "No se seleccionaron aficiones.</li>";
}

echo "</lu>";

echo '<br>';
echo '<form action="ejercicio7a.html" method="get">';
echo '<input type="submit" value="Volver">';
echo '</form>';
?>

</body>
</html>