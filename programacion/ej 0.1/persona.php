<?php
    //Crear Clase
    class Persona {
        //Crear Atributos
        private string $nombre;
        private string $apellido;
        private int $edad;
        //Crear Constructor
        public function __construct(string $nombre, string $apellido, int $edad) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->edad = $edad;
        }
        //Crear Metodos
        public function getNombre():string {
            return $this->nombre;
        }

        public function setNombre(string $nombre):void {
            $this->nombre = $nombre;
        }

        public function getApellido():string {
            return $this->apellido;
        }

        public function setApellido(string $apellido):void {
            $this->apellido = $apellido;
        }

        public function getEdad():int {
            return $this->edad;
        }

        public function setEdad(int $edad):void{
            $this->edad = $edad;
        }

        //Convertir informacion en texto
        public function __toString():string {
            return "El nombre es: " . $this->getNombre() .
                    " El apellido es: " . $this->getApellido() .
                    " y la edad es: " . $this->getEdad();
        }

        public function mostrarInformacion():void {
            echo "El nombre es: " . $this->getNombre() . "<br>" .
                    " El apellido es: " . $this->getApellido() . "<br>" .
                    " Y la edad es: " . $this->getEdad();
        }
    }
?>