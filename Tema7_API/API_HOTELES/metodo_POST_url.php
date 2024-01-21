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

// Verificar que se reciban los datos esperados desde la URL
if (
    isset($_GET["nombre"]) &&
    isset($_GET["categoria"]) &&
    isset($_GET["numero_habitacion"]) &&
    isset($_GET["poblacion"]) &&
    isset($_GET["direccion"])
) {
    // Obtener datos de la URL
    $nombre = $_GET["nombre"];
    $categoria = $_GET["categoria"];
    $numero_habitacion = $_GET["numero_habitacion"];
    $poblacion = $_GET["poblacion"];
    $direccion = $_GET["direccion"];

    try {
        $db = conectar();

        // Preparar la consulta SQL
        $sql = "INSERT INTO hoteles (nombre, categoria, numero_habitacion, poblacion, direccion) 
        VALUES (:nombre, :categoria, :numero_habitacion, :poblacion, :direccion)";

        $prepared_statement = $db->prepare($sql);

        // Asociar parámetros
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
    } catch (PDOException $e) {
        echo error("Error al insertar el hotel: " . $e->getMessage());
    }
} else {
    // Si no se reciben los datos esperados desde la URL, devolver un mensaje de error
    echo error("Datos incompletos o incorrectos para la inserción del hotel.");
}


/*poner en la url:http://localhost:3000/Tema7_API/API_HOTELES/metodo_POST.php?nombre=Canarias%20H&categoria=5&
numero_habitacion=100&poblacion=Fuerte%20Ventura&direccion=Fuerte%20Ventura%20calle%201
*/
?>
