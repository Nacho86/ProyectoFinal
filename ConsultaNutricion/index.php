<?php
// Comienza la sesion
session_start();
// Castellano por defecto o mantiene la sesion si se ha cambiado el idioma
if (isset($_SESSION["idioma"])){
    include $_SESSION["idioma"];
}else{
    include "castellano.php";
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
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Estilos customizados -->
  <link href="css/estilos.css" rel="stylesheet" type="text/css">

</head>

<body id="Principal">

  <!-- Navegador -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#Principal">Titulo de la consulta</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#NavegadorResponsive" aria-controls="NavegadorResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="NavegadorResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#servicios"><?php echo $navServicios ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#articulos"><?php echo $navArticulos ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#navSobreMi"><?php echo $navSobreMi ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#navPideCita"><?php echo $navPideCita ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contacto"><?php echo $navContacto ?></a>
          </li>
          <li class="nav-item">
            <div class="dropdown nav-link">
              <a class=" dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $navIdioma ?></a>
              <div class="dropdown-menu " style="border-color: transparent; background-color: #212529;" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item btn bg-transparent" style="color: white; " id="castellano" type="button">Castellano</button>
                <button class="dropdown-item btn bg-transparent" style="color: white" id="valenciano" type="button">Valenciano</button> 
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link articulo-link" data-toggle="modal" href="#entrada"><?php echo $navEntrar ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Cabecera -->
  <header class="masthead " style="background-color: #212529";>
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><?php echo $cabTitulo1 ?></div>
        <div class="intro-heading text-uppercase"><?php echo $cabTitulo2 ?></div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#servicios"><?php echo $cabBoton ?></a>
      </div>
    </div>
  </header>

  <!-- Servicios -->
  <section class="page-section " id="servicios">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $serTitulo1 ?></h2>
          <h3 class="section-subheading text-muted"><?php echo $serTitulo2 ?></h3>
        </div>
        <div class="col-lg-2">
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-3">
          <span class="fa-stack fa-3x">
           <div class="timeline-image">
             <img class="img-fluid" src="img/servicios/1.png" alt="">
           </div>
          </span>
          <h4 class="service-heading"><?php echo $serServicio1 ?></h4>
          <p class="text-muted"><?php echo $serTexto1 ?></p>
        </div>
        <div class="col-md-3">
          <span class="fa-stack fa-3x">
            <img class="img-fluid" src="img/servicios/2.png" alt="">
          </span>
          <h4 class="service-heading"><?php echo $serServicio2 ?></h4>
          <p class="text-muted"><?php echo $serTexto2 ?></p>
        </div>
        <div class="col-md-3">
          <span class="fa-stack fa-3x">
            <img class="img-fluid" src="img/servicios/3.jpg" alt="">
          </span>
          <h4 class="service-heading"><?php echo $serServicio3 ?></h4>
          <p class="text-muted"><?php echo $serTexto3 ?></p>
        </div>
        <div class="col-md-3">
          <span class="fa-stack fa-3x">
            <img class="img-fluid" src="img/servicios/4.png" alt="">
          </span>
          <h4 class="service-heading"><?php echo $serServicio4 ?></h4>
          <p class="text-muted"><?php echo $serTexto4 ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8 text-center">
          <a class="btn btn-primary btn-xl text-uppercase " href="servicios.php"><?php echo $serBoton ?></a>
        </div>
        <div class="col-lg-2">
        </div>
      </div>
    </div>
  </section>

  <!-- Articulos Grid -->
  <section class="bg-light page-section" id="articulos">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $artTitulo1 ?></h2>
          <h3 class="section-subheading text-muted"><?php echo $artTitulo2 ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 ">
          <a class="articulo-link" data-toggle="modal" href="#articulo1">
            <img class="img-fluid" src="img/articulos/01-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Titulo</h4>
            <p class="text-muted">Categoria</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
          <a class="articulo-link" data-toggle="modal" href="#articulo2">
            <img class="img-fluid" src="img/articulos/02-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Titulo</h4>
            <p class="text-muted">Categoria</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
          <a class="particulo-link" data-toggle="modal" href="#articulo3">
            <img class="img-fluid" src="img/articulos/03-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Titulo</h4>
            <p class="text-muted">Categoria</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
          <a class="articulo-link" data-toggle="modal" href="#articulo4">
            <img class="img-fluid" src="img/articulos/04-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Titulo</h4>
            <p class="text-muted">Categoria</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
          <a class="articulo-link" data-toggle="modal" href="#articulo5">
            <img class="img-fluid" src="img/articulos/05-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Titulo</h4>
            <p class="text-muted">Categoria</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
          <a class="articulo-link" data-toggle="modal" href="#articulo6">
            <img class="img-fluid" src="img/articulos/06-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Titulo</h4>
            <p class="text-muted">Categoria</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8 text-center">
          <a class="btn btn-primary btn-xl text-uppercase " href="pagArticulos.php"><?php echo $artBoton ?></a>
        </div>
        <div class="col-lg-2" >
        </div>
      </div>
    </div>
    <div id="navSobreMi"></div>
  </section>

  <!-- Sobre mi -->
  <section class="page-section" id="sobreMi">
    <div class="diagonal">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $sobTitulo1 ?></h2>
          <h3 class="section-subheading text-muted"><?php echo $sobTitulo2 ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/0.jpg" alt="">
            <h4><?php echo $sobNombre ?></h4>
            <p class="text-muted"><?php echo $sobInfo1 ?></p>
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
        </div>
        <div class="col-sm-4">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center" >
          <p class="large text-muted subdiagonal"><?php echo $sobInfo2 ?></p>
        </div>
      </div>
    </div>
    <div id="navPideCita"></div>
  </section >
  
  <!-- Pide cita -->
  <section class="page-section" id="pideCita">
    <div class="container pidecita">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $pidTitulo1 ?></h2>
          <h3 class="section-subheading text-muted"><?php echo $pidTitulo2 ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/PideCita/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><?php echo $pidPaso1 ?></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"><?php echo $pidTexto1 ?></p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/PideCita/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><?php echo $pidPaso2 ?></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"><?php echo $pidTexto2 ?></p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/PideCita/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><?php echo $pidPaso3 ?></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"><?php echo $pidTexto3 ?></p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/PideCita/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4><?php echo $pidPaso4 ?></h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"><?php echo $pidTexto4 ?></p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <a href="#">
                <div class="timeline-image">
                 <h4><?php echo $pidBoton ?></h4>
                  </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Contacto -->
  <section class="page-section" id="contacto" style="background-image:url('img/cabecera.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase"><?php echo $conTitulo1 ?></h2>
          <h3 class="section-subheading text-muted"><?php echo $conTitulo2 ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="nombre" type="text" placeholder="<?php echo $conPlaceNombre ?>" required="required" data-validation-required-message="<?php echo $conRequeridoNombre ?>">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="<?php echo $conPlaceEmail ?>" required="required" data-validation-required-message="<?php echo $conRequeridoEmail ?>">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="telefono" type="tel" placeholder="<?php echo $conPlaceTelefono ?>" required="required" data-validation-required-message="<?php echo $conRequeridoTelefono ?>">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="mensaje" placeholder="<?php echo $conPlaceMensaje ?>" required="required" data-validation-required-message="<?php echo $conRequeridoMensaje ?>"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit"><?php echo $conBoton ?>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
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

  <!-- Ultimos Posts -->

  <!-- Articulo 1 -->
  <div class="articulo-modal modal fade" id="articulo1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Interior del articulo -->
                <h2 class="text-uppercase">TITULO</h2>
                <p class="item-intro text-muted">entrada del articulo</p>
                <img class="img-fluid d-block mx-auto" src="img/articulos/01-full.jpg" alt="">
                <p>Contenido del articulo</p>
                <ul class="list-inline">
                  <li><?php echo $artFecha ?>:</li>
                  <li><?php echo $artCategoria ?>:</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Articulo 2 -->
  <div class="articulo-modal modal fade" id="articulo2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Interior del articulo -->
                <h2 class="text-uppercase">TITULO</h2>
                <p class="item-intro text-muted">entrada del articulo</p>
                <img class="img-fluid d-block mx-auto" src="img/articulos/02-full.jpg" alt="">
                <p>Contenido del articulo</p>
                <ul class="list-inline">
                  <li><?php echo $artFecha ?>:</li>
                  <li><?php echo $artCategoria ?>:</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Articulo 3 -->
  <div class="articulo-modal modal fade" id="articulo3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Interior del articulo -->
                <h2 class="text-uppercase">TITULO</h2>
                <p class="item-intro text-muted">entrada del articulo</p>
                <img class="img-fluid d-block mx-auto" src="img/articulos/03-full.jpg" alt="">
                <p>Contenido del articulo</p>
                <ul class="list-inline">
                  <li><?php echo $artFecha ?>:</li>
                  <li><?php echo $artCategoria ?>:</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Articulo 4 -->
  <div class="articulo-modal modal fade" id="articulo4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Interior del articulo -->
                <h2 class="text-uppercase">TITULO</h2>
                <p class="item-intro text-muted">entrada del articulo</p>
                <img class="img-fluid d-block mx-auto" src="img/articulos/04-full.jpg" alt="">
                <p>Contenido del articulo</p>
                <ul class="list-inline">
                  <li><?php echo $artFecha ?>:</li>
                  <li><?php echo $artCategoria ?>:</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Articulo 5 -->
  <div class="articulo-modal modal fade" id="articulo5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Interior del articulo -->
                <h2 class="text-uppercase">TITULO</h2>
                <p class="item-intro text-muted">entrada del articulo</p>
                <img class="img-fluid d-block mx-auto" src="img/articulos/05-full.jpg" alt="">
                <p>Contenido del articulo</p>
                <ul class="list-inline">
                  <li><?php echo $artFecha ?>:</li>
                  <li><?php echo $artCategoria ?>:</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Articulo 6 -->
  <div class="articulo-modal modal fade" id="articulo6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Interior del articulo -->
                <h2 class="text-uppercase">TITULO</h2>
                <p class="item-intro text-muted">entrada del articulo</p>
                <img class="img-fluid d-block mx-auto" src="img/articulos/06-full.jpg" alt="">
                <p>Contenido del articulo</p>
                <ul class="list-inline">
                  <li><?php echo $artFecha ?>:</li>
                  <li><?php echo $artCategoria ?>:</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Formulario de entrada -->
  <div class="articulo-modal modal fade" id="entrada" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Interior del formulario -->
                <h1 class="item-intro text-muted">CONSULTA NUTRICIÓN</h1>
                  <form role="form">
                    <div class="form-group">
                      <label for="email">Correo electronico:</label>
                      <input type="text" class="form-control" id="correo" name="correolg">
                    </div>

                    <div class="form-group">
                      <label for="pass">Contraseña:</label>
                      <input type="password" class="form-control" id="passw" name="passwlg">
                    </div>
                    <small id="resgistro" class="form-text text-muted">Si no tienes cuenta, create una pulsado <a href="formulario.php"><bold>Aquí</bold></a> </small>
                    <div class="checkbox">
                      <label><input type="checkbox"> Recuerdame</label>
                    </div>
                    <button type="submit" id="loginlg" class="btn btn-primary">Entrar</button>
                    <button class="btn btn-danger" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  </form>Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Nucleo Bootstrap JavaScript -->
  <script src="js/jquery/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/jquery-easing/jquery.easing.js"></script>

  <!-- Formulario Contacto JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contacto.js"></script>

  <!-- Scripts customizados -->
  <script src="js/Bootstrap.js"></script>
  <script src="js/Scripts.js"></script>

  <!-- Llamadas a funciones -->
  <script type="text/javascript">
    document.getElementById("castellano").onclick= cambioIdioma;
    document.getElementById("valenciano").onclick= cambioIdioma;
    document.getElementById("loginlg").onclick=sitio;
  </script>

</body>

</html>
