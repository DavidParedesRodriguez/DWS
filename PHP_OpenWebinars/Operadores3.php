<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Comparacion</title>
</head>
<body>
<?php

$numero1 = 5;
$numero2 = 10;
$numero3 = 5;
$valor1 = "5";

if ($numero1 != $numero2) {
    echo "Numero1 y num2 son diferentes";
}
echo "<br>";

//para indicar si son iguales y del mismo tipo utilizamos el triple igual que es ===

if ($numero1 === $valor1) {
    echo "Son valores identicos";
}else{
    echo "No son valores identicos";
}
?>
</body>
</html>