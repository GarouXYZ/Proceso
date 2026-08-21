<?php
class CuentaBancaria {
    private String $titular;
    private int $saldo;   
    private String $tipocuenta;

    public function __construct (String $titular, int $saldo, String $tipocuenta){
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->tipocuenta = $tipocuenta;
    }

    public function getTitular(): String {
        return $this->titular;
    }

    public function getSaldo(): int {
        return $this->saldo;
    }

    public function getTipocuenta(): String {
        return $this->tipocuenta;
    }

    public function setSaldo(int $saldo): void {
        $this->saldo = $saldo;
    }

    public function Depositar($depositar) {
        $this->saldo += $depositar;
    }

    public function Retirar($retirar) {
        $this->saldo -= $retirar;
    }

        public function __toString(): string {
        return "Titular: $this->titular <br>
                Saldo: $this->saldo <br>
                Tipo de Cuenta: $this->tipocuenta";
    }
}
?>