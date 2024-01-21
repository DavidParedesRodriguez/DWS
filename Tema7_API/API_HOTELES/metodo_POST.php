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

// Verificar que se reciban los datos esperados en el cuerpo JSON
$input = json_decode(file_get_contents('php://input'), true);

if (
    isset($input["nombre"]) &&
    isset($input["categoria"]) &&
    isset($input["numero_habitacion"]) &&
    isset($input["poblacion"]) &&
    isset($input["direccion"])
) {
    // Obtener datos del cuerpo JSON
    $nombre = $input["nombre"];
    $categoria = $input["categoria"];
    $numero_habitacion = $input["numero_habitacion"];
    $poblacion = $input["poblacion"];
    $direccion = $input["direccion"];

    try {
        $db = conectar();

        // Verificar si el ID ya existe en la tabla
        $verificar_id = "SELECT COUNT(*) FROM hoteles WHERE id = :id";
        $stmt_verificar = $db->prepare($verificar_id);
        $stmt_verificar->bindParam(':id', $input["id"], PDO::PARAM_INT);
        $stmt_verificar->execute();
        $id_existente = $stmt_verificar->fetchColumn();

        if ($id_existente) {
            echo error("El ID ya existe en la tabla. Por favor, elige un ID diferente.");
        } else {
            // Preparar la consulta SQL
            $sql = "INSERT INTO hoteles (id, nombre, categoria, numero_habitacion, poblacion, direccion) 
            VALUES (:id, :nombre, :categoria, :numero_habitacion, :poblacion, :direccion)";

            $prepared_statement = $db->prepare($sql);

            // Asociar parámetros
            $prepared_statement->bindParam(':id', $input["id"], PDO::PARAM_INT);
            $prepared_statement->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $prepared_statement->bindParam(':categoria', $categoria, PDO::PARAM_INT);
            $prepared_statement->bindParam(':numero_habitacion', $numero_habitacion, PDO::PARAM_INT);
            $prepared_statement->bindParam(':poblacion', $poblacion, PDO::PARAM_STR);
            $prepared_statement->bindParam(':direccion', $direccion, PDO::PARAM_STR);

            // Ejecutar la consulta
            $result = $prepared_statement->execute();

            if ($result) {
                // Si la inserción fue exitosa, devolver un mensaje de éxito
                echo json_encode(array("tipo" => "success", "msj" => "Hotel insertado correctamente."));
            } else {
                echo error("Error al insertar el hotel: " . $prepared_statement->errorInfo()[2]);
            }
        }
    } catch (PDOException $e) {
        echo error("Error al insertar el hotel: " . $e->getMessage());
    }
} else {
    // Si no se reciben los datos esperados en el cuerpo JSON, devolver un mensaje de error
    echo error("Datos incompletos o incorrectos para la inserción del hotel.");
}

?>

