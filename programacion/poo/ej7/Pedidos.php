<?php
class Pedido {
    private array $productos = [];

    public function agregarProducto(Producto $producto): void {
        $this->productos[] = $producto;
    }

    public function calcularTotal(): int {
        $total = 0;

        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio() * $producto->getCantidad();
        }

        return $total;
    }
}
?>