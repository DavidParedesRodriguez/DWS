<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    if(isset($_POST["usuario"]) && isset($_POST["contraseña"])){
        $_SESSION["usuario"] = $_POST["usuario"];
        echo '<a href="pagina3.php">Mostrar datos</a>';

    }elseif(!isset($_SESSION["usuario"])){
        echo "<p>Error, no puedes entrar sin permiso en este espacio</p>";
        echo '<a href="pagina1.html">Volver</a>';
    }
    ?>
</body>
</html>