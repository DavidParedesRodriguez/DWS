<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
   
    <?php
    
    $nomina = 700;

    if ($nomina < 800) {
        $incremento = $nomina * 0.20;
        $nomina = $nomina + $incremento;
        echo "La nómina ha tenido un incremento del 20% por lo que se queda en ". $nomina ."€";
    }elseif ($nomina >= 800 and $nomina <=1200) {
        echo "La nómina se queda en ". $nomina ."€";
    }elseif ($nomina > 1200) {
        $incremento = $nomina * 0.15;
        $nomina = $nomina - $incremento;
        echo "La nómina ha tenido un decremento del 15% por lo que se queda en ". $nomina ."€";
    }
   

 
    
    ?>
    
</body>

</html>