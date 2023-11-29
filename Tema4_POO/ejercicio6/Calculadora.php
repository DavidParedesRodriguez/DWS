<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<h2>Calculadora</h2>

<body>
    <?php
    /*Modifica el ejercicio anterior para que el primero de los números sea una
propiedad de la clase Calculadora y valga siempre 8.

*/

    class Calculadora{

        public static $numero1 = 8;

        public static function sumar($numero2){
            return self::$numero1 + $numero2;
        }

        public static function restar($numero2){
            return self::$numero1 - $numero2;
        }

        public static function multiplicar($numero2){
            return self::$numero1 * $numero2;
        }

        public static function dividir($numero2){
            return self::$numero1 / $numero2;
        }

        
    }

   
    $numero2 = 10;
    $resultado = Calculadora::sumar($numero2);
    echo "El resultado de la suma entre ". Calculadora::$numero1 ." y " . $numero2 ." es  " . $resultado ."<br>";

    $resultado = Calculadora::restar($numero2);
    echo "El resultado de la resta entre ". Calculadora::$numero1 ." y " . $numero2 ." es  " . $resultado ."<br>";

    $resultado = Calculadora::dividir($numero2);
    echo "El resultado de la división entre ". Calculadora::$numero1 ." y " . $numero2 ." es  " . $resultado ."<br>";

    $resultado = Calculadora::multiplicar($numero2);
    echo "El resultado de la multiplicación entre ". Calculadora::$numero1 ." y " . $numero2 ." es  " . $resultado ."<br>";

    ?>
</body>

</html>