# Proceso
Aca van a ir todas las cosas que haga de programacion y todo eso

<?php
class Empleado {
    private String $nombre;
    private int $horasTrabajadas = 0;
    private int $tarifaHora;

    public function __construct(String $nombre, int $horasTrabajadas, int $tarifaHora) {
        $this->nombre = $nombre;
        $this->horasTrabajadas = $horasTrabajadas;
        $this->tarifaHora = $tarifaHora;
    }

    public function calcularSalario (): int {
        return $this->horasTrabajadas * $this->tarifaHora;
        
        if ($horasTrabajadas > 8){
            $tarifahora * 1.20;
        } else {
            return $tarifaHora;
        }
    }
}
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
        <input type="number" placeholder="Horas Trabajadas" name="horasTrabajadas" required>
        <br>
        <input type="number" placeholder="Tarifa" name="tarifaHora" required>
        <br>
        <input type="submit" value="Calcular Salario">
    </form>
</body>
</html>


<?php
require_once ('Empleado.php');

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST ['nombre'];
    $tarifaHora = $_POST ['tarifaHora'];
    $horasTrabajadas = $_POST ['horasTrabajadas'];

    $empleado = new Empleado($nombre, $tarifaHora, $horasTrabajadas);

    echo "El Empleado " . $nombre . " tiene un salario de $";
    echo $empleado->calcularSalario() . ".";
}
?>

<?php
class Producto {
    private String $nombre;
    private String $categoria;
    private int $precio;

    public function __construct(String $nombre, String $categoria, int $precio) {
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->precio = $precio;
    }
}
?>

<?php
class Tienda {
    private array $productos = [];

    public function agregarProducto (Producto $producto): void {
        $this->productos[] = $producto;
    }

    public function buscar () {
        foreach ($this->productos as $producto) {
            $existe = in_array($producto->categoria);
            echo "$existe <br>";
        }
    }

    public function mostrarTodos() {
        echo "Lista de productos: <br>";
        foreach ($this->productos as $producto) {
            echo $producto . "<br>";
        }   
    }
}
?>

<?php
session_start();

$_SESSION['producto'] = [
    ['producto' => '']
]
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
        <input type="text" placeholder="Categoria" name="categoria" required>
        <br>
        <input type="number" placeholder="Precio" name="precio" required>
        <br>
        <input type="submit" value="Calcular Salario">
    </form>
</body>
</html>
