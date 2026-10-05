<?php
require_once ('persona.php');

$Persona = New Persona("Juan", "Perez", 30);
echo $Persona->mostrarInformacion();

/*
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST ['nombre'];
    $apellido = $_POST ['apellido'];
    $edad = $_POST ['edad'];

    $persona = new Persona($nombre, $apellido, $edad);
    echo $persona->mostrarInformacion();
}
*/
?>