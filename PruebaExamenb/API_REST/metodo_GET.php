<?php
//http://localhost:3000/PruebaExamenb/API_REST/metodo_GET.php?opcion=listarJugadores



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

// Función para listar jugadores
function listarJugadores()
{
    $jugadores = array();
    try {
        $db = conectar();
        $sql = "SELECT * FROM jugador";
        $prepared_statement = $db->prepare($sql);
        $prepared_statement->execute();
        foreach ($prepared_statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $data = array(
                "id" => isset($row['id']) ? $row['id'] : null,
                "nombre" => isset($row['nombre']) ? $row['nombre'] : null,
                "posicion" => isset($row['posicion']) ? $row['posicion'] : null,
            );
            array_push($jugadores, $data);
        }

        // Devolver el resultado en formato JSON
        echo json_encode($jugadores);
    } catch (PDOException $e) {
        return error($e->getMessage());
    }
}

// Función para listar partidos
function listarPartidos()
{
    $partidos = array();
    try {
        $db = conectar();
        $sql = "SELECT * FROM partido";
        $prepared_statement = $db->prepare($sql);
        $prepared_statement->execute();
        foreach ($prepared_statement->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $data = array(
                "jornada" => isset($row['jornada']) ? $row['jornada'] : null,
                "jugador" => isset($row['jugador']) ? $row['jugador'] : null,
                "puntos" => isset($row['puntos']) ? $row['puntos'] : null,
            );
            array_push($partidos, $data);
        }

        // Devolver el resultado en formato JSON
        echo json_encode($partidos);
    } catch (PDOException $e) {
        return error($e->getMessage());
    }
}

// Obtener la opción de la URL
$opcion = isset($_GET['opcion']) ? $_GET['opcion'] : '';

// Utilizar un switch para determinar la acción
switch ($opcion) {
    case 'listarJugadores':
        listarJugadores();
        break;
    case 'listarPartidos':
        listarPartidos();
        break;
    default:
        // Devolver respuesta de error si no se ha especificado una opción válida
        echo error("No se ha especificado una opción válida");
        break;
}
?>
