$("#aceptar").click(tomarDatos);

function tomarDatos (){
    let nombre = $("#nombre").val();
    let anio = Number($("#anio").val());

    $("#texto").html("En 2027 " + nombre + " tendra " + calcularEdaden2027(anio) + " anios.");
    $("#texto2").html(nombre + esMayordeEdad(anio));
}

function calcularEdaden2027(anio){
    return 2027 - anio;
}

function esMayordeEdad(anio){
    let edad = 2025 - anio;
    
    if (edad >= 18){
        return " es mayor de edad.";
    } else {
        return " es menor de edad.";
    }
}