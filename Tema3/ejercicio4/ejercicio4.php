<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

<h2>Calculadora</h2>
    <div id="container">
        <?php


        $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : '';
        $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : '';
        $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';
        $resultado = '';


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (is_numeric($numero1) && is_numeric($numero2)) {
                try {
                    switch ($operacion) {
                        case 'sumar':
                            $resultado = $numero1 + $numero2;
                            break;
                        case 'restar':
                            $resultado = $numero1 - $numero2;
                            break;
                        case 'multiplicar':
                            $resultado = $numero1 * $numero2;
                            break;
                        case 'dividir':
                            if ($numero2 == 0) {
                                throw new Exception('No es posible dividir por cero');
                            }
                            $resultado = $numero1 / $numero2;
                            break;
                    }
                } catch (Exception $e) {
                    header('Location: ejercicio4error.php');
                    exit();
                }
            } else {
                $resultado = 'Necesitas introducir números correctos';
            }
        }
        ?>

        <form action="ejercicio4.php" method="post">
            <label for="numero1">Número 1:</label>
            <input type="text" name="numero1" id="numero1" value="<?php echo $numero1; ?>" required>
            <br><br>
            <label for="numero2">Número 2:</label>
            <input type="text" name="numero2" id="numero2" value="<?php echo $numero2; ?>" required>

            <br><br>

            <div id="operaciones-container">
                <label style="display: inline-block;">Operación:</label>
                <div style="display: inline-block;">
                    <input type="radio" name="operacion" value="sumar" <?php echo ($operacion === 'sumar') ? 'checked' : ''; ?>> Sumar
                    <input type="radio" name="operacion" value="restar" <?php echo ($operacion === 'restar') ? 'checked' : ''; ?>> Restar
                    <input type="radio" name="operacion" value="multiplicar" <?php echo ($operacion === 'multiplicar') ? 'checked' : ''; ?>> Multiplicar
                    <input type="radio" name="operacion" value="dividir" <?php echo ($operacion === 'dividir') ? 'checked' : ''; ?>> Dividir
                </div>
            </div>


            <br><br>

            <button type="submit">Calcular</button>
        </form>

        <div id="resultado">
            <?php
            if ($resultado !== '') {
                echo '<br><br>';
                echo '<p><strong>Resultado: </strong> ' . $resultado . '</p>';
            }
            ?>
        </div>

    </div>

</body>

</html>