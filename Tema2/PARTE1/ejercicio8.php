<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
   
    <?php
    
    const LIMITE = 700;
    $varaibleAleatoria = rand(1,LIMITE);

    if($varaibleAleatoria % 2 == 0){
        echo "El número aleatorio es ". $varaibleAleatoria ." y es par";
    }else{
        echo "El número aleatorio es ". $varaibleAleatoria ." y no es par";
    }
    

    
   

 
    
    ?>
    
</body>

</html>