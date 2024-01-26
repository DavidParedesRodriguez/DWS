<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccion de jugadores</title>
</head>

<body>

    <h1>Selecciona el jugador para tu equipo</h1>
    <form method="post" action="equipo.php">

        <?php

        //inicializamos la sesión
        session_start();

        echo 'Selecciona los jugadores:' . $_SESSION['usuario'] . '<br>';

        //Nos conectamos a la base de datos
        $usuario = 'admin';
        $password = 'admin';
        $db = new PDO('mysql:host=localhost;dbname=examenb;charset=utf8', $usuario, $password);

        try {
            //Jugador1 -> Ala-pivot
            $sql = "SELECT * FROM jugador WHERE posicion LIKE 'Ala-pívot'";
            $prepared_statement = $db->prepare($sql);
            $resultado = $prepared_statement->execute();

            echo ' <label for="alapivot">Jugador1 Ala-pívot </label>';
            echo '<select name="alapivot" id="alapivot">';
            while ($row = $prepared_statement->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['id'] . '" >' . htmlspecialchars($row['nombre']) . '</option>';
            }
            echo '</select>';
            echo '<br>';



            //Jugador2 ->  Escolta
            $sql = "SELECT * FROM jugador WHERE posicion LIKE 'Escolta'";
            $prepared_statement = $db->prepare($sql);
            $resultado = $prepared_statement->execute();

            echo ' <label for="escolta">Jugador2 Escolta </label>';
            echo '<select name="escolta" id="escolta">';
            while ($row = $prepared_statement->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['id'] . '" >' . '' . htmlspecialchars($row['nombre']) . '</option>';
            }
            echo '</select>';
            echo '<br>';



            //Jugador3 ->  Alero
            $sql = "SELECT * FROM jugador WHERE posicion LIKE 'Alero'";
            $prepared_statement = $db->prepare($sql);
            $resultado = $prepared_statement->execute();

            echo ' <label for="alero">Jugador3 Alero </label>';
            echo '<select name="alero" id="alero">';
            while ($row = $prepared_statement->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['id'] . '" >' . '' . htmlspecialchars($row['nombre']) . '</option>';
            }
            echo '</select>';
            echo '<br>';




            //Jugador4 ->  Base
            $sql = "SELECT * FROM jugador WHERE posicion LIKE 'Base'";
            $prepared_statement = $db->prepare($sql);
            $resultado = $prepared_statement->execute();

            echo ' <label for="base">Jugador4 Base </label>';
            echo '<select name="base" id="base">';
            while ($row = $prepared_statement->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['id'] . '" >' . '' . htmlspecialchars($row['nombre']) . '</option>';
            }
            echo '</select>';
            echo '<br>';


            
            //Jugador5 ->  Extremo
            $sql = "SELECT * FROM jugador WHERE posicion LIKE 'Pívot'";
            $prepared_statement = $db->prepare($sql);
            $resultado = $prepared_statement->execute();

            echo ' <label for="pivot">Jugador5 Pívot </label>';
            echo '<select name="pivot" id="pivot">';
            while ($row = $prepared_statement->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['id'] . '" >'. '' . htmlspecialchars($row['nombre']) . '</option>';
            }
            echo '</select>';
            echo '<br>';
        } catch (PDOException $e) {
            echo 'Error de conexión a la base de datos: ' . $e->getMessage();
        }
        ?>


        <input type="submit" value="Insertar equipo" value="insertarEquipo" id="insertarEquipo" name="insertarEquipo">
        <input type="reset" value="Resetear">

    </form>