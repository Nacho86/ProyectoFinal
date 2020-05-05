<?php
require_once "Connection.php";
require_once "cita.php";
date_default_timezone_set('UTC');

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
	$ID_Res = $_POST["ID_Res"];
    $reserva = $_POST["reserva"];
    $confReserva = $_POST["confReserva"];
    $usuarioReserva = $_POST["usuarioReserva"];
    $fecha = date();

    /*preparacion de la conexion*/

    $dbh = Connection::make();

    /*preparacion de la consulta*/

    $stmt = $dbh->prepare("INSERT INTO articulos (ID_Res,reserva,confReserva,usuarioReserva,fecha) VALUES (?,0,0,?,?)");

    /*preparacion de los parametros a pasar*/
    $stmt->bindParam(1, $ID_Res);
    $stmt->bindParam(2, $reserva);
    $stmt->bindParam(3, $confReserva);
    $stmt->bindParam(4, $usuarioReserva);
    $stmt->bindParam(5, $fecha);

   

     /*ejecutamos todo lo preparado anteriormente*/
    $stmt->execute();



}