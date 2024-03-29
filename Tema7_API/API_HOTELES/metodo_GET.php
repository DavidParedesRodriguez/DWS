

<?php

// Establecer la salida del servicio web en formato JSON
header('Content-Type: application/json');

// Función para gestionar los errores y devolver un JSON
function error($mensaje)
{
    $respuesta = array(
        "tipo" => "error",
        "msj" => $mensaje
    );
    return $respuesta;
}

// Función para la conexión a la base de datos
function conectar()
{
    $servername = "localhost";
    $username = "David";
    $password = "Par280502";
    $dbname = "hotel";
    $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
    return $conn;
}

// Función para generar la URL completa
function url($segmento)
{
    if (isset($_SERVER['HTTPS'])) {
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    } else {
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] . $segmento;
}

// Función para listar todos los datos de la base de datos
function listar()
{
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

        // Devolver el resultado en formato JSON
        echo json_encode($hoteles);
    } catch (PDOException $e) {
        return error($e->getMessage());
    }
    return $hoteles;
}

// Obtener la opción de la URL
$opcion = isset($_GET['opcion']) ? $_GET['opcion'] : '';

// Utilizar un switch para determinar la acción
switch ($opcion) {
    case 'listar':
        listar();
        break;
    default:
        // Devolver respuesta de error si no se ha especificado una opción válida
        echo error("No se ha especificado una opción válida");
        break;
}
//como creamos un archivo por cada método no hace falta redireccionar, llama directamente en la url el nombre del archivo
// Redireccionar según la opción especificada en la URL
/*
if (isset($_GET['opcion'])) {
    if ($_GET['opcion'] == 'listar') {
        echo json_encode(listar());
    } else {
        echo json_encode(error("Opción no válida"));
    }
} else {
    echo json_encode(error("No se ha especificado la opción"));
}
*/
?>


