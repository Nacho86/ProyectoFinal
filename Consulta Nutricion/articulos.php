<?php
require_once "Connection.php";
require_once "articulo.php";
date_default_timezone_set('UTC');
$ruta = "img/articulos/";
if ($_SERVER["REQUEST_METHOD"]=="POST")
{

	$titulo = $_POST["titulo"];
    $resumen = $_POST["resumen"];
    if (is_uploaded_file($_FILES['imagen']['tmp_name']) === true) {
        $nombre = $_FILES['imagen']['name'];
        $idUnico = time();
        $rutaDestino = $ruta . $idUnico . $nombre;
        move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino);
    } else {
        $rutaDestino = "img/articulos/imagenDefecto.jpg";
    }
    $contenido = $_POST["contenido"];
    $fecha = date(d-m-Y);
    $cat1 = $_POST["cat1"];
    $cat2 = $_POST["cat2"];
   
    /*preparacion de la conexion*/

    $dbh = Connection::make();

    /*preparacion de la consulta*/

    $stmt = $dbh->prepare("INSERT INTO articulos (titulo,resumen,imagen,contenido,fecha,cat1,cat2) VALUES (?,?,?,?,?,?,?)");

    /*preparacion de los parametros a pasar*/
    $stmt->bindParam(1, $titulo);
    $stmt->bindParam(2, $resumen);
    $stmt->bindParam(3, $rutaDestino);
    $stmt->bindParam(4, $contenido);
    $stmt->bindParam(5, $fecha);
    $stmt->bindParam(6, $cat1);
    $stmt->bindParam(7, $cat2);

     /*ejecutamos todo lo preparado anteriormente*/
    $stmt->execute();

    if (isset($_POST['titulo'])) {
        $stmt = $dbh->prepare("SELECT * FROM articulos ");

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "articulo");
        $stmt->execute();

        $resultado = $stmt->fetchAll();

    }

}