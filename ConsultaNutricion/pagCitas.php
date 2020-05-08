<?php
// Comienza la sesion
session_start();
require_once "Connection.php";
// Castellano por defecto o mantiene la sesion si se ha cambiado el idioma
if (isset($_SESSION["idioma"])) {
    include $_SESSION["idioma"];
} else {
    include "castellano.php";
}

date_default_timezone_set('UTC');

$dbh = Connection::make();

$stmt = $dbh->prepare("SELECT * FROM fechas  WHERE fecha NOT IN (SELECT fecha FROM citas WHERE confReserva=1)");
$stmt_2 = $dbh->prepare("SELECT * FROM citas WHERE ID_Usuario = :num_Usuario");

$parameters = [':num_Usuario' => $_SESSION['num_Usuario']];

$stmt_3 = $dbh->prepare("SELECT * FROM contacto WHERE vistos=0");

$stmt->execute();
$stmt_2->execute($parameters);
$stmt_3->execute();

$fechas = $stmt->fetchAll(PDO::FETCH_ASSOC);
$citas = $stmt_2->fetchAll(PDO::FETCH_ASSOC);
$Mensajes = $stmt_3->fetchAll(PDO::FETCH_ASSOC);
$cuentaMensajes = count($Mensajes);

$eventos_calendario = '';

if (count($citas) > 0) {
    for ($i = 0; $i < count($citas); $i++) {
        $color="";
        if ($citas[$i]['confReserva']==1){
            $color= 'green';
        }else{
            $color= 'orange';
        }
        if ($i == 0) {
            $eventos_calendario .= '{title: "Cita usuario ' . $citas[$i]['ID_Usuario'] . '", start: "' . $citas[$i]['fecha'] . '", end: "' . $citas[$i]['fecha'] . '", color: "'.$color.'", textColor: "white", descripcion: "Cita usuario ' . $citas[$i]['ID_Usuario'] . '"}';
        } else {
            $eventos_calendario .= ', {title: "Cita usuario ' . $citas[$i]['ID_Usuario'] . '", start: "' . $citas[$i]['fecha'] . '", end: "' . $citas[$i]['fecha'] . '", color: "'.$color.'", textColor: "white", descripcion: "Cita usuario ' . $citas[$i]['ID_Usuario'] . '"}';
        }
    }
}

if (count($fechas) > 0) {
    for ($j = 0; $j < count($fechas); $j++) {
        if ($j == 0 && count($citas) == 0) {
            $eventos_calendario .= '{title: "Fecha libre", start: "' . $fechas[$j]['fecha'] . '", end: "' . $fechas[$j]['fecha'] . '", color: "yellow", textColor: "black", descripcion: "Fecha libre"}';
        } else {
            $eventos_calendario .= ', {title: "Fecha libre", start: "' . $fechas[$j]['fecha'] . '", end: "' . $fechas[$j]['fecha'] . '", color: "yellow", textColor: "black", descripcion: "Fecha libre"}';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $titPagina ?></title>

    <!-- Núcleo Bootstrap css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Fuentes de texto -->
    <link href="img/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Estilos customizados -->
    <link href="css/estilos.css" rel="stylesheet" type="text/css">

    <!-- Calendario -->

    <!-- Estilos de Vista Calendario -->
    <link href='calendario/packages/core/main.css' rel='stylesheet'/>
    <link href='calendario/packages/daygrid/main.css' rel='stylesheet'/>
    <link href='calendario/packages/timegrid/main.css' rel='stylesheet'>

    <!-- Scripts Calendario -->
    <script src='calendario/packages/core/main.js'></script>
    <script src='calendario/packages/daygrid/main.js'></script>
    <script src='calendario/packages/timegrid/main.js'></script>
    <script src='calendario/packages/interaction/main.js'></script>
    <script src='calendario/packages/core/locales/es.js'></script>

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
                    right: 'dayGridMonth,timeGridWeek'
                },
                <!-- Para crear eventos de forma estatica -->
                /*events:[
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
                ],*/

                <!-- Al pulsar sobre el dia se recoge la informacion -->
                dateClick: function (info) {

                    $('#txtFecha').val(info.dateStr);

                    $('#ModalCalendario').modal();

                    console.log(info);
                },
                <!-- Imprime toda la informacion del evento -->
                eventClick: function (info) {

                    if(info.event.backgroundColor=="orange") {
                        Swal.fire({
                            title: 'Eliminar la cita?',
                            text: 'Seguro que quieres eliminar la cita seleccionada?',
                            icon: 'warning',
                            showCloseButton: true,
                            showCancelButton: true,
                            confirmButtonText: 'Eliminar',
                            cancelButtonText: 'Cancelar'
                        }).then((result) => {
                            if (result.value) {
                                let dia = '', mes = '', hora = '', minuto = '', segundo = '';

                                if((info.event.start.getMonth() + 1) < 10) {
                                    mes = '0' + (info.event.start.getMonth() + 1);
                                } else {
                                    mes = (info.event.start.getMonth() + 1);
                                }

                                if(info.event.start.getDate() < 10) {
                                    dia = '0' + info.event.start.getDate();
                                } else {
                                    dia = info.event.start.getDate();
                                }

                                if(info.event.start.getHours() < 10) {
                                    hora = '0' + info.event.start.getHours();
                                } else {
                                    hora = info.event.start.getHours();
                                }

                                if(info.event.start.getMinutes() < 10) {
                                    minuto = '0' + info.event.start.getMinutes();
                                } else {
                                    minuto = info.event.start.getMinutes();
                                }

                                if(info.event.start.getSeconds() < 10) {
                                    segundo = '0' + info.event.start.getSeconds();
                                } else {
                                    segundo = info.event.start.getSeconds();
                                }

                                let fecha = info.event.start.getFullYear() + '-' + mes + '-' + dia + ' ' + hora + ':' + minuto + ':' + segundo;

                                let httpRequest = new XMLHttpRequest();
                                httpRequest.open('POST', 'consultas_ajax.php', true);
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
                            }
                        })


                    }else{
                        Swal.fire({
                            title: 'seleccionar la fecha?',
                            text: 'Seguro que quiere seleccionar la fecha seleccionada?',
                            icon: 'primary',
                            showCloseButton: true,
                            showCancelButton: true,
                            confirmButtonText: 'Aceptar',
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
                                httpRequest.open('POST', 'consultas_ajax.php', true);
                                httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                httpRequest.onreadystatechange = function () {
                                    if (httpRequest.readyState === 4) {
                                        if (httpRequest.status === 200) {
                                            Swal.fire(
                                                'Enhorabuena!',
                                                'La Cita ha sido reservada',
                                                'success'
                                            );
                                        }
                                    }
                                };
                                httpRequest.send('cogerCita=' + fecha);
                            }
                        })
                    }
                },
                events: [<?= $eventos_calendario ?>],
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
                                {title: "Fecha libre", date: nuevoEvento.start, color: 'yellow', textColor: 'black'}
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

</head>

<body id="Principal">

<!-- Navegador -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Titulo de la consulta</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#NavegadorResponsive" aria-controls="NavegadorResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="NavegadorResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <div class="dropdown nav-link">
                        <a class=" dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false"><?php echo $navIdioma ?></a>
                        <div class="dropdown-menu " style="border-color: transparent; background-color: #212529;"
                             aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item btn bg-transparent" style="color: #9362bd; " id="castellano"
                                    type="button">Castellano
                            </button>
                            <button class="dropdown-item btn bg-transparent" style="color: #9362bd" id="valenciano"
                                    type="button">Valenciano
                            </button>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php"><?php echo $pagSerVolver ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Cabecera -->
<header class="masthead" style="background-color: #212529">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in"><?php echo $pagSerTitulo1 ?></div>
            <div class="intro-heading text-uppercase"><?php echo $pagSerTitulo2 ?></div>
        </div>
    </div>
</header>

<!-- Calendario para escoger fecha y hora disponible -->

<section class=" page-section">
    <div class="container">


        <div id='calendar' style="width: auto"></div>

    </div>
</section>


<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Ignacio Macias Martinez 2DAW</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#"><?php echo $fooPolitica ?></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><?php echo $fooTerminos ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Nucleo Bootstrap JavaScript -->
<script src="js/jquery/jquery.js"></script>
<script src="bootstrap/js/bootstrap.bundle.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery-easing/jquery.easing.js"></script>

<!-- Formulario Contacto JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contacto.js"></script>

<!-- Scripts customizados -->
<script src="js/Bootstrap.js"></script>
<script src="js/Scripts.js"></script>

<!-- Cambio de idioma -->
<script type="text/javascript">
    document.getElementById("castellano").onclick = cambioIdioma;
    document.getElementById("valenciano").onclick = cambioIdioma;
</script>

<!-- SweetAlert -->
<script src="node_modules/sweetalert2/dist/sweetalert2.js"></script>
<link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.css">

</body>

</html>