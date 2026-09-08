<?php
class Gato extends Animal {
    public function __construct(String $nombre, int $edad) {
        parent::__construct($nombre, $edad);
    }

        public function mostrarInfo() {
        echo "<p>Nombre: " . $this->nombre . "</p>";
        echo "<p>Edad: " . $this->edad . " años</p>";
    }
    public function hacerSonido() {
        echo "El gato $this->nombre maulla.<br>";
    }
}
?>