<?php
class Animal {
    protected String $nombre;
    protected int $edad;

    public function __construct (String $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function hacerSonido() {
        echo "El animal hace un sonido.<br>";
    }
}
?>