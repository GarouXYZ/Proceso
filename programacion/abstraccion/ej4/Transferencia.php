<?php
class Transferencia implements MetodoPago {
    public function pagar($monto){
        return "Se ha pagado la cantidad de: $" . $monto . " con transferencia.<br>";
    }

    public function devolver($monto){
        return "Se ha devuelto la cantidad de: $" . $monto . " con transferencia.<br>";
    }
}
?>