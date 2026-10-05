<?php
class Empleado {
    private String $nombre;
    private int $horasTrabajadas = 0;
    private int $tarifaHora;

    public function __construct(String $nombre, int $horasTrabajadas, int $tarifaHora) {
        $this->nombre = $nombre;
        $this->horasTrabajadas = $horasTrabajadas;
        $this->tarifaHora = $tarifaHora;
    }

    public function calcularSalario (): int {
        return $this->horasTrabajadas * $this->tarifaHora;
        
        if ($horasTrabajadas > 8){
            $tarifahora * 1.20;
        } else {
            return $tarifaHora;
        }
    }

    public function mostrarInformacion() {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Horas trabajadas: " . $this->horasTrabajadas . "<br>";
        echo "Tarifa por hora: $" . $this->tarifaHora . "<br>";
        echo "Salario: $" . $this->calcularSalario() . "<br>";
    }
}
?>