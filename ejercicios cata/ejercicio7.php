<?php

$gradosf = 200;

// conversor de f a c
$gradosc = ($gradosf - 32) * 5/9;
    echo "Temperatura en C: " . $gradosc;

echo "<br>";
// temp mayor o menor a 27 grados
if ($gradosc >27){
    echo "La temperatura es mayor a 27 C";
} else {
    echo "La temperatura es menor a 27 C";
}

?>