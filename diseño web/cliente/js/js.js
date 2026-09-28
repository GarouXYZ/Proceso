$("#aceptar").click(tomarDatos);

function tomarDatos (){
    let nombre = $("#nombre").val();
    let precio = Number($("#precio").val());

    $("#texto").html(nombre + " compro una computadora a U$S " + descuento(precio) + ".")
}

function descuento (precio) {
    if (precio > 1500) {
        return precio - 300;
    } else {
        return precio;
    }
}
