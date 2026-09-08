<?php
class Estudiante extends Persona {
    private String $curso;

    public function __construct(String $nombre, int $edad, String $curso) {
        parent::__construct($nombre, $edad);
        $this->curso = $curso;
    }

    public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Curso: " . $this->curso . "<br>";
    }
}
?>