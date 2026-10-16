<?php
class Computadora extends Dispositivo implements Encendible {
    public function __construct(string $marca){
        parent::__construct($marca);
    }

    public function encender (){
        return "La computadora esta encendida.<br>";
    }

    public function apagar(){
        return "La computadora esta apagada.<br>";
    }

    public function informacion(){
        return "La computadora es de la marca: " . $this->getMarca() . "<br>";
    }
} 
?>