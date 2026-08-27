<?php
require_once ('alumno.php');

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST ['nombre'];
    $nota = $_POST ['nota'];

    $alumno = new Alumno($nombre);

    $alumno->agregarNota($nota);

    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Nota: " . $nota . "<br>";
    echo "Promedio: " . $alumno->getPromedio() . "<br>";
}
?>