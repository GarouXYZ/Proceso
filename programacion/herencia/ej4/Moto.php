<?php
class Moto extends Vehiculo {
    private bool $tieneBaul;

    public function __construct(String $marca, String $modelo, int $anio, bool $tieneBaul) {
        parent::__construct ($marca, $modelo, $anio);
        $this->tieneBaul = $tieneBaul;
    }

    public function encender() {
        echo "La moto esta encendida.";
    }

    public function mostrarBaul() {
        if ($this->tieneBaul) {
            echo "La moto tiene baul.";
        } else {
            echo "La moto no tiene baul.";
        }
    }
}
?>