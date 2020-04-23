<?php
require_once "Connection.php";
require_once "paciente.php";
$ruta = "img/pacientes/";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
if (is_uploaded_file($_FILES['foto']['tmp_name']) === true) {
        $nombre = $_FILES['foto']['name'];
        $idUnico = time();
        $rutaDestino = $ruta . $idUnico . $nombre;
        move_uploaded_file($_FILES['foto']['tmp_name'], $rutaDestino);
    } else {
        $rutaDestino = "img/pacientes/imagenDefecto.jpg";
    }

    $telefono = $_POST["telefono"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $direccion = $_POST["direccion"];
    $DNI = $_POST["DNI"];
    $ID_paciente = $_POST["ID_paciente"];

    /*preparacion de la conexion*/

    $dbh = Connection::make();

     /*preparacion de la consulta*/

    $stmt = $dbh->prepare("INSERT INTO pacientes (foto,telefono,fecha_nacimiento,direccion,DNI,ID_paciente) VALUES (?,?,?,?,?,?)");

    /*preparacion de los parametros a pasar*/
    $stmt->bindParam(1, $rutaDestino);
    $stmt->bindParam(2, $telefono);
    $stmt->bindParam(3, $fecha_nacimiento);
    $stmt->bindParam(4, $direccion);
    $stmt->bindParam(5, $DNI);
    $stmt->bindParam(6, $ID_paciente);
  
      /*ejecutamos todo lo preparado anteriormente*/
    $stmt->execute();


    if (isset($_POST['ID_paciente'])) {
        $stmt = $dbh->prepare("SELECT * FROM pacientes ");

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "paciente");
        $stmt->execute();

        $resultado = $stmt->fetchAll();

    }

}