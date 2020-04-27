<?php
require_once "Connection.php";
require_once "comentario.php";
date_default_timezone_set('UTC');

if ($_SERVER["REQUEST_METHOD"]=="POST" )
{

	$num_art = $_POST["num_art"];
	$nom_usu = $_POST["nom_usu"];
	$tex_com = $_POST["tex_com"];
	$fecha = date(d-m-Y H:i);


	/*preparacion de la conexion*/

    $dbh = Connection::make();

    /*preparacion de la consulta*/

    $stmt = $dbh->prepare("INSERT INTO articulos (num_art,nom_usu,tex_com,fecha) VALUES (?,?,?,?)");

    /*preparacion de los parametros a pasar*/
    $stmt->bindParam(1, $num_art);
    $stmt->bindParam(2, $nom_usu);
    $stmt->bindParam(3, $tex_com);
    $stmt->bindParam(4, $fecha);
   

     /*ejecutamos todo lo preparado anteriormente*/
    $stmt->execute();

    if (isset($_POST['num_art'])) {
        $stmt = $dbh->prepare("SELECT * FROM comentarios ");

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "comentario");
        $stmt->execute();

        $resultado = $stmt->fetchAll();






}