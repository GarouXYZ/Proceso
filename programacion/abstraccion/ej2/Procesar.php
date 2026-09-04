<?php
require_once ('Empleado.php');
require_once ('EmpleadoTiempoCompleto.php');
require_once ('EmpleadoPorHora.php');

$empleado1 = new EmpleadoTiempoCompleto("Juan", 3000);
$empleado2 = new EmpleadoPorHora("María", 2000, 40);


echo "El salario del empleado de tiempo completo es: " . $empleado1->calcularSalario();
echo "<br>";
echo "El salario del empleado por hora es: " . $empleado2->calcularSalario();

?>