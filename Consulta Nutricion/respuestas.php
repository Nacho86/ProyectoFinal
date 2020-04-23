<?php
require_once "Connection.php";
require_once "respuesta.php";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{

	$nom_usu = $_POST["nom_usu"];
    $tex_res = $_POST["tex_res"];
    $fecha = date(d-m-Y H:i);

     /*preparacion de la conexion*/

    $dbh = Connection::make();

    /*preparacion de la consulta*/

    $stmt = $dbh->prepare("INSERT INTO respuestas (nom_usu,tex_res,fecha) VALUES (?,?,?)");

    /*preparacion de los parametros a pasar*/
    $stmt->bindParam(1, $nom_usu);
    $stmt->bindParam(2, $tex_res);
    $stmt->bindParam(3, $fecha);
  

     /*ejecutamos todo lo preparado anteriormente*/
    $stmt->execute();

    if (isset($_POST['nom_usu'])) {
        $stmt = $dbh->prepare("SELECT * FROM respuestas ");

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "respuesta");
        $stmt->execute();

        $resultado = $stmt->fetchAll();

    }

}