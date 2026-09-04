<?php
require_once ('Figura.php');

class Cuadrado extends Figura {
    private int $Lado;

    public function __construct(String $nombre,int $Lado) {
        parent::__construct($nombre);
        $this->Lado = $Lado;
    }

    public function calcularArea(){
        return $this->Lado * $this->Lado;
    }
}
?>