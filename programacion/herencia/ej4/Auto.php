<?php
class Auto extends Vehiculo {
    private int $numeroPuertas;

    public function __construct(String $marca, String $modelo, int $anio, int $numeroPuertas) {
        parent::__construct ($marca, $modelo, $anio);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function encender() {
        echo "El auto esta encendido.";
    }

    public function mostrarNumeroPuertas() {
        echo "El auto tiene " . $this->numeroPuertas . " puertas.";
    }
}
?>