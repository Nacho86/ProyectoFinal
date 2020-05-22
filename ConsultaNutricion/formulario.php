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
      <a class="navbar-brand js-scroll-trigger" href="index.php">Logo de la empresa</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#NavegadorResponsive" aria-controls="NavegadorResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="NavegadorResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
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
            <a class="nav-link js-scroll-trigger" href="index.php"><?php echo $pagSerVolver ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Cabecera -->
  <header class="masthead" style="background-color: #212529">
    <div class="container">
      <div class="intro-text" style="margin-top: -250px;">
        <div class="intro-heading text-uppercase"></div>
      </div>
    </div>
  </header>

  <!-- Formulario de ingreso -->

  <section class=" page-section">
  
      
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto ">
              <div class="modal-body">
                <!-- Interior del formulario -->
                  <h1 class="item-intro text-muted center">CREAR NUEVO USUARIO</h1>
                    <form id="enviarForm" role="form" action="usuarios.php" method="post">
                       <div class="form-group">
                          <label for="nombre">Usuario:</label>
                          <input type="nombre" class="form-control " id="formNombre" name="nombre" placeholder="Nombre y apellidos *" required>
                        </div>

                        <div class="form-group">
                          <label for="nombre">Correo:</label>
                          <input type="nombre" class="form-control" id="formCorreo" name="correo" placeholder="Correo electronico *" required>
                        </div>

                        <div class="form-group">
                          <label for="pass">Contraseña:</label>
                          <input type="password" class="form-control" id="formPassw" name="passw" placeholder="Contraseña *" required>
                        </div>

                        <div class="form-group">
                          <label for="pass">Contraseña:</label>
                          <input type="password" class="form-control" id="formPasswRepeat" placeholder="Repite la contraseña *" required>
                        </div>
                        <button type="button" class="btn btn-primary" id="button"  onclick="comprobarFormulario()" disabled>Crear</button>
                    </form>
              </div>
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

   <!-- SweetAlert -->
   <script src="node_modules/sweetalert2/dist/sweetalert2.js"></script>
   <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.css">

  <!-- Cambio de idioma -->
  <script type="text/javascript">
    document.getElementById("castellano").onclick= cambioIdioma;
    document.getElementById("valenciano").onclick= cambioIdioma;
    document.getElementById("formPassw").onkeyup=comprobarPassw;
    document.getElementById("formPasswRepeat").onkeyup=comprobarPassw;
    document.getElementById("formNombre").onkeyup=comprobarNom;
    document.getElementById("formCorreo").onkeyup=validarEmail;
  </script>

</body>

</html>