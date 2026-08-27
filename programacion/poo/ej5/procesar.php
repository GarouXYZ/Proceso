<?php
require_once ('libro.php');
require_once ('biblioteca.php');

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST ['titulo'];
    $autor = $_POST ['autor'];
    $precio = $_POST ['precio'];

    $libro = new Libro($titulo, $autor, $precio);
    $biblioteca = new Biblioteca ();

    $biblioteca->agregarLibro($libro);

    $biblioteca->listarLibros();
}
?>