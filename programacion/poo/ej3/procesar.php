<?php
require_once ('vehiculo.php');

$Vehiculo = new Vehiculo("Toyota", "Corolla", "2020", 50000);
echo $Vehiculo->mostrarInformacion();

$Vehiculo->setKilometraje(50); 
    echo "<br>";
    echo "Kilometraje nuevo: ";
    echo $Vehiculo->getKilometraje();
/*
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $marca = $_POST ['marca'];
    $modelo = $_POST ['modelo'];
    $año = $_POST ['año'];
    $kilometraje = $_POST ['kilometraje'];

    $vehiculo = new Vehiculo($marca, $modelo, $año, $kilometraje);

    echo "Marca: " . $vehiculo->getMarca() . "<br>";
    echo "Modelo: " .$vehiculo->getModelo() . "<br>";
    echo "Año: " .$vehiculo->getAño() . "<br>";
    echo "Kilometraje actual: "; 
    echo $vehiculo->getKilometraje();

    echo "<br>";
    echo "<br>";

    $vehiculo->setKilometraje("50"); 
    echo "Kilometraje nuevo: ";
    echo $vehiculo->getKilometraje();
}
*/
?>