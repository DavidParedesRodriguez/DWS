<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
    <?php

    $tablaDel = 1;
    $contador = 1;

    for ($a = 1; $a <= 10; $a++) {
        echo "Tabla del " . $a;
        $variable = 1;
        $tablaDel = 1;

        while ($contador < 11) {
            
            echo "<br>";
            echo $a . " X " . $variable . " = " . ($a * $variable);
            $contador++;
            $variable++;
            
        }

        $contador = 1;
        echo "<br>";
        echo "<br>";
    }

    ?>
</body>

</html>