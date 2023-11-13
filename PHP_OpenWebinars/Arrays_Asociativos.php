<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Asociativos</title>
</head>
<body>
<?php

//Arrays asociativos

$navegadores = array("navegador1" => "Chrome", "navegador2" => "Fire");

$datos = array("nombre"=>"David", "edad"=>21, 2=>10);

echo "Navegador 2:". $navegadores["navegador2"];
echo "<br>";
echo "Nombre: ". $datos["nombre"];
echo "<br>";
echo "datos 2: ". $datos[2];
echo "<br>";
var_dump($navegadores);
echo "<br>";
var_dump($datos);
?>
</body>
</html>