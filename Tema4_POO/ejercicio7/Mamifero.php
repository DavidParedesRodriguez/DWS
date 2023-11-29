<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<h2>Mamifero</h2>

<body>
    <?php
    /*Crea una clase Mamifero con las propiedades especie, sonido y familia,
y un constructor donde se le pasarán la especie y el sonido (pero no la
familia) para rellenarlos. Además, tendrá un método sonido() donde se
mostrará la frase “Sonido de especie, de la familia familia: sonido”.

Crea otras dos clases que hereden de Mamifero llamadas Perro y Gato.
Ambas clases tendrán sólo un constructor donde se rellenará la familia a
la que pertenece cada una (cánidos o felinos).

Comprueba que la aplicación funciona de forma correcta creando un
perro y un gato y ejecutando su métodos sonido().


*/

    class Mamifero
    {
        public $especie;
        public $sonido;
        public $familia;

        public function __construct($especie, $sonido)
        {
            $this->especie = $especie;
            $this->sonido = $sonido;
        }

        public function establecerFamilia($familia)
        {
            $this->familia = $familia;
        }

        public function obtenerSonido()
        {

            return "Sonido de " . $this->especie . " de la familia " . $this->familia . " : " . $this->sonido;
        }
    }


    class Perro extends Mamifero
    {

        public function __construct($raza, $sonido)
        {

            parent::__construct($raza, $sonido);
            $this->establecerFamilia("Canino");
        }
    }

    class Gato extends Mamifero
    {

        public function __construct($raza, $sonido)
        {

            parent::__construct($raza, $sonido);
            $this->establecerFamilia("Felinos");
        }
    }


    $perro = new Perro("Pastor Aleman", "Ladrar");
    $gato = new Gato("Siames", "Maullar");


    echo $perro->obtenerSonido() . "<br>";
    echo $gato->obtenerSonido();

    ?>
</body>

</html>