function vacios() {

            var campo1 = document.getElementById("txtnomb").value;
            var campo2 = document.getElementById("txtcontra").value;

            if (campo1==="") {
                alert("Enter a User");
                return false;
            }else if (campo2==="") {
             alert("Enter a Password");
                return false;
            }
}

function coche(){
    var campo1 = document.getElementById("txtplaca").value;
    var campo2 = document.getElementById("txtmodelo").value;

            if (campo1==="") {
                alert("Enter a Plate Number");
                return false;
            }else if (campo2==="") {
             alert("Enter a Car Model");
                return false;
            }
}

function vacio() {

    var campo1 = document.getElementById("txtUsuario").value;
    var campo2 = document.getElementById("txtContra").value;

    if (campo1==="") {
        alert("Enter a User");
        return false;
    }else if (campo2==="") {
     alert("Enter a Password");
        return false;
    }
}

function vacioss() {

    var campo1 = document.getElementById("txtnombre").value;
    var campo2 = document.getElementById("txtnumber").value;

    if (campo1==="") {
        alert("Enter a service name");
        return false;
    }else if (campo2==="") {
     alert("Enter the phone number");
        return false;
    }
}