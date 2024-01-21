<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método GET</title>
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
    $usuario = "root";
    $password = "root";
    $db = new PDO('mysql:host=localhost;dbname=nba', $usuario, $password);
    return $db;
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
    $jugadores = array();
    try {
        $db = conectar();
        // Tenemos que ponerle un alias al campo Nombre de la tabla equipo
        // para que no se confunda con el campo Nombre del jugador
        $sql = "SELECT j.*, e.Ciudad, e.Conferencia, e.Division, e.Nombre AS Nombre_equipo 
                FROM `jugadores` AS j 
                INNER JOIN equipos AS e ON j.ID_equipo=e.id";
        $prepared_statement = $db->prepare($sql);
        $prepared_statement->execute();
        foreach ($prepared_statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $data = array(
                "id" => $row['id'],
                "nombre" => $row['Nombre'],
                "anyo_inicio" => $row['Anyo_Inicio'],
                "anyo_fin" => $row['Anyo_Fin'],
                "posicion" => $row['Posicion'],
                "altura" => $row['Altura'],
                "peso" => $row['Peso'],
                "nacimiento" => $row['Nacimiento'],
                "procedencia" => $row['Procedencia'],
                "equipo" => array(
                    "id" => $row['ID_equipo'],
                    "nombre" => $row['Nombre_equipo'],
                    "ciudad" => $row['Ciudad'],
                    "conferencia" => $row['Conferencia'],
                    "division" => $row['Division'],
                ),
                "url" => url("/apirest/index.php?opcion=obtener&id=" . $row['id'])
            );
            array_push($jugadores, $data);
        }
    } catch (PDOException $e) {
        return error($e->getMessage());
    }
    return $jugadores;
}

// Función para obtener un único elemento por su id
function obtener($id) {
    $jugador = array();
    try {
        $db = conectar();
        $sql = "SELECT j.*, e.Ciudad, e.Conferencia, e.Division,
                e.Nombre AS Nombre_equipo FROM `jugadores` AS j 
                INNER JOIN equipos AS e ON j.ID_equipo=e.id 
                WHERE j.id=:id";
        $prepared_statement = $db->prepare($sql);
        $prepared_statement->bindParam(':id', $id, PDO::PARAM_INT);
        $prepared_statement->execute();
        foreach ($prepared_statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $jugador = array(
                "id" => $row['id'],
                "nombre" => $row['Nombre'],
                "anyo_inicio" => $row['Anyo_Inicio'],
                "anyo_fin" => $row['Anyo_Fin'],
                "posicion" => $row['Posicion'],
                "altura" => $row['Altura'],
                "peso" => $row['Peso'],
                "nacimiento" => $row['Nacimiento'],
                "procedencia" => $row['Procedencia'],
                "equipo" => array(
                    "id" => $row['ID_equipo'],
                    "nombre" => $row['Nombre_equipo'],
                    "ciudad" => $row['Ciudad'],
                    "conferencia" => $row['Conferencia'],
                    "division" => $row['Division'],
                ),
                "url" => url("/apirest/index.php?opcion=obtener&id=" . $row['id'])
            );
        }
    } catch (PDOException $e) {
        return error($e->getMessage());
    }
    return $jugador;
}

// Redireccionar según la opción especificada en la URL
if ($_GET['opcion'] == 'listar') {
    echo json_encode(listar());
} elseif ($_GET['opcion'] == 'obtener') {
    echo json_encode(obtener($_GET["id"]));
} else {
    echo json_encode(error("No se ha especificado parametro"));
}

?>


</body>
</html>