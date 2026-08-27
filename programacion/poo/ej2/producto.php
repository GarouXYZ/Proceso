<?php
class Producto {
    private String $nombre;
    private string $precio;
    private string $stock;

    public function __construct(String $nombre, string $precio, string $stock) {   
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

    public function getPrecio(): string {
        return $this->precio;
    }

    public function setPrecio(string $precio): void {
        $this->precio = $precio;
    }

    public function getStock(): string {
        return $this->stock;
    }

    public function setStock(string $stock): void {
        $this->stock = $stock;
    }
}
?>
