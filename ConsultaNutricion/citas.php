<?php
require_once "Connection.php";
require_once "cita.php";
date_default_timezone_set('UTC');

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$ID_usu = $_POST["ID_usu"];
    $fecha = $_POST["fecha"];
    $duracion = $_POST["duracion"];
    $reserva = $_POST["reserva"];


    /*preparacion de la conexion*/

    $dbh = Connection::make();

    /*preparacion de la consulta*/

    $stmt = $dbh->prepare("INSERT INTO articulos (ID_usu,fecha,duracion,reserva) VALUES (?,?,?,"1")");

    /*preparacion de los parametros a pasar*/
    $stmt->bindParam(1, $ID_usu);
    $stmt->bindParam(2, $fecha);
    $stmt->bindParam(3, $duracion);
    $stmt->bindParam(4, $reserva);
  
   

     /*ejecutamos todo lo preparado anteriormente*/
    $stmt->execute();

    if (isset($_POST['ID_usu'])) {
        $stmt = $dbh->prepare("SELECT * FROM citas ");

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "cita");
        $stmt->execute();

        $resultado = $stmt->fetchAll();

    }

}