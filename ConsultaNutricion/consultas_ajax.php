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
require_once "contacto.php";
$dbh = Connection::make();

//Comprobación de usuario en login.
if (isset($_POST['correolg'])) {
    $datos = json_decode($_POST["correolg"]);
    $stmt = $dbh->prepare("SELECT passw,tipo, nombre,num_Usuario  FROM usuarios WHERE correo=?");
    $stmt->bindParam(1, $datos[0]);

    $stmt->setFetchMode(PDO::FETCH_NUM);
    $stmt->execute();


    $resultado = $stmt->fetch();

    if (password_verify($datos[1], $resultado[0])) {
        $_SESSION['correo'] = $datos[0];
        $_SESSION['nombre'] = $resultado[2];
        $_SESSION['num_Usuario']= $resultado[3];
        echo $resultado[1];

    } else {
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


                <th>
                    <button type="button" name="modificar_paciente"
                            onclick="modificarPaciente(<?= $result->getIDPaciente() ?>)" class="btn btn-primary">
                        Modificar
                    </button>
                </th>
                <th>
                    <button type="button" name="eliminar_paciente"
                            onclick="eliminarPaciente(<?= $result->getIDPaciente() ?>)" class="btn btn-danger">Eliminar
                    </button>
                </th>
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
                <th>
                    <button type="button" name="modificar_articulo"
                            onclick="modificarArticulo(<?= $result['ID_art'] ?>)" class="btn btn-primary">Modificar
                    </button>
                </th>
                <th>
                    <button type="button" name="eliminar_articulo" onclick="eliminarArticulo(<?= $result['ID_art'] ?>)"
                            class="btn btn-danger">Eliminar
                    </button>
                </th>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <?php
    }
}

//Eliminar el artículo
if (isset($_POST['removeArticle'])) {
    $stmt = $dbh->prepare("DELETE FROM articulos WHERE ID_art = :id");
    $parameters = [':id' => $_POST['removeArticle']];
    $stmt->execute($parameters);
}

//Get articulo
if (isset($_POST['getArticle'])) {
    $stmt = $dbh->prepare("SELECT * FROM articulos WHERE ID_art = :id");
    $parameters = [':id' => $_POST['getArticle']];
    $stmt->execute($parameters);
    $articulo = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($articulo);
}

//Get paciente
if (isset($_POST['getPaciente'])) {
    $stmt = $dbh->prepare("SELECT * FROM pacientes WHERE ID_paciente = :id");
    $parameters = [':id' => $_POST['getPaciente']];
    $stmt->execute($parameters);
    $paciente = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($paciente);
}

//Borrar paciente (DEJAR INACTIVO)
if (isset($_POST['delete_paciente'])) {
    $stmt = $dbh->prepare("UPDATE pacientes SET paciente_Activo= 0 WHERE DNI = :id");
    $parameters = [':id' => $_POST['delete_paciente']];
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
                <th>
                    <button type="button" name="crear_paciente" class="btn btn-primary" id="nuevoPaciente"
                            onclick="nuevoPaciente(<?= $result->getNumUsuario() ?>)">Añadir Paciente
                    </button>
                </th>
                <th>
                    <button type="button" name="eliminar_usuario" class="btn btn-danger" id="borrarUsuario"
                            onclick="eliminarUsuario(<?= $result->getNumUsuario() ?>)">Eliminar Usuario
                    </button>
                </th>
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
                <th>
                    <button type="button" name="nuevaRevision" class="btn btn-primary" id="nuevaRevision"
                            onclick="nuevaRevision(<?= $result->getIDPaciente() ?>)">Nueva Revision
                    </button>
                </th>
                <th>
                    <button type="button" name="verTodasRevisiones" class="btn btn-primary" id="verTodasRevisiones"
                            onclick="verTodasRevisiones(<?= $result->getIDPaciente() ?>)">Ver Revisiones
                    </button>
                </th>
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
                <th>
                    <button type="button" name="modificarRevision" class="btn btn-primary" id="modificarRevision"
                            onclick="modificarRevision()">Modificar Revisión
                    </button>
                </th>
                <th>
                    <button type="button" name="eliminarRevision" class="btn btn-danger" id="eliminarRevision"
                            onclick="eliminarRevision()">Eliminar Revisión
                    </button>
                </th>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <?php
    }
}

//Eliminar el usuario (DEJAR INACTIVO)
if (isset($_POST['eliminarUsuario'])) {
    $stmt = $dbh->prepare("UPDATE usuarios SET usu_Activo= 0 WHERE num_Usuario = :id");
    $parameters = [':id' => $_POST['eliminarUsuario']];
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
                <th>
                    <button type="button" name="crearAnamesis" class="btn btn-primary" id="nuevoPaciente"
                            onclick="nuevaAnamnesis(<?= $result->getIDPaciente() ?>)">Hacer Anamnesis
                    </button>
                </th>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <?php
    }
}

//Sacar los mensajes
if (isset($_POST['verMensajes'])) {
    $stmt = $dbh->prepare("SELECT * FROM contacto WHERE vistos = 0 ORDER BY ID_Mensaje ");
    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "contacto");
    $stmt->execute();

    $mensajes = $stmt->fetchAll();

    if (!is_null($mensajes)) { ?>
        <!-- Desplegable - Mensajes -->

        <h6 class="dropdown-header">
            Centro de Mensajes
        </h6>
        <?php foreach ($mensajes as $result) : ?>
            <a class="dropdown-item d-flex align-items-center" href="#" onclick="modelMensaje(<?=$result->getIDMensaje()?>)" >
                <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60"
                         alt="">
                    <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                    <div class="text-truncate"><?php echo $result->getMensaje() ?></div>
                    <div class="small text-gray-500"><?php echo $result->getNombre() ?></div>
                </div>
            </a>
        <?php endforeach; ?>
        <a class="dropdown-item text-center small text-gray-500" href="#">Ver todos los mensajes</a>
        <?php
    }
}


//Sacar los avisos
if (isset($_POST['verAlertas'])) {
    $stmt = $dbh->prepare("SELECT * FROM citas C, usuarios U WHERE C.reserva = 1 AND C.ID_Usuario = U.num_Usuario  ORDER BY ID_Res ");

    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $avisos = $stmt->fetchAll();



    if (!is_null($avisos)) { ?>
        <!-- Desplegable - Mensajes -->

        <h6 class="dropdown-header">
            Alertas
        </h6>
        <?php foreach ($avisos as $result) : ?>
            <a class="dropdown-item d-flex align-items-center" href="#" onclick="modelAvisos(<?=$result['ID_Usuario']?>)">
                <div class="mr-3">
                    <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500"><?php echo $result['fecha'] ?></div>
                    <?php echo $result['nombre'] ?>
                </div>
            </a>
        <?php endforeach; ?>
        <a class="dropdown-item text-center small text-gray-500" href="#">Ver todas las alertas</a>
        <?php
    }
}

//Sacar los usuarios para REVISIONES.
if (isset($_POST['verGraficas'])) {
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
            <th>VER GRAFICA</th>
        </tr>
        </thead>
        <!-- Barra inferior de la Tabla -->
        <tfoot>
        <tr>
            <th>NOMBRE</th>
            <th>CORREO</th>
            <th>Nº USUARIO</th>
            <th>VER GRAFICA</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($resultado as $result) : ?>
            <!-- Desde aqui los datos de cada paciente y usuario -->
            <tr>
                <td><?php echo $result->getNombre() ?></td>
                <td><?php echo $result->getCorreo() ?></td>
                <td><?php echo $result->getNumUsuario() ?></td>
                <th>
                    <button type="button" name="nuevaRevision" class="btn btn-primary" id="nuevaRevision"
                            onclick="datosGraficas(<?= $result->getIDPaciente() ?>)">Ver Graficas
                    </button>
                </th>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <?php
    }
}

//Calendario
if (isset($_POST['anadirCita'])) {
    $stmt_comprobar = $dbh->prepare('SELECT * FROM fechas WHERE fecha = :fecha');
    $stmt = $dbh->prepare("INSERT INTO fechas VALUES (:fecha)");
    $parameters = [':fecha' => $_POST['anadirCita']];

    $stmt_comprobar->execute($parameters);
    $existe = $stmt_comprobar->fetchAll(PDO::FETCH_ASSOC);

    if (count($existe) > 0) {
        echo 'existe';
    } else {
        $stmt->execute($parameters);
        echo 'no existe';
    }
}

//Eliminar fecha calendario
if (isset($_POST['eliminarFecha'])) {
    $stmt = $dbh->prepare('DELETE FROM fechas WHERE fecha = :fecha');
    $parameters = [':fecha' => $_POST['eliminarFecha']];
    $stmt->execute($parameters);
}

//Eliminar cita calendario
if (isset($_POST['eliminarCita'])) {
    $stmt = $dbh->prepare('DELETE FROM citas WHERE fecha = :fecha AND ID_Usuario = :num_Usuario ');
    $parameters = [':fecha' => $_POST['eliminarCita'],
    ':num_Usuario'=> $_SESSION['num_Usuario']];
    $stmt->execute($parameters);
}


//Datos grafica
if (isset($_POST['datosGraf'])) {
    $stmt = $dbh->prepare('SELECT * FROM revisiones WHERE ID_paciente = :id');
    $parameters = [':id' => $_POST['datosGraf']];
    $stmt->execute($parameters);

    $revisiones = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($revisiones);
}

// Coger la cita elegida
if (isset($_POST['cogerCita'])) {
    $stmt_comprobar = $dbh->prepare('SELECT * FROM citas WHERE fecha = :fecha');
    $parameters2 =[':fecha'=> $_POST['cogerCita']];
    $stmt = $dbh->prepare("INSERT INTO citas(reserva, confReserva, ID_Usuario, fecha ) VALUES (1,0,:num_Usuario,:fecha)");
    $parameters = [':fecha' => $_POST['cogerCita'],
        ':num_Usuario'=> $_SESSION['num_Usuario']
    ];


    $stmt_comprobar->execute($parameters2);

    $existe = $stmt_comprobar->fetchAll(PDO::FETCH_ASSOC);

    if (count($existe) > 0) {
        echo 'existe';
    } else {
        $stmt->execute($parameters);
        echo 'no existe';
    }
}
