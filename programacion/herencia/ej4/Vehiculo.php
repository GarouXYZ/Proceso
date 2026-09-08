<?php
class Vehiculo {
    protected String $marca;
    protected String $modelo;
    protected int $anio;

    public function __construct (String $marca, String $modelo, int $anio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
    }

    public function encender() {
        echo "El vehiculo esta prendido.";
    }

    public function mostrarInformacion() {
        echo "<p>Marca: " . $this->marca . "</p>";
        echo "<p>Modelo: " . $this->modelo . "</p>";
        echo "<p>Año: " . $this->anio . "</p>";
    }
}
?>