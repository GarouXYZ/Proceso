<?php

$ano = 2028;

if ($ano % 4 == 0 && $ano % 100 != 0 || $ano % 400  == 0) {
    echo "El año $ano es bisiesto";
} else {
    echo "El año $ano no es bisiesto";
}

?>