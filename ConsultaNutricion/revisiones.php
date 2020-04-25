<?php
require_once "Connection.php";
require_once "revision.php";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{

	$fecha = date(d-m-Y);
    $indice_cor = $_POST["indice_cor"];
    $grasa_cor = $_POST["grasa_cor"];
    $masa_mag = $_POST["masa_mag"];
    $peso = $_POST["peso"];
    $agua = $_POST["agua"];
    $observaciones = $_POST["observaciones"];
    $ID_paciente = $_POST["ID_paciente"];
   

     /*preparacion de la conexion*/

    $dbh = Connection::make();

    /*preparacion de la consulta*/

    $stmt = $dbh->prepare("INSERT INTO revisiones (fecha,indice_cor,grasa_cor,masa_mag,peso,agua,observaciones,ID_paciente) VALUES (?,?,?,?,?,?,?,?)");

    /*preparacion de los parametros a pasar*/
    $stmt->bindParam(1, $fecha);
    $stmt->bindParam(2, $indice_cor);
    $stmt->bindParam(3, $grasa_cor);
    $stmt->bindParam(4, $masa_mag);
    $stmt->bindParam(5, $peso);
    $stmt->bindParam(6, $agua);
    $stmt->bindParam(7, $observaciones);
    $stmt->bindParam(8, $ID_paciente);
  

     /*ejecutamos todo lo preparado anteriormente*/
    $stmt->execute();

    if (isset($_POST['ID_paciente'])) {
        $stmt = $dbh->prepare("SELECT * FROM revisiones ");

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "revision");
        $stmt->execute();

        $resultado = $stmt->fetchAll();

    }

}