<?php
class Tienda {
    private array $productos = [];

    public function __construct(array $productos) {
        $this->productos = $productos;
    }

    public function mostrarProductos(): void {
        foreach($this->productos as $producto) {
            echo "Nombre: " . $producto->getNombre() . "<br>";
            echo "Categoria: " . $producto->getCategoria() . "<br>";
            echo "Precio: " . $producto->getPrecio() . "<br>";
            echo "<br>";
        }
    }

    public function buscarPorCategoria(string $categoria): void {
        foreach($this->productos as $producto) {

            if($producto->getCategoria() == $categoria) {
                echo "Nombre: " . $producto->getNombre() . "<br>";
                echo "Categoria: " . $producto->getCategoria() . "<br>";
                echo "Precio: " . $producto->getPrecio() . "<br>";
                echo "<br>";
            }
        }
    }
}
?>