<?php
class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this ->nombre = $nombre;
        $this ->edad = $edad;
    }
    public function saludar(){
        echo "Hola, mi nombre es " . $this ->nombre . " y tengo " . $this ->edad . " años.";
    }
}
?>

<?php
require_once 'Persona.php';

$foo = new Persona("jose", 10);
$bar = new Persona ("pedro", 15);
$foobar = new Persona ("juan", 20);

$foo ->saludar ();
$bar ->saludar ();
$foobar ->saludar ();

?>
