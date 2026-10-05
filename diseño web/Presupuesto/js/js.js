$("#aceptar").click(tomarDato);

function tomarDato(){
    let cantidadHoras = Number($("#horas").val());
    let cantidadDias = Number($("#dias").val());
    let usuario = $("#usuario").val();
    let costoMateriales = Number($("#costo").val());

    if (!esPositivo(cantidadHoras) || !esPositivo(cantidadDias) || !esPositivo(costoMateriales)){
        $("#mensaje").html("Ingrese valores mayores a 0.");
        return;
    }
    
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
    } else {
        return (200 + 150) * cantidadDias * cantidadHoras;
    }
}

function costoTotalMateriales(costoMateriales){
    return costoMateriales * 1.10;
}