<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
    $recordar = isset($_POST['recordar']) ? true : false;

    if ($recordar) {
        // Si se marcó la opción de recordar, establecer la cookie con la dirección de correo
        $duracion = time() + (30 * 24 * 60 * 60); // 30 días de duración
        setcookie('correo', $correo, $duracion, "/");
    }else{
        // Si no se marcó la opción de recordar, eliminar la cookie
        setcookie('correo', '', time() - 3600, "/");
    }

    // Redirigir a una página que mostrará la dirección de correo
    header('Location: mostrar_correo.php');
    exit();
} else {
    // Si no se ha enviado el formulario, redirigir a la página principal
    header('Location: index.php');
    exit();
}
?>
