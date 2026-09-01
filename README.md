# Proceso
Aca van a ir todas las cosas que haga de programacion y todo eso
<?php
abstract class Figura {

    private String $nombre;

    public function __construct(String $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }
    
    abstract public function calcularArea();

}
?>

<?php
class Cuadrado extends Figura {
    private int $Lado;

    public function __construct(String $nombre,int $Lado,) {
        parent::__construct($nombre);
        $this->Lado = $Lado;
    }

    public function calcularArea(){
        return $Area = $this->$Lado * $this->$Lado;
    }
}
?>



<?php
class Rectangulo extends Figura {
    private int $Base;
    private int $Altura;

    public function __construct(String $nombre,int $Base, int $Altura) {
        parent::__construct($nombre);
        $this->Base = $Base;
        $this->Altura = $Altura;
    }

    public function calcularArea(int $Base, int $Altura, int $Lado){
        $this->Base = $Base;
        $this->Altura = $Altura;

        return $Base * $Altura;
        }
}
?>



<?php
require_once ('figura.php');
require_once ('cuadrado.php');
require_once ('rectangulo.php');

$cuadrado = new Cuadrado("Cuadrado", 5);
$rectangulo = new Rectangulo("Rectángulo", 10, 4);

echo $cuadrado->getNombre();
echo $cuadrado->calcularArea(1,2,3);
    
echo $rectangulo->getNombre();
echo $rectangulo->calcularArea();


?>
