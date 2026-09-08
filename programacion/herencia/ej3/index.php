<?php
require_once 'Empleado.php';
require_once 'EmpleadoAdministrativo.php';
require_once 'EmpleadoTecnico.php';

$EmpleadoAdministrativo = new EmpleadoAdministrativo("Pepe", 500, "Mantenimiento");
$EmpleadoTecnico = new EmpleadoTecnico ("Jose", 250, "Papeleo");

$EmpleadoAdministrativo->mostrarInformacion();
echo "<br>";
$EmpleadoTecnico->mostrarInformacion();

/*
echo "Preguntas: <br>
    1. ¿Qué atributos pertenecen a Empleado? <br>
    2. ¿Qué atributos pertenecen exclusivamente a cada clase derivada? <br>
    3. ¿Por qué sector y especialidad podrían ser private? <br>
    4. ¿Por qué es necesario utilizar parent::__construct()? <br>
    5. ¿Qué ventaja tiene reutilizar el código de Empleado?
    ";
*/
?>