<?php
class Persona {
    private String $nombre;
    private String $apellido;
    private String $ciudad;

    public function __construct (String $nombre, String $apellido, String $ciudad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->ciudad = $ciudad;
    }

    public function getNombre(): String {
        return $this->nombre;
    }

    public function setNombre(String $nombre): void {
        $this->nombre = $nombre;
    }

    public function getApellido(): String {
        return $this->apellido;
    }
 
    public function setApellido(String $apellido): void {
        $this->apellido = $apellido;
    }

    public function getCiudad(): String {
        return $this->ciudad;
    }

    public function setCiudad(String $ciudad): void {
        $this->ciudad = $ciudad;
    }

    public function __toString():String {
        return "Nombre: $this->nombre <br>
                Apellido: $this->apellido <br>
                Ciudad: $this->ciudad";
    }
}
?>