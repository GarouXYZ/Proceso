<?php
require_once ("persona.php");

$nombre = "Joaquin";
$apellido = "Cedrez";
$edad = 19;

$joaquin = new Persona ($nombre, $apellido, $edad);
echo $joaquin->__toString();
?>