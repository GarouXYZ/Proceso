<?php
require_once 'Libro.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $precio = $_POST['precio'];

    $libro = new Libro($titulo, $autor, $precio);

    if (!isset($_SESSION['libros'])) {
        $_SESSION['libros'] = [];
    }

    $_SESSION['libros'][] = $libro;

    echo "<p>Libro agregado correctamente.</p>";
}
?>