<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// URL de la API
$api_url = 'https://gateway.marvel.com:443/v1/public/characters?apikey=a020ce7d08119889a71cafc466d8f631&ts=1&hash=a129c8c5e95fd08289a4e463b78b7ab6';
// Realizar la consulta a la API
$response = file_get_contents($api_url);

// Decodificar el JSON de la respuesta
$data = json_decode($response, true);

// Verificar si la consulta fue exitosa
if ($data) {
    // Obtener la lista de mutantes
    $valor = $data['value'];
    $actualizacion = $data['updated_at'];

    // Mostrar los resultados en una tabla
    echo $valor.' ultima actualización: '.$actualizacion;
} else {
    echo 'Error al consultar la API.';
} 
?>
</body>
</html>