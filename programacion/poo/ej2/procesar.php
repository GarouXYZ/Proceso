<?php
require_once ('producto.php');

$Producto = new Producto ("Manzana", 100, 10);
echo $Producto->mostrarInformacion();

/*
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST ['nombre'];
    $precio = $_POST ['precio'];
    $stock = $_POST ['stock'];

    $producto = new Producto($nombre, $precio, $stock);

    echo "Nombre: " . $producto->getNombre() . "<br>";
    echo "Precio actual: "; 
    echo $producto->getPrecio()."<br>";
    $producto->setPrecio("50"); 

    echo "Stock actual: ";
    echo $producto->getStock()."<br>";
    $producto->setStock("4");

    echo "<br>";
    
    echo "Precio nuevo: ";
    echo $producto->getPrecio()."<br>";
    echo "Stock nuevo: ";
    echo $producto->getStock();

}
*/
?>