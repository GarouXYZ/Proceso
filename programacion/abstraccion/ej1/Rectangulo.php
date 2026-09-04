<?php
require_once ('Figura.php');

class Rectangulo extends Figura {
    private int $Base;
    private int $Altura;

    public function __construct(String $nombre,int $Base, int $Altura) {
        parent::__construct($nombre);
        $this->Base = $Base;
        $this->Altura = $Altura;
    }

    public function calcularArea(){
        return $this->Base * $this->Altura;
    }
}
?>