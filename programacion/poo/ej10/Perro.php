<?php
require_once('Animal.php');

class Perro extends Animal{
    public function hacerSonido(): string {
        return "Guau";
    }
}
?>