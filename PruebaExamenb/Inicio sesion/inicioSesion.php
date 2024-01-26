<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
</head>

<body>

    <?php
    // Iniciar la sesión
    session_start();

    // Conexión a la base de datos
    try {
        $usuario_bd = 'admin';
        $password_bd = 'admin';
        $db = new PDO('mysql:host=localhost;dbname=examenb;charset=utf8', $usuario_bd, $password_bd);

        // Comprobar si se han enviado los datos del formulario
        if (isset($_POST["usuario"]) && isset($_POST["password"])) {

            // Obtener los datos del formulario
            $userpost = $_POST["usuario"];
            $passwordpost = $_POST["password"];

            // Consultar la base de datos para verificar las credenciales
            $sql = "SELECT * FROM usuario WHERE login = ? AND password = ?";
            $prepared_statement = $db->prepare($sql);
            $prepared_statement->execute([$userpost, $passwordpost]);

            // Verificar si existe el usuario
            if ($prepared_statement->rowCount() > 0) {
                // Credenciales válidas, iniciar sesión
                $_SESSION["usuario"] = $userpost;

                // Imprimir resultado
                echo '<p>Se ha iniciado sesión</p>';
                echo 'Usuario de la sesión: ' . $_SESSION["usuario"] . '<br>';

                echo '<a href="seleccionJugadores.php">Enlace selección jugadores</a>';
            } else {
                // Credenciales inválidas
                echo '<p>Error en inicio de sesión, usuario o contraseña no válidos</p>';
                echo '<a href="inicioSesion.html">Volver</a>';
            }
        } else {
            // Datos del formulario no enviados
            echo "<p>Error, introduce correctamente los datos</p>";
            echo '<a href="inicioSesion.html">Volver</a>';
        }
    } catch (PDOException $e) {
        echo 'Error de conexión a la base de datos: ' . $e->getMessage();
    }
    ?>

</body>

</html>
