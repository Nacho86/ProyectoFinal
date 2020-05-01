<?php
require_once "Connection.php";
require_once "paciente.php";

$ruta = "img/pacientes/";
if ($_SERVER["REQUEST_METHOD"] == "POST"){  


if (is_uploaded_file($_FILES['img']['tmp_name']) === true) {
        $nombre = $_FILES['img']['name'];
        $idUnico = time();
        $rutaDestino = $ruta . $idUnico . $nombre;
        move_uploaded_file($_FILES['img']['tmp_name'], $rutaDestino);
    } else {
        $rutaDestino = "img/pacientes/imagenDefecto.jpg";
    }
    $num_usu = $_POST['num_Usuario'];
    $telefono = $_POST["telefono"];
    $fecha_nacimiento = $_POST["fecha"];
    $direccion = $_POST["direccion"];
    $DNI = $_POST["DNI"];


    /*preparacion de la conexion*/

    $dbh = Connection::make();

     /*preparacion de la consulta*/

    $stmt = $dbh->prepare("INSERT INTO pacientes (foto,telefono,fecha_nacimiento,direccion,DNI, num_Usuario) VALUES (?,?,?,?,?,?)");

    /*preparacion de los parametros a pasar*/
    $stmt->bindParam(1, $rutaDestino);
    $stmt->bindParam(2, $telefono);
    $stmt->bindParam(3, $fecha_nacimiento);
    $stmt->bindParam(4, $direccion);
    $stmt->bindParam(5, $DNI);
    $stmt->bindParam(6, $num_usu);

  
      /*ejecutamos todo lo preparado anteriormente*/
    $stmt->execute();


    if (isset($_POST['num_Usuario'])) {
        $stmt = $dbh->prepare("SELECT * FROM pacientes ");

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "paciente");
        $stmt->execute();

        $resultado = $stmt->fetchAll();

    }

}