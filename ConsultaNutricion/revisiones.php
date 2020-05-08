<?php
require_once "Connection.php";
require_once "revision.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['ID_revision'])) {

        $dbh = Connection::make();
        $stmt = $dbh->prepare('UPDATE revisiones SET indice_cor = :indice_cor, grasa_cor = :grasa_cor, masa_mag = :masa_mag, peso = :peso, agua = :agua, observaciones = :observaciones,ID_paciente= :ID_paciente  WHERE ID_revision = :id');
        $parameters = [
            ':indice_cor' => $_POST['indice_cor'],
            ':grasa_cor' => $_POST['grasa_cor'],
            ':masa_mag' => $_POST['masa_mag'],
            ':peso' => $_POST['peso'],
            ':agua' => $_POST['agua'],
            ':observaciones' => $_POST['observaciones'],
            ':ID_paciente' => $_POST['ID_paciente'],
            ':id' => $_POST['ID_revision']

        ];
        $stmt->execute($parameters);
    } else {

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

        $stmt = $dbh->prepare("INSERT INTO revisiones (fecha,indice_cor,grasa_cor,masa_mag,peso,agua,observaciones,ID_paciente) VALUES (CURRENT_DATE,?,?,?,?,?,?,?)");

        /*preparacion de los parametros a pasar*/
        $stmt->bindParam(1, $indice_cor);
        $stmt->bindParam(2, $grasa_cor);
        $stmt->bindParam(3, $masa_mag);
        $stmt->bindParam(4, $peso);
        $stmt->bindParam(5, $agua);
        $stmt->bindParam(6, $observaciones);
        $stmt->bindParam(7, $ID_paciente);


        /*ejecutamos todo lo preparado anteriormente*/
        $stmt->execute();

        if (isset($_POST['ID_paciente'])) {
            $stmt = $dbh->prepare("SELECT * FROM revisiones ");

            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "revision");
            $stmt->execute();

            $resultado = $stmt->fetchAll();

        }
    }
    header('Location: administrador/index.php');

}