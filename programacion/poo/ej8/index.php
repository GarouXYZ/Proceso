
<?php
require_once ('Empleado.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persona</title>
</head>
<body>
    <form action="procesar.php" method="POST">
        <input type="text" placeholder="Nombre" name="nombre" required>
        <br>
        <input type="number" placeholder="Tarifa horaria" name="tarifaHora" required>
        <br>
        <input type="number" placeholder="Horas de Trabajo" name="horasTrabajadas" required>
        <br>
        <input type="submit" value="Calcular Salario">
    </form>

    <div>
        <?php
            if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
                $nombre = $_POST ['nombre'];
                $tarifaHora = $_POST ['tarifaHora'];
                $horasTrabajadas = $_POST ['horasTrabajadas'];

                $empleado = new Empleado($nombre, $tarifaHora, $horasTrabajadas);

                echo "El Empleado " . $nombre . " tiene un salario de $";
                echo $empleado->calcularSalario() . ".";
            }
        ?>
    </div>
</body>
</html>
