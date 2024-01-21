<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Hoteles</title>
</head>
<body>

<?php

// Establecer la salida del servicio web en formato JSON
header('Content-Type: application/json');

// Función para gestionar los errores y devolver un JSON
function error($mensaje) {
    $respuesta = array(
        "tipo" => "error",
        "msj" => $mensaje
    );
    return $respuesta;
}

// Función para la conexión a la base de datos
function conectar() {
    $servername = "localhost";
    $username = "David";
    $password = "Par280502";
    $dbname = "hotel";
    $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
    return $conn;
}

// Función para generar la URL completa
function url($segmento) {
    if (isset($_SERVER['HTTPS'])) {
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    } else {
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $segmento;
}

// Función para listar todos los datos de la base de datos
function listar() {
    $hoteles = array();
    try {
        $db = conectar();
        $sql = "SELECT * FROM hoteles";
        $prepared_statement = $db->prepare($sql);
        $prepared_statement->execute();
        foreach ($prepared_statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $data = array(
                "id" => isset($row['id']) ? $row['id'] : null,
                "nombre" => isset($row['nombre']) ? $row['nombre'] : null,
                "categoria" => isset($row['categoria']) ? $row['categoria'] : null,
                "numero_habitacion" => isset($row['numero_habitacion']) ? $row['numero_habitacion'] : null,
                "poblacion" => isset($row['poblacion']) ? $row['poblacion'] : null,
                "direccion" => isset($row['direccion']) ? $row['direccion'] : null,
            );
            array_push($hoteles, $data);
        }
    } catch (PDOException $e) {
        return error($e->getMessage());
    }
    return $hoteles;
}

// Redireccionar según la opción especificada en la URL
if (isset($_GET['opcion'])) {
    if ($_GET['opcion'] == 'listar') {
        echo json_encode(listar());
    } else {
        echo json_encode(error("Opción no válida"));
    }
} else {
    echo json_encode(error("No se ha especificado la opción"));
}

?>

</body>
</html>
