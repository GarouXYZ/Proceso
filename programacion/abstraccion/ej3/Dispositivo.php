<?php
abstract class Dispositivo{
    private String $marca;

    public function __construct(String $marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
    }

    abstract public function informacion();
}
?>