<?php
$numeroentero = 5;
$primo = true;

for ($i = 2; $i < $numeroentero; $i++) {

    if ($numeroentero % $i == 0) {
        $primo = false;
    }
}

if ($primo) {
    echo "El numero " . $numeroentero . " es primo";
} else {
    echo "El numero " . $numeroentero . " no es primo";
}
?>