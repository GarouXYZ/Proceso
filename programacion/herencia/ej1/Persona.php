<?php
class Persona {
    protected String $nombre;
    protected int $edad;

    public function __construct(String $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function mostrarInformacion() {
        echo "<p>Nombre: " . $this->nombre . "</p>";
        echo "<p>Edad: " . $this->edad . "</p>";
    }
}
?>