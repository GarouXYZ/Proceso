<?php
class Televisor extends Dispositivo implements Encendible {
    public function __construct(String $marca){
        parent::__construct($marca);
    }

    public function encender(){
        echo "El televisor esta encendido.<br>";
    }

    public function apagar(){
        echo "El televisor esta apagado.<br>";
    }

    public function informacion(){
        echo "El televisor es de la marca: " . $this->getMarca() . "<br>";
    }
}
?>