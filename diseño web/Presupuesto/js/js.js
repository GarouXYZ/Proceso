$("#aceptar").click(tomarDato);

function tomarDato(){
    let cantidadHoras = $("#horas").val();
    let cantidadDias = $("#dias").val();
    let usuario = $("#usuario").val();
    let costoMateriales = $("#costo").val();

    let costo = costoTotal(usuario, cantidadHoras, cantidadDias);
    let costoMaterial = costoTotalMateriales(costoMateriales);

    let total = costo + costoMaterial;

    $("#mensaje").html("El costo total es: $" + total);
}

function esPositivo(numero){
    if (numero > 0){
        return true;
    } else {
        return false;
    }
}

function costoTotal(usuario, cantidadHoras, cantidadDias){
    if (usuario == "No"){
        return 200 * cantidadDias * cantidadHoras;
    } else if (usuario == "Si"){
        return (200 + 150) * cantidadDias * cantidadHoras;
    } else {
        return 0;
    }
}

function costoTotalMateriales(costoMateriales){
    return costoMateriales * 1.10;
}