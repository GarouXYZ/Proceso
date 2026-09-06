<?php
Probando
require_once 'MetodoPago.php';
require_once 'Tarjeta.php';
require_once 'PayPal.php';
require_once 'Transferencia.php';


/* FORMA 1
$metodos = [
    new Tarjeta(),
    new PayPal(),
    new Transferencia()
];

foreach ($metodos as $metodo){
    $metodo->pagar(20000);
    $metodo->devolver(10000);
}
*/


$tarjeta = new Tarjeta();
$paypal = new PayPal();
$transferencia = new Transferencia();

$tarjeta->pagar(1000);
$paypal->pagar(1000);
$transferencia->pagar(1000);

$tarjeta->devolver(500);
$paypal->devolver(500);
$transferencia->devolver(500);

?>