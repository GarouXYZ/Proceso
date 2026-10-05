<?php 
require_once ('Animal.php');
require_once ('Perro.php');

$perro = new Perro("Firulais", 3);

echo $perro->mostrarInformacion();
echo $perro->getNombre() . " hace " . "'" . $perro->hacerSonido() . "'." . "<br>";
/*
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    $perro = new Perro($nombre, $edad);

    echo $perro->mostrarInformacion();
    echo $perro->getNombre() . " hace " . "'" . $perro->hacerSonido() . "'." . "<br>";
}
*/
?>
