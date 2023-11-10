<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores  Lógicos</title>
</head>
<body>
<?php

$numero1 = 5;
$numero2 = 10;
$numero3 = 5;
$activo1 = true;
$activo2 = false;

if ($numero1 == 5 and $numero1 == $numero3) {
    echo "Dentro del if";
}

echo "<br>";

if ($numero1 == 5 or $numero1 == $numero2) {
    echo "Dentro del if 2";
}

echo "<br>";

//solo se tiene que cumplir una de las dos para que pueda entrar
if ($numero1 == 5 xor $numero1 == $numero3) {
    echo "Dentro del if 3";
}

echo "<br>";

//solo se tiene que cumplir una de las dos para que pueda entrar
if (!$activo1) {
    echo "Dentro del if 4";
}
?>
</body>
</html>