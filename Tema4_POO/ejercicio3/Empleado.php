<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<h2>Empleados</h2>

<body>
    <?php
    /*Añade un método a la clase Empleado que devolverá un booleano
indicando si el empleado tiene que pagar impuestos (si su sueldo es mayo
que 1200) o no (si es menor).

Muestra la frase “nombre_empleado tiene que pagar impuestos” o
“nombre_empleado no tiene que pagar impuestos” después de la frase
“nombre_empleado tiene un sueldo de sueldo_empleado”.

*/

    class Empleado
    {
        public $nombre;
        public $sueldo;


        public function __construct($nombre, $sueldo)
        {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getSueldo()
        {
            return $this->sueldo;
        }

        public function setSueldo($sueldo)
        {
            $this->sueldo = $sueldo;
        }


        public function mostrarEmpleado()
        {
            echo $this->nombre . " tiene un sueldo de " . $this->sueldo . "€<br>";
        }


        public function pagarImpuestos(){

            echo $this->nombre . " tiene un sueldo de " . $this->sueldo . "€<br>";

            if($this->sueldo > 1200){

                echo $this -> nombre . " tiene que pagar impuestos<br>";

            }elseif ($this->sueldo < 1200) {
                echo $this -> nombre . " no tiene que pagar impuestos<br>";
            }
        }
    }

    $empleado1 = new Empleado("David", 1000);
    $empleado2 = new Empleado("Hector", 2100);

    $empleado1->mostrarEmpleado();
    $empleado2->mostrarEmpleado();

    echo "<br>";
    $empleado1->pagarImpuestos();
    echo "<br>";
    $empleado2->pagarImpuestos();
    ?>
</body>

</html>