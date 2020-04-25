<?php
session_start();
require_once "Connection.php";
require_once "usuario.php";
require_once "anamnesi.php";
require_once "articulo.php";
require_once "cita.php";
require_once "paciente.php";
require_once "revision.php";
require_once "activos.php";
$dbh = Connection::make();

//Comprobación de usuario en login.
if(isset($_POST['correolg'])) {
    $datos=json_decode($_POST["correolg"]);
    $stmt = $dbh->prepare("SELECT passw,tipo FROM usuarios WHERE correo=?");
    $stmt->bindParam(1, $datos[0]);

    $stmt->setFetchMode(PDO::FETCH_NUM);
    $stmt->execute();


    $resultado = $stmt->fetch();
        print_r($datos[1]);
        print_r($resultado[0]);
        if (password_verify($datos[1], $resultado[0])) {
            $_SESSION['correo'] = $datos[0];
            echo $resultado[1];

        }else{
            echo "F";
        }
}

//Sacar los datos de usuario y pacientes.
if (isset($_POST['nombre'])) {
    $stmt = $dbh->prepare("Select * from usuarios U, pacientes Where U.num_Usuario in (select num_usuario from pacientes)");
    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "activos");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    if (!is_null($resultado)) { ?>
        <!-- Barra superior de la Tabla -->
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>Nº USUARIO</th>
                <th>TELEFONO</th>
                <th>FECHA NACIMIENTO</th>
                <th>DIRECCIÓN</th>
                <th>DNI</th>
                <th>Nº PACIENTE</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
            </tr>
        </thead>
        <!-- Barra inferior de la Tabla -->
        <tfoot>
            <tr>
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>Nº USUARIO</th>
                <th>TELEFONO</th>
                <th>FECHA NACIMIENTO</th>
                <th>DIRECCIÓN</th>
                <th>DNI</th>
                <th>Nº PACIENTE</th>
                <th>MODIFICAR</th>
                <th>ELIMINAR</th>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($resultado as $result) : ?>
        <!-- Desde aqui los datos de cada paciente y usuario -->
            <tr>
                <td><?php echo $result->getNombre() ?></td>
                <td><?php echo $result->getCorreo() ?></td>
                <td><?php echo $result->getNumUsuario() ?></td>
                <td><?php echo $result->getTelefono() ?></td>
                <td><?php echo $result->getFechaNacimiento() ?></td>
                <td><?php echo $result->getDireccion() ?></td>
                <td><?php echo $result->getDNI() ?></td>
                <td><?php echo $result->getIDPaciente() ?></td>
                <th><button type="button" name="modificar_usuario" class="btn btn-primary">Modificar</button></th>
                <th><button type="button" name="eliminar_usuario" class="btn btn-danger">Eliminar</button></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
     <?php
    } 
}