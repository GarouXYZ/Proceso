<?php
class Computadora extends Dispositivo implements Encendible {
    public function __construct(String $marca){
        parent::__construct($marca);
    }

    public function encender (){
        echo "La computadora esta encendida.<br>";
    }

    public function apagar(){
        echo "La computadora esta apagada.<br>";
    }

    public function informacion(){
        echo "La computadora es de la marca: " . $this->getMarca() . "<br>";
    }
} 
?>