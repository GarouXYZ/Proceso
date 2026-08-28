$("#aceptar").click(interes);

function interes(){ 

    let ingresos = Number ($("#ingresos").val());
    let preciocasa = Number ($("#preciocasa").val());      

    let cuotainicial;
    let cuota;

    if (ingresos < 20000) {
        cuotainicial = preciocasa * 0.15;
        cuota = (preciocasa * 0.85) / 84;
    } else {
        cuotainicial = preciocasa * 0.30;
        cuota = (preciocasa * 0.70) / 12;
    }

    $('#mensaje').html(
        "Primer pago: $" + cuotainicial.toFixed(1) +
        "<br>Pago Mensual: $" + cuota.toFixed(1)
    );
}

