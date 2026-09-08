<?php
require_once 'Persona.php';
require_once 'Estudiante.php';

$EstudianteJuan = new Estudiante("Juan", 20, "Redes y Software");

$EstudianteJuan->mostrarInformacion();

/*
echo "Preguntas:
    1. ¿Qué atributos son heredados por Estudiante?
    2. ¿Por qué los atributos de Persona son protected?
    3. ¿Por qué curso es private?
    ";
*/
?>