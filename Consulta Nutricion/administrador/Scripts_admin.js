
// Funcion para crear mediante DOM las tablas donde podremos ver la informacion de los usuarios
function CrearTablasUsuarios(){
	
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
	capa1.appendChild(cuerpo);
	cuerpo.appendChild(tablaResponsiva);
	tablaResponsiva.appendChild(tablas);

	let httpRequest = new XMLHttpRequest();
        httpRequest.open('POST', '../consultas_ajax.php', true);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.onreadystatechange = function () {
            if (httpRequest.readyState === 4) {
                if (httpRequest.status === 200) {
                	
                    document.getElementById('dataTable').innerHTML = httpRequest.responseText;
                    for (let i = 0; i < document.getElementsByName('eliminar_usuario').length; i++) {
                        document.getElementsByName('eliminar_usuario')[i].onclick = confirmarEliminar;
                    }
                }
            }
        };
        httpRequest.send('nombre=');

     

}
// Funcion para Borrar lo que este hecho por DOM
function borrarMarca(){
	document.getElementById('prueba').parentNode.removeChild(document.getElementById('prueba'));

}
