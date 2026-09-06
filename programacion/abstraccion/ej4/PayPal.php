<?php
class PayPal implements MetodoPago {
    public function pagar($monto){
        return "Se ha pagado la cantidad de: $" . $monto . " con PayPal.<br>";
    }

    public function devolver($monto){
        return "Se ha devuelto la cantidad de: $" . $monto . " con PayPal.<br>";
    }
}
?>