

<?php

function error($mensaje) {
    return "<p>Error: $mensaje</p>";
}

function conectar() {
    $servername = "localhost";
    $username = "David";
    $password = "Par280502";
    $dbname = "hotel";
    $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname, $username, $password);
    return $conn;
}

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

function deletePorId($id) {
    try {
        $db = conectar();
        $sql = "DELETE FROM hoteles WHERE id = :id";
        $prepared_statement = $db->prepare($sql);
        $prepared_statement->bindParam(':id', $id, PDO::PARAM_INT);
        $result = $prepared_statement->execute();

        return $result;
    } catch (PDOException $e) {
        return error($e->getMessage());
    }
}

$idHotel = isset($_GET['id']) ? $_GET['id'] : null;

if ($idHotel) {
    $hotel = obtenerPorId($idHotel);

    if (is_array($hotel)) {
        $result = deletePorId($idHotel);

        if ($result === true) {
            echo "<p>Hotel eliminado correctamente: </p>";
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
            echo $result;
        }
    } else {
        echo $hotel; 
    }
} else {
    echo error("No se ha proporcionado un ID válido.");
}

?>

