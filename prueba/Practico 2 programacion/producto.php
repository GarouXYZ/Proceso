<?php
    class producto {

        private string $nombre;
        private int $precio;
        private int $stock;

        public function __construct(string $nombre, int $precio, int $stock) {
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->stock = $stock;
        }

        public function getNombre(): string {
            return $this->nombre;
        }

        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }

        public function getPrecio(): int {
            return $this->precio;
        }

        public function setPrecio(int $precio): void{
            $this->precio = $precio;
        }

        public function getStock(): int {
            return $this->stock;
        }

        public function setStock(int $stock): void{
            $this->stock = $stock;
        }

        public function __toString():string {
            return "El nombre del producto es " . $this->getNombre() . "<br>" .
                    "El precio es " . $this->getPrecio() . "<br>" .
                    "El stock disponible es " . $this->getStock();
        }

        public function modificarPrecio(int $nuevoPrecio): void {
            $this->precio = $nuevoPrecio;
        }

        public function modificarStock(int $nuevoStock):void {
            $this->stock = $nuevoStock;
        }
    }
?>