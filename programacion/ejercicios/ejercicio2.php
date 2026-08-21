<?php

$numero1 = 1;
$numero2 = 2;
$numero3 = 3;

if ($numero1 > $numero2 && $numero1 > $numero3) {
    echo "El  numero mayor es " . $numero1;
} elseif ($numero2 > $numero1 && $numero2 > $numero3) {
    echo "El numero mayor es: " . $numero2;
}   else {
    echo "El numero mayor es: " . $numero3;
}

?>