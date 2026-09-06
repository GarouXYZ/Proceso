<?php
require_once 'MetodoPago.php';
require_once 'Tarjeta.php';
require_once 'PayPal.php';
require_once 'Transferencia.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo de pago</title>
</head>
<body>
    <h1>Metodo de pago</h1>

    <form method="POST">
        <label>Operacion:  
            <select name="operacion" required >
                <option value="pagar">Pagar</option>
                <option value="devolver">Devolver</option>
            </select>
        </label>

        <br><br>
        
        <label>Monto: 
            <input type="number" name="monto" required>
        </label>
        
        <br><br>

        <label>Metodo de pago:
            <select name="metodoElegido" required>
                <option value="tarjeta">Tarjeta</option>
                <option value="paypal">PayPal</option>
                <option value="transferencia">Transferencia</option>
            </select>
        </label>

        <br><br>
        
        <button type="submit">Confirmar</button>
    </form>

    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $monto = $_POST["monto"];
            $operacion = $_POST["operacion"];
            $metodoElegido = $_POST["metodoElegido"];

            $metodos = [
                "tarjeta" => new Tarjeta(),
                "paypal" => new PayPal(),
                "transferencia" => new Transferencia()
            ];

            $metodo = $metodos[$metodoElegido];

            if ($operacion == "pagar") {
                echo $metodo->pagar($monto);
            }

            if ($operacion == "devolver") {
            echo $metodo->devolver($monto);

            }

        }
        ?>
    </div>
</body>
</html>
