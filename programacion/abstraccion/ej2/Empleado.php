<?php
abstract class Empleado {
    private String $Nombre;
    private int $salarioBase;
    
    public function __construct(String $Nombre, int $salarioBase) {
        $this->Nombre = $Nombre;
        $this->salarioBase = $salarioBase;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }
    
    abstract public function calcularSalario();
}
?>