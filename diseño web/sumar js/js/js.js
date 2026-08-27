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