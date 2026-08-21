<?php

$pesoenkg = 60;
$alturaenm = 1.63;

$imc = $pesoenkg / ($alturaenm * $alturaenm); 
    echo "El resultado del IMC es: " . $imc; 
if ($imc < 18.5) {
    echo " - Bajo peso";
} elseif ($imc >= 18.5 && $imc < 24.9) {
    echo " - Peso normal";
} elseif ($imc >= 25 && $imc < 29.9) {
    echo " - Sobrepeso";
} else {
    echo " - Obesidad";
}

?>