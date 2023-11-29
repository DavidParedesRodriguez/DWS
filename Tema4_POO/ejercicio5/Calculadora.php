<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<h2>Calculadora</h2>

<body>
    <?php
    /*Plantea una clase Calculadora que contenga cuatro métodos estáticos
(sumar(), restar(), multiplicar() y dividir()) estos métodos reciben dos
valores y calcularán la operación asociada.

*/

    class Calculadora{

        public static function sumar($numero1, $numero2){
            return $numero1 + $numero2;
        }

        public static function restar($numero1, $numero2){
            return $numero1 - $numero2;
        }

        public static function multiplicar($numero1, $numero2){
            return $numero1 * $numero2;
        }

        public static function dividir($numero1, $numero2){
            return $numero1 / $numero2;
        }

        
    }

    $numero1 = 5;
    $numero2 = 10;
    $resultado = Calculadora::sumar($numero1,$numero2);
    echo "El resultado de la suma entre ". $numero1 ." y " . $numero2 ." es  " . $resultado ."<br>";

    $resultado = Calculadora::restar($numero1,$numero2);
    echo "El resultado de la resta entre ". $numero1 ." y " . $numero2 ." es  " . $resultado ."<br>";

    $resultado = Calculadora::dividir($numero1,$numero2);
    echo "El resultado de la división entre ". $numero1 ." y " . $numero2 ." es  " . $resultado ."<br>";

    $resultado = Calculadora::multiplicar($numero1,$numero2);
    echo "El resultado de la multiplicación entre ". $numero1 ." y " . $numero2 ." es  " . $resultado ."<br>";

    ?>
</body>

</html>