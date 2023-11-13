<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<body>
   
    <?php
    
    $nombre = "David";
    $edad = 21;

    if ($nombre == null) {
        echo "Hola desconocido";
    }elseif ($nombre !== null && $edad == null) {
        echo "Hola ". $nombre ." no se tu edad";
    }elseif($nombre !== null && $edad !== null){
        echo "Hola ". $nombre .",tienes ". $edad ." años";
    }
    
    ?>
    
</body>

</html>