<?php
class Producto {
    private String $nombre;
    private int $precio;
    private int $cantidad;

    public function __construct (String $nombre, int $precio, int $cantidad) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

    public function getNombre(): String {
        return $this->nombre;
    }

    public function getPrecio(): int {
        return $this->precio;
    }

    public function getCantidad(): int {
        return $this->cantidad;
    }
}
?>