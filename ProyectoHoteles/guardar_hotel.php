<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $nombre = $_POST["nombre"];
    $categoria = $_POST["categoria"];
    $numero_habitacion = $_POST["numero_habitacion"];
    $poblacion = $_POST["poblacion"];
    $direccion = $_POST["direccion"];

   
    $nuevoHotel = [
        $nombre,
        $categoria,
        $numero_habitacion,
        $poblacion,
        $direccion
    ];

    
    $contenidoCSV = file_exists('hoteles.csv') ? file_get_contents('hoteles.csv') : '';

    $contenidoCSV .= implode(',', $nuevoHotel) . PHP_EOL;

    file_put_contents('hoteles.csv', $contenidoCSV);

    header('Location: formulario.php?exito=1');
    exit();
} else {
    header('Location: formulario.php?error=1');
    exit();
}
?>

