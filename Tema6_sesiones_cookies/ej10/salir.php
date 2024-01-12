<?php
session_start();

// Verificar si hay una hora de entrada en la sesión
if (isset($_SESSION['hora_entrada'])) {
    // Calcular la hora actual y la hora de entrada
    $hora_entrada = strtotime($_SESSION['hora_entrada']);
    $hora_actual = strtotime(date("H:i:s"));

    // Calcular la diferencia en segundos
    $diferencia_segundos = $hora_actual - $hora_entrada;

    // Calcular las horas, minutos y segundos
    $horas = floor($diferencia_segundos / 3600);
    $minutos = floor(($diferencia_segundos % 3600) / 60);
    $segundos = $diferencia_segundos % 60;

    // Mostrar el tiempo transcurrido
    $tiempo_transcurrido = "$horas horas, $minutos minutos y $segundos segundos";

    // Limpiar la variable de sesión
    unset($_SESSION['hora_entrada']);
} else {
    // Si no hay hora de entrada, redirigir a tiempo.php
    header('Location: tiempo.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salir</title>
</head>
<body>

<h1>Gracias por visitarnos</h1>

<p>Ha estado accediendo durante: <?php echo $tiempo_transcurrido; ?></p>
<?php 
 echo '<a href="tiempo.php">Volver</a>';?>

</body>
</html>
