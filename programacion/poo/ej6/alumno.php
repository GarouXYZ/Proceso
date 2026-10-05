<?php
class Alumno {
    private String $nombre;
    private array $nota = [];
    private float $promedio = 0;

    public function __construct (String $nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(): String {
        return $this->nombre;
    }

    public function getNota(): array {
        return $this->nota;
    }

    public function getPromedio(): float {
        return $this->promedio;
    }

    public function agregarNota(float $nota):void {
        $this->nota[] = $nota;
        $this->promedio = array_sum($this->nota) / count($this->nota);
    }

    public function mostrarInformacion(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Notas: " . implode(", ", $this->nota) . "<br>";
        echo "Promedio: " . $this->promedio . "<br>";
    }
}
?>