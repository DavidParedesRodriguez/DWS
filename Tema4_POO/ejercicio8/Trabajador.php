<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<h2>Trabajador</h2>

<body>
    <?php
    /*Crea una clase Trabajador. Define como atributos su nombre y sueldo. La
clase tendrá el método calcularSueldo().

Implementa la clase Empleado, que heredará de la anterior. Para calcular
el sueldo tener en cuenta que se le paga 9.50 la hora.

Plantea otra clase Gerente que herede de la clase Trabajador. Para
calcular el sueldo tener en cuenta que se le abona el sueldo base (2500)
más un porcentaje del beneficio de la empresa (parámetro que se le
pasará al constructor de la clase Gerente).

Crear los métodos necesarios en las clases y comprobar su
funcionamiento.

*/

    class Trabajador
    {

        public $nombre;
        public $sueldo;

        public function __construct($nombre, $sueldo)
        {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }


        public function calcularSueldo()
        {
            return $this->sueldo;
        }
    }


    class Empleado extends Trabajador
    {
        const PAGO_POR_HORA = 9.50;

        public function calcularSueldo()
        {
            return $this->sueldo * self::PAGO_POR_HORA;
        }
    }

    class Gerente extends Trabajador
    {
        protected $sueldoBase;
        protected $porcentajeBeneficio;

        public function __construct($nombre, $sueldoBase, $porcentajeBeneficio)
        {
            parent::__construct($nombre, 0);
            $this->sueldoBase = $sueldoBase;
            $this->porcentajeBeneficio = $porcentajeBeneficio;
        }

        public function calcularSueldo()
        {
            $beneficio = $this->sueldoBase * ($this->porcentajeBeneficio / 100);
            return $this->sueldoBase + $beneficio;
        }
    }


    $empleado = new Empleado("Juan", 40); 
    echo "Sueldo de " . $empleado->nombre . ": €" . $empleado->calcularSueldo() . "<br>";

    $gerente = new Gerente("Ana", 2500, 10); 
    echo "Sueldo de " . $gerente->nombre . ": €" . $gerente->calcularSueldo() . "<br>";
    ?>
</body>

</html>