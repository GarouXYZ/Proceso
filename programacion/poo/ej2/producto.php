<?php
class Producto {
    private String $nombre;
    private int $precio;
    private int $stock;

    public function __construct(String $nombre, int $precio, int $stock) {   
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function getNombre(): String {
        return $this->nombre;
    }

    public function setNombre(String $nombre): void {
        $this->nombre = $nombre;
    }

    public function getPrecio(): int {
        return $this->precio;
    }

    public function setPrecio(int $precio): void {
        $this->precio = $precio;
    }

    public function getStock(): int {
        return $this->stock;
    }

    public function setStock(int $stock): void {
        $this->stock = $stock;
    }

    public function mostrarInformacion(){
        return "Nombre: " . $this->nombre . "<br>" .
               "Precio: " . $this->precio . "<br>" .
               "Stock: " . $this->stock;
    }
}
?>
