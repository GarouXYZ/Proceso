<?php
require_once 'Producto.php';
require_once 'Pedidos.php';

session_start();

if (!isset($_SESSION['pedido'])) {
    $_SESSION['pedido'] = new Pedido();
}

$pedido = $_SESSION['pedido'];

if (isset($_POST['agregar'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $producto = new Producto($nombre, $precio, $cantidad);

    $pedido->agregarProducto($producto);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Pedido</title>
</head>

<body>

    <h1>Crear pedido</h1>

    <form method="POST">

        <label>Nombre:
            <input type="text" name="nombre">
        </label><br><br> 
        <label>Precio:
            <input type="number"name="precio">
        </label><br><br>  
        <label>Cantidad: 
            <input type="number" name="cantidad">
        </label><br><br> 
        
        <button type="submit" name="agregar"> Agregar producto </button> 

        <br><br>
        
        <button type="submit" name="finalizar"> Finalizar pedido </button>

    </form>

    <nav>
        <?php
        if (isset($_POST['finalizar'])) {
            echo "El total del pedido es: $" . $pedido->calcularTotal();

            session_destroy();
        }
        ?>
    </nav>
</body>

</html>
