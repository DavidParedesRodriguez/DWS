<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aviso de Cookies</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        #cookie-banner {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 20px;
            background-color: #f0f0f0;
            text-align: center;
            display: <?php echo isset($_COOKIE['cookie_accepted']) ? 'none' : 'block'; ?>;
        }

        #cookie-banner button {
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #cookie-banner a {
            color: #4caf50;
            text-decoration: none;
            margin-top: 10px;
            display: block;
        }
    </style>
</head>
<body>

<div id="cookie-banner">
    <p>COOKIES</p>
    <button onclick="acceptCookies()">Aceptar</button>
    <a href="mensaje_cookies.php">Más información</a>
</div>


<script>
    function acceptCookies() {
        // Establecer una cookie para indicar que el usuario ha aceptado las cookies
        document.cookie = "cookie_accepted=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
        // Ocultar el banner de cookies
        document.getElementById('cookie-banner').style.display = 'none';
    }
</script>

</body>
</html>
