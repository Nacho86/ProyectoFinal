// Funcion para BORRAR lo que este hecho por DOM
function borrarMarcaCalendario(evento) {
    if (document.getElementById('marcaCalendario')) {
        document.getElementById('marcaCalendario').parentNode.removeChild(document.getElementById('marcaCalendario'));
    }
}

// Funcion para ver los PACIENTES ACTIVOS
function verPacientesActivos() {
    borrarMarca();
    borrarMarcaCalendario();

    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('PACIENTES ACTIVOS');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('MODIFICA O ELIMINA LOS USUARIOS ACTIVOS');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Información de Usuarios');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let tablaResponsiva = document.createElement("div");
    tablaResponsiva.setAttribute('class', 'table-responsive');
    let tablas = document.createElement("table");
    tablas.setAttribute('class', 'table table-bordered');
    tablas.setAttribute('id', 'dataTable');
    tablas.setAttribute('width', '100%');
    tablas.setAttribute('cellspacing', '0');

    let principal = document.getElementsByClassName("marca");
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
function verUsuarios() {

    borrarMarca();
    borrarMarcaCalendario();

    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('GESTIÓN DE USUARIOS');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('AÑADE PACIENTES O ELIMINA LOS USUARIOS CREADOS');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Información de Usuarios');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let tablaResponsiva = document.createElement("div");
    tablaResponsiva.setAttribute('class', 'table-responsive');
    let tablas = document.createElement("table");
    tablas.setAttribute('class', 'table table-bordered');
    tablas.setAttribute('id', 'dataTable');
    tablas.setAttribute('width', '100%');
    tablas.setAttribute('cellspacing', '0');

    let principal = document.getElementsByClassName("marca");
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

// Funcion para ver a que USUARIO se le hace la ANAMNESIS

function verUsuariosAnamnesis() {

    borrarMarca();
    borrarMarcaCalendario();

    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('ANAMNESIS');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('CREACION DE ANAMNESIS');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Información de Usuarios');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let tablaResponsiva = document.createElement("div");
    tablaResponsiva.setAttribute('class', 'table-responsive');
    let tablas = document.createElement("table");
    tablas.setAttribute('class', 'table table-bordered');
    tablas.setAttribute('id', 'dataTable');
    tablas.setAttribute('width', '100%');
    tablas.setAttribute('cellspacing', '0');

    let principal = document.getElementsByClassName("marca");
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
    httpRequest.send('verUsuariosAnamesis=');


}

function verUsuariosRevisiones() {
    borrarMarca();
    borrarMarcaCalendario();

    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('REVISIONES');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('CREA O VISUALIZA REVISIONES');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Información de Usuarios');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let tablaResponsiva = document.createElement("div");
    tablaResponsiva.setAttribute('class', 'table-responsive');
    let tablas = document.createElement("table");
    tablas.setAttribute('class', 'table table-bordered');
    tablas.setAttribute('id', 'dataTable');
    tablas.setAttribute('width', '100%');
    tablas.setAttribute('cellspacing', '0');

    let principal = document.getElementsByClassName("marca");
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
    httpRequest.send('verUsuariosRevisiones=');

}

//Funcion para CREAR NUEVO PACIENTE mediante DOM
function nuevoPaciente(id) {
    borrarMarca();
    borrarMarcaCalendario();
    usuario = event.target.parentNode.parentNode.getElementsByTagName('td')[0].innerText;
    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('NUEVO PACIENTE');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('CREA UN NUEVO PACIENTE');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Formulario de Ingreso');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');

    let cuerpoFormulario = document.createElement("form");
    cuerpoFormulario.setAttribute('role', 'form');
    cuerpoFormulario.setAttribute('action', '../pacientes.php');
    cuerpoFormulario.setAttribute('method', 'post');
    cuerpoFormulario.setAttribute('enctype', 'multipart/form-data');

    let grupoFormulario = document.createElement("div");
    grupoFormulario.setAttribute('class', 'form-group');

    let label1 = document.createElement("label");
    label1.setAttribute('for', 'img');
    let textLabel1 = document.createTextNode('Fotografia');
    let input1 = document.createElement("input");
    input1.setAttribute('type', 'file');
    input1.setAttribute('class', 'form-control-plaintext');
    input1.setAttribute('name', 'img');

    let label2 = document.createElement("label");
    label2.setAttribute('for', 'telefono');
    let textLabel2 = document.createTextNode('Telefono');
    let input2 = document.createElement("input");
    input2.setAttribute('type', 'text');
    input2.setAttribute('class', 'form-control');
    input2.setAttribute('name', 'telefono');
    input2.setAttribute('required', 'true');

    let inputInvis = document.createElement('input');
    inputInvis.setAttribute('type', 'hidden');
    inputInvis.setAttribute('name', 'num_Usuario');
    inputInvis.setAttribute('value', id);


    let label3 = document.createElement("label");
    label3.setAttribute('for', 'fecha');
    let textLabel3 = document.createTextNode('Fecha de Nacimiento ');
    let input3 = document.createElement("input");
    input3.setAttribute('type', 'date');
    input3.setAttribute('class', 'form-control glyphicon glyphicon-th');
    input3.setAttribute('name', 'fecha');
    input3.setAttribute('required', 'true');
    input3.setAttribute('style', 'width: 180px');


    let label4 = document.createElement("label");
    label4.setAttribute('for', 'direccion');
    let textLabel4 = document.createTextNode('Dirección');
    let input4 = document.createElement("input");
    input4.setAttribute('type', 'text');
    input4.setAttribute('class', 'form-control');
    input4.setAttribute('name', 'direccion');
    input4.setAttribute('required', 'true');


    let label5 = document.createElement("label");
    label5.setAttribute('for', 'DNI');
    let textLabel5 = document.createTextNode('DNI');
    let input5 = document.createElement("input");
    input5.setAttribute('type', 'text');
    input5.setAttribute('class', 'form-control');
    input5.setAttribute('name', 'DNI');
    input5.setAttribute('required', 'true');

    let botonEnvio = document.createElement("button");
    botonEnvio.setAttribute('type', 'submit');
    botonEnvio.setAttribute('class', 'btn btn-primary');
    botonEnvio.setAttribute('id', 'button');
    let textBotonEnvio = document.createTextNode('CREAR PACIENTE');
    let br = document.createElement("br");


    let principal = document.getElementsByClassName("marca");
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
    grupoFormulario.appendChild(inputInvis);

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

// Funcion para BORRAR lo que este hecho por DOM
function borrarMarca(evento) {
    if (document.getElementById('prueba')) {
        document.getElementById('prueba').parentNode.removeChild(document.getElementById('prueba'));
    }
}

//Funcion para ELIMINAR Usuario
function eliminarUsuario(id) {
    Swal.fire({
        title: 'Eliminar el usuario ?',
        text: 'Seguro que quiere eliminar el usuario seleccionado?',
        icon: 'warning',
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            let httpRequest = new XMLHttpRequest();
            httpRequest.open('POST', '../consultas_ajax.php', true);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.onreadystatechange = function () {
                if (httpRequest.readyState === 4) {
                    if (httpRequest.status === 200) {
                        Swal.fire(
                            'Enhorabuena!',
                            'El Usuario seleccionado ha sido eliminado',
                            'success'
                        );
                        verUsuarios();
                    }
                }
            };
            httpRequest.send('eliminarUsuario=' + id);
        }
    })
}

//Funcion para ELIMINAR PACIENTE
function eliminarPaciente(id) {
    Swal.fire({
        title: 'Eliminar el paciente ?',
        text: 'Seguro que quiere eliminar el paciente seleccionado?',
        icon: 'warning',
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            let httpRequest = new XMLHttpRequest();
            httpRequest.open('POST', '../consultas_ajax.php', true);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.onreadystatechange = function () {
                if (httpRequest.readyState === 4) {
                    if (httpRequest.status === 200) {
                        Swal.fire(
                            'Enhorabuena!',
                            'El Paciente seleccionado ha sido eliminado',
                            'success'
                        );
                        verUsuarios();
                    }
                }
            };
            httpRequest.send('delete_paciente=' + id);
        }
    })
}

//Funcion para CREAR NUEVO ARTICULO mediante DOM
function nuevoArticulo() {
    borrarMarca();
    borrarMarcaCalendario();
    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('NUEVO ARTICULO');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('CREA UN NUEVO ARTICULO');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Estructura del articulo ');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let cuerpoFormulario = document.createElement("form");
    cuerpoFormulario.setAttribute('role', 'form');
    cuerpoFormulario.setAttribute('action', '../articulos.php');
    cuerpoFormulario.setAttribute('method', 'post');
    cuerpoFormulario.setAttribute('enctype', 'multipart/form-data');

    //Crea los grupos del Formulario
    let grupoFormulario = document.createElement("div");
    grupoFormulario.setAttribute('class', 'form-group');

    // Parte del TITULO
    let label1 = document.createElement("label");
    label1.setAttribute('for', 'titulo');
    let textLabel1 = document.createTextNode('TITULO');
    let input1 = document.createElement("input");
    input1.setAttribute('type', 'text');
    input1.setAttribute('class', 'form-control');
    input1.setAttribute('name', 'titulo');
    input1.setAttribute('required', 'true');

    // Parte del RESUMEN
    let label2 = document.createElement("label");
    label2.setAttribute('for', 'resumen');
    let textLabel2 = document.createTextNode('RESUMEN');
    let input2 = document.createElement("textarea");
    input2.setAttribute('type', 'text');
    input2.setAttribute('class', 'form-control');
    input2.setAttribute('name', 'resumen');
    input2.setAttribute('required', 'true');

    // Parte del IMAGEN
    let label3 = document.createElement("label");
    label3.setAttribute('for', 'img');
    let textLabel3 = document.createTextNode('IMAGEN');
    let input3 = document.createElement("input");
    input3.setAttribute('type', 'file');
    input3.setAttribute('class', 'form-control-plaintext');
    input3.setAttribute('name', 'img');

    // Parte del CONTENIDO
    let label4 = document.createElement("label");
    label4.setAttribute('for', 'contenido');
    let textLabel4 = document.createTextNode('CONTENIDO');
    let input4 = document.createElement("textarea");
    input4.setAttribute('id', 'editor');
    input4.setAttribute('class', 'form-control');
    input4.setAttribute('name', 'contenido');
    input4.setAttribute('required', 'true');

    // Parte del CATEGORIA 1
    let label5 = document.createElement("label");
    label5.setAttribute('for', 'cat1');
    let textLabel5 = document.createTextNode('CATEGORIA 1');
    let input5 = document.createElement("input");
    input5.setAttribute('type', 'text');
    input5.setAttribute('class', 'form-control');
    input5.setAttribute('name', 'cat1');


    // Parte del CATEGORIA 2
    let label6 = document.createElement("label");
    label6.setAttribute('for', 'cat2');
    let textLabel6 = document.createTextNode('CATEGORIA 2');
    let input6 = document.createElement("input");
    input6.setAttribute('type', 'text');
    input6.setAttribute('class', 'form-control');
    input6.setAttribute('name', 'cat2');

    let botonEnvio = document.createElement("button");
    botonEnvio.setAttribute('type', 'submit');
    botonEnvio.setAttribute('class', 'btn btn-primary');
    botonEnvio.setAttribute('id', 'button');
    let textBotonEnvio = document.createTextNode('CREAR ARTICULO');
    let br = document.createElement("br");


    let principal = document.getElementsByClassName("marca");
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

    $('#editor').trumbowyg({
        autogrow: true
    });
}

//Funcion para crear GESTION DE LOS ARTICULOS
function gestionArticulo() {
    borrarMarca();
    borrarMarcaCalendario();
    crearTablasArticulos();

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
    httpRequest.send('articles=');
}

//Funcion para crear TABLA DE ARTICULOS
function crearTablasArticulos() {
    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('CONTROL DE ARTICULOS');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('ELIMINA O EDITA ARTICULOS');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Artículos');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let tablaResponsiva = document.createElement("div");
    tablaResponsiva.setAttribute('class', 'table-responsive');
    let tablas = document.createElement("table");
    tablas.setAttribute('class', 'table table-bordered');
    tablas.setAttribute('id', 'dataTable');
    tablas.setAttribute('width', '100%');
    tablas.setAttribute('cellspacing', '0');

    let principal = document.getElementsByClassName("marca");
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

//Crea y hace UPDATE DE LOS ARTICULOS
function modificarArticulo(id) {
    let httpRequest = new XMLHttpRequest();
    httpRequest.open('POST', '../consultas_ajax.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === 4) {
            if (httpRequest.status === 200) {
                borrarMarca();
                let articulo = JSON.parse(httpRequest.responseText);
                let contenedor = document.createElement("div");
                contenedor.setAttribute('class', 'container-fluid');
                contenedor.setAttribute('id', 'prueba');
                let titulo = document.createElement("h1");
                titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
                let textoTitulo = document.createTextNode('MODIFICA ARTICULO');
                let parrafoTitulo = document.createElement("p");
                parrafoTitulo.setAttribute('class', 'mb-4');
                let textoParrafo = document.createTextNode('MODIFICA EL ARTICULO');
                let capa1 = document.createElement("div");
                capa1.setAttribute('class', 'card shadow mb-4');
                let capa2 = document.createElement("div");
                capa2.setAttribute('class', 'card-header py-3');
                let tituloCapas = document.createElement("h6");
                tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
                let textoTituloCapas = document.createTextNode('Estructura del articulo ');
                let cuerpo = document.createElement("div");
                cuerpo.setAttribute('class', 'card-body');
                let cuerpoFormulario = document.createElement("form");
                cuerpoFormulario.setAttribute('role', 'form');
                cuerpoFormulario.setAttribute('action', '../articulos.php');
                cuerpoFormulario.setAttribute('method', 'post');
                cuerpoFormulario.setAttribute('enctype', 'multipart/form-data');

//Crea los grupos del Formulario
                let grupoFormulario = document.createElement("div");
                grupoFormulario.setAttribute('class', 'form-group');

// Parte del TITULO
                let label1 = document.createElement("label");
                label1.setAttribute('for', 'titulo');
                let textLabel1 = document.createTextNode('TITULO');
                let input1 = document.createElement("input");
                input1.setAttribute('type', 'text');
                input1.setAttribute('class', 'form-control');
                input1.setAttribute('name', 'titulo');
                input1.setAttribute('required', 'true');
                input1.setAttribute('value', articulo['titulo']);

// Parte del RESUMEN
                let label2 = document.createElement("label");
                label2.setAttribute('for', 'resumen');
                let textLabel2 = document.createTextNode('RESUMEN');
                let input2 = document.createElement("textarea");
                input2.setAttribute('type', 'text');
                input2.setAttribute('class', 'form-control');
                input2.setAttribute('name', 'resumen');
                input2.setAttribute('required', 'true');
                input2.innerText = articulo['resumen'];


// Parte del IMAGEN
                let label3 = document.createElement("label");
                label3.setAttribute('for', 'img');
                let textLabel3 = document.createTextNode('IMAGEN');
                let input3 = document.createElement("input");
                input3.setAttribute('type', 'file');
                input3.setAttribute('class', 'form-control-plaintext');
                input3.setAttribute('name', 'img');

// Parte del CONTENIDO
                let label4 = document.createElement("label");
                label4.setAttribute('for', 'contenido');
                let textLabel4 = document.createTextNode('CONTENIDO');
                let input4 = document.createElement("textarea");
                input4.setAttribute('id', 'editor');
                input4.setAttribute('class', 'form-control');
                input4.setAttribute('name', 'contenido');
                input4.setAttribute('required', 'true');
                input4.innerText = articulo['contenido'];

// Parte del CATEGORIA 1
                let label5 = document.createElement("label");
                label5.setAttribute('for', 'cat1');
                let textLabel5 = document.createTextNode('CATEGORIA 1');
                let input5 = document.createElement("input");
                input5.setAttribute('type', 'text');
                input5.setAttribute('class', 'form-control');
                input5.setAttribute('name', 'cat1');
                input5.setAttribute('value', articulo['cat1']);


// Parte del CATEGORIA 2
                let label6 = document.createElement("label");
                label6.setAttribute('for', 'cat2');
                let textLabel6 = document.createTextNode('CATEGORIA 2');
                let input6 = document.createElement("input");
                input6.setAttribute('type', 'text');
                input6.setAttribute('class', 'form-control');
                input6.setAttribute('name', 'cat2');
                input6.setAttribute('value', articulo['cat2']);

                let input7 = document.createElement('input');
                input7.setAttribute('type', 'hidden');
                input7.setAttribute('name', 'ID_art');
                input7.setAttribute('value', articulo['ID_art']);

                let botonEnvio = document.createElement("button");
                botonEnvio.setAttribute('type', 'submit');
                botonEnvio.setAttribute('class', 'btn btn-primary');
                botonEnvio.setAttribute('id', 'button');
                botonEnvio.setAttribute('onclick', 'editArticle(' + articulo['ID_art'] + ')');
                let textBotonEnvio = document.createTextNode('GUARDAR ARTICULO');
                let br = document.createElement("br");


                let principal = document.getElementsByClassName("marca");
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
                grupoFormulario.appendChild(input7);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(br);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(botonEnvio);
                botonEnvio.appendChild(textBotonEnvio);


                $('#editor').trumbowyg({
                    autogrow: true
                });
            }
        }
    };
    httpRequest.send('getArticle=' + id);
}

//Crea y hace UPDATE DE LOS PACIENTES
function modificarPaciente(id) {

    let httpRequest = new XMLHttpRequest();
    httpRequest.open('POST', '../consultas_ajax.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === 4) {
            if (httpRequest.status === 200) {
                borrarMarca();

                let paciente = JSON.parse(httpRequest.responseText);
                let contenedor = document.createElement("div");
                contenedor.setAttribute('class', 'container-fluid');
                contenedor.setAttribute('id', 'prueba');
                let titulo = document.createElement("h1");
                titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
                let textoTitulo = document.createTextNode('MODIFICA PACIENTE');
                let parrafoTitulo = document.createElement("p");
                parrafoTitulo.setAttribute('class', 'mb-4');
                let textoParrafo = document.createTextNode('MODIFICA LOS DATOS DEL PACIENTE');
                let capa1 = document.createElement("div");
                capa1.setAttribute('class', 'card shadow mb-4');
                let capa2 = document.createElement("div");
                capa2.setAttribute('class', 'card-header py-3');
                let tituloCapas = document.createElement("h6");
                tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
                let textoTituloCapas = document.createTextNode('Formulario de Ingreso');
                let cuerpo = document.createElement("div");
                cuerpo.setAttribute('class', 'card-body');

                let cuerpoFormulario = document.createElement("form");
                cuerpoFormulario.setAttribute('role', 'form');
                cuerpoFormulario.setAttribute('action', '../pacientes.php');
                cuerpoFormulario.setAttribute('method', 'post');
                cuerpoFormulario.setAttribute('enctype', 'multipart/form-data');

                let grupoFormulario = document.createElement("div");
                grupoFormulario.setAttribute('class', 'form-group');

                let label1 = document.createElement("label");
                label1.setAttribute('for', 'img');
                let textLabel1 = document.createTextNode('Fotografia');
                let input1 = document.createElement("input");
                input1.setAttribute('type', 'file');
                input1.setAttribute('class', 'form-control-plaintext');
                input1.setAttribute('name', 'img');

                let label2 = document.createElement("label");
                label2.setAttribute('for', 'telefono');
                let textLabel2 = document.createTextNode('Telefono');
                let input2 = document.createElement("input");
                input2.setAttribute('type', 'text');
                input2.setAttribute('class', 'form-control');
                input2.setAttribute('name', 'telefono');
                input2.setAttribute('required', 'true');
                input2.setAttribute('value', paciente['telefono']);


                let label3 = document.createElement("label");
                label3.setAttribute('for', 'fecha');
                let textLabel3 = document.createTextNode('Fecha de Nacimiento ');
                let input3 = document.createElement("input");
                input3.setAttribute('type', 'date');
                input3.setAttribute('class', 'form-control glyphicon glyphicon-th');
                input3.setAttribute('name', 'fecha_nacimiento');
                input3.setAttribute('required', 'true');
                input3.setAttribute('style', 'width: 180px');
                input3.setAttribute('value', paciente['fecha_nacimiento']);


                let label4 = document.createElement("label");
                label4.setAttribute('for', 'direccion');
                let textLabel4 = document.createTextNode('Dirección');
                let input4 = document.createElement("input");
                input4.setAttribute('type', 'text');
                input4.setAttribute('class', 'form-control');
                input4.setAttribute('name', 'direccion');
                input4.setAttribute('required', 'true');
                input4.setAttribute('value', paciente['direccion']);


                let label5 = document.createElement("label");
                label5.setAttribute('for', 'DNI');
                let textLabel5 = document.createTextNode('DNI');
                let input5 = document.createElement("input");
                input5.setAttribute('type', 'text');
                input5.setAttribute('class', 'form-control');
                input5.setAttribute('name', 'DNI');
                input5.setAttribute('required', 'true');
                input5.setAttribute('value', paciente['DNI']);

                let input6 = document.createElement('input');
                input6.setAttribute('type', 'hidden');
                input6.setAttribute('name', 'ID_paciente');
                input6.setAttribute('value', paciente['ID_paciente']);

                let input7 = document.createElement('input');
                input7.setAttribute('type', 'hidden');
                input7.setAttribute('name', 'num_Usuario');
                input7.setAttribute('value', paciente['num_Usuario']);


                let botonEnvio = document.createElement("button");
                botonEnvio.setAttribute('type', 'submit');
                botonEnvio.setAttribute('class', 'btn btn-primary');
                botonEnvio.setAttribute('id', 'button');
                botonEnvio.setAttribute('onclick', 'editPaciente(' + paciente['ID_paciente'] + ')');
                let textBotonEnvio = document.createTextNode('GUARDAR PACIENTE');
                let br = document.createElement("br");


                let principal = document.getElementsByClassName("marca");
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
                grupoFormulario.appendChild(input6);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(input7);


                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(br);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(botonEnvio);
                botonEnvio.appendChild(textBotonEnvio);
            }

        }
    };
    httpRequest.send('getPaciente=' + id);

}

//Funcion para ELIMINAR ARTICULO
function eliminarArticulo(id) {
    Swal.fire({
        title: 'Eliminar articulo?',
        text: 'Seguro que quiere eliminar el artículo seleccionado?',
        icon: 'warning',
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            let httpRequest = new XMLHttpRequest();
            httpRequest.open('POST', '../consultas_ajax.php', true);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.onreadystatechange = function () {
                if (httpRequest.readyState === 4) {
                    if (httpRequest.status === 200) {
                        Swal.fire(
                            'Enhorabuena!',
                            'El artículo seleccionado ha sido eliminado',
                            'success'
                        );
                        gestionArticulo();
                    }
                }
            };
            httpRequest.send('removeArticle=' + id);
        }
    })
}

//Funcion para CREAR NUEVA ANAMNESIS
function nuevaAnamnesis(id) {
    borrarMarca();

    //letra en negrita
    let b = document.createElement("b");
    let b2 = document.createElement("b");
    let b3 = document.createElement("b");
    let b4 = document.createElement("b");
    let b5 = document.createElement("b");
    let b6 = document.createElement("b");
    let b7 = document.createElement("b");
    let b8 = document.createElement("b");
    let b9 = document.createElement("b");


    //salto de linea
    let br = document.createElement("br");

//Aqui empieza a montarse

    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('ANAMNESIS');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('CREACIÓN DE ANAMNESIS');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Estructura de la anamnesis ');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let cuerpoFormulario = document.createElement("form");
    cuerpoFormulario.setAttribute('role', 'form');
    cuerpoFormulario.setAttribute('action', '../anamnesis.php');
    cuerpoFormulario.setAttribute('method', 'post');
    cuerpoFormulario.setAttribute('enctype', 'multipart/form-data');

    //Crea los grupos del Formulario
    let grupoFormulario = document.createElement("div");
    grupoFormulario.setAttribute('class', 'form-group');


    let tituloMotivoConsulta = document.createElement("h3");
    let textTituloMotivoConsulta = document.createTextNode("MOTIVO CONSULTA");

    //Crea el MOTIVO DE LA CONSULTA
    let motivoConsultalabel = document.createElement("label");
    motivoConsultalabel.setAttribute('for', 'MotivoConsulta');
    let textMotivoConsulta = document.createTextNode('Motivo por el que acude a la consulta:');
    let motivoConsulta = document.createElement("textarea");
    motivoConsulta.setAttribute('type', 'text');
    motivoConsulta.setAttribute('class', 'form-control');
    motivoConsulta.setAttribute('name', 'motivoConsulta');

    //Crea el PROPOSITO A CONSEGUIIR
    let propositosConseguirlabel = document.createElement("label");
    propositosConseguirlabel.setAttribute('for', 'propositosConseguir');
    let textPropositosConseguir = document.createTextNode('Propositos a conseguir:');
    let propositosConseguir = document.createElement("textarea");
    propositosConseguir.setAttribute('type', 'text');
    propositosConseguir.setAttribute('class', 'form-control');
    propositosConseguir.setAttribute('name', 'propositosConseguir');

    //Crea el MOTIVO DE ACUDIR
    let motivoAcudirlabel = document.createElement("label");
    motivoAcudirlabel.setAttribute('for', 'motivoAcudir');
    let textMotivoAcudir = document.createTextNode('El motivo de acudir a la consulta es:');
    let motivoAcudir = document.createElement("input");
    motivoAcudir.setAttribute('type', 'text');
    motivoAcudir.setAttribute('class', 'form-control');
    motivoAcudir.setAttribute('name', 'motivoAcudir');

    //Crea DIETAS ANTERIORES
    let dietasAnterioreslabel = document.createElement("label");
    dietasAnterioreslabel.setAttribute('for', 'dietasAnteriores');
    let textDietasAnteriores = document.createTextNode('¿Has hecho dieta anteriormente?');
    let dietasAnteriores = document.createElement("input");
    dietasAnteriores.setAttribute('type', 'text');
    dietasAnteriores.setAttribute('class', 'form-control');
    dietasAnteriores.setAttribute('name', 'dietasAnteriores');

    //Crea LAS OSCILACIONES DE PESO
    let oscilacionesPesolabel = document.createElement("label");
    oscilacionesPesolabel.setAttribute('for', 'oscilacionesPeso');
    let textOscilacionesPeso = document.createTextNode('Detalla las oscilaciones de peso:');
    let oscilacionesPeso = document.createElement("input");
    oscilacionesPeso.setAttribute('type', 'text');
    oscilacionesPeso.setAttribute('class', 'form-control');
    oscilacionesPeso.setAttribute('name', 'oscilacionesPeso');

    //Crea SI SUPUSO ESFUERZO
    let supusoEsfuerzolabel = document.createElement("label");
    supusoEsfuerzolabel.setAttribute('for', 'supusoEsfuerzo');
    let textSupusoEsfuerzo = document.createTextNode('¿Le supuso mucho esfuerzo?');
    let supusoEsfuerzo = document.createElement("input");
    supusoEsfuerzo.setAttribute('type', 'text');
    supusoEsfuerzo.setAttribute('class', 'form-control');
    supusoEsfuerzo.setAttribute('name', 'supusoEsfuerzo');

    //Crea el MOTIVO DE ABANDONO
    let motivoAbandonolabel = document.createElement("label");
    motivoAbandonolabel.setAttribute('for', 'motivoAbandono');
    let textMotivoAbandono = document.createTextNode('¿Cual fue la causa o motivo de abandono?');
    let motivoAbandono = document.createElement("input");
    motivoAbandono.setAttribute('type', 'text');
    motivoAbandono.setAttribute('class', 'form-control');
    motivoAbandono.setAttribute('name', 'motivoAbandono');

    //Crea DESDE CUANDO HACE DIETA
    let desdeDietalabel = document.createElement("label");
    desdeDietalabel.setAttribute('for', 'desdeDieta');
    let textDesdeDieta = document.createTextNode('¿Desde cuando lleva haciendo dieta?');
    let desdeDieta = document.createElement("textarea");
    desdeDieta.setAttribute('type', 'text');
    desdeDieta.setAttribute('class', 'form-control');
    desdeDieta.setAttribute('name', 'desdeDieta');

    //Crea QUE TIPO DE DIETA
    let tipoDietalabel = document.createElement("label");
    tipoDietalabel.setAttribute('for', 'tipoDieta');
    let textTipoDieta = document.createTextNode('¿Que tipo de dieta era?');
    let tipoDieta = document.createElement("textarea");
    tipoDieta.setAttribute('type', 'text');
    tipoDieta.setAttribute('class', 'form-control');
    tipoDieta.setAttribute('name', 'tipoDieta');

    //Crea BENEFICIOS PERSONALES
    let beneficiosPersonaleslabel = document.createElement("label");
    beneficiosPersonaleslabel.setAttribute('for', 'beneficiosPersonales');
    let textBeneficiosPersonales = document.createTextNode('¿Que beneficios personales (psicologicos, familiares, salud, entre otros) obtendras si consigues llegar a tu meta?');
    let beneficiosPersonales = document.createElement("textarea");
    beneficiosPersonales.setAttribute('type', 'text');
    beneficiosPersonales.setAttribute('class', 'form-control');
    beneficiosPersonales.setAttribute('name', 'beneficiosPersonales');

    //Crea la HISTORIA CLINICA
    let tituloHistoriaClinica = document.createElement("h3");
    let textTituloHistoriaClinica = document.createTextNode("HISTORIA CLÍNICA");

    //Crea PATOLOGIAS ACTUALES
    let patologiasActualeslabel = document.createElement("label");
    patologiasActualeslabel.setAttribute('for', 'patologiasActuales');
    let textPatologiasActuales = document.createTextNode(' Patologías actuales:');
    let patologiasActuales = document.createElement("input");
    patologiasActuales.setAttribute('type', 'text');
    patologiasActuales.setAttribute('class', 'form-control');
    patologiasActuales.setAttribute('name', 'patologiasActuales');

    //VALORES OBTENIDOS EN LA ANALÍTICA:
    let obtenidoEnAnaliticalabel = document.createElement("label");
    let textObtenidoEnAnalitica = document.createTextNode('Valores obtenidos en la analítica:');

    //Crea BIOQUIMICOS: TG;
    let bioquimicosTGlabel = document.createElement("label");
    bioquimicosTGlabel.setAttribute('for', 'bioquimicosTG');
    let textBioquimicosTG = document.createTextNode('Bioquimicos: TG;');
    let bioquimicosTG = document.createElement("input");
    bioquimicosTG.setAttribute('type', 'text');
    bioquimicosTG.setAttribute('class', 'form-control');
    bioquimicosTG.setAttribute('name', 'bioquimicosTG');

    //Crea GLUCOSA
    let glucosalabel = document.createElement("label");
    glucosalabel.setAttribute('for', 'glucosa');
    let textGlucosa = document.createTextNode('glucosa:');
    let glucosa = document.createElement("input");
    glucosa.setAttribute('type', 'text');
    glucosa.setAttribute('class', 'form-control');
    glucosa.setAttribute('name', 'glucosa');

    //Crea Fe
    let Felabel = document.createElement("label");
    Felabel.setAttribute('for', 'Fe');
    let textFe = document.createTextNode('Fe:');
    let Fe = document.createElement("input");
    Fe.setAttribute('type', 'text');
    Fe.setAttribute('class', 'form-control');
    Fe.setAttribute('name', 'Fe');

    //Crea VCM
    let VCMlabel = document.createElement("label");
    VCMlabel.setAttribute('for', 'VCM');
    let textVCM = document.createTextNode('VCM: ');
    let VCM = document.createElement("input");
    VCM.setAttribute('type', 'text');
    VCM.setAttribute('class', 'form-control');
    VCM.setAttribute('name', 'VCM');

    //Crea TSH
    let TSHlabel = document.createElement("label");
    TSHlabel.setAttribute('for', 'TSH');
    let textTSH = document.createTextNode('Bioquimicos: ');
    let TSH = document.createElement("input");
    TSH.setAttribute('type', 'text');
    TSH.setAttribute('class', 'form-control');
    TSH.setAttribute('name', 'TSH');

    //Crea TRANSAMINASAS
    let transaminasaslabel = document.createElement("label");
    transaminasaslabel.setAttribute('for', 'transaminasas');
    let textTransaminasas = document.createTextNode('Transaminasas: ');
    let transaminasas = document.createElement("input");
    transaminasas.setAttribute('type', 'text');
    transaminasas.setAttribute('class', 'form-control');
    transaminasas.setAttribute('name', 'transaminasas');

    //Crea UREA
    let Urealabel = document.createElement("label");
    Urealabel.setAttribute('for', 'Urea');
    let textUrea = document.createTextNode('Urea: ');
    let Urea = document.createElement("input");
    Urea.setAttribute('type', 'text');
    Urea.setAttribute('class', 'form-control');
    Urea.setAttribute('name', 'Urea');

    //Crea CREATINA
    let creatinalabel = document.createElement("label");
    creatinalabel.setAttribute('for', 'creatina');
    let textCreatina = document.createTextNode('creatina: ');
    let creatina = document.createElement("input");
    creatina.setAttribute('type', 'text');
    creatina.setAttribute('class', 'form-control');
    creatina.setAttribute('name', 'creatina');

    //Crea COLESTEROL
    let colesterollabel = document.createElement("label");
    colesterollabel.setAttribute('for', 'colesterol');
    let textColesterol = document.createTextNode('Colesterol: ');
    let colesterol = document.createElement("input");
    colesterol.setAttribute('type', 'text');
    colesterol.setAttribute('class', 'form-control');
    colesterol.setAttribute('name', 'colesterol');

    //Crea RESTRICCIONES
    let restriccioneslabel = document.createElement("label");
    restriccioneslabel.setAttribute('for', 'restricciones');
    let textRestricciones = document.createTextNode('Restricciones:');
    let restricciones = document.createElement("textarea");
    restricciones.setAttribute('type', 'text');
    restricciones.setAttribute('class', 'form-control');
    restricciones.setAttribute('name', 'restricciones');

    //Crea CAUSAS PATOLOGÍAS
    let causasPatologicaslabel = document.createElement("label");
    causasPatologicaslabel.setAttribute('for', 'causasPatologicas');
    let textCausasPatologicas = document.createTextNode('Causa del origen de la patología:');
    let causasPatologicas = document.createElement("textarea");
    causasPatologicas.setAttribute('type', 'text');
    causasPatologicas.setAttribute('class', 'form-control');
    causasPatologicas.setAttribute('name', 'causasPatologicas');

    //Crea OTRAS PATOLOGIAS
    let otrasPatologiaslabel = document.createElement("label");
    otrasPatologiaslabel.setAttribute('for', 'otrasPatologias');
    let textOtrasPatologias = document.createTextNode('Otras patologías:');
    let otrasPatologias = document.createElement("textarea");
    otrasPatologias.setAttribute('type', 'text');
    otrasPatologias.setAttribute('class', 'form-control');
    otrasPatologias.setAttribute('name', 'otrasPatologias');

    //Crea ANTECEDENTES
    let antecedenteslabel = document.createElement("label");
    antecedenteslabel.setAttribute('for', 'antecedentes');
    let textAntecedentes = document.createTextNode('Antecedentes:');
    let antecedentes = document.createElement("textarea");
    antecedentes.setAttribute('type', 'text');
    antecedentes.setAttribute('class', 'form-control');
    antecedentes.setAttribute('name', 'antecedentes');

    //Crea ANALITICA
    let analiticalabel = document.createElement("label");
    analiticalabel.setAttribute('for', 'analitica');
    let textAnalitica = document.createTextNode('Analítica');
    let analitica = document.createElement("input");
    analitica.setAttribute('type', 'file');
    analitica.setAttribute('class', 'form-control-plaintext');
    analitica.setAttribute('name', 'analitica');

    //Crea OPERACIONES
    let operacioneslabel = document.createElement("label");
    operacioneslabel.setAttribute('for', 'operaciones');
    let textOperaciones = document.createTextNode('Operaciones: ');
    let operaciones = document.createElement("input");
    operaciones.setAttribute('type', 'text');
    operaciones.setAttribute('class', 'form-control');
    operaciones.setAttribute('name', 'operaciones');

    //Crea CAUSAS OPERACIONES
    let causasOperacioneslabel = document.createElement("label");
    causasOperacioneslabel.setAttribute('for', 'causasOperaciones');
    let textCausasOperaciones = document.createTextNode('Causas de las Operaciones: ');
    let causasOperaciones = document.createElement("input");
    causasOperaciones.setAttribute('type', 'text');
    causasOperaciones.setAttribute('class', 'form-control');
    causasOperaciones.setAttribute('name', 'causasOperaciones');

    //Crea TOMAS FARMACOS
    let tomasFarmacoslabel = document.createElement("label");
    tomasFarmacoslabel.setAttribute('for', 'tomasFarmacos');
    let textTomasFarmacos = document.createTextNode('Tomas algún Fármacos, suplementos, laxantes: ');
    let tomasFarmacos = document.createElement("input");
    tomasFarmacos.setAttribute('type', 'text');
    tomasFarmacos.setAttribute('class', 'form-control');
    tomasFarmacos.setAttribute('name', 'tomasFarmacos');

    //Crea DEPOSICIONES
    let deposicioneslabel = document.createElement("label");
    deposicioneslabel.setAttribute('for', 'deposiciones');
    let textDeposiciones = document.createTextNode('Frecuencia de las deposiciones: ');
    let deposiciones = document.createElement("input");
    deposiciones.setAttribute('type', 'text');
    deposiciones.setAttribute('class', 'form-control');
    deposiciones.setAttribute('name', 'deposiciones');

    //Crea ALERGIAS
    let alergiaslabel = document.createElement("label");
    alergiaslabel.setAttribute('for', 'alergias');
    let textAlergias = document.createTextNode('Alergias: ');
    let alergias = document.createElement("input");
    alergias.setAttribute('type', 'text');
    alergias.setAttribute('class', 'form-control');
    alergias.setAttribute('name', 'alergias');

    //Crea INTOLERANCIAS
    let intoleranciaslabel = document.createElement("label");
    intoleranciaslabel.setAttribute('for', 'intolerancias');
    let textIntolerancias = document.createTextNode('Intolerancias: ');
    let intolerancias = document.createElement("input");
    intolerancias.setAttribute('type', 'text');
    intolerancias.setAttribute('class', 'form-control');
    intolerancias.setAttribute('name', 'intolerancias');

    //Crea MENSTRUACION
    let menstruacionlabel = document.createElement("label");
    menstruacionlabel.setAttribute('for', 'menstruacion');
    let textMenstruacion = document.createTextNode('Menstruación (Regularidad, Abundante o normal, ¿Que se suele encontrar?, Tto. Hormonal, Embarazo, Peso aumentado en el embarazo, Complicaciones en el embarazo, Número de lactancias, Menopausia): ');
    let menstruacion = document.createElement("textarea");
    menstruacion.setAttribute('type', 'text');
    menstruacion.setAttribute('class', 'form-control');
    menstruacion.setAttribute('name', 'menstruacion');

    //HISTORIA FAMILIAR, SOCIAL Y DE OCIO
    let tituloHistoriaFamiliar = document.createElement("h3");
    let textTituloHistoriaFamiliar = document.createTextNode("HISTORIA FAMILIAR, SOCIAL Y DE OCIO");

    //Crea TIEMPO LIBRE
    let tiempoLibrelabel = document.createElement("label");
    tiempoLibrelabel.setAttribute('for', 'tiempoLibre');
    let textTiempoLibre = document.createTextNode('¿Que haces en tu tiempo libre? ');
    let tiempoLibre = document.createElement("input");
    tiempoLibre.setAttribute('type', 'text');
    tiempoLibre.setAttribute('class', 'form-control');
    tiempoLibre.setAttribute('name', 'tiempoLibre');

    //Crea QUIEN VIVES
    let quienViveslabel = document.createElement("label");
    quienViveslabel.setAttribute('for', 'quienVives');
    let textQuienVives = document.createTextNode('¿Con quién vives? ');
    let quienVives = document.createElement("input");
    quienVives.setAttribute('type', 'text');
    quienVives.setAttribute('class', 'form-control');
    quienVives.setAttribute('name', 'quienVives');

    //Crea QUIEN COCINA
    let quienCocinalabel = document.createElement("label");
    quienCocinalabel.setAttribute('for', 'quienCocina');
    let textQuienCocina = document.createTextNode('¿Quién cocina? ');
    let quienCocina = document.createElement("input");
    quienCocina.setAttribute('type', 'text');
    quienCocina.setAttribute('class', 'form-control');
    quienCocina.setAttribute('name', 'quienCocina');

    //Crea ACTIVIDAD FISICA
    let actividadFisicalabel = document.createElement("label");
    actividadFisicalabel.setAttribute('for', 'actividadFisica');
    let textActividadFisica = document.createTextNode('¿Haces actividad fisica? ');
    let actividadFisica = document.createElement("textarea");
    actividadFisica.setAttribute('type', 'text');
    actividadFisica.setAttribute('class', 'form-control');
    actividadFisica.setAttribute('name', 'actividadFisica');

    //Crea QUE LE GUSTA HACER
    let gustaHacerlabel = document.createElement("label");
    gustaHacerlabel.setAttribute('for', 'gustaHacer');
    let textGustaHacer = document.createTextNode('Sino hace deporte, ¿Qué te gusta hacer? ');
    let gustaHacer = document.createElement("input");
    gustaHacer.setAttribute('type', 'text');
    gustaHacer.setAttribute('class', 'form-control');
    gustaHacer.setAttribute('name', 'gustaHacer');

    //Crea PONER PROPOSITO
    let pondriaPropositolabel = document.createElement("label");
    pondriaPropositolabel.setAttribute('for', 'pondriaProposito');
    let textPondriaProposito = document.createTextNode('Respecto a la pregunta anterior, ¿Se lo pondría como proposito? ');
    let pondriaProposito = document.createElement("input");
    pondriaProposito.setAttribute('type', 'text');
    pondriaProposito.setAttribute('class', 'form-control');
    pondriaProposito.setAttribute('name', 'pondriaProposito');

    //Crea A QUE TE DEDICAS
    let dedicaslabel = document.createElement("label");
    dedicaslabel.setAttribute('for', 'dedicas');
    let textDedicas = document.createTextNode('¿A qué te dedicas? ');
    let dedicas = document.createElement("input");
    dedicas.setAttribute('type', 'text');
    dedicas.setAttribute('class', 'form-control');
    dedicas.setAttribute('name', 'dedicas');

    //Crea HORARIO
    let horariolabel = document.createElement("label");
    horariolabel.setAttribute('for', 'horario');
    let textHorario = document.createTextNode('¿Horario laboral?¿Turnos? ');
    let horario = document.createElement("input");
    horario.setAttribute('type', 'text');
    horario.setAttribute('class', 'form-control');
    horario.setAttribute('name', 'horario');

    //Crea DESPLAZAMIENTO
    let desplazamientolabel = document.createElement("label");
    desplazamientolabel.setAttribute('for', 'desplazamiento');
    let textDesplazamiento = document.createTextNode('¿Como se desplaza al trabajo? ');
    let desplazamiento = document.createElement("input");
    desplazamiento.setAttribute('type', 'text');
    desplazamiento.setAttribute('class', 'form-control');
    desplazamiento.setAttribute('name', 'desplazamiento');

    //Crea DONDE COME
    let dondeComelabel = document.createElement("label");
    dondeComelabel.setAttribute('for', 'dondeCome');
    let textDondeCome = document.createTextNode('Lugar donde come: ');
    let dondeCome = document.createElement("input");
    dondeCome.setAttribute('type', 'text');
    dondeCome.setAttribute('class', 'form-control');
    dondeCome.setAttribute('name', 'dondeCome');

    //Crea HORAS DUERME
    let horasDuermelabel = document.createElement("label");
    horasDuermelabel.setAttribute('for', 'horasDuerme');
    let textHorasDuerme = document.createTextNode('¿Cuantas horas duerme normalmente? ');
    let horasDuerme = document.createElement("input");
    horasDuerme.setAttribute('type', 'text');
    horasDuerme.setAttribute('class', 'form-control');
    horasDuerme.setAttribute('name', 'horasDuerme');

    //Crea HABITOS TOXICOS
    let habitosToxicoslabel = document.createElement("label");
    habitosToxicoslabel.setAttribute('for', 'habitosToxicos');
    let textHabitosToxicos = document.createTextNode('Habitos toxicos (Tabaco, Alcohol, Café):');
    let habitosToxicos = document.createElement("input");
    habitosToxicos.setAttribute('type', 'text');
    habitosToxicos.setAttribute('class', 'form-control');
    habitosToxicos.setAttribute('name', 'habitosToxicos');

    let tituloHistoriaDietetica = document.createElement("h3");
    let textTituloHistoriaDietetica = document.createTextNode("HISTORIA DIETÉTICA");

    let recordatoriolabel = document.createElement("label");
    let textRecordatorio = document.createTextNode("RECORDATORIO 24H");


    //Crea DESAYUNO
    let desayunolabel = document.createElement("label");
    desayunolabel.setAttribute('for', 'desayuno');
    let textDesayuno = document.createTextNode('Tomas en el desayuno:');
    let desayuno = document.createElement("textarea");
    desayuno.setAttribute('type', 'text');
    desayuno.setAttribute('class', 'form-control');
    desayuno.setAttribute('name', 'desayuno');

    //Crea ALMUERZO
    let almuerzolabel = document.createElement("label");
    almuerzolabel.setAttribute('for', 'almuerzo');
    let textAlmuerzo = document.createTextNode('Tomas en el almuerzo:');
    let almuerzo = document.createElement("textarea");
    almuerzo.setAttribute('type', 'text');
    almuerzo.setAttribute('class', 'form-control');
    almuerzo.setAttribute('name', 'almuerzo');

    //Crea COMIDA
    let comidalabel = document.createElement("label");
    comidalabel.setAttribute('for', 'comida');
    let textComida = document.createTextNode('Tomas en la comida:');
    let comida = document.createElement("textarea");
    comida.setAttribute('type', 'text');
    comida.setAttribute('class', 'form-control');
    comida.setAttribute('name', 'comida');

    //Crea MERIENDA
    let meriendalabel = document.createElement("label");
    meriendalabel.setAttribute('for', 'merienda');
    let textMerienda = document.createTextNode('Tomas en la merienda:');
    let merienda = document.createElement("textarea");
    merienda.setAttribute('type', 'text');
    merienda.setAttribute('class', 'form-control');
    merienda.setAttribute('name', 'merienda');

    //Crea CENA
    let cenalabel = document.createElement("label");
    cenalabel.setAttribute('for', 'cena');
    let textCena = document.createTextNode('Tomas en la cena:');
    let cena = document.createElement("textarea");
    cena.setAttribute('type', 'text');
    cena.setAttribute('class', 'form-control');
    cena.setAttribute('name', 'cena');

    //Crea CUESTIONARIO DE FRECUENCIA DE CONSUMO
    let cuestionarioFrecuencialabel = document.createElement("label");
    cuestionarioFrecuencialabel.setAttribute('for', 'cuestionarioFrecuencia');
    let textCuestionarioFrecuencia = document.createTextNode('Cuestionario Frecuencia de Consumo CFC:');
    let cuestionarioFrecuencia = document.createElement("textarea");
    cuestionarioFrecuencia.setAttribute('type', 'text');
    cuestionarioFrecuencia.setAttribute('class', 'form-control');
    cuestionarioFrecuencia.setAttribute('name', 'cuestionarioFrecuencia');

    //Crea PREFERENCIAS
    let preferencialabel = document.createElement("label");
    preferencialabel.setAttribute('for', 'preferencia');
    let textPreferencia = document.createTextNode('Preferencias respecto a alimentos:');
    let preferencia = document.createElement("input");
    preferencia.setAttribute('type', 'text');
    preferencia.setAttribute('class', 'form-control');
    preferencia.setAttribute('name', 'preferencia');

    //Crea AVERSIONES
    let aversioneslabel = document.createElement("label");
    aversioneslabel.setAttribute('for', 'aversiones');
    let textAversiones = document.createTextNode('Aversiones respecto a alimentos:');
    let aversiones = document.createElement("input");
    aversiones.setAttribute('type', 'text');
    aversiones.setAttribute('class', 'form-control');
    aversiones.setAttribute('name', 'aversiones');

    //Crea PICOTEO
    let picoteolabel = document.createElement("label");
    picoteolabel.setAttribute('for', 'picoteo');
    let textPicoteo = document.createTextNode('¿Picas? (Dulce, Salado, No...)');
    let picoteo = document.createElement("input");
    picoteo.setAttribute('type', 'text');
    picoteo.setAttribute('class', 'form-control');
    picoteo.setAttribute('name', 'picoteo');

    //Crea CUANTAS VECES PICAS
    let cuantasVecesPicaslabel = document.createElement("label");
    cuantasVecesPicaslabel.setAttribute('for', 'cuantasVecesPicas');
    let textCuantasVecesPicas = document.createTextNode('¿Cuántas veces al día sueles picar?');
    let cuantasVecesPicas = document.createElement("input");
    cuantasVecesPicas.setAttribute('type', 'text');
    cuantasVecesPicas.setAttribute('class', 'form-control');
    cuantasVecesPicas.setAttribute('name', 'cuantasVecesPicas');

    //Crea CANTIDAD QUE PICAS
    let cantidadPicaslabel = document.createElement("label");
    cantidadPicaslabel.setAttribute('for', 'cantidadPicas');
    let textCantidadPicas = document.createTextNode('¿Qué cantidad Picas?');
    let cantidadPicas = document.createElement("input");
    cantidadPicas.setAttribute('type', 'text');
    cantidadPicas.setAttribute('class', 'form-control');
    cantidadPicas.setAttribute('name', 'cantidadPicas');

    //Crea COMES FUERA
    let comesFueralabel = document.createElement("label");
    comesFueralabel.setAttribute('for', 'comesFuera');
    let textComesFuera = document.createTextNode('¿Comes fuera de casa?');
    let comesFuera = document.createElement("input");
    comesFuera.setAttribute('type', 'text');
    comesFuera.setAttribute('class', 'form-control');
    comesFuera.setAttribute('name', 'comesFuera');

    //Crea CUANTAS VECES COMES FUERA
    let cuantasVeceslabel = document.createElement("label");
    cuantasVeceslabel.setAttribute('for', 'cuantasVeces');
    let textCuantasVeces = document.createTextNode('¿Cuántas veces?');
    let cuantasVeces = document.createElement("input");
    cuantasVeces.setAttribute('type', 'text');
    cuantasVeces.setAttribute('class', 'form-control');
    cuantasVeces.setAttribute('name', 'cuantasVeces');

    //Crea TIPO DE COMIDA
    let tipoComidalabel = document.createElement("label");
    tipoComidalabel.setAttribute('for', 'tipoComida');
    let textTipoComida = document.createTextNode('¿Qué tipo de comida haces cuando comes fuera de casa?');
    let tipoComida = document.createElement("input");
    tipoComida.setAttribute('type', 'text');
    tipoComida.setAttribute('class', 'form-control');
    tipoComida.setAttribute('name', 'tipoComida');

    //Crea MOTIVO POR EL QUE COMES FUERA
    let motivoComesFueralabel = document.createElement("label");
    motivoComesFueralabel.setAttribute('for', 'motivoComesFuera');
    let textMotivoComesFuera = document.createTextNode('¿Por cuál motivo comes fuera de casa?');
    let motivoComesFuera = document.createElement("input");
    motivoComesFuera.setAttribute('type', 'text');
    motivoComesFuera.setAttribute('class', 'form-control');
    motivoComesFuera.setAttribute('name', 'motivoComesFuera');

    //Crea REPITES PLATO
    let repitesPlatolabel = document.createElement("label");
    repitesPlatolabel.setAttribute('for', 'repitesPlato');
    let textRepitesPlato = document.createTextNode('¿Cuando comes sueles repetir el plato?');
    let repitesPlato = document.createElement("input");
    repitesPlato.setAttribute('type', 'text');
    repitesPlato.setAttribute('class', 'form-control');
    repitesPlato.setAttribute('name', 'repitesPlato');

    //Crea TIEMPO PARA COMER
    let tiempoComerlabel = document.createElement("label");
    tiempoComerlabel.setAttribute('for', 'tiempoComer');
    let textTiempoComer = document.createTextNode('¿Cuanto tiempo duran las comidas?');
    let tiempoComer = document.createElement("input");
    tiempoComer.setAttribute('type', 'text');
    tiempoComer.setAttribute('class', 'form-control');
    tiempoComer.setAttribute('name', 'tiempoComer');

    //Crea QUIEN HACE LA COMPRA
    let hacerCompralabel = document.createElement("label");
    hacerCompralabel.setAttribute('for', 'hacerCompra');
    let textHacerCompra = document.createTextNode('¿Quién hace la compra en casa?');
    let hacerCompra = document.createElement("input");
    hacerCompra.setAttribute('type', 'text');
    hacerCompra.setAttribute('class', 'form-control');
    hacerCompra.setAttribute('name', 'hacerCompra');

    //Crea GUSTA COCINAR
    let gustaCocinarlabel = document.createElement("label");
    gustaCocinarlabel.setAttribute('for', 'gustaCocinar');
    let textGustaCocinar = document.createTextNode('¿Te gusta cocinar?');
    let gustaCocinar = document.createElement("input");
    gustaCocinar.setAttribute('type', 'text');
    gustaCocinar.setAttribute('class', 'form-control');
    gustaCocinar.setAttribute('name', 'gustaCocinar');

    //Crea MIENTRAS COMES
    let mientrasComeslabel = document.createElement("label");
    mientrasComeslabel.setAttribute('for', 'mientrasComes');
    let textMientrasComes = document.createTextNode('¿Mientras comes ves la televisión, Tablet, etc?');
    let mientrasComes = document.createElement("input");
    mientrasComes.setAttribute('type', 'text');
    mientrasComes.setAttribute('class', 'form-control');
    mientrasComes.setAttribute('name', 'mientrasComes');


    //Crea ANTROPOMETRIA
    let antropometrialabel = document.createElement("h3");
    let textAntropometria = document.createTextNode('Medidas Antropometricas');

    //Crea PESO
    let pesolabel = document.createElement("label");
    pesolabel.setAttribute('for', 'peso');
    let textPeso = document.createTextNode('Peso:');
    let peso = document.createElement("input");
    peso.setAttribute('type', 'number');
    peso.setAttribute('class', 'form-control');
    peso.setAttribute('name', 'peso');

    //Crea TALLA
    let tallalabel = document.createElement("label");
    tallalabel.setAttribute('for', 'talla');
    let textTalla = document.createTextNode('Talla:');
    let talla = document.createElement("input");
    talla.setAttribute('type', 'number');
    talla.setAttribute('class', 'form-control');
    talla.setAttribute('name', 'talla');

    //Crea CINTURA
    let cinturalabel = document.createElement("label");
    cinturalabel.setAttribute('for', 'cintura');
    let textCintura = document.createTextNode('Cintura:');
    let cintura = document.createElement("input");
    cintura.setAttribute('type', 'number');
    cintura.setAttribute('class', 'form-control');
    cintura.setAttribute('name', 'cintura');

    //Crea CADERA
    let caderalabel = document.createElement("label");
    caderalabel.setAttribute('for', 'cadera');
    let textCadera = document.createTextNode('Cadera:');
    let cadera = document.createElement("input");
    cadera.setAttribute('type', 'number');
    cadera.setAttribute('class', 'form-control');
    cadera.setAttribute('name', 'cadera');

    //Crea TENSION ARTERIAL
    let tensionArteriallabel = document.createElement("label");
    tensionArteriallabel.setAttribute('for', 'tensionArterial');
    let textTensionArterial = document.createTextNode('Tensión arterial:');
    let tensionArterial = document.createElement("input");
    tensionArterial.setAttribute('type', 'number');
    tensionArterial.setAttribute('class', 'form-control');
    tensionArterial.setAttribute('name', 'tensionArterial');

    //Crea CODO-MUÑECA
    let codoMunyecalabel = document.createElement("label");
    codoMunyecalabel.setAttribute('for', 'codoMunyeca');
    let textCodoMunyeca = document.createTextNode('Codo-Muñeca:');
    let codoMunyeca = document.createElement("input");
    codoMunyeca.setAttribute('type', 'number');
    codoMunyeca.setAttribute('class', 'form-control');
    codoMunyeca.setAttribute('name', 'codoMunyeca');

    //Crea RESUMEN
    let resumenlabel = document.createElement("label");
    resumenlabel.setAttribute('for', 'resumen');
    let textResumen = document.createTextNode('Resumen:');
    let resumen = document.createElement("textarea");
    resumen.setAttribute('type', 'text');
    resumen.setAttribute('class', 'form-control');
    resumen.setAttribute('name', 'resumen');

    //Crea CONCLUSIONES
    let conclusioneslabel = document.createElement("label");
    conclusioneslabel.setAttribute('for', 'conclusiones');
    let textConclusiones = document.createTextNode('Conclusiones:');
    let conclusiones = document.createElement("textarea");
    conclusiones.setAttribute('type', 'text');
    conclusiones.setAttribute('class', 'form-control');
    conclusiones.setAttribute('name', 'conclusiones');

    //Crea PRIMERA IMPRESIÓN
    let primeraImpresionlabel = document.createElement("label");
    primeraImpresionlabel.setAttribute('for', 'primeraImpresion');
    let textPrimeraImpresion = document.createTextNode('Primera impresión / Expectativas:');
    let primeraImpresion = document.createElement("textarea");
    primeraImpresion.setAttribute('type', 'text');
    primeraImpresion.setAttribute('class', 'form-control');
    primeraImpresion.setAttribute('name', 'primeraImpresion');

    //Crea OBJETIVOS
    let objetivoslabel = document.createElement("label");
    objetivoslabel.setAttribute('for', 'objetivos');
    let textObjetivos = document.createTextNode('Objetivos:');
    let objetivos = document.createElement("textarea");
    objetivos.setAttribute('type', 'text');
    objetivos.setAttribute('class', 'form-control');
    objetivos.setAttribute('name', 'objetivos');

    //Crea OBSERVACIONES
    let observacioneslabel = document.createElement("label");
    observacioneslabel.setAttribute('for', 'observaciones');
    let textObservaciones = document.createTextNode('Observaciones');
    let observaciones = document.createElement("textarea");
    observaciones.setAttribute('type', 'text');
    observaciones.setAttribute('class', 'form-control');
    observaciones.setAttribute('name', 'observaciones');

    //Crea BOTON DE ENVIO
    let botonEnvio = document.createElement("button");
    botonEnvio.setAttribute('type', 'submit');
    botonEnvio.setAttribute('class', 'btn btn-primary');
    botonEnvio.setAttribute('id', 'button');
    let textBotonEnvio = document.createTextNode('GUARDAR');

    let inputInvis = document.createElement('input');
    inputInvis.setAttribute('type', 'hidden');
    inputInvis.setAttribute('name', 'ID_paciente');
    inputInvis.setAttribute('value', id);


    //Union de los elementos padres con hijos.

    let principal = document.getElementsByClassName("marca");
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
    grupoFormulario.appendChild(tituloMotivoConsulta);
    tituloMotivoConsulta.appendChild(textTituloMotivoConsulta);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(motivoConsultalabel);
    motivoConsultalabel.appendChild(textMotivoConsulta);
    grupoFormulario.appendChild(motivoConsulta);


    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(propositosConseguirlabel);
    propositosConseguirlabel.appendChild(textPropositosConseguir);
    grupoFormulario.appendChild(propositosConseguir);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(inputInvis);


    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(motivoAcudirlabel);
    motivoAcudirlabel.appendChild(textMotivoAcudir);
    grupoFormulario.appendChild(motivoAcudir);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(dietasAnterioreslabel);
    dietasAnterioreslabel.appendChild(textDietasAnteriores);
    grupoFormulario.appendChild(dietasAnteriores);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(oscilacionesPesolabel);
    oscilacionesPesolabel.appendChild(textOscilacionesPeso);
    grupoFormulario.appendChild(oscilacionesPeso);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(supusoEsfuerzolabel);
    supusoEsfuerzolabel.appendChild(textSupusoEsfuerzo);
    grupoFormulario.appendChild(supusoEsfuerzo);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(motivoAbandonolabel);
    motivoAbandonolabel.appendChild(textMotivoAbandono);
    grupoFormulario.appendChild(motivoAbandono);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(desdeDietalabel);
    desdeDietalabel.appendChild(textDesdeDieta);
    grupoFormulario.appendChild(desdeDieta);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(tipoDietalabel);
    tipoDietalabel.appendChild(textTipoDieta);
    grupoFormulario.appendChild(tipoDieta);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(beneficiosPersonaleslabel);
    beneficiosPersonaleslabel.appendChild(textBeneficiosPersonales);
    grupoFormulario.appendChild(beneficiosPersonales);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(tituloHistoriaClinica);
    tituloHistoriaClinica.appendChild(textTituloHistoriaClinica);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(b);
    b.appendChild(patologiasActualeslabel);
    patologiasActualeslabel.appendChild(textPatologiasActuales);
    grupoFormulario.appendChild(patologiasActuales);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(obtenidoEnAnaliticalabel);
    obtenidoEnAnaliticalabel.appendChild(textObtenidoEnAnalitica);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(br);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(bioquimicosTGlabel);
    bioquimicosTGlabel.appendChild(textBioquimicosTG);
    grupoFormulario.appendChild(bioquimicosTG);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(glucosalabel);
    glucosalabel.appendChild(textGlucosa);
    grupoFormulario.appendChild(glucosa);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(Felabel);
    Felabel.appendChild(textFe);
    grupoFormulario.appendChild(Fe);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(VCMlabel);
    VCMlabel.appendChild(textVCM);
    grupoFormulario.appendChild(VCM);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(TSHlabel);
    TSHlabel.appendChild(textTSH);
    grupoFormulario.appendChild(TSH);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(transaminasaslabel);
    transaminasaslabel.appendChild(textTransaminasas);
    grupoFormulario.appendChild(transaminasas);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(Urealabel);
    Urealabel.appendChild(textUrea);
    grupoFormulario.appendChild(Urea);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(creatinalabel);
    creatinalabel.appendChild(textCreatina);
    grupoFormulario.appendChild(creatina);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(colesterollabel);
    colesterollabel.appendChild(textColesterol);
    grupoFormulario.appendChild(colesterol);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(restriccioneslabel);
    restriccioneslabel.appendChild(textRestricciones);
    grupoFormulario.appendChild(restricciones);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(causasPatologicaslabel);
    causasPatologicaslabel.appendChild(textCausasPatologicas);
    grupoFormulario.appendChild(causasPatologicas);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(otrasPatologiaslabel);
    otrasPatologiaslabel.appendChild(textOtrasPatologias);
    grupoFormulario.appendChild(otrasPatologias);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(b2);
    b2.appendChild(antecedenteslabel);
    antecedenteslabel.appendChild(textAntecedentes);
    grupoFormulario.appendChild(antecedentes);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(analiticalabel);
    analiticalabel.appendChild(textAnalitica);
    grupoFormulario.appendChild(analitica);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(b3);
    b3.appendChild(operacioneslabel);
    operacioneslabel.appendChild(textOperaciones);
    grupoFormulario.appendChild(operaciones);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(b4);
    b4.appendChild(causasOperacioneslabel);
    causasOperacioneslabel.appendChild(textCausasOperaciones);
    grupoFormulario.appendChild(causasOperaciones);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(b5);
    b5.appendChild(tomasFarmacoslabel);
    tomasFarmacoslabel.appendChild(textTomasFarmacos);
    grupoFormulario.appendChild(tomasFarmacos);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(b6);
    b6.appendChild(deposicioneslabel);
    deposicioneslabel.appendChild(textDeposiciones);
    grupoFormulario.appendChild(deposiciones);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(b7);
    b7.appendChild(alergiaslabel);
    alergiaslabel.appendChild(textAlergias);
    grupoFormulario.appendChild(alergias);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(b8);
    b8.appendChild(intoleranciaslabel);
    intoleranciaslabel.appendChild(textIntolerancias);
    grupoFormulario.appendChild(intolerancias);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(b9);
    b9.appendChild(menstruacionlabel);
    menstruacionlabel.appendChild(textMenstruacion);
    grupoFormulario.appendChild(menstruacion);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(tituloHistoriaFamiliar);
    tituloHistoriaFamiliar.appendChild(textTituloHistoriaFamiliar);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(tiempoLibrelabel);
    tiempoLibrelabel.appendChild(textTiempoLibre);
    grupoFormulario.appendChild(tiempoLibre);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(quienViveslabel);
    quienViveslabel.appendChild(textQuienVives);
    grupoFormulario.appendChild(quienVives);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(quienCocinalabel);
    quienCocinalabel.appendChild(textQuienCocina);
    grupoFormulario.appendChild(quienCocina);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(actividadFisicalabel);
    actividadFisicalabel.appendChild(textActividadFisica);
    grupoFormulario.appendChild(actividadFisica);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(gustaHacerlabel);
    gustaHacerlabel.appendChild(textGustaHacer);
    grupoFormulario.appendChild(gustaHacer);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(pondriaPropositolabel);
    pondriaPropositolabel.appendChild(textPondriaProposito);
    grupoFormulario.appendChild(pondriaProposito);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(dedicaslabel);
    dedicaslabel.appendChild(textDedicas);
    grupoFormulario.appendChild(dedicas);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(horariolabel);
    horariolabel.appendChild(textHorario);
    grupoFormulario.appendChild(horario);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(desplazamientolabel);
    desplazamientolabel.appendChild(textDesplazamiento);
    grupoFormulario.appendChild(desplazamiento);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(dondeComelabel);
    dondeComelabel.appendChild(textDondeCome);
    grupoFormulario.appendChild(dondeCome);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(horasDuermelabel);
    horasDuermelabel.appendChild(textHorasDuerme);
    grupoFormulario.appendChild(horasDuerme);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(habitosToxicoslabel);
    habitosToxicoslabel.appendChild(textHabitosToxicos);
    grupoFormulario.appendChild(habitosToxicos);


    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(tituloHistoriaDietetica);
    tituloHistoriaDietetica.appendChild(textTituloHistoriaDietetica);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(recordatoriolabel);
    recordatoriolabel.appendChild(textRecordatorio);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(br);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(desayunolabel);
    desayunolabel.appendChild(textDesayuno);
    grupoFormulario.appendChild(desayuno);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(almuerzolabel);
    almuerzolabel.appendChild(textAlmuerzo);
    grupoFormulario.appendChild(almuerzo);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(comidalabel);
    comidalabel.appendChild(textComida);
    grupoFormulario.appendChild(comida);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(meriendalabel);
    meriendalabel.appendChild(textMerienda);
    grupoFormulario.appendChild(merienda);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(cenalabel);
    cenalabel.appendChild(textCena);
    grupoFormulario.appendChild(cena);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(cuestionarioFrecuencialabel);
    cuestionarioFrecuencialabel.appendChild(textCuestionarioFrecuencia);
    grupoFormulario.appendChild(cuestionarioFrecuencia);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(preferencialabel);
    preferencialabel.appendChild(textPreferencia);
    grupoFormulario.appendChild(preferencia);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(aversioneslabel);
    aversioneslabel.appendChild(textAversiones);
    grupoFormulario.appendChild(aversiones);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(picoteolabel);
    picoteolabel.appendChild(textPicoteo);
    grupoFormulario.appendChild(picoteo);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(cuantasVecesPicaslabel);
    cuantasVecesPicaslabel.appendChild(textCuantasVecesPicas);
    grupoFormulario.appendChild(cuantasVecesPicas);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(cantidadPicaslabel);
    cantidadPicaslabel.appendChild(textCantidadPicas);
    grupoFormulario.appendChild(cantidadPicas);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(comesFueralabel);
    comesFueralabel.appendChild(textComesFuera);
    grupoFormulario.appendChild(comesFuera);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(cuantasVeceslabel);
    cuantasVeceslabel.appendChild(textCuantasVeces);
    grupoFormulario.appendChild(cuantasVeces);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(tipoComidalabel);
    tipoComidalabel.appendChild(textTipoComida);
    grupoFormulario.appendChild(tipoComida);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(motivoComesFueralabel);
    motivoComesFueralabel.appendChild(textMotivoComesFuera);
    grupoFormulario.appendChild(motivoComesFuera);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(repitesPlatolabel);
    repitesPlatolabel.appendChild(textRepitesPlato);
    grupoFormulario.appendChild(repitesPlato);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(tiempoComerlabel);
    tiempoComerlabel.appendChild(textTiempoComer);
    grupoFormulario.appendChild(tiempoComer);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(hacerCompralabel);
    hacerCompralabel.appendChild(textHacerCompra);
    grupoFormulario.appendChild(hacerCompra);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(gustaCocinarlabel);
    gustaCocinarlabel.appendChild(textGustaCocinar);
    grupoFormulario.appendChild(gustaCocinar);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(mientrasComeslabel);
    mientrasComeslabel.appendChild(textMientrasComes);
    grupoFormulario.appendChild(mientrasComes);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(antropometrialabel);
    antropometrialabel.appendChild(textAntropometria);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(pesolabel);
    pesolabel.appendChild(textPeso);
    grupoFormulario.appendChild(peso);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(tallalabel);
    tallalabel.appendChild(textTalla);
    grupoFormulario.appendChild(talla);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(cinturalabel);
    cinturalabel.appendChild(textCintura);
    grupoFormulario.appendChild(cintura);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(caderalabel);
    caderalabel.appendChild(textCadera);
    grupoFormulario.appendChild(cadera);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(tensionArteriallabel);
    tensionArteriallabel.appendChild(textTensionArterial);
    grupoFormulario.appendChild(tensionArterial);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(codoMunyecalabel);
    codoMunyecalabel.appendChild(textCodoMunyeca);
    grupoFormulario.appendChild(codoMunyeca);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(resumenlabel);
    resumenlabel.appendChild(textResumen);
    grupoFormulario.appendChild(resumen);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(conclusioneslabel);
    conclusioneslabel.appendChild(textConclusiones);
    grupoFormulario.appendChild(conclusiones);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(primeraImpresionlabel);
    primeraImpresionlabel.appendChild(textPrimeraImpresion);
    grupoFormulario.appendChild(primeraImpresion);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(objetivoslabel);
    objetivoslabel.appendChild(textObjetivos);
    grupoFormulario.appendChild(objetivos);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(observacioneslabel);
    observacioneslabel.appendChild(textObservaciones);
    grupoFormulario.appendChild(observaciones);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(br);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(botonEnvio);
    botonEnvio.appendChild(textBotonEnvio);


}

//Funcion para CREAR UNA NUEVA REVISION
function nuevaRevision(id) {

    borrarMarca();

    //Aqui empieza a montarse
    let br = document.createElement("br");
    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('REVISION');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('NUEVA REVISION');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Estructura de la revisión ');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let cuerpoFormulario = document.createElement("form");
    cuerpoFormulario.setAttribute('role', 'form');
    cuerpoFormulario.setAttribute('action', '../revisiones.php');
    cuerpoFormulario.setAttribute('method', 'post');
    cuerpoFormulario.setAttribute('enctype', 'multipart/form-data');

    //Crea los grupos del Formulario
    let grupoFormulario = document.createElement("div");
    grupoFormulario.setAttribute('class', 'form-group');

    let indice_corlabel = document.createElement("label");
    indice_corlabel.setAttribute('for', 'indice_cor');
    let textIndice_cor = document.createTextNode('Indice Corporal:');
    let indice_cor = document.createElement("input");
    indice_cor.setAttribute('type', 'text');
    indice_cor.setAttribute('class', 'form-control');
    indice_cor.setAttribute('name', 'indice_cor');

    let grasa_corlabel = document.createElement("label");
    grasa_corlabel.setAttribute('for', 'grasa_cor');
    let textGrasa_cor = document.createTextNode('Grasa Corporal:');
    let grasa_cor = document.createElement("input");
    grasa_cor.setAttribute('type', 'text');
    grasa_cor.setAttribute('class', 'form-control');
    grasa_cor.setAttribute('name', 'grasa_cor');

    let masa_maglabel = document.createElement("label");
    masa_maglabel.setAttribute('for', 'masa_mag');
    let textMasa_mag = document.createTextNode('Masa Magra:');
    let masa_mag = document.createElement("input");
    masa_mag.setAttribute('type', 'text');
    masa_mag.setAttribute('class', 'form-control');
    masa_mag.setAttribute('name', 'masa_mag');

    let pesolabel = document.createElement("label");
    pesolabel.setAttribute('for', 'peso');
    let textPeso = document.createTextNode('Peso:');
    let peso = document.createElement("input");
    peso.setAttribute('type', 'text');
    peso.setAttribute('class', 'form-control');
    peso.setAttribute('name', 'peso');

    let inputInvis = document.createElement('input');
    inputInvis.setAttribute('type', 'hidden');
    inputInvis.setAttribute('name', 'ID_paciente');
    inputInvis.setAttribute('value', id);

    let agualabel = document.createElement("label");
    agualabel.setAttribute('for', 'agua');
    let textAgua = document.createTextNode('Agua:');
    let agua = document.createElement("input");
    agua.setAttribute('type', 'text');
    agua.setAttribute('class', 'form-control');
    agua.setAttribute('name', 'agua');

    let observacioneslabel = document.createElement("label");
    observacioneslabel.setAttribute('for', 'observaciones');
    let textObservaciones = document.createTextNode('Observaciones:');
    let observaciones = document.createElement("textarea");
    observaciones.setAttribute('type', 'text');
    observaciones.setAttribute('class', 'form-control');
    observaciones.setAttribute('name', 'observaciones');

    //Crea BOTON DE ENVIO
    let botonEnvio = document.createElement("button");
    botonEnvio.setAttribute('type', 'submit');
    botonEnvio.setAttribute('class', 'btn btn-primary');
    botonEnvio.setAttribute('id', 'button');
    let textBotonEnvio = document.createTextNode('GUARDAR');


    //Union de los elementos padres con hijos.

    let principal = document.getElementsByClassName("marca");
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
    grupoFormulario.appendChild(indice_corlabel);
    indice_corlabel.appendChild(textIndice_cor);
    grupoFormulario.appendChild(indice_cor);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(grasa_corlabel);
    grasa_corlabel.appendChild(textGrasa_cor);
    grupoFormulario.appendChild(grasa_cor);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(masa_maglabel);
    masa_maglabel.appendChild(textMasa_mag);
    grupoFormulario.appendChild(masa_mag);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(inputInvis);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(pesolabel);
    pesolabel.appendChild(textPeso);
    grupoFormulario.appendChild(peso);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(agualabel);
    agualabel.appendChild(textAgua);
    grupoFormulario.appendChild(agua);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(observacioneslabel);
    observacioneslabel.appendChild(textObservaciones);
    grupoFormulario.appendChild(observaciones);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(br);

    cuerpoFormulario.appendChild(grupoFormulario);
    grupoFormulario.appendChild(botonEnvio);
    botonEnvio.appendChild(textBotonEnvio);

}

//FUNCION QUE MUESTRA TODAS LAS REVISIONES DE UN PACIENTE
function verTodasRevisiones(id) {
    borrarMarca();

    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('REVISIONES');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('VISUALIZA TODAS LAS REVISIONES');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Revisiones de Usuario');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let tablaResponsiva = document.createElement("div");
    tablaResponsiva.setAttribute('class', 'table-responsive');
    let tablas = document.createElement("table");
    tablas.setAttribute('class', 'table table-bordered');
    tablas.setAttribute('id', 'dataTable');
    tablas.setAttribute('width', '100%');
    tablas.setAttribute('cellspacing', '0');

    let principal = document.getElementsByClassName("marca");
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
    httpRequest.send('verTodasRevisiones='+id);


}

//FUNCION QUE MUESTRA LOS MENSAJES DE CONTACTO
function verMensajes() {
    let httpRequest = new XMLHttpRequest();
    httpRequest.open('POST', '../consultas_ajax.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === 4) {
            if (httpRequest.status === 200) {
                document.getElementById('mensajes').innerHTML = httpRequest.responseText;
            }
        }
    };
    httpRequest.send('verMensajes=');


}

//FUNCION QUE MUESTRA LAS ALERTAS DE CITA RESERVADA
function verAlertas() {
    let httpRequest = new XMLHttpRequest();
    httpRequest.open('POST', '../consultas_ajax.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === 4) {
            if (httpRequest.status === 200) {
                document.getElementById('alertas').innerHTML = httpRequest.responseText;
            }
        }
    };
    httpRequest.send('verAlertas=');


}

//FUNCION QUE MUESTRA USUARIOS PARA VER SUS GRAFICAS
function verGraficas() {

    borrarMarca();
    borrarMarcaCalendario();

    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('GRAFICAS');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('VISUALIZA EL AVANCE DE FORMA GRAFICA');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Elige el usuario');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let tablaResponsiva = document.createElement("div");
    tablaResponsiva.setAttribute('class', 'table-responsive');
    let tablas = document.createElement("table");
    tablas.setAttribute('class', 'table table-bordered');
    tablas.setAttribute('id', 'dataTable');
    tablas.setAttribute('width', '100%');
    tablas.setAttribute('cellspacing', '0');


    let principal = document.getElementsByClassName("marca");
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
    httpRequest.send('verGraficas=');

}

//FUNCION QUE MUESTRA LOS DATOS OBTENIDOS DE LAS REVISIONES EN FORMA DE GRAFICAS
function datosGraficas(id) {
    borrarMarca();
    borrarMarcaCalendario();

    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('GRAFICAS');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('VISUALIZA EL AVANCE DE FORMA GRAFICA');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Datos del usuario');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let graficas = document.createElement("div");
    graficas.setAttribute('id', 'myfirstchart');


    let principal = document.getElementsByClassName("marca");
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
    cuerpo.appendChild(graficas);

    let httpRequest = new XMLHttpRequest();
    httpRequest.open('POST', '../consultas_ajax.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === 4) {
            if (httpRequest.status === 200) {
                if (httpRequest.responseText != '') {
                    let revisiones = JSON.parse(httpRequest.responseText);
                    console.log(revisiones);

                    new Morris.Line({
                        // ID of the element in which to draw the chart.
                        element: 'myfirstchart',
                        // Chart data records -- each entry in this array corresponds to a point on
                        // the chart.
                        data: revisiones
                        /*[
                        { year: '2008', value: 200,value2: 200 },
                        { year: '2009', value: 10,value2: 150 },
                        { year: '2010', value: 5,value2: 100 },
                        { year: '2011', value: 5,value2: 15 },
                        { year: '2013', value: 10,value2: 25 },
                        { year: '2020', value: 250,value2: 183 },
                        { year: '2021', value: 5,value2: 182.5 },
                        { year: '2022', value: 20,value2: 100 }
                        ]*/
                        ,
                        // The name of the data record attribute that contains x-values.
                        xkey: 'fecha',
                        // A list of names of data record attributes that contain y-values.
                        ykeys: ['agua', 'grasa_cor', 'indice_cor', 'masa_mag', 'peso'],
                        // Labels for the ykeys -- will be displayed when you hover over the
                        // chart.
                        labels: ['Agua', 'Grasa Corporal', 'Indice Corporal', 'Masa magra', 'Peso'],
                        resize: true,
                        lineColors: ['blue', 'orange', 'green', 'red', 'purple']
                    })
                }
            }
        }
    };
    httpRequest.send('datosGraf=' + id);


}

//FUNCION PARA MODICAR LAS REVISIONES
function modificarRevision(id) {


    let httpRequest = new XMLHttpRequest();
    httpRequest.open('POST', '../consultas_ajax.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === 4) {
            if (httpRequest.status === 200) {
                borrarMarca();

                let revision = JSON.parse(httpRequest.responseText);
                //Aqui empieza a montarse
                let br = document.createElement("br");
                let contenedor = document.createElement("div");
                contenedor.setAttribute('class', 'container-fluid');
                contenedor.setAttribute('id', 'prueba');
                let titulo = document.createElement("h1");
                titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
                let textoTitulo = document.createTextNode('REVISION');
                let parrafoTitulo = document.createElement("p");
                parrafoTitulo.setAttribute('class', 'mb-4');
                let textoParrafo = document.createTextNode('MODIFICA REVISION');
                let capa1 = document.createElement("div");
                capa1.setAttribute('class', 'card shadow mb-4');
                let capa2 = document.createElement("div");
                capa2.setAttribute('class', 'card-header py-3');
                let tituloCapas = document.createElement("h6");
                tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
                let textoTituloCapas = document.createTextNode('Estructura de la revisión ');
                let cuerpo = document.createElement("div");
                cuerpo.setAttribute('class', 'card-body');
                let cuerpoFormulario = document.createElement("form");
                cuerpoFormulario.setAttribute('role', 'form');
                cuerpoFormulario.setAttribute('action', '../revisiones.php');
                cuerpoFormulario.setAttribute('method', 'post');
                cuerpoFormulario.setAttribute('enctype', 'multipart/form-data');

                //Crea los grupos del Formulario
                let grupoFormulario = document.createElement("div");
                grupoFormulario.setAttribute('class', 'form-group');

                let indice_corlabel = document.createElement("label");
                indice_corlabel.setAttribute('for', 'indice_cor');
                let textIndice_cor = document.createTextNode('Indice Corporal:');
                let indice_cor = document.createElement("input");
                indice_cor.setAttribute('type', 'text');
                indice_cor.setAttribute('class', 'form-control');
                indice_cor.setAttribute('value', revision['indice_cor']);
                indice_cor.setAttribute('name', 'indice_cor');

                let grasa_corlabel = document.createElement("label");
                grasa_corlabel.setAttribute('for', 'grasa_cor');
                let textGrasa_cor = document.createTextNode('Grasa Corporal:');
                let grasa_cor = document.createElement("input");
                grasa_cor.setAttribute('type', 'text');
                grasa_cor.setAttribute('class', 'form-control');
                grasa_cor.setAttribute('value', revision['grasa_cor']);
                grasa_cor.setAttribute('name', 'grasa_cor');

                let masa_maglabel = document.createElement("label");
                masa_maglabel.setAttribute('for', 'masa_mag');
                let textMasa_mag = document.createTextNode('Masa Magra:');
                let masa_mag = document.createElement("input");
                masa_mag.setAttribute('type', 'text');
                masa_mag.setAttribute('class', 'form-control');
                masa_mag.setAttribute('value', revision['masa_mag']);
                masa_mag.setAttribute('name', 'masa_mag');

                let pesolabel = document.createElement("label");
                pesolabel.setAttribute('for', 'peso');
                let textPeso = document.createTextNode('Peso:');
                let peso = document.createElement("input");
                peso.setAttribute('type', 'text');
                peso.setAttribute('class', 'form-control');
                peso.setAttribute('value', revision['peso']);
                peso.setAttribute('name', 'peso');


                let agualabel = document.createElement("label");
                agualabel.setAttribute('for', 'agua');
                let textAgua = document.createTextNode('Agua:');
                let agua = document.createElement("input");
                agua.setAttribute('type', 'text');
                agua.setAttribute('class', 'form-control');
                agua.setAttribute('value', revision['agua']);
                agua.setAttribute('name', 'agua');

                let observacioneslabel = document.createElement("label");
                observacioneslabel.setAttribute('for', 'observaciones');
                let textObservaciones = document.createTextNode('Observaciones:');
                let observaciones = document.createElement("textarea");
                observaciones.setAttribute('type', 'text');
                observaciones.setAttribute('class', 'form-control');
                observaciones.setAttribute('name', 'observaciones');
                observaciones.innerText = revision['observaciones'];

                let input = document.createElement('input');
                input.setAttribute('type', 'hidden');
                input.setAttribute('name', 'ID_revision');
                input.setAttribute('value', id);

                let input2 = document.createElement('input');
                input2.setAttribute('type', 'hidden');
                input2.setAttribute('name', 'ID_paciente');
                input2.setAttribute('value', revision['ID_paciente']);

                //Crea BOTON DE ENVIO
                let botonEnvio = document.createElement("button");
                botonEnvio.setAttribute('type', 'submit');
                botonEnvio.setAttribute('class', 'btn btn-primary');
                botonEnvio.setAttribute('id', 'button');
                botonEnvio.setAttribute('onclick', 'editRevision(' + revision['ID_revision'] + ')');
                let textBotonEnvio = document.createTextNode('GUARDAR');


                //Union de los elementos padres con hijos.

                let principal = document.getElementsByClassName("marca");
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
                grupoFormulario.appendChild(indice_corlabel);
                indice_corlabel.appendChild(textIndice_cor);
                grupoFormulario.appendChild(indice_cor);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(grasa_corlabel);
                grasa_corlabel.appendChild(textGrasa_cor);
                grupoFormulario.appendChild(grasa_cor);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(masa_maglabel);
                masa_maglabel.appendChild(textMasa_mag);
                grupoFormulario.appendChild(masa_mag);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(pesolabel);
                pesolabel.appendChild(textPeso);
                grupoFormulario.appendChild(peso);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(agualabel);
                agualabel.appendChild(textAgua);
                grupoFormulario.appendChild(agua);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(observacioneslabel);
                observacioneslabel.appendChild(textObservaciones);
                grupoFormulario.appendChild(observaciones);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(br);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(input);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(input2);

                cuerpoFormulario.appendChild(grupoFormulario);
                grupoFormulario.appendChild(botonEnvio);
                botonEnvio.appendChild(textBotonEnvio);

            }
        }
    };
    httpRequest.send('getRevision=' + id);
}

//FUNCION PARA ELIMINAR LAS REVISIONES
function eliminarRevision(id) {
    Swal.fire({
        title: 'Eliminar revisión?',
        text: 'Seguro que quiere eliminar la revisión seleccionada?',
        icon: 'warning',
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            let httpRequest = new XMLHttpRequest();
            httpRequest.open('POST', '../consultas_ajax.php', true);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.onreadystatechange = function () {
                if (httpRequest.readyState === 4) {
                    if (httpRequest.status === 200) {
                        Swal.fire(
                            'Enhorabuena!',
                            'La revisión seleccionada ha sido eliminado',
                            'success'
                        );
                        verTodasRevisiones();
                    }
                }
            };
            httpRequest.send('removeRevision=' + id);
        }
    })

}

//FUNCION QUE MUESTRA LA INFORMACION DE QUIEN HA HECHO UNA RESERVA
function confirmarReserva(id) {

    let httpRequest = new XMLHttpRequest();
    httpRequest.open('POST', '../consultas_ajax.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === 4) {
            if (httpRequest.status === 200) {

                Swal.fire({
                    title: 'Se ha reservado la fecha',
                    text: 'Se ha asignado la fecha de reserva al usuario',
                    icon: 'success'
                });
                location.reload(true);
            }
        }
    };
    httpRequest.send('confirmaReserva=' + id);

}


//FUNCION QUE MUESTRA LA INFORMACION DE LOS MENSAJES ENVIADOS
function mensajeRespondido(id) {

    let httpRequest = new XMLHttpRequest();
    httpRequest.open('POST', '../consultas_ajax.php', true);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.onreadystatechange = function () {
        if (httpRequest.readyState === 4) {
            if (httpRequest.status === 200) {

                Swal.fire({
                    title: 'Se ha eliminado de la bandeja de mensajes',
                    icon: 'success'
                });

                location.reload(true);

            }
        }
    };
    httpRequest.send('mensajeRespondido=' + id);

}

//FUNCION QUE MUESTRA TODAS LAS ALERTAS ENVIADAS
function verTodosAvisos() {

    borrarMarca();
    borrarMarcaCalendario();

    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('TODAS LAS ALERTAS CONFIRMADAS GUARDADAS');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('REVISA TODAS LAS ALERTAS');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Alertas');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let tablaResponsiva = document.createElement("div");
    tablaResponsiva.setAttribute('class', 'table-responsive');
    let tablas = document.createElement("table");
    tablas.setAttribute('class', 'table table-bordered');
    tablas.setAttribute('id', 'dataTable');
    tablas.setAttribute('width', '100%');
    tablas.setAttribute('cellspacing', '0');

    let principal = document.getElementsByClassName("marca");
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
    httpRequest.send('verTodosAvisos=');

}

//FUNCION QUE MUESTRA TODOS LOS MENSAJES ENVIADOS
function verTodosMensajes() {

    borrarMarca();
    borrarMarcaCalendario();

    let contenedor = document.createElement("div");
    contenedor.setAttribute('class', 'container-fluid');
    contenedor.setAttribute('id', 'prueba');
    let titulo = document.createElement("h1");
    titulo.setAttribute('class', 'h3 mb-2 text-gray-800');
    let textoTitulo = document.createTextNode('TODOS LOS MENSAJES GUARDADOS');
    let parrafoTitulo = document.createElement("p");
    parrafoTitulo.setAttribute('class', 'mb-4');
    let textoParrafo = document.createTextNode('REVISA TODOS LOS MENSAJES');
    let capa1 = document.createElement("div");
    capa1.setAttribute('class', 'card shadow mb-4');
    let capa2 = document.createElement("div");
    capa2.setAttribute('class', 'card-header py-3');
    let tituloCapas = document.createElement("h6");
    tituloCapas.setAttribute('class', 'm-0 font-weight-bold text-primary');
    let textoTituloCapas = document.createTextNode('Mensajes');
    let cuerpo = document.createElement("div");
    cuerpo.setAttribute('class', 'card-body');
    let tablaResponsiva = document.createElement("div");
    tablaResponsiva.setAttribute('class', 'table-responsive');
    let tablas = document.createElement("table");
    tablas.setAttribute('class', 'table table-bordered');
    tablas.setAttribute('id', 'dataTable');
    tablas.setAttribute('width', '100%');
    tablas.setAttribute('cellspacing', '0');

    let principal = document.getElementsByClassName("marca");
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
    httpRequest.send('verTodosMensajes=');

}
