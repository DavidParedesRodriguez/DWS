<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    
<h2>Resultado de la Multiplicación</h2>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    if (is_numeric($numero1) && is_numeric($numero2)) {

        $resultado = $numero1 * $numero2;

        echo "<p>El resutado de multiplicar $numero1 por $numero2 es: $resultado</p>";
    }else{

        echo "<p>Tienes que introducir valores númericos</p>";
    }

}else{

    echo "<p>No se han proporcionado datos.</p>";
}
?>


</form>
</body>
</html>