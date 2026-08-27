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