<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
</head>
<body>
    <?php 
    session_start();
    if(isset($_SESSION["usuario"])){
        echo "<p>Hola! " .$_SESSION["usuario"]. "</p>";
        echo '<a href="pagina1.html">Volver</a>';
    }else{
        echo "<p>Error, no puedes entrar sin permiso en este espacio</p>";
        echo '<a href="pagina1.html">Volver</a>';
    }
    ?>
</body>
</html>