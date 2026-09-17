<?php 
require_once ('Perro.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    $perro = new Perro($nombre, $edad);

    echo "Nombre: " . $perro->getNombre() . "<br>";
    echo "Edad: " . $perro->getEdad() . "<br>";
    echo $perro->getNombre() . " hace " . "'" . $perro->hacerSonido() . "'." . "<br>";
}
?>
