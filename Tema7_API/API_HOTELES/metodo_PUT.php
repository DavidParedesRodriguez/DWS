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

// Verificar que se reciban los datos esperados
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    // Obtener datos del cuerpo de la solicitud
    $datos = json_decode(file_get_contents("php://input"), true);

    // Verificar que se hayan recibido datos válidos
    if ($datos && isset($datos["id"]) && isset($datos["nombre"]) && isset($datos["categoria"]) && isset($datos["numero_habitacion"]) && isset($datos["poblacion"]) && isset($datos["direccion"])) {
        // Obtener datos del formulario
        $id = $datos["id"];
        $nombre = $datos["nombre"];
        $categoria = $datos["categoria"];
        $numero_habitacion = $datos["numero_habitacion"];
        $poblacion = $datos["poblacion"];
        $direccion = $datos["direccion"];

        try {
            $db = conectar();

            // Verificar si el hotel con el ID proporcionado existe
            $existeHotel = $db->query("SELECT COUNT(*) FROM hoteles WHERE id = $id")->fetchColumn() > 0;

            if ($existeHotel) {
                // Preparar la consulta SQL
                $sql = "UPDATE hoteles SET nombre = :nombre, categoria = :categoria, numero_habitacion = :numero_habitacion, poblacion = :poblacion, direccion = :direccion WHERE id = :id";

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
            } else {
                // El hotel con el ID proporcionado no existe
                echo error("No se encontró el hotel con ID: $id");
            }
        } catch (PDOException $e) {
            echo error("Error al actualizar el hotel: " . $e->getMessage());
        }
    } else {
        // Si no se reciben los datos esperados, devolver un mensaje de error
        echo error("Datos incompletos o incorrectos para la actualización del hotel.");
    }
} else {
    // Si la solicitud no es de tipo PUT, devolver un mensaje de error
    echo error("Solicitud no válida. Se espera una solicitud PUT.");
}


/*En postman, en la URL, metodo PUT, ponemos: http://localhost:3000/Tema7_API/API_HOTELES/metodo_PUT.php?id=9

En body, en formato 'raw' seleccionando el formato JSONescribimos los datos del cuerpo:
    
    ej:
    {
        "id": 9,
        "nombre": "paco paquito",
        "categoria": 5,
        "numero_habitacion": "500",
        "poblacion": "Pamplona",
        "direccion": "Pamplona"
    }*/
?>


