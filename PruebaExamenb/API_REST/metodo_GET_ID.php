<?php
//http://localhost:3000/PruebaExamenb/API_REST/metodo_GET_ID.php?id=1

// Establecer la salida del servicio web en formato JSON
header('Content-Type: application/json');

// Función para gestionar los errores y devolver un JSON
function error($mensaje)
{
    $respuesta = array(
        "tipo" => "error",
        "msj" => $mensaje
    );
    echo json_encode($respuesta);
    exit;
}

// Función para la conexión a la base de datos
function conectar()
{
    $servername = "localhost";
    $username = "admin"; 
    $password = "admin"; 
    $dbname = "examenb";
    $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
    return $conn;
}

// Función para listar un jugador por ID
function listarJugadorPorID($id)
{
    $jugador = array();
    try {
        $db = conectar();
        $sql = "SELECT * FROM jugador WHERE id = :id";
        $prepared_statement = $db->prepare($sql);
        $prepared_statement->bindParam(':id', $id, PDO::PARAM_INT);
        $prepared_statement->execute();
        $row = $prepared_statement->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $jugador = array(
                "id" => isset($row['id']) ? $row['id'] : null,
                "nombre" => isset($row['nombre']) ? $row['nombre'] : null,
                "posicion" => isset($row['posicion']) ? $row['posicion'] : null,
            );

            // Devolver el resultado en formato JSON
            echo json_encode($jugador);
        } else {
            echo error("Jugador no encontrado");
        }
    } catch (PDOException $e) {
        return error($e->getMessage());
    }
}

// Obtener la opción de la URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Validar que el ID sea un número entero positivo
if (!ctype_digit($id) || $id <= 0) {
    echo error("ID de jugador no válido");
    exit;
}

// Utilizar la función para listar un jugador por ID
listarJugadorPorID($id);
?>
