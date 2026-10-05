<?php
require_once ('libro.php');
require_once ('biblioteca.php');

$libro1 = new Libro("El Quijote", "Miguel de Cervantes", 20.99);
$libro2 = new Libro("Cien años de soledad", "Gabriel García Márquez", 25.99);

$biblioteca = new Biblioteca();

$biblioteca->agregarLibro($libro1);
$biblioteca->agregarLibro($libro2);

$biblioteca->listarLibros();

/*
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST ['titulo'];
    $autor = $_POST ['autor'];
    $precio = $_POST ['precio'];

    $libro = new Libro($titulo, $autor, $precio);
    $biblioteca = new Biblioteca ();

    $biblioteca->agregarLibro($libro);

    $biblioteca->listarLibros();
}
*/
?>