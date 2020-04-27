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

        if (password_verify($datos[1], $resultado[0])) {
            $_SESSION['correo'] = $datos[0];
            echo $resultado[1];

        }else{
            echo "F";
        }
}

//Sacar los pacientes activos.

if (isset($_POST['activos'])) {
    $stmt = $dbh->prepare("SELECT * FROM usuarios U, pacientes P WHERE U.num_Usuario= P.num_Usuario AND usu_Activo= 1 ORDER BY nombre");
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

//Sacar los usuarios.

if (isset($_POST['verUsuarios'])) {
    $stmt = $dbh->prepare("SELECT * FROM usuarios WHERE tipo = 'U' AND usu_Activo=1 ORDER BY num_Usuario");
    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "usuario");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    if (!is_null($resultado)) { ?>
        <!-- Barra superior de la Tabla -->
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>Nº USUARIO</th>
                <th>AÑADIR PACIENTE</th>
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
                <th>AÑADIR PACIENTE</th>
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
                <th><button type="button" name="crear_paciente" class="btn btn-primary" id="nuevoPaciente" onclick="nuevoPaciente()">Añadir Paciente</button></th>
                <th><button type="button" name="modificar_usuario" class="btn btn-primary" id="modificarUsuario" onclick="modificarUsuario()">Modificar</button></th>
                <th><button type="button" name="eliminar_usuario" class="btn btn-danger" id="borrarUsuario" onclick="eliminarUsuario()">Eliminar</button></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
     <?php
    } 
}

// CONFIRMAR BORRAR USUARIO (DEJAR INACTIVO)
if (isset($_POST['delete_user'])) {
    $stmt = $dbh->prepare("UPDATE usuarios SET usu_Activo= 0 WHERE nombre = ?");
    $stmt->bindParam(1, $_POST['delete_user']);
    $stmt->execute();

}
// CONFIRMAR BORRAR PACIENTE (DEJAR INACTIVO)
if (isset($_POST['delete_paciente'])) {
    $stmt = $dbh->prepare("UPDATE pacientes SET paciente_Activo= 0 WHERE DNI = ?");
    $stmt->bindParam(1, $_POST['delete_paciente']);
    $stmt->execute();

}






