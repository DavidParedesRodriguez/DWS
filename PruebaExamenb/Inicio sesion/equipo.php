<?php
if (isset($_POST['insertarEquipo'])) {

    $alapivot = $_POST['alapivot'];
    $escolta = $_POST['escolta'];
    $alero = $_POST['alero'];
    $base = $_POST['base'];
    $pivot = $_POST['pivot'];

    //inicializar la sesión
    session_start();
    $usuarioBaloncesto = $_SESSION['usuario'];


    try {
        // Nos conectamos a la base de datos
        $usuario = 'admin';
        $password = 'admin';
        $db = new PDO('mysql:host=localhost;dbname=examenb;charset=utf8', $usuario, $password);

        // Definimos un array con los jugadores
        $jugadores = [$alapivot, $escolta, $alero, $base, $pivot];

        // Construimos la consulta preparada
        $sql = "SELECT SUM(puntos) FROM partido WHERE jugador IN (?, ?, ?, ?, ?)";
        $prepared_statement = $db->prepare($sql);
        $prepared_statement->execute($jugadores);

        while ($row = $prepared_statement->fetch(PDO::FETCH_ASSOC)) {
            echo '<p>' . htmlspecialchars($row['SUM(puntos)']) . '</p>';
            $sumapuntos = $row['SUM(puntos)'];
            echo '<p>' . $sumapuntos . '</p>';
        }

        $resultados = $prepared_statement->fetchAll(PDO::FETCH_ASSOC);

        $json_resultados = json_encode($resultados);

        echo $json_resultados;

        // INSERTAR JUGADORES
        $sql = "UPDATE equipo SET jugador1 = ?, jugador2= ?, jugador3 = ?, jugador4 = ?, jugador5 = ? WHERE usuario = ?";
        $prepared_statement = $db->prepare($sql);
        $resultado = $prepared_statement->execute([$alapivot, $escolta, $alero, $base, $pivot, $usuarioBaloncesto]);

        if ($resultado) {
            $resultado2 = $prepared_statement->rowCount();
            if ($resultado2 == 0) {
                $respuesta = array("mensaje" => "Error en usuario");
            } else {
                $respuesta = array("mensaje" => "Actualizacion de jugadores existosa");
            }
        } else {
            $respuesta = array("mensaje" => "Error en la actualizacion");
        }
        $json_resultados = json_encode($respuesta);

        echo $json_resultados;
    } catch (PDOException $e) {
        echo 'Error al actualizar jugadores' . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserccion equipo</title>
</head>

<body>

</body>

</html>