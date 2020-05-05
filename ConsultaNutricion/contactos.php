<?php
require_once "Connection.php";
require_once "contacto.php";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje= $_POST["mensaje"];

    /*preparacion de la conexion*/

    $dbh = Connection::make();

    /*preparacion de la consulta*/

    $stmt = $dbh->prepare("INSERT INTO contacto (nombre,correo,telefono,mensaje) VALUES (?,?,?,?)");

    /*preparacion de los parametros a pasar*/
    $stmt->bindParam(1, $nombre);
    $stmt->bindParam(2, $correo);
    $stmt->bindParam(3, $telefono);
    $stmt->bindParam(4, $mensaje);

    /*ejecutamos todo lo preparado anteriormente*/
    $stmt->execute();

    if (isset($_POST['nombre'])) {
        $stmt = $dbh->prepare("SELECT * FROM contacto ");

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "contacto");
        $stmt->execute();

        $resultado = $stmt->fetchAll();

    }
    sleep(3);
    header('Location: index.php#contacto');
}