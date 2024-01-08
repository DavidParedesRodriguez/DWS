<?php 
if ( isset( $_COOKIE[ 'visitas' ] ) ) {

    setcookie( 'visitas', $_COOKIE[ 'visitas' ] + 1, time() + 3600 * 24 );
    $mensaje = 'Numero de visitas: '.$_COOKIE[ 'visitas' ];
}
else {

    setcookie( 'visitas', 1, time() + 3600 * 24 );
    $mensaje = 'Bienvenido por primera vez a nuesta web';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <p><?php echo $mensaje ?></p>
</head>
<body>
    
</body>
</html>