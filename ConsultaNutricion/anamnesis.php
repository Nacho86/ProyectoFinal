<?php
require_once "Connection.php";
require_once "anamnesi.php";
date_default_timezone_set('UTC');

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $fecha = date(d-m-Y);
    $ID_paciente = $_POST["ID_paciente"];
    $motivoConsulta = $_POST["motivoConsulta"];
    $propositosConseguir = $_POST["propositosConseguir"];
    $motivoAcudir = $_POST["motivoAcudir"];
    $dietasAnteriores = $_POST["dietasAnteriores"];
    $oscilacionesPeso = $_POST["oscilacionesPeso"];
    $supusoEsfuerzo = $_POST["supusoEsfuerzo"];
    $motivoAbandono = $_POST["motivoAbandono"];
    $desdeDieta = $_POST["desdeDieta"];
    $tipoDieta = $_POST["tipoDieta"];
    $beneficiosPersonales = $_POST["beneficiosPersonales"];
    $patologiasActuales = $_POST["patologiasActuales"];
    $bioquimicosTG = $_POST["bioquimicosTG"];
    $glucosa = $_POST["glucosa"];
    $Fe = $_POST["Fe"];
    $VCM = $_POST["VCM"];
    $TSH = $_POST["TSH"];
    $transaminasas = $_POST["transaminasas"];
    $Urea = $_POST["Urea"];
    $creatina = $_POST["creatina"];
    $colesterol = $_POST["colesterol"];
    $restricciones = $_POST["restricciones"];
    $causasPatologicas = $_POST["causasPatologicas"];
    $otrasPatologias = $_POST["otrasPatologias"];
    $antecedentes = $_POST["antecedentes"];
    if (is_uploaded_file($_FILES['analitica']['tmp_name']) === true) {
        $nombre = $_FILES['analitica']['name'];
        $idUnico = time();
        $rutaDestino = $ruta . $idUnico . $nombre;
        move_uploaded_file($_FILES['analitica']['tmp_name'], $rutaDestino);
    } else {
        $rutaDestino = "Sin analitica previa";
    }
    $operaciones = $_POST["operaciones"];
    $causasOperaciones = $_POST["causasOperaciones"];
    $tomasFarmacos = $_POST["tomasFarmacos"];
    $deposiciones = $_POST["deposiciones"];
    $alergias = $_POST["alergias"];
    $intolerancias = $_POST["intolerancias"];
    $menstruacion = $_POST["menstruacion"];
    $tiempoLibre = $_POST["tiempoLibre"];
    $quienVives = $_POST["quienVives"];
    $quienCocina = $_POST["quienCocina"];
    $actividadFisica = $_POST["actividadFisica"];
    $gustaHacer = $_POST["gustaHacer"];
    $pondriaProposito = $_POST["pondriaProposito"];
    $dedicas = $_POST["dedicas"];
    $horario = $_POST["horario"];
    $desplazamiento = $_POST["desplazamiento"];
    $dondeCome = $_POST["dondeCome"];
    $horasDuerme = $_POST["horasDuerme"];
    $habitosToxicos = $_POST["habitosToxicos"];
    $desayuno = $_POST["desayuno"];
    $almuerzo = $_POST["almuerzo"];
    $comida = $_POST["comida"];
    $merienda = $_POST["merienda"];
    $cena = $_POST["cena"];
    $cuestionarioFrecuencia = $_POST["cuestionarioFrecuencia"];
    $preferencia = $_POST["preferencia"];
    $aversiones = $_POST["aversiones"];
    $picoteo = $_POST["picoteo"];
    $cuantasVecesPicas = $_POST["cuantasVecesPicas"];
    $cantidadPicas = $_POST["cantidadPicas"];
    $comesFuera = $_POST["comesFuera"];
    $cuantasVeces = $_POST["cuantasVeces"];
    $tipoComida = $_POST["tipoComida"];
    $motivoComesFuera = $_POST["motivoComesFuera"];
    $repitesPlato = $_POST["repitesPlato"];
    $tiempoComer = $_POST["tiempoComer"];
    $hacerCompra = $_POST["hacerCompra"];
    $gustaCocinar = $_POST["gustaCocinar"];
    $mientrasComes = $_POST["mientrasComes"];
    $peso = $_POST["peso"];
    $talla = $_POST["talla"];
    $cintura = $_POST["cintura"];
    $cadera = $_POST["cadera"];
    $tensionArterial = $_POST["tensionArterial"];
    $codoMunyeca = $_POST["codoMunyeca"];
    $resumen = $_POST["resumen"];
    $conclusiones = $_POST["conclusiones"];
    $primeraImpresion = $_POST["primeraImpresion"];
    $objetivos = $_POST["objetivos"];
    $observaciones = $_POST["observaciones"];

 /*preparacion de la conexion*/

    $dbh = Connection::make();

    /*preparacion de la consulta*/

    $stmt = $dbh->prepare("INSERT INTO anamnesis (fecha,ID_paciente,motivoConsulta,propositosConseguir,motivoAcudir,dietasAnteriores,oscilacionesPeso,supusoEsfuerzo,motivoAbandono,desdeDieta,tipoDieta,beneficiosPersonales,patologiasActuales,bioquimicosTG,glucosa,Fe,VCM,TSH,transaminasas,Urea,creatina,colesterol,restricciones,causasPatologicas,otrasPatologias,antecedentes,analitica,operaciones,causasOperaciones,tomasFarmacos,deposiciones,alergias,intolerancias,menstruacion,tiempoLibre,quienVives,quienCocina,actividadFisica,gustaHacer,pondriaProposito,dedicas,horario,desplazamiento,dondeCome,horasDuerme,habitosToxicos,desayuno,almuerzo,comida,merienda,cena,cuestionarioFrecuencia,preferencia,aversiones,picoteo,cuantasVecesPicas,cantidadPicas,comesFuera,cuantasVeces,tipoComida,motivoComesFuera,repitesPlato,tiempoComer,hacerCompra,gustaCocinar,mientrasComes,peso,talla,cintura,cadera,tensionArterial,codoMunyeca,resumen,conclusiones,primeraImpresion,objetivos,observaciones) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");


    /*preparacion de los parametros a pasar*/

    $stmt->bindParam(1, $fecha);
    $stmt->bindParam(2, $ID_paciente);
    $stmt->bindParam(3, $motivoConsulta);
    $stmt->bindParam(4, $propositosConseguir);
    $stmt->bindParam(5, $motivoAcudir);
    $stmt->bindParam(6, $dietasAnteriores);
    $stmt->bindParam(7, $oscilacionesPeso);
    $stmt->bindParam(8, $supusoEsfuerzo);
    $stmt->bindParam(9, $motivoAbandono);
    $stmt->bindParam(10, $desdeDieta);
    $stmt->bindParam(11, $tipoDieta);
    $stmt->bindParam(12, $motivoAcudir);
    $stmt->bindParam(13, $patologiasActuales);
    $stmt->bindParam(14, $bioquimicosTG);
    $stmt->bindParam(15, $glucosa);
    $stmt->bindParam(16, $Fe);
    $stmt->bindParam(17, $VCM);
    $stmt->bindParam(18, $TSH);
    $stmt->bindParam(19, $transaminasas);
    $stmt->bindParam(20, $Urea);
    $stmt->bindParam(21, $creatina);
    $stmt->bindParam(22, $colesterol);
    $stmt->bindParam(23, $restricciones);
    $stmt->bindParam(24, $causasPatologicas);
    $stmt->bindParam(25, $otrasPatologias);
    $stmt->bindParam(26, $antecedentes);
    $stmt->bindParam(27, $analitica);
    $stmt->bindParam(28, $operaciones);
    $stmt->bindParam(29, $causasOperaciones);
    $stmt->bindParam(30, $tomasFarmacos);
    $stmt->bindParam(31, $deposiciones);
    $stmt->bindParam(32, $alergias);
    $stmt->bindParam(33, $intolerancias);
    $stmt->bindParam(34, $menstruacion);
    $stmt->bindParam(35, $tiempoLibre);
    $stmt->bindParam(36, $quienVives);
    $stmt->bindParam(37, $quienCocina);
    $stmt->bindParam(38, $actividadFisica);
    $stmt->bindParam(39, $gustaHacer);
    $stmt->bindParam(40, $pondriaProposito);
    $stmt->bindParam(41, $dedicas);
    $stmt->bindParam(42, $horario);
    $stmt->bindParam(43, $desplazamiento);
    $stmt->bindParam(44, $dondeCome);
    $stmt->bindParam(45, $horasDuerme);
    $stmt->bindParam(46, $habitosToxicos);
    $stmt->bindParam(47, $desayuno);
    $stmt->bindParam(48, $almuerzo);
    $stmt->bindParam(49, $comida);
    $stmt->bindParam(50, $merienda);
    $stmt->bindParam(51, $cena);
    $stmt->bindParam(52, $cuestionarioFrecuencia);
    $stmt->bindParam(53, $preferencia);
    $stmt->bindParam(54, $aversiones);
    $stmt->bindParam(55, $picoteo);
    $stmt->bindParam(56, $cuantasVecesPicas);
    $stmt->bindParam(57, $cantidadPicas);
    $stmt->bindParam(58, $comesFuera);
    $stmt->bindParam(59, $cuantasVeces);
    $stmt->bindParam(60, $tipoComida);
    $stmt->bindParam(61, $motivoComesFuera);
    $stmt->bindParam(62, $repitesPlato);
    $stmt->bindParam(63, $tiempoComer);
    $stmt->bindParam(64, $hacerCompra);
    $stmt->bindParam(65, $gustaCocinar);
    $stmt->bindParam(66, $mientrasComes);
    $stmt->bindParam(67, $peso);
    $stmt->bindParam(68, $talla);
    $stmt->bindParam(69, $cintura);
    $stmt->bindParam(70, $cadera);
    $stmt->bindParam(71, $tensionArterial);
    $stmt->bindParam(72, $codoMunyeca);
    $stmt->bindParam(73, $resumen);
    $stmt->bindParam(74, $conclusiones);
    $stmt->bindParam(75, $primeraImpresion);
    $stmt->bindParam(76, $objetivos);
    $stmt->bindParam(77, $observaciones);

        /*ejecutamos todo lo preparado anteriormente*/
    $stmt->execute();

    if (isset($_POST['ID_paciente'])) {
        $stmt = $dbh->prepare("SELECT * FROM anamnesis ");

        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "anamnesi");
        $stmt->execute();

        $resultado = $stmt->fetchAll();

    }

}