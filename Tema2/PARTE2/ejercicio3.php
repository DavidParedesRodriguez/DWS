<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php

echo "Los primeros 5 números pares: ";
echo "<br>";
    $numPar = 2;
    for ($i = 0; $i < 9; $i++) {
        
        if ($numPar % 2 == 0) {
            echo $numPar;
            echo "<br>";
        }

        $numPar++;
    }
    ?>
</body>

</html>