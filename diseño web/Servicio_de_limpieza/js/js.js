$("#calcular").click(calcular);

function calcular() {
    let cantDias = Number($("#cantDias").val());
    let cantHoras = Number($("#cantHoras").val());
    let limpiezaProfunda = $("#limpiezaProfunda").val();
    let distancia = Number($("#distancia").val());

    let Servicio = costoServicio(cantDias, cantHoras, limpiezaProfunda)
    let Traslado = costoTraslado(distancia);

    let SubTotal = Servicio + Traslado;

    let total = costoSubTotal(SubTotal);

    $("#mensaje").html("Costo total de Limipieza: $" + Servicio + "<br>" +
                        "Costo total de Traslado: $" + Traslado + "<br>" +
                        "Total a pagar: $" + total);
}

let esPositivo = (numero) => {
    if (numero > 0) {
        return true;
    } else {
        return false;
    }
}

let costoServicio = (cantDias, cantHoras, limpiezaProfunda) => {
    let costo = 350 * cantDias * cantHoras;

    if (limpiezaProfunda == "Si") {
        costo = costo + (180 * cantDias);
    } 
    
    return costo;
}

let costoTraslado = (distancia) => {
    if (distancia > 10) {
        return 450;
    } else {
        return 0;
    }
}

let costoSubTotal = (costo) => {
    if (costo > 5000) {
        return costo * 0.92;
    } else {
        return costo;
    }
}