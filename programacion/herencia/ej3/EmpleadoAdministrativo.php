<?php
class EmpleadoAdministrativo extends Empleado {
    private String $sector;

    public function __construct(String $nombre, int $sueldo, String $sector) {
        parent::__construct($nombre, $sueldo);
        $this->sector = $sector;
    }

    public function mostrarInformacion() {
        echo "<p>Nombre: " . $this->nombre . "</p>";
        echo "<p>Sueldo: " . $this->sueldo . "</p>";
        echo "<p>Sector: " . $this->sector . "</p>";
    }
}
?>