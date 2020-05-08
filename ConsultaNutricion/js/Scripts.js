//Funcion para cambio de idioma
function cambioIdioma(evento) {

    let httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", "idioma.php", true);
    httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpRequest.onreadystatechange = function () {


        if (httpRequest.readyState == 4) {
            location.reload(true);
        }
    }
    httpRequest.send("idioma=" + evento.target.id);
}

//Funcion de Login 
function sitio(evento) {
    let httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", "consultas_ajax.php", true);
    httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpRequest.onreadystatechange = function () {


        if (httpRequest.readyState == 4) {

            if (httpRequest.responseText == "A") {
                location.replace("administrador/index.php");
            } else if (httpRequest.responseText == "U") {
                location.replace("index.php");
            } else {
                location.reload(true);
            }
        }
    }
    us = [];
    us.push(document.getElementById("correo").value, document.getElementById("passw").value);
    httpRequest.send("correolg=" + JSON.stringify(us));

}

function checkSubmit() {
    document.getElementById("sendMessageButton").disabled = true;
    Swal.fire(
        'Tu mensaje ha sido enviado!',
        'Recibiras una respuesta en 24/72 horas!'
    )

}
function bloquearBoton(){
    if (document.getElementById("formPassw").style.backgroundColor == "lightgreen" && document.getElementById("formPasswRepeat").style.backgroundColor == "lightgreen" && document.getElementById("formNombre").style.backgroundColor == "lightgreen" && document.getElementById("formCorreo").style.backgroundColor == "lightgreen"){
        document.getElementById("button").disabled = false;
    } else{
        document.getElementById("button").disabled = true;
    }

}
function comprobarPassw(evento) {
    if (document.getElementById("formPassw").value.length >= 1 && document.getElementById("formPasswRepeat").value.length >= 1) {
        if (document.getElementById("formPassw").value == document.getElementById("formPasswRepeat").value || document.getElementById("formPasswRepeat").value == document.getElementById("formPassw").value) {

            document.getElementById("formPassw").style.backgroundColor = "lightgreen";
            document.getElementById("formPasswRepeat").style.backgroundColor = "lightgreen";

        } else {

            document.getElementById("formPassw").style.backgroundColor = "tomato";
            document.getElementById("formPasswRepeat").style.backgroundColor = "tomato";
        }
    } else {
        document.getElementById("formPassw").style.backgroundColor = "white";
        document.getElementById("formPasswRepeat").style.backgroundColor = "white";
    }
    bloquearBoton();
}

function comprobarNom(evento) {
    let regNombre = /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/;
    if (document.getElementById("formNombre").value.length >= 1) {

        if (regNombre.test(document.getElementById("formNombre").value) == false) {
            document.getElementById("formNombre").style.backgroundColor = "tomato";

        } else {
            document.getElementById("formNombre").style.backgroundColor = "lightgreen";

        }
    } else {
        document.getElementById("formNombre").style.backgroundColor = "white";
    }
    bloquearBoton();
}

function validarEmail(evento) {
    let regCorreo = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/;

    if (document.getElementById("formCorreo").value.length >= 1) {

        if (regCorreo.test(document.getElementById("formCorreo").value) == true) {
          document.getElementById("formCorreo").style.backgroundColor = "lightgreen";

        } else {
            document.getElementById("formCorreo").style.backgroundColor = "tomato";

        }
    } else {
        document.getElementById("formCorreo").style.backgroundColor = "white";
    }
    bloquearBoton();
}

function comprobarFormulario(){

    let httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", "consultas_ajax.php", true);
    httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState == 4) {
            if (httpRequest.responseText == "no existe") {
                Swal.fire({
                    title: 'El usuario se ha registrado satisfactoriamente',
                    icon: 'succes'

                });
                document.getElementById('enviarForm').submit();
            } else {
                Swal.fire({
                    title: 'El correo que intentas utilizar ya esta registrado',
                    icon: 'warning'
                });
            }

        }

    }
    httpRequest.send("comprobar=" + document.getElementById('formCorreo').value);
}


