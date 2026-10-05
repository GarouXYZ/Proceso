<?php
require_once ('cuentabancaria.php');

$Cuentabancaria = new Cuentabancaria("Juan Perez", 1000, "Ahorro");

$Cuentabancaria->depositar(500);

$retirar = 500;

if ($retirar > $Cuentabancaria->getSaldo()) {
    echo "No se puede retirar esa cantidad porque el saldo es insuficiente.";
} else {
    $Cuentabancaria->retirar($retirar);
}

echo $Cuentabancaria->mostrarInformacion();
/*
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $titular = $_POST ['titular'];
    $saldo = $_POST ['saldo'];
    $tipocuenta = $_POST ['tipocuenta'];
    $depositar = $_POST ['depositar'];
    $retirar = $_POST ['retirar'];

    $cuentabancaria = new CuentaBancaria($titular, $saldo, $tipocuenta);

    $cuentabancaria->Depositar($depositar);

    if ($retirar > $cuentabancaria->getSaldo()) {
        echo "No se puede retirar esa cantidad porque el saldo es insuficiente.";
    } else {
        $cuentabancaria->Retirar($retirar);
    }

    echo "<br>";
    echo $cuentabancaria;


}
*/
?>