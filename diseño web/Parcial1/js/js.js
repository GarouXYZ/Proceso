$("#calcular").click(tomarDatos);

    function tomarDatos() {
        let nombre = $("#nombre").val();
        let horas = Number($("#horas").val());
        let iluminacion = $("#iluminacion").val();

        if (!validator(nombre)) {
            $("#texto").html("Por favor, ingrese un nombre válido.");
            return;
        }

        let costoConLuz = conIluminacion(horas, iluminacion);

        let total = descuento(costoConLuz, horas);

        $("#texto").html(nombre + ", el total a pagar es $" + total);
    }

    function validator(nombre) {
        if (nombre === "") {
            return false;
        } else {
            return true;
        }
    }

    function conIluminacion(horas, iluminacion) {
        let costo = horas * 400;

        if (iluminacion === "Sí") {
            return costo + 300;
        } else {
            return costo;
        }
    }

    function descuento(costo, horas) {
        if (horas >= 3) {
            return costo - 200;
        } else {
            return costo;
        }
    }

/*
$("#calcular").click(tomarDatos);

    function tomarDatos() {
        let nombre = $("#nombre").val();
        let horas = Number($("#horas").val());
        let iluminacion = $("#iluminacion").val();

        let total = conIluminacion + descuento;

        $("#texto").html(nombre + ", el total a pagar es $" + total);
    }

    function validator(nombre) {
        if (nombre = "") {
            return false;
        } else {
            return true;
        }
    }

    function conIluminacion(horas, iluminacion) {
        let costo = horas * 400;

        if (iluminacion = "Sí") {
            return costo + 300;
        } else {
            return costo;
        }
    }

    function descuento(costo, horas) {
        if (horas >= 3) {
            return costo - 200;
        } else {
            return costo;
        }
    }
*/