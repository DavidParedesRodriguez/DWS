<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <?php

   /* for ($i=5; $i<15; $i++) {
echo $i."<br>";
}*/

echo "con el bucle for";
for ($i=5; $i <= 100 ; $i+=5) { 
   echo $i;
   echo "<br>";
}
echo "<br>";

echo "Con el bucle while";
echo "<br>";
$a = 5;
while ($a <= 100) {
    echo $a;
    echo "<br>";
    $a+=5;
}

echo "<br>";

echo "Con el bucle do-while";
echo "<br>";
$b = 5;

do {
    echo $b;
    $b+=5;
    echo "<br>";
} while ($b <= 100);
    ?>
</body>

</html>