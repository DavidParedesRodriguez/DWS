<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de API de Marvel</title>
</head>
<body>
    <?php
    // URL de la API
    $api_url = 'https://gateway.marvel.com:443/v1/public/characters?apikey=a020ce7d08119889a71cafc466d8f631&ts=1&hash=a129c8c5e95fd08289a4e463b78b7ab6';

    // Realizar la consulta a la API
    $response = file_get_contents($api_url);

    // Decodificar el JSON de la respuesta
    $data = json_decode($response, true);

    // Verificar si hay datos en la respuesta
    if ($data) {
        // Obtener la lista de personajes
        $characters = $data['data']['results'];

        // Mostrar los resultados en una tabla
        echo '<table border="2">';
        echo '<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Modificado</th><th>Imagen</th></tr>';
        
        foreach ($characters as $character) {
            echo '<tr>';
            echo '<td>' . $character['id'] . '</td>';
            echo '<td>' . $character['name'] . '</td>';
            echo '<td>' . $character['description'] . '</td>';
            echo '<td>' . $character['modified'] . '</td>';
            echo '<td><img src="' . $character['thumbnail']['path'] . '.' . $character['thumbnail']['extension'] . '" alt="Imagen"></td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'Error al consultar la API o datos no disponibles.';
    }
    ?>
</body>
</html>


