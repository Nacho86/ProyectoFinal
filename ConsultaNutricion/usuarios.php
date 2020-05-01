<?php
require_once "Connection.php";
require_once "usuario.php";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{

	$nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $codigo = $_POST["passw"];
    $passw=password_hash($codigo,PASSWORD_DEFAULT,['cost'=> 14]);


    /*preparacion de la conexion*/

    $dbh = Connection::make();

    /*preparacion de la consulta*/

    $stmt = $dbh->prepare("INSERT INTO usuarios (nombre,correo,passw,tipo) VALUES (?,?,?,'U')");

    /*preparacion de los parametros a pasar*/
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $correo);
    $stmt->bindParam(3, $passw);

     /*ejecutamos todo lo preparado anteriormente*/
    $stmt->execute();

    if (isset($_POST['nombre'])) {
        $stmt = $dbh->prepare("SELECT * FROM usuarios ");

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "usuario");
        $stmt->execute();

        $resultado = $stmt->fetchAll();

    }

    header('Location: index.php');
}