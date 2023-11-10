<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />

  <title>Document</title>
</head>

<body>
  <?php

  //Variables
  $edad = 21;
  $estatura = 1.71;
  $nombre = "David Paredes";
  $frase = "David tiene $edad años";
  $profesor = false;

  echo $edad;
  echo "<br>"; //salto de linea
  echo $estatura;
  echo "<br>";
  echo "Tu nombre es " . $nombre; //concatenar
  echo "<br>";
  echo json_encode($profesor);

  #$6edad = "hola";



  ?>
</body>

</html>