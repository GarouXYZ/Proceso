<?php
require_once 'Dispositivo.php';
require_once 'Encendible.php';
require_once 'Televisor.php';
require_once 'Computadora.php';

$tv = new Televisor("Samsung");
$pc = new Computadora("Lenovo");

echo $tv->informacion();
echo $tv->encender();
echo $pc->informacion();
echo $pc->encender();
?>