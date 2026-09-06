<?php
class Tarjeta implements MetodoPago{
    public function pagar($monto){
        return "Se ha pagado la cantidad de: $" . $monto . " con tarjeta.<br>";
    }

    public function devolver($monto){
        return "Se ha devuelto la cantidad de: $" . $monto . " con tarjeta.<br>";
    }
}
?>