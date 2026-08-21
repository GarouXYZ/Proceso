<?php
class Persona {
    private String $nombre;
    private String $apellido;
    private String $edad;

    public function __construct(String $nombre, String $apellido, String $edad) {   
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function mostrarInformacion(){
        return "Nombre: $this->nombre <br>
                Apellido: $this->apellido <br>
                CI: $this->edad";
    }
}
?>
