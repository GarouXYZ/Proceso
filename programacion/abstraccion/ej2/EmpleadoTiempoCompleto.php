<?php
require_once ('Empleado.php');

class EmpleadoTiempoCompleto extends Empleado {
    public function __construct(String $Nombre, int $salarioBase) {
        parent::__construct($Nombre, $salarioBase);
    }

    public function calcularSalario() {
        return $this->getSalarioBase() + 5000;
    }
}
?>