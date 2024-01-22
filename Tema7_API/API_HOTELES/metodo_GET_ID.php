
<?php

// Función para gestionar los errores y devolver un mensaje
function error($mensaje) {
    return "<p>Error: $mensaje</p>";
}

// Función para la conexión a la base de datos
function conectar() {
    $usuario = "root";
    $password = "root";
    $db = new PDO('mysql:host=localhost;dbname=hotel', $usuario, $password);
    return $db;
}

// Función para obtener un hotel por su ID
function obtenerPorId($id) {
    try {
        $db = conectar();
        $sql = "SELECT * FROM hoteles WHERE id = :id";
        $prepared_statement = $db->prepare($sql);
        $prepared_statement->bindParam(':id', $id, PDO::PARAM_INT);
        $prepared_statement->execute();
        $row = $prepared_statement->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $hotel = array(
                "id" => isset($row['id']) ? $row['id'] : null,
                "nombre" => isset($row['nombre']) ? $row['nombre'] : null,
                "categoria" => isset($row['categoria']) ? $row['categoria'] : null,
                "numero_habitacion" => isset($row['numero_habitacion']) ? $row['numero_habitacion'] : null,
                "poblacion" => isset($row['poblacion']) ? $row['poblacion'] : null,
                "direccion" => isset($row['direccion']) ? $row['direccion'] : null,
            );
            return $hotel;
        } else {
            return error("No se encontró el hotel con ID: $id");
        }
    } catch (PDOException $e) {
        return error($e->getMessage());
    }
}

// Obtener el ID desde la URL
$idHotel = isset($_GET['id']) ? $_GET['id'] : null;

// Mostrar el detalle del hotel por ID
if ($idHotel) {
    $hotel = obtenerPorId($idHotel);

    if (is_array($hotel)) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Categoría</th>";
        echo "<th>Número de Habitación</th>";
        echo "<th>Población</th>";
        echo "<th>Dirección</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>{$hotel['id']}</td>";
        echo "<td>{$hotel['nombre']}</td>";
        echo "<td>{$hotel['categoria']}</td>";
        echo "<td>{$hotel['numero_habitacion']}</td>";
        echo "<td>{$hotel['poblacion']}</td>";
        echo "<td>{$hotel['direccion']}</td>";
        echo "</tr>";

        echo "</table>";
    } else {
        echo $hotel; // Mostrar mensaje de error
    }
} else {
    echo error("No se ha proporcionado un ID válido.");
}

?>


