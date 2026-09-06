<?php
interface MetodoPago {
    public function pagar($monto);
    public function devolver($monto);
}
?>