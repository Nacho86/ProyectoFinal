<?php
// Verificar campos vacíos
if(empty($_POST['nombre'])      ||
   empty($_POST['email'])     ||
   empty($_POST['telefono'])     ||
   empty($_POST['mensaje'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No hay asunto proporcionado";
   return false;
   }
   
$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
$DudaCorreo = strip_tags(htmlspecialchars($_POST['email']));
$telefono = strip_tags(htmlspecialchars($_POST['telefono']));
$Mensaje = strip_tags(htmlspecialchars($_POST['mensaje']));
   
// Crea el correo electrónico y envía el mensaje
$MiCorreo = 'icmaster17@hotmail.com'; // Aquí es donde el formulario enviará el mensaje.
$asunto_correo = "Formulario de contacto del sitio web:  $nombre";
$cuerpo_correo = "Recibió un nuevo mensaje del formulario de contacto de su sitio web.\n\n"."Aquí están los detalles:\n\nNombre: $nombre\n\nEmail: $DudaCorreo\n\nTelefono de contacto: $telefono\n\nMensaje:\n$Mensaje";
$cabecera = "Desde: noreply@hotmail.com\n"; // Esta es la dirección de correo electrónico desde la que se generará el mensaje creado.
$cabecera .= "MiCorreo: $DudaCorreo";
mail($MiCorreo,$asunto_correo,$cuerpo_correo,$cabecera);
return true;
?>