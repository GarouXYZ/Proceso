<?php
require_once ('Empleado.php');

class EmpleadoPorHora extends Empleado {
    private int $horasTrabajadas;
    private int $valorHora;

    public function __construct(String $Nombre, int $horasTrabajadas, int $valorHora) {
        parent::__construct($Nombre, 0);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->valorHora = $valorHora;
    }

    public function calcularSalario() {
        return $this->horasTrabajadas * $this->valorHora;
    }
}
?>