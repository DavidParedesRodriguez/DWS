<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $confirmarPassword = $_POST["confirmar_password"];
    $bloqueado = isset($_POST["bloqueado"]) ? $_POST["bloqueado"] : "no";
    $departamento = $_POST["departamento"];

    // Validación simple (puedes mejorarla según tus necesidades)
    $errores = array();

    if (empty($nombre)) {
        $errores[] = "ERROR. Debe introducir un nombre válido";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "ERROR. Debe introducir un email válido";
    }

    if (empty($usuario)) {
        $errores[] = "ERROR. Debe introducir un usuario válido";
    }

    if (empty($password)) {
        $errores[] = "ERROR. Debe introducir una contraseña válida";
    }

    if ($password !== $confirmarPassword) {
        $errores[] = "ERROR. Las contraseñas no coinciden";
    }

    // Procesamiento adicional (puedes adaptarlo según tus necesidades)
    if (empty($errores)) {
        // Mostrar el resultado
        echo "Los datos se han procesado correctamente:<br>";
        echo "Nombre: $nombre<br>";
        echo "Email: $email<br>";
        echo "Usuario: $usuario<br>";

        // Mostrar si el usuario está bloqueado o no
        echo "El usuario ";
        echo $bloqueado == "si" ? "está bloqueado" : "no está bloqueado";
        echo "<br>";

        // Mostrar el departamento seleccionado
        if (!empty($departamento)) {
            echo "Departamento: " . implode(", ", $departamento);
        } else {
            echo "No se ha seleccionado un departamento.";
        }

        // Mover la imagen al directorio "uploads"
        $directorio_destino = "uploads/";
        $ruta_destino = $directorio_destino . basename($_FILES["foto"]["name"]);

        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $ruta_destino)) {
            echo "<br>Imagen subida:<br>";
            echo '<img src="' . $ruta_destino . '" alt="Imagen">';
        } else {
            echo "Error al mover la imagen.";
        }
    } else {
        // Mostrar errores al usuario
        echo "Se encontraron los siguientes errores:<br>" . implode("<br>", $errores);
    }
} else {
    // Redireccionar a la página del formulario si se intenta acceder directamente a este archivo
    header("Location: ejercicio10a.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Formulario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .resultado {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f2f2f2;
        }

        .error {
            color: red;
            font-weight: 600;
        }
    </style>
</head>


</html>