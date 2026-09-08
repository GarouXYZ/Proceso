<?php
class EmpleadoTecnico extends Empleado {
    private String $especialidad;

    public function __construct(String $nombre, int $sueldo, String $especialidad) {
        parent::__construct($nombre, $sueldo);
        $this->especialidad = $especialidad;
    }

    public function mostrarInformacion() {
        echo "<p>Nombre: " . $this->nombre . "</p>";
        echo "<p>Sueldo: " . $this->sueldo . "</p>";
        echo "<p>Especialidad: " . $this->especialidad . "</p>";
    }
}
?>