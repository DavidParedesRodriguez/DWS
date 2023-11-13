<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Predefinidas</title>
</head>
<body>
<?php

//predefinidas

$numero = 33;

echo "Nombre del servidor es ". $_SERVER['SERVER_NAME'];
echo "<br>";
echo "Software del servidor ". $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo "Puerto del servidor ". $_SERVER['SERVER_PORT'];
echo "<br>";
//PARA ALMACENAR TODAS LAS VARIABLES UTILIZAMOS:
echo "La variable número es ". $GLOBALS['numero'];
/*entre las llaves indicamos a que variable nos referimos para eso ponemos el 
nombre de la variable que queremos llamar
*/
?>
</body>
</html>