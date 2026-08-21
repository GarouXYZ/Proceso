<?php
class Vehiculo {
    private String $marca;
    private String $modelo;
    private String $año;
    private int $kilometraje;

    public function __construct(String $marca, String $modelo, String $año, int $kilometraje) {   
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
        $this->kilometraje = $kilometraje;
    }

    public function getMarca(): String {
        return $this->marca;
    }

    public function getModelo(): String {
        return $this->modelo;
    }

    public function getAño(): String {
        return $this->año;
    }

    public function getKilometraje(): String {
        return $this->kilometraje;
    }

    public function setKilometraje(int $kilometraje): void {
        $this->kilometraje = $kilometraje;
    }
    
    public function actualizarKilometraje($nuevoKilometraje) {
        $this->kilometraje += $nuevoKilometraje;
    }

    public function __toString(): string {
        return "Marca: $this->marca <br>
                Modelo: $this->modelo <br>
                Año: $this->año <br>
                Kilometraje: $this->kilometraje";
    }
}
?>
