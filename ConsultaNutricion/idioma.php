
<?php
session_start();
$idioma=$_POST["idioma"];
if ($idioma=="castellano"){
    $_SESSION["idioma"]="castellano.php";
}else{
    $_SESSION["idioma"]="valenciano.php";
}
