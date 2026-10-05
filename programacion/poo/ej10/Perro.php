<?php
require_once('Animal.php');

class Perro extends Animal{
    public function hacerSonido(): string {
        return "Guau";
    }

    public function mostrarInformacion(): string {
        return "Nombre: " . $this->getNombre() . "<br>" .
               "Edad: " . $this->getEdad() . "<br>";
    }
}
?>