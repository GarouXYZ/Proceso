<?php
class Biblioteca {
    private array $libros = [];

    public function agregarLibro(Libro $libro): void {
        $this->libros[] = $libro;
    }

    public function listarLibros():void {
        foreach ($this->libros as $libro) {
            echo "Titulo: " . $libro->getTitulo() . "<br>";
            echo "Autor: " . $libro->getAutor() . "<br>";
            echo "Precio: " . $libro->getPrecio() . "<br>";
            echo "<hr>";
        }
    }
}
?>