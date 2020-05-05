-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2020 a las 16:57:40
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consulta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anamnesis`
--

CREATE TABLE `anamnesis` (
  `fecha` date NOT NULL,
  `ID_paciente` int(50) NOT NULL,
  `motivoConsulta` text COLLATE utf8mb4_spanish_ci,
  `propositosConseguir` text COLLATE utf8mb4_spanish_ci,
  `motivoAcudir` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dietasAnteriores` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `oscilacionesPeso` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `supusoEsfuerzo` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `motivoAbandono` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `desdeDieta` text COLLATE utf8mb4_spanish_ci,
  `tipoDieta` text COLLATE utf8mb4_spanish_ci,
  `beneficiosPersonales` text COLLATE utf8mb4_spanish_ci,
  `patologiasActuales` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `bioquimicosTG` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `glucosa` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Fe` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `VCM` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `TSH` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `transaminasas` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `Urea` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `creatina` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `colesterol` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `restricciones` text COLLATE utf8mb4_spanish_ci,
  `causasPatologicas` text COLLATE utf8mb4_spanish_ci,
  `otrasPatologias` text COLLATE utf8mb4_spanish_ci,
  `antecedentes` text COLLATE utf8mb4_spanish_ci,
  `analitica` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `operaciones` text COLLATE utf8mb4_spanish_ci,
  `causasOperaciones` text COLLATE utf8mb4_spanish_ci,
  `tomasFarmacos` text COLLATE utf8mb4_spanish_ci,
  `deposiciones` text COLLATE utf8mb4_spanish_ci,
  `alergias` text COLLATE utf8mb4_spanish_ci,
  `intolerancias` text COLLATE utf8mb4_spanish_ci,
  `menstruacion` text COLLATE utf8mb4_spanish_ci,
  `tiempoLibre` text COLLATE utf8mb4_spanish_ci,
  `quienVives` text COLLATE utf8mb4_spanish_ci,
  `quienCocina` text COLLATE utf8mb4_spanish_ci,
  `actividadFisica` text COLLATE utf8mb4_spanish_ci,
  `gustaHacer` text COLLATE utf8mb4_spanish_ci,
  `pondriaProposito` text COLLATE utf8mb4_spanish_ci,
  `dedicas` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `horario` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `desplazamiento` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `dondeCome` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `horasDuerme` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `habitosToxicos` text COLLATE utf8mb4_spanish_ci,
  `desayuno` text COLLATE utf8mb4_spanish_ci,
  `almuerzo` text COLLATE utf8mb4_spanish_ci,
  `comida` text COLLATE utf8mb4_spanish_ci,
  `merienda` text COLLATE utf8mb4_spanish_ci,
  `cena` text COLLATE utf8mb4_spanish_ci,
  `cuestionarioFrecuencia` text COLLATE utf8mb4_spanish_ci,
  `preferencia` text COLLATE utf8mb4_spanish_ci,
  `aversiones` text COLLATE utf8mb4_spanish_ci,
  `picoteo` text COLLATE utf8mb4_spanish_ci,
  `cuantasVecesPicas` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cantidadPicas` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `comesFuera` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cuantasVeces` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipoComida` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `motivoComesFuera` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `repitesPlato` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tiempoComer` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `hacerCompra` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `gustaCocinar` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `mientrasComes` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `talla` float DEFAULT NULL,
  `cintura` float DEFAULT NULL,
  `cadera` float DEFAULT NULL,
  `tensionArterial` float DEFAULT NULL,
  `codoMunyeca` float DEFAULT NULL,
  `resumen` text COLLATE utf8mb4_spanish_ci,
  `conclusiones` text COLLATE utf8mb4_spanish_ci,
  `primeraImpresion` text COLLATE utf8mb4_spanish_ci,
  `objetivos` text COLLATE utf8mb4_spanish_ci,
  `observaciones` text COLLATE utf8mb4_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `titulo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `resumen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `cat1` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cat2` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ID_art` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`titulo`, `resumen`, `imagen`, `contenido`, `fecha`, `cat1`, `cat2`, `ID_art`) VALUES
('UN TITULO DE PRUEBA', 'AQUI IRIA EL RESUMEN PARA PODER VERLO ANTES DE ENTRAR AL ARTICULO', 'img/articulos/1588200662Dead-Star-space-planet-universe_1920x1080.jpg', '<p style=\"text-align: left;\">AQUI VA A IR EL CONTENIDO DEL <strong style=\"font-style: italic;\">ARTICULO</strong>&nbsp;PARA VER LUEGO TODO</p>', '2020-04-29 00:00:00', 'CATEGORIA 1', 'CATEGORIA 2', 2),
('SEGUNDO ARTICULO DE PRUEBA', 'SEGUIMOS PROBANDO QUE SE CREEN Y SE ORDENEN LOS ARTÍCULOS DE FORMA CORRECTA', 'img/articulos/1588200823imagenes-4k-wallpaper-paisajes.jpg', '<p>MODIFICAMOS EL CONTENIDO EN <strong>NEGRITA</strong> Y <em>CURSIVA</em> PARA VER EL RESULTADO</p>', '2020-04-29 00:00:00', 'TAN SOLO UNA CATEGORIA', '', 3),
('TERCER ARTICULO', 'resumen', 'img/articulos/1588200980images (1).jpg', '<p>contenido interesante para mostrar</p>', '2020-04-29 00:00:00', '', '', 4),
('4', 'gfsdhfsdhsd', 'img/articulos/158821200557063.jpg', '<p>hfdshajgfdahfdhdf,mghmdhfnmdhfg</p>', '2020-04-30 00:00:00', 'gfdsgsd', 'dsgagdsa', 5),
('QUINTO', 'HDTJWSJSTRJT', 'img/articulos/1588201048nebulosa-de-la-llama-como-papel-pintado-3440x1440-3986_15.jpg', '<p>HDFASHJGFDSJGHDFJ</p>', '2020-04-29 00:00:00', 'JGFDJFDGJGFJD', '', 6),
('sexto', 'hgsehyufsdhds', 'img/articulos/1588201106seascape-4k-ultra-hd-fondo-de-pantalla-and-fondo-de.jpg', '<p>htrewyhtreyhtrewuytreuyty</p>', '2020-04-29 00:00:00', '', '', 7),
('articulo para borrar', 'este deberia de salir y no salir el primera', 'img/articulos/15882011645a56e2b738b455a3197caac74fd6f727.jpg', '<p>gsfagdasgasd</p>', '2020-04-29 00:00:00', '', '', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `ID_Res` int(11) NOT NULL,
  `reserva` int(1) NOT NULL DEFAULT '0',
  `confReserva` int(1) NOT NULL DEFAULT '0',
  `usuarioReserva` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `num_art` int(255) NOT NULL,
  `nom_usu` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tex_com` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `ID_com` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `ID_Mensaje` int(11) NOT NULL,
  `vistos` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `correo`, `telefono`, `mensaje`, `ID_Mensaje`, `vistos`) VALUES
('Ignacio Macias Martinez', 'icmaster17@hotmail.com', '646251579', 'hgdfh', 9, 0),
('Ignacio Macias Martinez', 'icmaster17@hotmail.com', '646251579', 'jhfgjgh', 10, 0),
('Ignacio Macias Martinez', 'icmaster17@hotmail.com', '646251579', 'jhfdj', 12, 0),
('Ignacio', 'icmaster17@hotmail.com', '646251579', 'hnfgdh', 13, 0),
('Ignacio', 'icmaster17@hotmail.com', '646251579', 'hgfdshg', 14, 0),
('Ignacio Macias Martinez', 'icmaster17@hotmail.com', '646251579', 'herdt', 15, 0),
('Amorchito', 'icmaster17@hotmail.com', '646251579', 'hdfxh', 16, 0),
('Amorchito', 'icmaster17@hotmail.com', '646251579', 'gfhdh', 17, 0),
('Ignacio Macias Martinez', 'icmaster17@hotmail.com', 'bvcx', 'bcvx', 18, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `foto` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'img/pacientes/imagenDefecto.jpg',
  `telefono` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `DNI` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ID_paciente` int(10) NOT NULL,
  `num_Usuario` int(10) NOT NULL,
  `paciente_Activo` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`foto`, `telefono`, `fecha_nacimiento`, `direccion`, `DNI`, `ID_paciente`, `num_Usuario`, `paciente_Activo`) VALUES
('img/articulos/imagenDefecto.jpg', '6462515', '2020-04-15', 'Av/ Pi i Margall 58 puerta 10', '2323', 2, 5, '1'),
('img/pacientes/15880746190.jpg', '646251579', '0000-00-00', 'Av/ Pi i Margall 58 puerta 10, C/ Viriato 28 bajo', '666665', 0, 7, '1'),
('img/pacientes/imagenDefecto.jpg', '646251579', '0000-00-00', 'Av/ Pi i Margall 58 puerta 10, C/ Viriato 28 bajo', 'bcdxbcfg', 0, 3, '1'),
('img/pacientes/imagenDefecto.jpg', '646251579', '0000-00-00', 'Av/ Pi i Margall 58 puerta 10, C/ Viriato 28 bajo', 'gfdsgdfs', 0, 4, '1'),
('img/pacientes/imagenDefecto.jpg', '646251579', '2019-12-20', 'Av/ Pi i Margall 58 puerta 10, C/ Viriato 28 bajo', 'gsdfhf', 0, 2, '1'),
('img/pacientes/imagenDefecto.jpg', '646251579', '2020-04-16', 'Av/ Pi i Margall 58 puerta 10, C/ Viriato 28 bajo', 'hgtshreh', 0, 0, '1'),
('gfdsgsdf', '4965816', '2020-04-22', 'hola', 'hola', 0, 1, '1'),
('img/pacientes/imagenDefecto.jpg', '646251579', '0000-00-00', 'Av/ Pi i Margall 58 puerta 10, C/ Viriato 28 bajo', 'vbreshgds', 0, 0, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `nom_usu` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tex_res` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `ID_res` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisiones`
--

CREATE TABLE `revisiones` (
  `fecha` date NOT NULL,
  `indice_cor` int(11) DEFAULT NULL,
  `grasa_cor` int(11) DEFAULT NULL,
  `masa_mag` int(11) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  `agua` int(11) DEFAULT NULL,
  `observaciones` varchar(1000) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ID_paciente` int(50) NOT NULL,
  `ID_revision` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `revisiones`
--

INSERT INTO `revisiones` (`fecha`, `indice_cor`, `grasa_cor`, `masa_mag`, `peso`, `agua`, `observaciones`, `ID_paciente`, `ID_revision`) VALUES
('2020-05-03', 0, 432, 432, 432, 432, 'gfdshgdfh', 2, 1),
('2020-05-04', 654, 54, 645, 645, 654, 'jfdj', 2, 2),
('2020-05-04', 34, 645, 645, 645, 44, 'jfhdjdf', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `passw` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `num_Usuario` int(50) NOT NULL,
  `tipo` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'U',
  `usu_Activo` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `correo`, `passw`, `num_Usuario`, `tipo`, `usu_Activo`) VALUES
('Ignacio', 'icmaster17@hotmail.com', '$2y$14$0u/b57JxcuPE2cAe0TMhGeiU3vOqPVfM3c5WQL0r.BP2mGRYPRyq.', 1, 'A', '1'),
('carlos', 'carlos@hotmail.com', '$2y$14$ReyBJvOZq6ceyBJczuR1nOXzaq9z27nOL/1ARtCjUSOSJZszA/Jge', 5, 'U', '1'),
('turbas', 'turbas@hotmail.com', '$2y$14$O6dOtn8cR1xH3Ct56Owrkey.ty3J2DTHELRf78C.3N.lVtImzoQHu', 6, 'U', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anamnesis`
--
ALTER TABLE `anamnesis`
  ADD PRIMARY KEY (`ID_paciente`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`ID_art`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`ID_Res`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID_com`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`ID_Mensaje`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`fecha`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`ID_res`);

--
-- Indices de la tabla `revisiones`
--
ALTER TABLE `revisiones`
  ADD PRIMARY KEY (`ID_revision`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`num_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `ID_art` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `ID_Res` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID_com` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `ID_Mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `ID_res` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `revisiones`
--
ALTER TABLE `revisiones`
  MODIFY `ID_revision` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `num_Usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
