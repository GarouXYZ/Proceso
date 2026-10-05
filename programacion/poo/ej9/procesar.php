<?php
require_once ('Producto.php');
require_once ('Tienda.php');

    $producto1 = new Producto("Manzana", "Frutas", 12);
    $producto2 = new Producto("Banana", "Frutas", 8);
    $producto3 = new Producto("Leche", "Lacteos", 50);
    $producto4 = new Producto("Yogurt", "Lacteos", 42);
    $producto5 = new Producto("Bondiola", "Carnes", 199);
    $producto6 = new Producto("Pollo", "Carnes", 59);
    $producto7 = new Producto("Galletas", "Snacks", 20);
    $producto8 = new Producto("Doritos", "Snacks", 35);
    $producto9 = new Producto("Zanahoria", "Verduras", 8);
    $producto10 = new Producto("Papa", "Verduras", 12);

$tienda = new Tienda([
    $producto1,
    $producto2,
    $producto3,
    $producto4,
    $producto5,
    $producto6,
    $producto7,
    $producto8,
    $producto9,
    $producto10
]);

$tienda->mostrarProductos();

echo "<br>";

$tienda->buscarPorCategoria("Frutas");
/*
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

    $producto1 = new Producto("Manzana", "Frutas", 12);
    $producto2 = new Producto("Banana", "Frutas", 8);
    $producto3 = new Producto("Leche", "Lacteos", 50);
    $producto4 = new Producto("Yogurt", "Lacteos", 42);
    $producto5 = new Producto("Bondiola", "Carnes", 199);
    $producto6 = new Producto("Pollo", "Carnes", 59);
    $producto7 = new Producto("Galletas", "Snacks", 20);
    $producto8 = new Producto("Doritos", "Snacks", 35);
    $producto9 = new Producto("Zanahoria", "Verduras", 8);
    $producto10 = new Producto("Papa", "Verduras", 12);

    $tienda = new Tienda ([
        $producto1,
        $producto2,
        $producto3,
        $producto4,
        $producto5,
        $producto6,
        $producto7,
        $producto8,
        $producto9,
        $producto10
    ]);

    if ($_POST['action'] == 'Buscar categoria') {
        $tienda->buscarPorCategoria($_POST['Categoria']);
    } else if($_POST['action'] == 'Ver todos'){
        $tienda->mostrarProductos();
    }
}
*/
?>