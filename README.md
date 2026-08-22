# Proceso
Aca van a ir todas las cosas que haga de programacion y todo eso

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="number" placeholder="Numero 1" id="numero1" required>
    <br>
    <input type="number" placeholder="Numero 2" id="numero2" required>

    <br>

    <input type="button" value="Aceptar" id="aceptar">

    <p id="mensaje"></p>

    <script src="js/jquery-4.0.0.js"></script>
    <script src="js/archivo.js"></script>
</body>
</html>

$("#aceptar").click(sumar);

function sumar(){
    let num1 = Number ($("#numero1").val());
    let num2 = Number ($("#numero2").val());

    if (num1 > num2) {
        $("#mensaje").html("El primer numero es mayor");
    } else if (num2 > num1) {
        $("#mensaje").html("El segundo numero es mayor");
    } else {
        $("#mensaje").html("Los numeros son iguales"); 
    }
}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Plan Viajero</title>
</head>

<body>
    <h1>Plan Viajero</h1>

    <form class="contenedor">

        <label>Cantidad de millas:
        <input type="number" id="millas" placeholder="Ingrese las millas">
        </label>
        <br>
        <label>¿Plan Plus?
        <select id="plan">
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>
        </label>
        <br>

        <button type="button" id="aceptar">Aceptar</button>

        <p id="mensaje"></p>
    </form>

    <script src="js/jquery-4.0.0.js"></script>
    <script src="js/archivo.js"></script>

</body>
</html>


$("#aceptar").click(plan);

function plan(){
    let millas = Number ($("#millas").val());
    let planp = ($("#plan").val());

    if (planp == "si") {
        millas = millas * 2;
    } 

    if (millas >= 15000 && millas < 30000) {
        $("#mensaje").html("<p class='naranja'>Puede viajar a america del sur.</p>");
    } else if (millas >= 30000 && millas < 60000) {
        $("#mensaje").html("<p class='azul'>Puede viajar a america del norte.</p>");
    } else if (millas >= 60000){
        $("#mensaje").html("<p class='verde'>Puede viajar a europa.</p>"); 
    } else {
        $("#mensaje").html("<p class='rojo'>No puede viajar.</p>"); 
    }
}

.naranja {
    color: orange;
}

.azul {
    color: blue;
}

.verde {
    color: green;
}

.rojo {
    color: red;
}
