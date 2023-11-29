<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>

<h2>Empleados</h2>

<body>
    <?php
    /*Modifica el ejercicio anterior para que el mostrar la frase de si tiene que
pagar impuestos o no sea un método de la clase Empleado (diferente del
método que calcula si tiene que pagar impuestos o no).

Comprueba que las visibilidades de los métodos son las correctas.

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

        public function activarImpuestos()
        {
            if ($this->sueldo > 1200) {

                return true;
            } elseif ($this->sueldo < 1200) {
                return false;
            }
        }


        public function pagarImpuestos($activar)
        {

            echo $this->nombre . " tiene un sueldo de " . $this->sueldo . "€<br>";

            if ($activar) {

                echo $this->nombre . " tiene que pagar impuestos<br>";
            } elseif (!$activar) {
                echo $this->nombre . " no tiene que pagar impuestos<br>";
            }
        }
    }

    $empleado1 = new Empleado("David", 1000);
    $empleado2 = new Empleado("Hector", 2100);

    $empleado1->mostrarEmpleado();
    $empleado2->mostrarEmpleado();

    $activando = $empleado1->activarImpuestos();
    echo "<br>";
    $empleado1->pagarImpuestos($activando);

    $activando = $empleado2->activarImpuestos();
    echo "<br>";
    $empleado2->pagarImpuestos($activando);
    ?>
</body>

</html>