<?php
require_once 'Animal.php';
require_once 'Perro.php';
require_once 'Gato.php';

$Perro1 = new Perro("Josue", 3);
$Gato1 = new Gato("Michi", 2);

$Perro1->hacerSonido();
$Perro1->mostrarInfo();
echo "<br>";
$Gato1->hacerSonido();
$Gato1->mostrarInfo();

/*
echo "Preguntas: <br>
    1. ¿Qué significa que Perro y Gato hereden de Animal? <br>
    2. ¿Qué método está siendo sobrescrito? <br>
    3. ¿Qué ocurriría si hacerSonido() fuera private en Animal?
    ";
*/
?>