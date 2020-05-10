<?php
// Comienza la sesion
session_start();
require_once "../Connection.php";

date_default_timezone_set('UTC');

$dbh = Connection::make();

$stmt = $dbh->prepare("SELECT * FROM fechas");
$stmt_2 = $dbh->prepare("SELECT * FROM fechas F, citas C WHERE F.fecha= C.fecha");
$stmt_3 = $dbh->prepare("SELECT * FROM contacto WHERE vistos=0");
$stmt_4 = $dbh->prepare("SELECT * FROM citas WHERE reserva=1");
$stmt_5 = $dbh->prepare("SELECT * FROM contacto");
$stmt_6 = $dbh->prepare("SELECT * FROM citas");
$stmt_7 = $dbh->prepare("SELECT * FROM usuarios");


$stmt->execute();
$stmt_2->execute();
$stmt_3->execute();
$stmt_4->execute();
$stmt_5->execute();
$stmt_6->execute();
$stmt_7->execute();

$fechas = $stmt->fetchAll(PDO::FETCH_ASSOC);
$citas = $stmt_2->fetchAll(PDO::FETCH_ASSOC);
$Mensajes = $stmt_3->fetchAll(PDO::FETCH_ASSOC);
$Alertas = $stmt_4->fetchAll(PDO::FETCH_ASSOC);
$contactoMensajes = $stmt_5->fetchAll(PDO::FETCH_ASSOC);
$AlertasCita = $stmt_6->fetchAll(PDO::FETCH_ASSOC);
$alertaUsuarios = $stmt_7->fetchAll(PDO::FETCH_ASSOC);

$cuentaMensajes = count($Mensajes);
$cuentaAlertas = count($Alertas);

$eventos_calendario = '';

if (count($citas) > 0) {
    for ($i = 0; $i < count($citas); $i++) {
        $color = "";
        if ($citas[$i]['confReserva'] == 1) {
            $color = 'green';
        } else {
            $color = 'orange';
        }
        if ($i == 0) {
            $eventos_calendario .= '{title: "Cita usuario ' . $citas[$i]['ID_Usuario'] . '", start: "' . $citas[$i]['fecha'] . '", end: "' . $citas[$i]['fecha'] . '", color: "' . $color . '", textColor: "white", descripcion: "Cita usuario ' . $citas[$i]['ID_Usuario'] . '"}';
        } else {
            $eventos_calendario .= ', {title: "Cita usuario ' . $citas[$i]['ID_Usuario'] . '", start: "' . $citas[$i]['fecha'] . '", end: "' . $citas[$i]['fecha'] . '", color: "' . $color . '", textColor: "white", descripcion: "Cita usuario ' . $citas[$i]['ID_Usuario'] . '"}';
        }
    }
}

if (count($fechas) > 0) {
    for ($j = 0; $j < count($fechas); $j++) {
        if ($j == 0 && count($citas) == 0) {
            $eventos_calendario .= '{title: "Reservas", start: "' . $fechas[$j]['fecha'] . '", end: "' . $fechas[$j]['fecha'] . '", color: "#4e73df", textColor: "white", descripcion: "Fecha libre"}';
        } else {
            $eventos_calendario .= ', {title: "Reservas", start: "' . $fechas[$j]['fecha'] . '", end: "' . $fechas[$j]['fecha'] . '", color: "#4e73df", textColor: "white", descripcion: "Fecha libre"}';
        }
    }
}


?>
<?php if (!isset($_SESSION['tipo']) == "A") : ?>
    <html>
    <head>
        <style>
            body {
                background: url('img/404.jpg') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
    </head>
    <body>


    </body>


    </html>
<?php else : ?>

    <!DOCTYPE html>
    <html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Administrador</title>

        <!-- Fuentes Personalizados-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
              rel="stylesheet">

        <!-- Estilos Personalizados-->
        <link href="css/sb-admin-2.css" rel="stylesheet">

        <!-- Estilos para esta pagina -->
        <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


        <!-- Calendario -->

        <!-- Estilos de Vista Calendario -->
        <link href='../calendario/packages/core/main.css' rel='stylesheet'/>
        <link href='../calendario/packages/daygrid/main.css' rel='stylesheet'/>
        <link href='../calendario/packages/timegrid/main.css' rel='stylesheet'>

        <!-- Scripts Calendario -->
        <script src='../calendario/packages/core/main.js'></script>
        <script src='../calendario/packages/daygrid/main.js'></script>
        <script src='../calendario/packages/timegrid/main.js'></script>
        <script src='../calendario/packages/interaction/main.js'></script>
        <script src='../calendario/packages/core/locales/es.js'></script>

        <script>

            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    //Plugins de FullCalendar
                    plugins: ['dayGrid', 'interaction', 'timeGrid'],

                    <!-- Vista previa -->
                    //defaultView:'timeGrid',
                    header: {
                        left: 'prev, today, next',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },


                    <!-- Boton customizado -->
                    /*customButtons:{
                        miboton:{
                            text:"Añadir Evento",
                            click:function() {
                                $('#ModalCalendario').modal('toggle');
                            }
                        }
                    },*/

                    <!-- Al pulsar sobre el dia se recoge la informacion -->
                    dateClick: function (info) {

                        $('#txtFecha').val(info.dateStr);

                        $('#ModalCalendario').modal();

                    },

                    <!-- Imprime toda la informacion del evento -->
                    eventClick: function (info) {

                        if (info.event.backgroundColor == "orange") {

                            Swal.fire({
                                title: 'Eliminar la cita?',
                                text: 'Seguro que quiere eliminar la cita seleccionada?',
                                icon: 'warning',
                                showCloseButton: true,
                                showCancelButton: true,
                                confirmButtonText: 'Eliminar',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                if (result.value) {
                                    let dia = '', mes = '', hora = '', minuto = '', segundo = '';

                                    if ((info.event.start.getMonth() + 1) < 10) {
                                        mes = '0' + (info.event.start.getMonth() + 1);
                                    } else {
                                        mes = (info.event.start.getMonth() + 1);
                                    }

                                    if (info.event.start.getDate() < 10) {
                                        dia = '0' + info.event.start.getDate();
                                    } else {
                                        dia = info.event.start.getDate();
                                    }

                                    if (info.event.start.getHours() < 10) {
                                        hora = '0' + info.event.start.getHours();
                                    } else {
                                        hora = info.event.start.getHours();
                                    }

                                    if (info.event.start.getMinutes() < 10) {
                                        minuto = '0' + info.event.start.getMinutes();
                                    } else {
                                        minuto = info.event.start.getMinutes();
                                    }

                                    if (info.event.start.getSeconds() < 10) {
                                        segundo = '0' + info.event.start.getSeconds();
                                    } else {
                                        segundo = info.event.start.getSeconds();
                                    }

                                    let fecha = info.event.start.getFullYear() + '-' + mes + '-' + dia + ' ' + hora + ':' + minuto + ':' + segundo;

                                    let httpRequest = new XMLHttpRequest();
                                    httpRequest.open('POST', '../consultas_ajax.php', true);
                                    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                    httpRequest.onreadystatechange = function () {
                                        if (httpRequest.readyState === 4) {
                                            if (httpRequest.status === 200) {
                                                Swal.fire(
                                                    'Enhorabuena!',
                                                    'La cita ha sido eliminada',
                                                    'success'
                                                );
                                            }
                                        }
                                    };
                                    httpRequest.send('eliminarCita=' + fecha);
                                    location.reload(true);
                                }
                            })
                        } else {

                            Swal.fire({
                                title: 'Eliminar la fecha?',
                                text: 'Seguro que quiere eliminar la fecha seleccionada?',
                                icon: 'warning',
                                showCloseButton: true,
                                showCancelButton: true,
                                confirmButtonText: 'Eliminar',
                                cancelButtonText: 'Cancelar'
                            }).then((result) => {
                                if (result.value) {
                                    let dia = '', mes = '', hora = '', minuto = '', segundo = '';

                                    if ((info.event.start.getMonth() + 1) < 10) {
                                        mes = '0' + (info.event.start.getMonth() + 1);
                                    } else {
                                        mes = (info.event.start.getMonth() + 1);
                                    }

                                    if (info.event.start.getDate() < 10) {
                                        dia = '0' + info.event.start.getDate();
                                    } else {
                                        dia = info.event.start.getDate();
                                    }

                                    if (info.event.start.getHours() < 10) {
                                        hora = '0' + info.event.start.getHours();
                                    } else {
                                        hora = info.event.start.getHours();
                                    }

                                    if (info.event.start.getMinutes() < 10) {
                                        minuto = '0' + info.event.start.getMinutes();
                                    } else {
                                        minuto = info.event.start.getMinutes();
                                    }

                                    if (info.event.start.getSeconds() < 10) {
                                        segundo = '0' + info.event.start.getSeconds();
                                    } else {
                                        segundo = info.event.start.getSeconds();
                                    }

                                    let fecha = info.event.start.getFullYear() + '-' + mes + '-' + dia + ' ' + hora + ':' + minuto + ':' + segundo;

                                    let httpRequest = new XMLHttpRequest();
                                    httpRequest.open('POST', '../consultas_ajax.php', true);
                                    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                    httpRequest.onreadystatechange = function () {
                                        if (httpRequest.readyState === 4) {
                                            if (httpRequest.status === 200) {
                                                Swal.fire(
                                                    'Enhorabuena!',
                                                    'La fecha ha sido eliminada',
                                                    'success'
                                                );
                                            }
                                        }
                                    };
                                    httpRequest.send('eliminarFecha=' + fecha);
                                    location.reload(true);
                                }
                            })
                        }

                    },
                    events: [<?= $eventos_calendario ?>],
                    <!-- Para crear eventos de forma estatica -->
                    /*,events:[
                        {
                            title:"Mi evento 1",
                            start:"2020-05-01 12:30:00",
                            end:"2020-05-02 12:30:00",
                            color:"orange",
                            textColor:"white",
                            descripcion:"Descripcion del evento 1"
                    },{
                            title:"Mi evento 3",
                            start:"2020-05-02 12:30:00",
                            end:"2020-05-08 12:30:00",
                            color:"black",
                            textColor:"white",
                            descripcion:"Descripcion del evento 3"
                    }
                    ]*/

                    /*,
                    navLinks: true, // can click day/week names to navigate views
                    selectable: true,
                    selectMirror: true,
                    select: function(arg) {
                        var title = prompt('Event Title:');
                        if (title) {
                            calendar.addEvent({
                                title: title,
                                start: arg.start,
                                end: arg.end,
                                allDay: arg.allDay
                            })
                        }
                        calendar.unselect()
                    }*/
                    editable: true,
                    eventLimit: true


                });


                <!-- Lenguaje en español -->
                calendar.setOption('locale', 'es');

                calendar.render();

                <!-- Añadida funcion recolectar datos al boton agregar -->
                $('#btnAgregar').click(function () {
                    recolectarDatosGUI();
                });

                <!-- Recoge todos los datos (hacer click en guardar) -->
                function recolectarDatosGUI() {

                    nuevoEvento = {

                        id: $('#txtID').val(),
                        title: $('#txtTitulo').val(),
                        descripcion: $('#txtDescripcion').val(),
                        textColor: 'white',
                        start: $('#txtFecha').val() + " " + $('#txtHora').val(),
                        end: $('#txtFecha').val() + " " + $('#txtHora').val()

                    };
                    console.log(nuevoEvento.start);

                    let httpRequest = new XMLHttpRequest();
                    httpRequest.open("POST", "../consultas_ajax.php", true);
                    httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    httpRequest.onreadystatechange = function () {


                        if (httpRequest.readyState == 4) {
                            if (httpRequest.responseText == 'existe') {
                                Swal.fire(
                                    'Error!',
                                    'La fecha introducida ya existe',
                                    'warning'
                                );
                                $('#ModalCalendario').modal('toggle');
                            } else {
                                calendar.addEvent(
                                    {
                                        title: "Fecha libre",
                                        date: nuevoEvento.start,
                                        color: '#4e73df',
                                        textColor: 'white'
                                    }
                                );
                                Swal.fire(
                                    'Enhorabuena!',
                                    'La fecha ha sido añadida',
                                    'success'
                                );
                                $('#ModalCalendario').modal('toggle');
                            }
                        }
                    };
                    httpRequest.send("anadirCita=" + nuevoEvento.start);

                }
            });


        </script>
        <!-- Estilos del calendario -->
        <style>
            #calendar {
                max-width: 900px;
                margin: 0 auto;
                position: absolute;
                z-index: 0;
            }
        </style>
    </head>

    <body id="page-top">

    <!-- Envoltorio de la pagina -->
    <div id="wrapper">

        <!-- Comienzo de barra Lateral -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Barra Lateral - Titulo -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Nutri Admin</div>
            </a>

            <!-- Divisor -->
            <hr class="sidebar-divider my-0">

            <!-- Elemento barra navegacion - Inicio -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-table"></i>

                    <span>Calendario</span></a>
            </li>

            <!-- Divisor -->
            <hr class="sidebar-divider">

            <!-- Titulo Cabecera1 -->
            <div class="sidebar-heading">
                Interfaz
            </div>

            <!-- Elemento barra navegacion - Menu Componentes -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Seguimiento</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">ÚTILES:</h6>
                        <a class="collapse-item" href="#" onclick="verUsuariosAnamnesis()">Anamnesis</a>
                        <a class="collapse-item" href="#" onclick="verUsuariosRevisiones()">Revisiones</a>
                    </div>
                </div>
            </li>

            <!-- Elemento barra navegacion - Menu Herramientas -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                   aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Usuarios</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                     data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">INFO DE USUARIOS:</h6>
                        <a class="collapse-item" href="#" onclick="verUsuarios()">Gestion de Usuarios</a>
                        <a class="collapse-item" href="#" onclick="verPacientesActivos()">Pacientes Activos</a>
                    </div>
                </div>
            </li>

            <!-- Divisor -->
            <hr class="sidebar-divider">

            <!-- Titulo Cabecera2 -->
            <div class="sidebar-heading">
                Complementos
            </div>

            <!-- Elemento barra navegacion - Menu paginas -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                   aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Artículos</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestión de Artículos:</h6>
                        <a class="collapse-item" href="#" onclick="nuevoArticulo()">Crear Nuevo</a>
                        <a class="collapse-item" href="#" onclick="gestionArticulo()">Modificar/Borrar </a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Gestión de Comentarios:</h6>
                        <a class="collapse-item" href="#" onclick="">Crear Nuevo</a>
                        <a class="collapse-item" href="#" onclick="">Modificar/Borrar</a>

                    </div>
                </div>
            </li>

            <!-- Elemento barra navegacion - Usuarios -->
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="verGraficas()">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Graficas</span></a>
            </li>

            <!-- Elemento barra navegacion - Tablas -->
            <li class="nav-item">
                <a class="nav-link" href="#">

                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Descargas PDF</span></a>
            </li>

            <!-- Divisor -->
            <hr class="sidebar-Divisor d-none d-md-block">

            <!-- Alternador de barra lateral -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- Fin Barra lateral -->

        <!-- Contenido Envoltorio -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Contenido principal -->
            <div id="content">

                <!-- Barra Superior -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Boton eliminacion barra lateral (Xs) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Buscador barra superior -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                   aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Barra Navegacion Superior -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Elemento barra navegacion - desplegable de búsqueda (Visible solo en XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Desplegable - Mensajes -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                 aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                               placeholder="Search for..." aria-label="Search"
                                               aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Elemento barra navegacion - Alertas -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="verAlertas()">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Mostrador - Alertas -->
                                <?php if ($cuentaAlertas >= 1): ?>
                                    <span class="badge badge-danger badge-counter"><?php echo $cuentaAlertas; ?>+</span>
                                <?php endif; ?>
                            </a>
                            <!-- Desplegable - Alertas -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="alertsDropdown" id="alertas" onclick="verAlertas()"></div>

                        </li>

                        <!-- Elemento barra navegacion - Mensajes -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               onclick="verMensajes()">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Contador - Mensajes -->
                                <?php if ($cuentaMensajes >= 1): ?>
                                    <span class="badge badge-danger badge-counter"><?php echo $cuentaMensajes; ?></span>
                                <?php endif; ?>
                            </a>

                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="messagesDropdown" id="mensajes"></div>

                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Elemento barra navegacion - Informacion del Administrador -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nombre'] ?></span>
                                <img class="img-profile rounded-circle"
                                     src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Desplegable - Informacion del Administrador -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                 aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ajustes
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Registro de Actividades
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- Fin Barra Superior -->


                <!-- Contenido principal -->

                <div class="marca">

                    <div id="marcaCalendario">

                        <div class="row">
                            <div class="col"></div>
                            <div class="col-11">
                                <div id='calendar' style="width: auto"></div>
                            </div>
                            <div class="col"></div>
                        </div>


                        <!-- Modal Calendario-->
                        <div class="modal fade" id="ModalCalendario" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="Titulo">Crear nueva fecha</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="d-none">
                                            Fecha:
                                            <input type="text" class="form-control" name="txtFecha" id="txtFecha">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4"></div>
                                            <div class="form-group col-md-4">
                                                <label> Hora:</label>
                                                <input type="time" min="08:00" max="20:00" step="600"
                                                       class="form-control"
                                                       name="txtHora" id="txtHora">
                                            </div>
                                            <div class="form-group col-md-4"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">

                                        <button id="btnAgregar" class="btn btn-primary">Agregar</button>
                                        <button id="btnCancelar" class="btn btn-secondary" data-dismiss="modal">Cancelar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>



                </div>

            </div>
            <!-- Fin contenido principal -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Ignacio Macias Martinez</span>
                        <br>
                        <span>2DAW</span>
                    </div>
                </div>
            </footer>
            <!-- Fin Footer -->

        </div>
        <!-- Fin contenido envoltorio -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Boton para desplazamiento superior-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal de cierre de sesion-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Estas seguro que quieres cerrar tu sesión?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="#" ">Cerrar</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal de Mensajes -->
    <?php foreach ($contactoMensajes

                   as $mensaje): ?>
        <div class="modal fade" id="modalMensajes<?= $mensaje['ID_Mensaje'] ?>" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Nombre: <?= $mensaje['nombre'] ?><br>
                            Tlf: <?= $mensaje['telefono'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label>Mensaje de <?= $mensaje['nombre'] ?>:</label>
                        <br>
                        <label><?= $mensaje['mensaje'] ?></label>
                        <br>
                        <br>

                        <label>Contestar al siguiente correo: <a class="d-block"
                                                                 href="mailto:<?= $mensaje['correo'] ?>"><?= $mensaje['correo'] ?></a></label>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"
                                onclick="mensajeRespondido(<?= $mensaje['ID_Mensaje'] ?>)">Mensaje respondido
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;


    foreach ($AlertasCita

             as $alertas): ?>

        <!-- Modal de Avisos -->
        <div class="modal fade" id="modalAvisos<?= $alertas['ID_Res'] ?>" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= $alertas['fecha'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label>El usuario
                            <?php foreach ($alertaUsuarios as $usuarios)
                                if ($usuarios['num_Usuario'] == $alertas['ID_Usuario']) {
                                    echo $usuarios['nombre'];
                                }
                            ?>
                            quiere reservar esta fecha y hora </label>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"
                                onclick="confirmarReserva(<?= $alertas['ID_Res'] ?>)">Confirmar
                        </button>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
    <!-- Nucleo Bootstrap JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Plugins -->

    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Scripts customizados -->

    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="Scripts_admin.js"></script>

    <!-- SweetAlert -->
    <script src="../node_modules/sweetalert2/dist/sweetalert2.js"></script>
    <link rel="stylesheet" href="../node_modules/sweetalert2/dist/sweetalert2.css">

    <!-- TRUMBOWYG -->
    <link rel="stylesheet" href="../node_modules/trumbowyg/dist/ui/trumbowyg.min.css">
    <script src="../node_modules/trumbowyg/dist/trumbowyg.min.js"></script>

    <!-- Graficas -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <link href="../graficas/morris.css" rel="stylesheet" type="text/css">
    <script src="../graficas/morris.min.js" charset="utf-8"></script>
    </body>

    </html>
<?php endif; ?>