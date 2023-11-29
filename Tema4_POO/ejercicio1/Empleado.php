<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<h2>Empleados</h2>

<body>
    <?php
    /*Crea una clase Empleado con 2 propiedades: nombre y sueldo.
Implementa los getters y setters de las dos propiedades (ten en cuenta la
visibilidad adecuada de las propiedades y métodos).

Crea dos empleados rellenando su nombre y sueldo, y haz que salga por
pantalla la frase “nombre_empleado tiene un sueldo de
sueldo_empleado”.
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
    }

    $empleado1 = new Empleado("David", 2000);
    $empleado2 = new Empleado("Hector", 2100);

    $empleado1 -> mostrarEmpleado();
    $empleado2 -> mostrarEmpleado();
    ?>
</body>

</html>