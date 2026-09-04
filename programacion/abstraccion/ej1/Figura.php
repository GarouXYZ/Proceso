<?php
abstract class Figura {

    private String $nombre;

    public function __construct(String $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }
    
    abstract public function calcularArea();

}
?>