<?php
session_start();
require_once "Connection.php";
require_once "usuario.php";
$dbh = Connection::make();

//Comprobación de usuario en login.
if(isset($_POST['correolg'])) {
    $datos=json_decode($_POST["correolg"]);
    $stmt = $dbh->prepare("SELECT passw,tipo FROM usuarios WHERE correo=?");
    $stmt->bindParam(1, $datos[0]);

    $stmt->setFetchMode(PDO::FETCH_NUM);
    $stmt->execute();


    $resultado = $stmt->fetch();

        if (password_verify($datos[1], $resultado[0])) {
            $_SESSION['correo'] = $datos[0];
            echo $resultado[1];

        }else{
            echo "F";
        }

}
?>