<?php
class Producto {
    private string $nombre;
    private string $categoria;
    private int $precio;
    
    public function __construct(string $nombre, string $categoria, int $precio) {
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->precio = $precio;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getCategoria(): string {
        return $this->categoria;
    }

    public function getPrecio(): int {
        return $this->precio;
    }
}
?>