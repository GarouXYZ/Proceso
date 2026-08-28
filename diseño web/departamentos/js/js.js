$('#aceptar').click(departamento);

function departamento (){

    let codigo = ($("#codigo").val());

    if (codigo == "A") {
        $('#mensaje').html("Canelones")
    } else if (codigo == "B") {
        $('#mensaje').html("Maldonado")
    } else if (codigo == "C") {
        $('#mensaje').html("Rocha")
    } else if (codigo == "D") {
        $('#mensaje').html("Treinta y Tres")
    } else if (codigo == "E") {
        $('#mensaje').html("Cerro Largo")
    } else if (codigo == "F") {
        $('#mensaje').html("Rivera")
    } else if (codigo == "G") {
        $('#mensaje').html("Artigas")
    } else if (codigo == "H") {
        $('#mensaje').html("Salto")
    } else if (codigo == "I") {
        $('#mensaje').html("Paysandú")
    } else if (codigo == "J") {
        $('#mensaje').html("Río Negro")
    } else if (codigo == "K") {
        $('#mensaje').html("Soriano")
    } else if (codigo == "L") {
        $('#mensaje').html("Colonia")
    } else if (codigo == "M") {
        $('#mensaje').html("San José")
    } else if (codigo == "N") {
        $('#mensaje').html("Flores")
    } else if (codigo == "O") {
        $('#mensaje').html("Florida")
    } else if (codigo == "P") {
        $('#mensaje').html("Lavalleja")
    } else if (codigo == "Q") {
        $('#mensaje').html("Durazno")
    } else if (codigo == "R") {
        $('#mensaje').html("Tacuarembó")
    } else if (codigo == "S") {
        $('#mensaje').html("Montevideo")
    }  else {
        $('#mensaje').html("Este codigo no es valido")
    }
}