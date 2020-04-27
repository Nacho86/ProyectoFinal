
// Funcion para CREAR TABLAS MEDIANTE DOM
function crearTablasUsuarios(){
	
	let contenedor= document.createElement("div");
	contenedor.setAttribute('class', 'container-fluid');
	contenedor.setAttribute('id', 'prueba');
	let titulo= document.createElement("h1");
	titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
	let textoTitulo = document.createTextNode('CONTROL DE USUARIOS');
	let parrafoTitulo= document.createElement("p");
	parrafoTitulo.setAttribute('class', 'mb-4');
	let textoParrafo= document.createTextNode('Elimina, modifica o añade usuarios');
	let capa1=document.createElement("div");
	capa1.setAttribute('class', 'card shadow mb-4');
	let capa2=document.createElement("div");
	capa2.setAttribute('class', 'card-header py-3');
	let tituloCapas=document.createElement("h6");
	tituloCapas.setAttribute('class','m-0 font-weight-bold text-primary');
	let textoTituloCapas=document.createTextNode('Información de Usuarios');
	let cuerpo=document.createElement("div");
	cuerpo.setAttribute('class', 'card-body');
	let tablaResponsiva=document.createElement("div");
	tablaResponsiva.setAttribute('class', 'table-responsive');
	let tablas=document.createElement("table");
	tablas.setAttribute('class', 'table table-bordered');
	tablas.setAttribute('id', 'dataTable');
	tablas.setAttribute('width', '100%');
	tablas.setAttribute('cellspacing', '0');

	let principal=document.getElementsByClassName("marca");
	principal[0].appendChild(contenedor);
	contenedor.appendChild(titulo);
	titulo.appendChild(textoTitulo);
	contenedor.appendChild(parrafoTitulo);
	parrafoTitulo.appendChild(textoParrafo);
	contenedor.appendChild(capa1);
	capa1.appendChild(capa2);
	capa2.appendChild(tituloCapas);
	tituloCapas.appendChild(textoTituloCapas);
	capa1.appendChild(cuerpo);
	cuerpo.appendChild(tablaResponsiva);
	tablaResponsiva.appendChild(tablas);

}

// Funcion para ver los PACIENTES ACTIVOS
function verPacientesActivos(){
	crearTablasUsuarios();

	let httpRequest = new XMLHttpRequest();
        httpRequest.open('POST', '../consultas_ajax.php', true);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.onreadystatechange = function () {
            if (httpRequest.readyState === 4) {
                if (httpRequest.status === 200) {  	
                    document.getElementById('dataTable').innerHTML = httpRequest.responseText;
                }
            }
        };
        httpRequest.send('activos=');
}

// Funcion para ver los USUARIOS
function verUsuarios(){
	crearTablasUsuarios();

	let httpRequest = new XMLHttpRequest();
        httpRequest.open('POST', '../consultas_ajax.php', true);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.onreadystatechange = function () {
            if (httpRequest.readyState === 4) {
                if (httpRequest.status === 200) {
                    document.getElementById('dataTable').innerHTML = httpRequest.responseText;    
                }
            }
        };
        httpRequest.send('verUsuarios=');
}


//Funcion para CREAR NUEVO PACIENTE mediante DOM
function nuevoPaciente(){
	usuario = event.target.parentNode.parentNode.getElementsByTagName('td')[0].innerText;
	let contenedor= document.createElement("div");
	contenedor.setAttribute('class', 'container-fluid');
	contenedor.setAttribute('id', 'prueba');
	let titulo= document.createElement("h1");
	titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
	let textoTitulo = document.createTextNode('NUEVO PACIENTE');
	let parrafoTitulo= document.createElement("p");
	parrafoTitulo.setAttribute('class', 'mb-4');
	let textoParrafo= document.createTextNode('Crea un nuevo Paciente');
	let capa1=document.createElement("div");
	capa1.setAttribute('class', 'card shadow mb-4');
	let capa2=document.createElement("div");
	capa2.setAttribute('class', 'card-header py-3');
	let tituloCapas=document.createElement("h6");
	tituloCapas.setAttribute('class','m-0 font-weight-bold text-primary');
	let textoTituloCapas=document.createTextNode('Formulario de Ingreso');
	let cuerpo=document.createElement("div");
	cuerpo.setAttribute('class', 'card-body');

	let cuerpoFormulario=document.createElement("form");
	cuerpoFormulario.setAttribute('role', 'form');
	cuerpoFormulario.setAttribute('action', '../pacientes.php');
	cuerpoFormulario.setAttribute('method', 'post');

	let grupoFormulario=document.createElement("div");
	grupoFormulario.setAttribute('class', 'form-group');

	let label1=document.createElement("label");
	label1.setAttribute('for','img');
	let textLabel1=document.createTextNode('Fotografia');
	let input1=document.createElement("input");
	input1.setAttribute('type','file');
	input1.setAttribute('class','form-control-plaintext');
	input1.setAttribute('name','img');

	let label2=document.createElement("label");
	label2.setAttribute('for','telefono');
	let textLabel2=document.createTextNode('Telefono');
	let input2=document.createElement("input");
	input2.setAttribute('type','text');
	input2.setAttribute('class','form-control');
	input2.setAttribute('name','telefono');
	input2.setAttribute('required','true');


	let label3=document.createElement("label");
	label3.setAttribute('for','fecha');
	let textLabel3=document.createTextNode('Fecha de Nacimiento (año-mes-dia)');
	let input3=document.createElement("input");
	input3.setAttribute('type','text');
	input3.setAttribute('class','form-control');
	input3.setAttribute('name','fecha');
	input3.setAttribute('required','true');


	let label4=document.createElement("label");
	label4.setAttribute('for','direccion');
	let textLabel4=document.createTextNode('Dirección');
	let input4=document.createElement("input");
	input4.setAttribute('type','text');
	input4.setAttribute('class','form-control');
	input4.setAttribute('name','direccion');
	input4.setAttribute('required','true');


	let label5=document.createElement("label");
	label5.setAttribute('for','DNI');
	let textLabel5=document.createTextNode('DNI');
	let input5=document.createElement("input");
	input5.setAttribute('type','text');
	input5.setAttribute('class','form-control');
	input5.setAttribute('name','DNI');
	input5.setAttribute('required','true');

	let botonEnvio=document.createElement("button");
	botonEnvio.setAttribute('type','submit');
	botonEnvio.setAttribute('class', 'btn btn-primary');
	botonEnvio.setAttribute('id', 'button');
	let textBotonEnvio=document.createTextNode('CREAR PACIENTE');
	let br=document.createElement("br");


	let principal=document.getElementsByClassName("marca");
	principal[0].appendChild(contenedor);
	contenedor.appendChild(titulo);
	titulo.appendChild(textoTitulo);
	contenedor.appendChild(parrafoTitulo);
	parrafoTitulo.appendChild(textoParrafo);
	contenedor.appendChild(capa1);
	capa1.appendChild(capa2);
	capa2.appendChild(tituloCapas);
	tituloCapas.appendChild(textoTituloCapas);
	capa1.appendChild(cuerpo);
	cuerpo.appendChild(cuerpoFormulario);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(label1);
	label1.appendChild(textLabel1);
	grupoFormulario.appendChild(input1);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(label2);
	label2.appendChild(textLabel2);
	grupoFormulario.appendChild(input2);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(label3);
	label3.appendChild(textLabel3);
	grupoFormulario.appendChild(input3);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(label4);
	label4.appendChild(textLabel4);
	grupoFormulario.appendChild(input4);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(label5);
	label5.appendChild(textLabel5);
	grupoFormulario.appendChild(input5);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(br);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(botonEnvio);
	botonEnvio.appendChild(textBotonEnvio);
}

//Funcion para BORRAR LAS CAPAS CREADAS PARA AVISOS mediante DOM
 function borrarCapas(evento) {
        document.getElementById("capa1").parentNode.removeChild(evento.target);
    }

// Funcion para BORRAR lo que este hecho por DOM
function borrarMarca(evento){
	document.getElementById('prueba').parentNode.removeChild(document.getElementById('prueba'));

}

//Funcion para VENTANA DE AVISO mediante DOM
function eliminarUsuario(){
	let cuerpo = document.createElement("div");
        cuerpo.setAttribute('id', 'capa1');
        let pagina = document.createElement("div");
        pagina.setAttribute('id', 'capa2');
        cuerpo.onclick= borrarCapas; 
        document.body.appendChild(cuerpo);
        cuerpo.appendChild(pagina);
        let br=document.createElement("br");
        pagina.appendChild(br);
        usuario = event.target.parentNode.parentNode.getElementsByTagName('td')[0].innerText;
        let parrafo = document.createElement('p');
        parrafo.setAttribute('align', 'center');
        let texto = document.createTextNode("Ha seleccionado eliminar el usuario "+usuario+".");
        parrafo.appendChild(texto);
        let parrafo2 = document.createElement('p');
        parrafo2.setAttribute('align', 'center');
        let texto2 = document.createTextNode("¿Desea continuar?");
        parrafo2.appendChild(texto2);
        let div_btn = document.createElement('div');
        div_btn.setAttribute('class', 'trans');
        let btn1 = document.createElement('input');
        btn1.setAttribute('type', 'button');
        btn1.setAttribute('class', 'btn btn-primary btn-responsive btninter centrado ');
        btn1.setAttribute('id', 'aceptar');
        btn1.setAttribute('value', 'Aceptar');
        let btn2 = document.createElement('input');
        btn2.setAttribute('type', 'button');
        btn2.setAttribute('class', 'btn btn-danger btn-responsive btninter right centrado');
        btn2.setAttribute('id', 'cancelar');
        btn2.setAttribute('value', 'Cancelar');
        div_btn.appendChild(btn1);
        div_btn.appendChild(btn2);
        pagina.appendChild(parrafo);
        pagina.appendChild(parrafo2);
        pagina.appendChild(div_btn);
      

        document.getElementById('aceptar').onclick = confirmarDelete;
        document.getElementById('cancelar').onclick = cancelarDelete;

}
//Funcion para ELIMINAR EL USUARIO mediante DOM
    function confirmarDelete() {
        let httpRequest = new XMLHttpRequest();
        httpRequest.open('POST', '../consultas_ajax.php', true);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.onreadystatechange = function () {
            if (httpRequest.readyState === 4) {
                if (httpRequest.status === 200) {
                  		alert("Se ha eliminado el usuario sin problemas");
                        document.getElementById('capa2').parentNode.removeChild(document.getElementById('capa2'));
                       	document.getElementById('capa1').parentNode.removeChild(document.getElementById('capa1'));
                    } else {
                    	alert("Ha habido un error al eliminar el usuario.");
                }
            }
        };
        httpRequest.send('delete_user=' + usuario);
    }

  function cancelarDelete() {
        document.getElementById('capa1').parentNode.removeChild(document.getElementById('capa1'));
        document.getElementById('capa2').parentNode.removeChild(document.getElementById('capa2'));
    }


//Funcion para CREAR NUEVO ARTICULO mediante DOM
function nuevoArticulo(){
	let contenedor= document.createElement("div");
	contenedor.setAttribute('class', 'container-fluid');
	contenedor.setAttribute('id', 'prueba');
	let titulo= document.createElement("h1");
	titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
	let textoTitulo = document.createTextNode('NUEVO ARTICULO');
	let parrafoTitulo= document.createElement("p");
	parrafoTitulo.setAttribute('class', 'mb-4');
	let textoParrafo= document.createTextNode('Crea un nuevo articulo');
	let capa1=document.createElement("div");
	capa1.setAttribute('class', 'card shadow mb-4');
	let capa2=document.createElement("div");
	capa2.setAttribute('class', 'card-header py-3');
	let tituloCapas=document.createElement("h6");
	tituloCapas.setAttribute('class','m-0 font-weight-bold text-primary');
	let textoTituloCapas=document.createTextNode('Estructura del articulo ');
	let cuerpo=document.createElement("div");
	cuerpo.setAttribute('class', 'card-body');
	let cuerpoFormulario=document.createElement("form");
	cuerpoFormulario.setAttribute('role', 'form');
	cuerpoFormulario.setAttribute('action', '../pacientes.php');
	cuerpoFormulario.setAttribute('method', 'post');

//Crea los grupos del Formulario
	let grupoFormulario=document.createElement("div");
	grupoFormulario.setAttribute('class', 'form-group');

// Parte del TITULO
	let label1=document.createElement("label");
	label1.setAttribute('for','titulo');
	let textLabel1=document.createTextNode('TITULO');
	let input1=document.createElement("input");
	input1.setAttribute('type','text');
	input1.setAttribute('class','form-control');
	input1.setAttribute('name','img');
	input1.setAttribute('required','true');

// Parte del RESUMEN
	let label2=document.createElement("label");
	label2.setAttribute('for','resumen');
	let textLabel2=document.createTextNode('RESUMEN');
	let input2=document.createElement("textarea");
	input2.setAttribute('type','text');
	input2.setAttribute('class','form-control');
	input2.setAttribute('name','resumen');
	input2.setAttribute('required','true');

// Parte del IMAGEN
	let label3=document.createElement("label");
	label3.setAttribute('for','img');
	let textLabel3=document.createTextNode('IMAGEN');
	let input3=document.createElement("input");
	input3.setAttribute('type','file');
	input3.setAttribute('class','form-control-plaintext');
	input3.setAttribute('name','img');

// Parte del CONTENIDO
	let label4=document.createElement("label");
	label4.setAttribute('for','contenido');
	let textLabel4=document.createTextNode('CONTENIDO');
	let input4=document.createElement("div");
	input4.setAttribute('type','text');
	input4.setAttribute('id','summernote');
	input4.setAttribute('class','form-control');
	input4.setAttribute('name','contenido');
	input4.setAttribute('required','true');

// Parte del CATEGORIA 1
	let label5=document.createElement("label");
	label5.setAttribute('for','cat1');
	let textLabel5=document.createTextNode('CATEGORIA 1');
	let input5=document.createElement("input");
	input5.setAttribute('type','text');
	input5.setAttribute('class','form-control');
	input5.setAttribute('name','cat1');


	// Parte del CATEGORIA 2
	let label6=document.createElement("label");
	label6.setAttribute('for','cat2');
	let textLabel6=document.createTextNode('CATEGORIA 2');
	let input6=document.createElement("input");
	input6.setAttribute('type','text');
	input6.setAttribute('class','form-control');
	input6.setAttribute('name','cat2');

	let botonEnvio=document.createElement("button");
	botonEnvio.setAttribute('type','submit');
	botonEnvio.setAttribute('class', 'btn btn-primary');
	botonEnvio.setAttribute('id', 'button');
	let textBotonEnvio=document.createTextNode('CREAR ARTICULO');
	let br=document.createElement("br");


	let principal=document.getElementsByClassName("marca");
	principal[0].appendChild(contenedor);
	contenedor.appendChild(titulo);
	titulo.appendChild(textoTitulo);
	contenedor.appendChild(parrafoTitulo);
	parrafoTitulo.appendChild(textoParrafo);
	contenedor.appendChild(capa1);
	capa1.appendChild(capa2);
	capa2.appendChild(tituloCapas);
	tituloCapas.appendChild(textoTituloCapas);
	capa1.appendChild(cuerpo);
	cuerpo.appendChild(cuerpoFormulario);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(label1);
	label1.appendChild(textLabel1);
	grupoFormulario.appendChild(input1);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(label2);
	label2.appendChild(textLabel2);
	grupoFormulario.appendChild(input2);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(label3);
	label3.appendChild(textLabel3);
	grupoFormulario.appendChild(input3);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(label4);
	label4.appendChild(textLabel4);
	grupoFormulario.appendChild(input4);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(label5);
	label5.appendChild(textLabel5);
	grupoFormulario.appendChild(input5);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(label6);
	label6.appendChild(textLabel6);
	grupoFormulario.appendChild(input6);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(br);

	cuerpoFormulario.appendChild(grupoFormulario);
	grupoFormulario.appendChild(botonEnvio);
	botonEnvio.appendChild(textBotonEnvio);
}