-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2020 a las 20:24:27
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
  `tipoDIeta` text COLLATE utf8mb4_spanish_ci,
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
  `fecha` date NOT NULL,
  `cat1` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cat2` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ID_art` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `ID_usu` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `duracion` time NOT NULL,
  `pago` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `num_art` int(255) NOT NULL,
  `nom_usu` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tex_com` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `ID_com` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `foto` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dirección` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `DNI` varchar(9) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ID_paciente` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `nom_usu` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tex_res` varchar(1000) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `ID_res` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revision`
--

CREATE TABLE `revision` (
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `passw` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `num_Usuario` int(50) NOT NULL,
  `tipo` varchar(1) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
  ADD PRIMARY KEY (`fecha`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID_com`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`ID_res`);

--
-- Indices de la tabla `revision`
--
ALTER TABLE `revision`
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
  MODIFY `ID_art` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID_com` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `ID_res` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `revision`
--
ALTER TABLE `revision`
  MODIFY `ID_revision` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `num_Usuario` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
