<?php
require_once 'Vehiculo.php';
require_once 'Auto.php';
require_once 'Moto.php';

$Auto = new Auto ("Toyota", "Corolla", 2022, 4);
$Moto = new Moto ("Yamaha", "MT-03", 2023, false);

$Auto->mostrarInformacion(); 
$Auto->mostrarNumeroPuertas(); echo "<br><br>";
$Moto->mostrarInformacion();
$Moto->mostrarBaul(); echo "<br><br>";

$Auto->encender(); echo "<br>";
$Moto->encender(); echo "<br><br>";

/*
echo "Preguntas: <br>
    1. ¿Qué características tienen en común Auto y Moto? <br>
    2. ¿Qué características son diferentes? <br>
    3. ¿Por qué resulta conveniente utilizar una clase Vehiculo? <br>
    4. ¿Qué atributos son protected y por qué? <br>
    5. ¿Qué atributos son private y por qué? <br>
    6. ¿Qué métodos fueron sobrescritos? <br>
    7. ¿Qué función cumple parent::__construct()? <br>
    8. ¿Qué ocurriría si elimináramos extends Vehiculo de Auto? <br>
    9. ¿Podríamos crear un objeto de Vehiculo directamente? <br>
    10. ¿Qué ventajas presenta este diseño frente a escribir todo el
        código repetido en cada clase?
    ";
*/
?>