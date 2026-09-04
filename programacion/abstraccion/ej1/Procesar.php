<?php
require_once ('Figura.php');
require_once ('Cuadrado.php');
require_once ('Rectangulo.php');

$cuadrado = new Cuadrado("Cuadrado", 5);
$rectangulo = new Rectangulo("Rectángulo", 10, 4);

echo "El Area del cuadrado es: " . $cuadrado->calcularArea();
echo "<br>";
echo "El Area del rectángulo es: " . $rectangulo->calcularArea();

?>