<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<h2>Empleados</h2>

<body>
    <?php
    /*Modifica el ejercicio anterior para que el nombre y el sueldo del empleado
se rellenen en el momento en que se crea el empleado y no se pueda
modificar después.

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

       

        public function getSueldo()
        {
            return $this->sueldo;
        }

       


        public function mostrarEmpleado()
        {
            echo $this->nombre . " tiene un sueldo de " . $this->sueldo . "€<br>";
        }
    }

    $empleado1 = new Empleado("David", 2000);
    $empleado2 = new Empleado("Hector", 2100);

    $empleado1 -> mostrarEmpleado();
    $empleado2 -> mostrarEmpleado();
    ?>
</body>

</html>