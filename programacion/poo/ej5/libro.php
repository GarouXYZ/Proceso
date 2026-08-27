<?php
class Libro {
    private String $titulo;
    private String $autor;
    private int $precio;

    public function __construct(String $titulo, String $autor, int $precio){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
    }

    public function getTitulo(): String {
        return $this->titulo;
    }

    public function getAutor(): String {
        return $this->autor;
    }

    public function getPrecio(): int {
        return $this->precio;
    }
}
?>