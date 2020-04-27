
//Funcion para cambio de idioma
function cambioIdioma(evento){

        let httpRequest= new XMLHttpRequest();
        httpRequest.open("POST","idioma.php",true);
        httpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        httpRequest.onreadystatechange=function(){


            if (httpRequest.readyState==4){
                location.reload(true);
            }
        }
        httpRequest.send("idioma="+evento.target.id);
    }

//Funcion de Login 
     function sitio(evento){
        let httpRequest= new XMLHttpRequest();
        httpRequest.open("POST","consultas_ajax.php",true);
        httpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        httpRequest.onreadystatechange=function(){


            if (httpRequest.readyState==4){

              if (httpRequest.responseText== "A") {
                  location.replace("administrador/index.php");
              }else if (httpRequest.responseText== "U"){
                  location.replace("index.php");
              } else{
                  location.reload(true);
              }
            }
        }
        us=[];
        us.push(document.getElementById("correo").value, document.getElementById("passw").value);
        httpRequest.send("correolg="+JSON.stringify(us));

    }