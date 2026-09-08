<?php
class Empleado {
    protected String $nombre;
    protected int $sueldo;

    public function __construct(String $nombre, int $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function mostrarInformacion() {
        echo "<p>Nombre: " . $this->nombre . "</p>";
        echo "<p>Sueldo: " . $this->sueldo . "</p>";
    }
}
?>