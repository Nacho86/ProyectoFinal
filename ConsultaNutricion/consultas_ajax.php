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
    $stmt = $dbh->prepare("SELECT passw,tipo, nombre FROM usuarios WHERE correo=?");
    $stmt->bindParam(1, $datos[0]);

    $stmt->setFetchMode(PDO::FETCH_NUM);
    $stmt->execute();


    $resultado = $stmt->fetch();

        if (password_verify($datos[1], $resultado[0])) {
            $_SESSION['correo'] = $datos[0];
            $_SESSION['nombre'] = $resultado[2];
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
                <!-- hacer que recoja el valor de usuario -->
                <td><?php echo $result->getNumUsuario() ?></td>
                <td><?php echo $result->getTelefono() ?></td>
                <td><?php echo $result->getFechaNacimiento() ?></td>
                <td><?php echo $result->getDireccion() ?></td>
                <td><?php echo $result->getDNI() ?></td>
                <td><?php echo $result->getIDPaciente() ?></td>


                <th><button type="button" name="modificar_paciente" onclick="modificarPaciente(<?= $result->getIDPaciente() ?>)" class="btn btn-primary">Modificar</button></th>
                <th><button type="button" name="eliminar_paciente" onclick="eliminarPaciente(<?= $result->getIDPaciente() ?>)" class="btn btn-danger">Eliminar</button></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
     <?php
    } 
}

//Sacar los articulos.

if (isset($_POST['articles'])) {
    $stmt = $dbh->prepare("SELECT * FROM articulos ORDER BY ID_art");
    $stmt->execute();
    $articulos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!is_null($articulos)) { ?>
        <!-- Barra superior de la Tabla -->
        <thead>
        <tr>
            <th>ID</th>
            <th>TITULO</th>
            <th>RESUMEN</th>
            <th>FECHA</th>
            <th>CATEGORIA 1</th>
            <th>CATEGORIA 2</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
        </tr>
        </thead>
        <!-- Barra inferior de la Tabla -->
        <tfoot>
        <tr>
            <th>ID</th>
            <th>TITULO</th>
            <th>RESUMEN</th>
            <th>FECHA</th>
            <th>CATEGORIA 1</th>
            <th>CATEGORIA 2</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($articulos as $result) : ?>
            <!-- Desde aqui los datos de cada paciente y usuario -->
            <tr>
                <td><?php echo $result['ID_art'] ?></td>
                <td><?php echo $result['titulo'] ?></td>
                <td><?php echo $result['resumen'] ?></td>
                <td><?php echo $result['fecha'] ?></td>
                <td><?php echo $result['cat1'] ?></td>
                <td><?php echo $result['cat2'] ?></td>
                <th><button type="button" name="modificar_articulo" onclick="modificarArticulo(<?= $result['ID_art'] ?>)" class="btn btn-primary">Modificar</button></th>
                <th><button type="button" name="eliminar_articulo" onclick="eliminarArticulo(<?= $result['ID_art'] ?>)" class="btn btn-danger">Eliminar</button></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <?php
    }
}

//Eliminar el artículo

if(isset($_POST['removeArticle'])) {
    $stmt = $dbh->prepare("DELETE FROM articulos WHERE ID_art = :id");
    $parameters = [':id'=>$_POST['removeArticle']];
    $stmt->execute($parameters);
}

//Get articulo

if(isset($_POST['getArticle'])) {
    $stmt = $dbh->prepare("SELECT * FROM articulos WHERE ID_art = :id");
    $parameters = [':id'=>$_POST['getArticle']];
    $stmt->execute($parameters);
    $articulo = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($articulo);
}

//Get paciente

if(isset($_POST['getPaciente'])) {
    $stmt = $dbh->prepare("SELECT * FROM pacientes WHERE ID_paciente = :id");
    $parameters = [':id'=>$_POST['getPaciente']];
    $stmt->execute($parameters);
    $paciente = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($paciente);
}
//  BORRAR PACIENTE (DEJAR INACTIVO)
if (isset($_POST['delete_paciente'])) {
    $stmt = $dbh->prepare("UPDATE pacientes SET paciente_Activo= 0 WHERE DNI = :id");
    $parameters = [':id'=>$_POST['delete_paciente']];
    $stmt->execute($parameters);

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
                <th><button type="button" name="crear_paciente" class="btn btn-primary" id="nuevoPaciente" onclick="nuevoPaciente(<?= $result->getNumUsuario() ?>)">Añadir Paciente</button></th>
                <th><button type="button" name="eliminar_usuario" class="btn btn-danger" id="borrarUsuario" onclick="eliminarUsuario(<?= $result->getNumUsuario() ?>)">Eliminar Usuario</button></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
     <?php
    } 
}

//Sacar los usuarios para REVISIONES.

if (isset($_POST['verUsuariosRevisiones'])) {
    $stmt = $dbh->prepare("SELECT U.nombre, U.correo, U.num_Usuario, P.ID_paciente FROM usuarios U, pacientes P WHERE U.tipo = 'U' AND U.usu_Activo=1 AND U.num_Usuario = P.num_Usuario ORDER BY num_Usuario");
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
            <th>VER REVISIONES</th>
        </tr>
        </thead>
        <!-- Barra inferior de la Tabla -->
        <tfoot>
        <tr>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>Nº USUARIO</th>
            <th>AÑADIR PACIENTE</th>
            <th>VER REVISIONES</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($resultado as $result) : ?>
            <!-- Desde aqui los datos de cada paciente y usuario -->
            <tr>
                <td><?php echo $result->getNombre() ?></td>
                <td><?php echo $result->getCorreo() ?></td>
                <td><?php echo $result->getNumUsuario() ?></td>
                <th><button type="button" name="nuevaRevision" class="btn btn-primary" id="nuevaRevision" onclick="nuevaRevision(<?= $result->getIDPaciente() ?>)">Nueva Revision</button></th>
                <th><button type="button" name="verTodasRevisiones" class="btn btn-primary" id="verTodasRevisiones" onclick="verTodasRevisiones(<?= $result->getIDPaciente() ?>)">Ver Revisiones</button></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <?php
    }
}

//Sacar los usuarios para REVISIONES.

if (isset($_POST['verTodasRevisiones'])) {
    $stmt = $dbh->prepare("SELECT * FROM revisiones ORDER BY fecha DESC");
    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "revision");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    if (!is_null($resultado)) { ?>
        <!-- Barra superior de la Tabla -->
        <thead>
        <tr>
            <th>FECHA</th>
            <th>INDICE CORPORAL</th>
            <th>GRASA CORPORAL</th>
            <th>MASA GRASA</th>
            <th>PESO</th>
            <th>AGUA</th>
            <th>OBSERVAVIONES</th>
            <th>REVISION Nº</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
        </tr>
        </thead>
        <!-- Barra inferior de la Tabla -->
        <tfoot>
        <tr>
            <th>FECHA</th>
            <th>INDICE CORPORAL</th>
            <th>GRASA CORPORAL</th>
            <th>MASA GRASA</th>
            <th>PESO</th>
            <th>AGUA</th>
            <th>OBSERVAVIONES</th>
            <th>REVISION Nº</th>
            <th>MODIFICAR</th>
            <th>ELIMINAR</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($resultado as $result) : ?>
            <!-- Desde aqui los datos de cada paciente y usuario -->
            <tr>
                <td><?php echo $result->getFecha() ?></td>
                <td><?php echo $result->getIndiceCor() ?></td>
                <td><?php echo $result->getGrasaCor() ?></td>
                <td><?php echo $result->getMasaMag() ?></td>
                <td><?php echo $result->getPeso() ?></td>
                <td><?php echo $result->getAgua() ?></td>
                <td><?php echo $result->getObservaciones() ?></td>
                <td><?php echo $result->getIDRevision() ?></td>
                <th><button type="button" name="modificarRevision" class="btn btn-primary" id="modificarRevision" onclick="modificarRevision()">Modificar Revisión</button></th>
                <th><button type="button" name="eliminarRevision" class="btn btn-danger" id="eliminarRevision" onclick="eliminarRevision()">Eliminar Revisión</button></th>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <?php
    }
}

//Eliminar el usuario (DEJAR INACTIVO)

if(isset($_POST['eliminarUsuario'])) {
    $stmt = $dbh->prepare("UPDATE usuarios SET usu_Activo= 0 WHERE num_Usuario = :id");
    $parameters = [':id'=>$_POST['eliminarUsuario']];
    $stmt->execute($parameters);
}



//Sacar los usuarios para anamnesis.

if (isset($_POST['verUsuariosAnamesis'])) {
    $stmt = $dbh->prepare("SELECT * FROM usuarios U, pacientes P WHERE U.num_Usuario= P.num_Usuario AND usu_Activo= 1 AND P.ID_paciente NOT IN (SELECT ID_paciente FROM anamnesis) ORDER BY nombre");
    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "activos");
    $stmt->execute();

    $resultado = $stmt->fetchAll();

    if (!is_null($resultado)) { ?>
        <!-- Barra superior de la Tabla -->
        <thead>
        <tr>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>DNI</th>
            <th>Nº PACIENTE</th>
            <th>CREAR ANAMNESIS</th>

        </tr>
        </thead>
        <!-- Barra inferior de la Tabla -->
        <tfoot>
        <tr>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>DNI</th>
            <th>Nº PACIENTE</th>
            <th>CREAR ANAMNESIS</th>

        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($resultado as $result) : ?>
            <!-- Desde aqui los datos de cada paciente y usuario -->
            <tr>
                <td><?php echo $result->getNombre() ?></td>
                <td><?php echo $result->getCorreo() ?></td>
                <td><?php echo $result->getDNI() ?></td>
                <td><?php echo $result->getIDPaciente() ?></td>
                <th><button type="button" name="crearAnamesis" class="btn btn-primary" id="nuevoPaciente" onclick="nuevaAnamnesis(<?= $result->getIDPaciente() ?>)">Hacer Anamnesis</button></th>
               </tr>
        <?php endforeach; ?>
        </tbody>
        <?php
    }
}









