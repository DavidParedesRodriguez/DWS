<?php

// Establecer la salida del servicio web en formato JSON
header('Content-Type: application/json');

function error($mensaje) {
    return json_encode(array("tipo" => "error", "msj" => $mensaje));
}

function conectar() {
    $servername = "localhost";
    $username = "David";
    $password = "Par280502";
    $dbname = "hotel";
    $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
    return $conn;
}

if ($_SERVER["REQUEST_METHOD"] == "PUT" && isset($_GET["id"])) {
    // Obtener datos de la URL
    $id = $_GET["id"];
    $nombre = isset($_GET["nombre"]) ? $_GET["nombre"] : null;
    $categoria = isset($_GET["categoria"]) ? $_GET["categoria"] : null;
    $numero_habitacion = isset($_GET["numero_habitacion"]) ? $_GET["numero_habitacion"] : null;
    $poblacion = isset($_GET["poblacion"]) ? $_GET["poblacion"] : null;
    $direccion = isset($_GET["direccion"]) ? $_GET["direccion"] : null;

    try {
        $db = conectar();

        // Preparar la consulta SQL
        $sql = "UPDATE hoteles 
                SET nombre = :nombre, categoria = :categoria, numero_habitacion = :numero_habitacion,
                    poblacion = :poblacion, direccion = :direccion 
                WHERE id = :id";

        $prepared_statement = $db->prepare($sql);

        // Asociar parámetros
        $prepared_statement->bindParam(':id', $id, PDO::PARAM_INT);
        $prepared_statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $prepared_statement->bindParam(':categoria', $categoria, PDO::PARAM_INT);
        $prepared_statement->bindParam(':numero_habitacion', $numero_habitacion, PDO::PARAM_INT);
        $prepared_statement->bindParam(':poblacion', $poblacion, PDO::PARAM_STR);
        $prepared_statement->bindParam(':direccion', $direccion, PDO::PARAM_STR);

        // Ejecutar la consulta
        $result = $prepared_statement->execute();

        if ($result) {
            // Si la actualización fue exitosa, devolver un mensaje de éxito
            echo json_encode(array("tipo" => "success", "msj" => "Hotel actualizado correctamente."));
        } else {
            echo error("Error al actualizar el hotel: " . $prepared_statement->errorInfo()[2]);
        }
    } catch (PDOException $e) {
        echo error("Error al actualizar el hotel: " . $e->getMessage());
    }
} else {
    // Si no se reciben los datos esperados, devolver un mensaje de error
    echo error("Datos incompletos o incorrectos para la actualización del hotel.");
}

?>
