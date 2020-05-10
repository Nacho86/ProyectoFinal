-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2020 a las 18:19:52
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

--
-- Volcado de datos para la tabla `anamnesis`
--

INSERT INTO `anamnesis` (`fecha`, `ID_paciente`, `motivoConsulta`, `propositosConseguir`, `motivoAcudir`, `dietasAnteriores`, `oscilacionesPeso`, `supusoEsfuerzo`, `motivoAbandono`, `desdeDieta`, `tipoDieta`, `beneficiosPersonales`, `patologiasActuales`, `bioquimicosTG`, `glucosa`, `Fe`, `VCM`, `TSH`, `transaminasas`, `Urea`, `creatina`, `colesterol`, `restricciones`, `causasPatologicas`, `otrasPatologias`, `antecedentes`, `analitica`, `operaciones`, `causasOperaciones`, `tomasFarmacos`, `deposiciones`, `alergias`, `intolerancias`, `menstruacion`, `tiempoLibre`, `quienVives`, `quienCocina`, `actividadFisica`, `gustaHacer`, `pondriaProposito`, `dedicas`, `horario`, `desplazamiento`, `dondeCome`, `horasDuerme`, `habitosToxicos`, `desayuno`, `almuerzo`, `comida`, `merienda`, `cena`, `cuestionarioFrecuencia`, `preferencia`, `aversiones`, `picoteo`, `cuantasVecesPicas`, `cantidadPicas`, `comesFuera`, `cuantasVeces`, `tipoComida`, `motivoComesFuera`, `repitesPlato`, `tiempoComer`, `hacerCompra`, `gustaCocinar`, `mientrasComes`, `peso`, `talla`, `cintura`, `cadera`, `tensionArterial`, `codoMunyeca`, `resumen`, `conclusiones`, `primeraImpresion`, `objetivos`, `observaciones`) VALUES
('2020-05-10', 11, 'gfds', 'gfdsg', 'gfds', 'gfds', 'gfds', 'gfds', 'gfds', 'fgds', 'fdsg', 'gfds', 'gfsd', 'gfds', '543', '54', '345', 'fdgx', 'gfds', 'gfds', 'gfds', 'gfds', 'gfsd', 'fgshd', 'gfds', 'gfds', NULL, 'gfds', 'gfds', 'gfds', 'gfds', 'gfsd', 'fdgs', 'hgfdsh', 'hfdsh', 'hsdf', 'hfds', 'gfdsgsfd', 'gfds', 'fhds', 'hfdshfd', 'hfds', 'hfds', 'hfds', 'hfsd', 'hsfd', 'hfdshfd', 'hsfdhf', 'hsfd', 'hsfdhdsf', 'hsdfhsdhf\r\nhfsdh', 'hfdshfds', 'hdsfhfd', 'hfdshhf', 'hfdsh', 'hgfds', 'hfsdf', 'hfsd', 'hsfd', 'fsdggfds', 'gfdsgfsd', 'gfds', 'gfdsgsfd', 'gfds', 'gfsd', 'gfds', 543, 43, 543, 543, 543, 543, 'gfdsgfds', 'gfdsgf', 'gfsdgdsf', 'gfdsgs', 'gsdfgfds');

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
('Carnitina, ¿un movilizador de grasas?', 'Este aminoácido se obtiene sobre todo de los alimentos de origen animal -carnes o derivados lácteos- y de la producción del propio cuerpo.', 'img/articulos/1589126108carnitina-y-grasa.jpg', '<p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">La carnitina es un aminoácido que tiene como función transportar los ácidos grasos hacia el interior de las mitocondrias -orgánulo celular que se encarga de suministrar la energía necesaria para la actividad celular-.</p><p id=\"_sdsat_mbox_9619927845685945_\" style=\"position: relative; margin: 0px; padding: 0px; visibility: visible;\"><div id=\"taxonomias\" style=\"position: relative; margin: 0px; padding: 0px;\"></div></p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">La carnitina también es conocida como L-carnitina o levocarnitina. Este aminoácido se obtiene sobre todo de los alimentos de origen animal -carnes o derivados lácteos- y de la producción del propio cuerpo.</p><h3 style=\"position: relative; margin: 20px 0px; padding: 0px; line-height: 25px; font-family: Bupa, Arial, Helvetica, sans-serif; font-weight: 900; color: rgb(0, 0, 0); clear: left; font-size: 18px;\">¿Cómo funciona la carnitina?</h3><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Nuestro organismo se encarga de sintetizar las grasas para poder obtener energía de ellas y llevar a cabo las actividades diarias. Dentro de la mitocondria celular se transforma esta grasa en energía.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Los ácidos grasos de cadenas cortas o medianas -ácido aceitico, ácido propiónico, ácido valérico, ácido butírico, etc.- atraviesan la membrana mitocondrial interna. Sin embargo, los ácidos grasos de cadena larga -ácido palmítico, ácido esteárico y ácido oleico- necesitan de la carnitina para poder traspasar esa membrana hacia el interior de la célula mitocondrial.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Cuando el organismo utiliza altas dosis de carnitina favorece la utilización de grasas para ser transformadas en energía en lugar de usar los azúcares. Este proceso provoca una pérdida de materia grasa en el cuerpo. A la vez que reduce la fatiga muscular y el tiempo de recuperación tras el ejercicio.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">La carnitina se produce en el hígado y en riñón a partir de la sintetización de los aminoácidos lisina y metionina. No es esencial su ingesta, salvo en condiciones especiales tales como estados de deterioro o enfermedades largas o medicación antiepiléptica.</p><h3 style=\"position: relative; margin: 20px 0px; padding: 0px; line-height: 25px; font-family: Bupa, Arial, Helvetica, sans-serif; font-weight: 900; color: rgb(0, 0, 0); clear: left; font-size: 18px;\">Ingesta de carnitina</h3><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Generalmente, el cuerpo produce la carnitina suficiente para el correcto funcionamiento del organismo. Sin embargo, la administración de carnitina junto con el tratamiento de algunas enfermedades cardiovasculares y renales ha demostrado ser muy eficaz.</p><ul style=\"position: relative; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style-type: none; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Enfermedades cardiovasculares:&nbsp;</strong>infarto agudo de miocardio, necrosis de miocardio, arritmias.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Enfermedades renales:&nbsp;</strong>trastornos hepáticos, cirrosis.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Enfermedades mentales:</strong>&nbsp;alzhéimer, depresión senil, falta de memoria relacionada con la edad.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Enfermedades metabólicas:</strong>&nbsp;diabetes, concentración elevada de colesterol relacionado con LDL, concentración elevada de triglicéridos.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Problemas dermatológicos:</strong>&nbsp;oxidación de la piel por envejecimiento, cicatrices y estrías.<br style=\"position: relative; margin: 0px; padding: 0px;\">&nbsp;</li></ul><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Sin embargo, es un médico el que debe prescribir la pauta y el tipo de carnitina a ingerir: L-carnitina, L-acetilcarnintina, etc. El consumo alto de este aminoácido puede derivar en un endurecimiento u obstrucción de las arterias, así como, enfermedades cardiovasculares.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Otras de las situaciones por las que se ingiere carnitina es por el aumento del rendimiento físico durante la actividad deportiva -debido a la rápida recuperación muscular- y por quemar grasas -incluyéndolo en dietas para obesos-.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">La dosis diaria ingerida, para una persona sana, oscilan entre 500 miligramos y 2 gramos diarios. (L-carnitina comercializa en forma de acetil, propionil, tartrato, fumarato, HC1... y en forma de solución, cápsulas, tabletas o inyectables). Se recomienda que se divida la ingesta diaria en dos tomas.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Aunque su consumo por deportistas puede ser habitual, no existen estudios significativos que confirmen que tomar suplementos de L-carnitina produzca algún beneficio extra en el rendimiento físico.</p><p style=\"position: relative; margin-right: 0px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif; margin-bottom: 0px !important;\">Igualmente, los estudios demuestran que la inclusión de este suplemento en la dieta para quemar grasa es necesario complementarlo con ejercicio aeróbico para que pueda transportar la grasa, transformarla en energía y así quemar la grasa.</p>', '2020-05-10 00:00:00', '#Nutrición', '#Salud', 1),
('Ácidos grasos Omega-3', 'Los ácidos grasos Omega-3 y los Omega-6 son grasas poliinsaturadas y configuran el grupo de los llamados ácidos grasos esenciales, que deben este nombre al hecho de que son imprescindibles para el organismo', 'img/articulos/1589126967omega3.jpg', '<p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Los&nbsp;<strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">ácidos grasos Omega-3</strong>&nbsp;y los Omega-6 son grasas poliinsaturadas y configuran el grupo de los llamados ácidos grasos esenciales, que deben este nombre al hecho de que son imprescindibles para el organismo, a pesar de que éste no es capaz de producirlo por sí solo y debe adquirirlo a través de los alimentos que lo contienen:</p><div id=\"taxonomias\" style=\"position: relative; margin: 0px; padding: 0px;\"></div><ul style=\"position: relative; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style-type: none; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Pescados azules.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Salmón.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Vegetales de hoja verde.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Ciertos aceites vegetales.</li></ul><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Grasas vegetales o animales, todas tienen las mismas calorías, aunque los saturados se fijan con más facilidad a las membranas celulares, mientras que algunos insaturados son “detergentes” de colesterol y triglicéridos (la grasa de la sangre) como los aceites de pescados azules y aceites de girasol, maíz y oliva.<br></p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Las propiedades de los&nbsp;<strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">ácidos grasos Omega-3</strong>&nbsp;aportan importantes beneficios para la salud del organismo:</p><ul style=\"position: relative; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style-type: none; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Tienen actividad antiinflmatoria.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Reducen la fracción de colesterol, aumentando la producción de HDL (colesterol bueno) y la eliminación de LDL (colesterol malo), lo que dificulta la formación de placas de ateroma en las paredes de las arterias (arterioesclerosis).</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Reducen los niveles de triglicéridos.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Contribuyen al descenso de la presión sanguínea.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">En los niños desempeñan un papel importante en la maduración y crecimiento del cerebro.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Protegen frente a numerosas enfermedades: diabetes, ictus, algunos tipos de cáncer, enfermedad intestinal inflamatoria, colitis ulcerosa y el deterioro cognitivo.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Tienen propiedades anticoagulantes.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Reducen la sintomatología asociada a la artritis reumatoide.</li></ul><h3 style=\"position: relative; margin: 20px 0px; padding: 0px; line-height: 25px; font-family: Bupa, Arial, Helvetica, sans-serif; font-weight: 900; color: rgb(0, 0, 0); clear: left; font-size: 18px;\">ácidos grasos Omega-3</h3><p style=\"position: relative; margin-right: 0px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif; margin-bottom: 0px !important;\"><br style=\"position: relative; margin: 0px; padding: 0px;\">No se ha establecido cuál es la dosis diaria de&nbsp;<strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">ácidos grasos Omega-3</strong>&nbsp;que se debe aportar al organismo. Sin embargo, conviene señalar el hecho de que algunos estudios han demostrado que con una dosis de 1 gramo diario se reduce significativamente el riesgo de muerte súbita en pacientes que ya han sufrido un infarto de miocardio.</p>', '2020-05-10 00:00:00', '#Nutrición', '', 2),
('Qué comer si se tiene úlcera de estómago', 'La úlcera de estómago es una herida que se produce en la mucosa del estómago que en condiciones normales lo protege de la acción de los ácidos que él mismo secreta para la digestión de los alimentos. Al perder esa protección los jugos digestivos pueden causar dolor intenso, ardor de estómago, sensación de acidez e incluso náuseas y vómitos.', 'img/articulos/imagenDefecto.jpg', '<p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">La&nbsp;<strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">úlcera de estómago</strong>&nbsp;es una herida que se produce en la mucosa del estómago que en condiciones normales lo protege de la acción de los ácidos que él mismo secreta para la digestión de los alimentos. Al perder esa protección los jugos digestivos pueden causar dolor intenso, ardor de estómago, sensación de acidez e incluso náuseas y vómitos.</p><p id=\"_sdsat_mbox_09451252688350453_\" style=\"position: relative; margin: 0px; padding: 0px; visibility: visible;\"><div id=\"taxonomias\" style=\"position: relative; margin: 0px; padding: 0px;\"></div></p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Antes se pensaba que la&nbsp;<strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">úlcera de estómago</strong>&nbsp;era un problema derivado de una alimentación inadecuada, por lo que quienes la sufrían debían mantener una dieta especial durante el resto de su vida, incluso si eran sometidos a una intervención quirúrgica para restañar la herida. Sin embargo, en la actualidad se sabe que la causa de este trastorno gástrico es en la gran mayoría de los casos la presencia en el organismo de la bacteria Helicobacter pylori (también puede ser producida por medicamentos, como los antiinflamatorios que se toman sin protección gástrica).</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Esto ha supuesto cambios importantes en el tratamiento de la úlcera: la cirugía se ha sustituido en la gran mayoría de los casos por un tratamiento antibiótico y la dieta especial se circunscribe al tiempo necesario para eliminar la bacteria del organismo y que cicatrice la propia úlcera.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Alimentos en el tratamiento de la&nbsp;</strong><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">úlcera de estómago</strong><br style=\"position: relative; margin: 0px; padding: 0px;\">Mientras dure el tratamiento de la&nbsp;<strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">úlcera de estómago</strong>&nbsp;deben evitarse todos aquellos alimentos que contribuyen a aumentar la acidez: cítricos, salsas (especialmente la de tomate), platos muy condimentados o con mucha sal, alimentos muy grasos, alcohol, bebidas carbonatadas (con gas), bebidas excitantes (café, te, refrescos de cola, etc.), alimentos en conserva o precocinados, chocolate, etc.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Pero también es importante el modo de preparación de los alimentos que sí se pueden incluir en la dieta:<br style=\"position: relative; margin: 0px; padding: 0px;\"></p><ul style=\"position: relative; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style-type: none; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Carne:&nbsp;</strong>lo mejor es limitarse a la carne magra (pollo, pavo, cerdo, etc.), y hacerla a la plancha o cocida, eliminando previamente la grasa y la parte fibrosa magra.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Pescado:</strong>&nbsp;el blanco (merluza, rape, bacalao, lenguado, lubina, etc.) tiene menos grasa que el azul (sardina, corvina, caballa, etc.). Debe prepararse a la plancha o hervido.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Huevos:</strong>&nbsp;sólo cocidos o en tortilla.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Verduras:</strong>&nbsp;se deben evitar aquéllas que producen flatulencia: col, coliflor, repollo, cebollas, etc. Los experto señalan que es mejor hervirlas que comerlas crudas, pues en algunos casos las ensaladas pueden ser perjudiciales.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Frutas</strong>: todas menos los cítricos.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Lácteos:</strong>&nbsp;pocos y desnatados. Los quesos frescos o, como mucho semicurados.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Cereales, patatas y legumbres:&nbsp;</strong>se deben preparar cocidas, pero con ausencia total de alimentos grasos (carne y embutidos). Hay que evitar las que producen flatulencia (garbanzos, alubias, etc.)<br style=\"position: relative; margin: 0px; padding: 0px;\">&nbsp;&nbsp;</li></ul><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">La dieta durante el tratamiento de la&nbsp;<strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">úlcera de estómago</strong>&nbsp;deberá mantenerse hasta que lo indique el médico. Luego se podrá volver a introducir poco a poco los alimentos “prohibidos” y otro tipo de preparaciones o técnicas culinarias.<br></p>', '2020-05-10 00:00:00', '#Nutrición', '#Salud', 3),
('Calor, frío y alimentos', 'Los alimentos pueden verse alterados con diferentes factores ambientales como la temperatura, la humedad, el tiempo, etc. Todos los tipos de alimentos contienen microorganismos en su superficie que, generalmente, a temperatura ambiente pueden multiplicarse de manera progresiva afectando a las cualidades de los mismos.', 'img/articulos/1589126752Foto-calor-frio-y-alimentos.jpg', '<p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Los alimentos pueden verse alterados con diferentes factores ambientales como la temperatura, la humedad, el tiempo, etc. Todos los tipos de alimentos contienen microorganismos en su superficie que, generalmente, a temperatura ambiente pueden multiplicarse de manera progresiva afectando a las cualidades de los mismos.</p><p id=\"_sdsat_mbox_1166794216155016_\" style=\"position: relative; margin: 0px; padding: 0px; visibility: visible;\"><div id=\"taxonomias\" style=\"position: relative; margin: 0px; padding: 0px;\"></div></p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">El calor y el frío son propiedades físicas opuestas, pero que se usan para garantizar que los alimentos se encuentren en condiciones óptimas para su consumo. Si un alimento lo sometemos a altas fuentes de calor, es decir, lo cocinamos lo convertimos en apto para su consumo. Sin embargo, si no se puede consumir de forma inmediata, lo mejor es someterlo a procesos de frío para conservar por más tiempo sus propiedades y evitar la proliferación de microorganismos. Ambas inciden en los alimentos. el calor acelera el metabolismo y el frío lo retrasa.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Lo más importante es una buena cadena de conservación, es decir, desde la producción original (verduras, pescados, carnes...), al trasporte refrigerado y hasta el punto de venta. Por ejemplo, las verduras tras ser cortadas pueden perder hasta un 15 % de vitamina C si no se congelan o se consumen frescas. &nbsp;</p><h3 style=\"position: relative; margin: 20px 0px; padding: 0px; line-height: 25px; font-family: Bupa, Arial, Helvetica, sans-serif; font-weight: 900; color: rgb(0, 0, 0); clear: left; font-size: 18px;\"><strong style=\"position: relative; margin: 0px; padding: 0px;\">El calor y los alimentos</strong></h3><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">El calor tiene un efecto de maduración en los alimentos. Cuando se realiza de forma controlada, al cocinarlos, se puede transformar ese producto en un alimento adecuado para el consumo humano. Sin embargo, si no está controlado, el calor favorece el crecimiento de bacterias, hongos y así se inutiliza para su consumo.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">La única manera que tenemos para garantizar que algunos productos son actos para su consumo es sometiéndolos a altas temperaturas durante el tiempo suficiente:</p><ul style=\"position: relative; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style-type: none; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Los pescados y mariscos pueden contener larvas de anisakis que no soportan temperaturas por encima de los 60º.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">La carne cruda puede transmitir toxoplasmosis o contener microorganismos contaminantes.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">La leche no pasteurizada puede contener bacterias de listeria -muy peligrosa durante el embarazo-, salmonella,&nbsp;<em style=\"position: relative; margin: 0px; padding: 0px;\">Escherichia coli</em>&nbsp;o C</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">El consumo de huevo crudo no está recomendado en grandes cantidades porque afecta a la absorción de vitaminas por parte del organismo.<br style=\"position: relative; margin: 0px; padding: 0px;\">&nbsp;</li></ul><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Sin embargo, las verduras y hortalizas son alimentos que generalmente si se consumen en crudo, después de lavarlos o higienizarlos, no producen problemas.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><br></p><h3 style=\"position: relative; margin: 20px 0px; padding: 0px; line-height: 25px; font-family: Bupa, Arial, Helvetica, sans-serif; font-weight: 900; color: rgb(0, 0, 0); clear: left; font-size: 18px;\"><strong style=\"position: relative; margin: 0px; padding: 0px;\">El frío y los alimentos</strong></h3><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Mantener los alimentos en la antigua “fresquera” de la ventana o el moderno frigorífico evita que estos se pudran. En realidad, la acción del frío prolonga la vida de las células y tejidos que componen los alimentos.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">El frío puede ayudar a refrigerar los alimentos, es decir, si vamos a consumirlos en un periodo corto de tiempo, se colocan en una zona de baja temperatura para que estos conserven sus propiedades y se ralentice la aparición de microbios, hongos o bacterias que puedan descomponerlos. La temperatura del frigorífico para la zona refrigerada debe estar entre 0 y 5º C.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Sin embargo, cuando estos alimentos no van a ser usados por un periodo largo de tiempo, el mejor sistema es la congelación. Así se somete a estos microorganismos a temperaturas en las que no pueden desarrollarse, por debajo de 0º, aunque para que permanezcan más de varias semanas sin alterarse deben ser congelados por debajo de 18º C. Con estas temperaturas, los alimentos pueden permanecer en un congelador hasta 5 - 12 meses sin que su calidad se vea afectada. Es conveniente seguir las indicaciones de la etiqueta del producto alimenticio.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">La congelación tiene un efecto mínimo sobre la calidad de los nutrientes y es uno de los mejores métodos de conservación, al evitar el desarrollo de microbios, toxinas o procesos naturales de degradación.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Consideraciones sobre congelación de alimentos:</p><ul style=\"position: relative; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style-type: none; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">La congelación no desinfecta. Solo duerme a los microbios, aunque el anisakis se queda sin efecto por congelación de pescados y mariscos.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Los congeladores deben estar al menos a – 20º C.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Los congeladores no deben tener mucho espacio entre los alimentos.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Utilizar bolsitas especiales y recipientes de plástico, para evitar alteraciones de alimentos por congelación inadecuada.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Los alimentos introducidos en el congelador no deben estar calientes.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Los alimentos que se han congelado y descongelado nunca deben volver a congelarse.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Es conveniente congelar el alimento en envases por raciones.</li></ul>', '2020-05-10 00:00:00', '#Nutrición', '#Salud', 4),
('Alergias e intolerancias alimentarias y sobrepeso', 'Pensar que la alergia y la intolerancia alimentarias puede inducir un problema de obesidad puede resultar chocante e incluso absurdo. Pero lo cierto es que puede ocurrir. La explicación parte de un hecho que la investigación ha constatado en los últimos años: la obesidad es una enfermedad inflamatoria y tanto la alergia como la intolerancia a determinados alimentos, que favorecen una respuesta exacerbada del sistema inmune, propician la aparición de procesos inflamatorios.', 'img/articulos/1589126840Alergias.jpg', '<p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Pensar que la alergia y la intolerancia alimentarias puede inducir un problema de obesidad puede resultar chocante e incluso absurdo. Pero lo cierto es que puede ocurrir. La explicación parte de un hecho que la investigación ha constatado en los últimos años: la obesidad es una enfermedad inflamatoria y tanto la alergia como la intolerancia a determinados alimentos, que favorecen una respuesta exacerbada del sistema inmune, propician la aparición de procesos inflamatorios.</p><p id=\"_sdsat_mbox_4916277473621089_\" style=\"position: relative; margin: 0px; padding: 0px; visibility: visible;\"><div id=\"taxonomias\" style=\"position: relative; margin: 0px; padding: 0px;\"></div></p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Todavía no se conocen los mecanismos exactos que conducen al sobrepeso y la obesidad. La genética, el sedentarismo, comer en exceso, especialmente si hay un alto contenido de grasa y carbohidratos, o incluso seguir una dieta poco variada pueden ser algunos de los factores que influyen para que una persona gane peso. En términos generales se considera que es el balance entre ingesta y gasto de calorías lo que influye en la ganancia de peso por un aumento de la grasa corporal.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Ahora, se sabe que, además de diferentes alteraciones metabólicas, existen una serie de procesos inflamatorios que también la condicionan. Y alguno de estos procesos se relaciona directamente con la alergia alimentaria y la intolerancia a determinados tipos de alimentos.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><img class=\"\" alt=\"Alergias e intolerancias y obesidad\" srcset=\"//www.sanitas.es/media/imagen/original/imagen_dieta_nutricionfam_alergias_intolerancias/alergias.jpg\" src=\"https://www.sanitas.es/media/imagen/original/imagen_dieta_nutricionfam_alergias_intolerancias/alergias.jpg\" data-pagespeed-url-hash=\"2142170431\" style=\"position: relative; margin: 0px; padding: 0px; width: 629.5px; border-width: initial; border-color: initial; border-image: initial; display: block;\"></p><h3 style=\"position: relative; margin: 20px 0px; padding: 0px; line-height: 25px; font-family: Bupa, Arial, Helvetica, sans-serif; font-weight: 900; color: rgb(0, 0, 0); clear: left; font-size: 18px;\">Intolerancia alimentaria</h3><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">La intolerancia a la lactosa o al gluten (celiaquía) son los ejemplos más conocidos de este problema, que genera una respuesta metabólica que se traduce en:</p><ul style=\"position: relative; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style-type: none; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Trastornos gastrointestinales.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Problemas de la piel.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Alteraciones neurológicas.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Problemas musculares y reumatólogicos.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Sobrepeso.<br style=\"position: relative; margin: 0px; padding: 0px;\">&nbsp;</li></ul><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">En este caso no se trata de una respuesta del sistema inmunológico ante la presencia de determinados alimentos o nutrientes, sino de un problema relacionado con su metabolización sistema inmunológico del cuerpo. El mejor tratamiento posible es, sin duda, evitar la ingesta de estos alimentos. Pero ello no hace necesariamente que desaparezca el sobrepeso, pues se cree que puede existir un tipo de “intolerancia a alimentos” diferente, que se conoce como inflamación alimentaria y que hace que la presencia de determinados alimentos en la dieta favorezca la puesta en marcha de determinados procesos inflamatorios.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">En la actualidad, aunque son muy discutidos, existen test que permiten identificar tales alimentos con el fin de que sean sustituidos en la dieta por otros que aporten los mismos nutrientes, poniendo fin así a esos procesos inflamatorios que generan el aumento de peso.</p><h3 style=\"position: relative; margin: 20px 0px; padding: 0px; line-height: 25px; font-family: Bupa, Arial, Helvetica, sans-serif; font-weight: 900; color: rgb(0, 0, 0); clear: left; font-size: 18px;\">Alergias alimentarias</h3><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Se es alérgico a un alimento cuando al ingerirlo se provoca una reacción inmunológica severa que desencadena la aparición casi inmediata de toda una serie síntomas que pueden ser manos o menos graves: desde una urticaria, la inflamación exacerbada de la cara y otras zonas del cuerpo e incluso el fallecimiento como consecuencia de un shock anafiláctico. Alejarse de la ingesta del alimento que genera esta reacción es la única opción para evitar el problema.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Sin embargo, cuando la reacción alérgica es muy leve, incluso impercetible, no se suele identificar como tal y los mecanismos que desencadenan una reacción inflamatoria se activan cada que se ingiere una cantidad del alimento, por muy pequeña que sea. Esto hace que se bloqueen los receptores de la insulina, de modo que sólo una mínima parte del azúcar presente en la sangre puede acceder al interior de las células, lo que hace que disminuya el consumo de calorías y que ese azúcar sea transformado en grasa que se deposita en las células adiposas y que no puede eliminarse.</p><p style=\"position: relative; margin-right: 0px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif; margin-bottom: 0px !important;\">Este tipo de reacciones inflamatorias esta mediada por los anticuerpos IgG, generados por el sistema inmunológico como respuesta a esos alimentos. Por eso, la investigación en este campo se centra en la detección de esos anticuerpos cuando se ingieren determinados alimentos, a fin de eliminarlos de la dieta. Algunos estudios parecen demostrar que una dieta guiada por la detección de IgG tiene efectos positivos en la pérdida de peso y en la estabilización del metabolismo de la glucosa.</p>', '2020-05-10 00:00:00', '#Nutrición', '', 5);
INSERT INTO `articulos` (`titulo`, `resumen`, `imagen`, `contenido`, `fecha`, `cat1`, `cat2`, `ID_art`) VALUES
('Calorías, sobrepeso y salud', 'Las calorías no son malas, son necesarias, el problema es cuando se ingieren más calorías de las que el cuerpo necesita.\r\nLa caloría es una unidad de medida de la energía, es decir, la cantidad necesaria de calor en forma de energía para poder producir un incremento de 1ºC en una masa de agua de 1 gramo. En nutrición se usa esta medida puesto que el organismo necesita energía para funcionar correctamente: funcionamiento del corazón, del sistema musculoesquelético, del sistema nervioso, etc.', 'img/articulos/1589127117Foto-calorias-sobrepeso-y-salud.jpg', '<p><span style=\"color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Las calorías no son malas, son necesarias, el problema es cuando se ingieren más calorías de las que el cuerpo necesita.</span><br></p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">La caloría es una unidad de medida de la energía, es decir, la cantidad necesaria de calor en forma de energía para poder producir un incremento de 1ºC en una masa de agua de 1 gramo. En nutrición se usa esta medida puesto que el organismo necesita energía para funcionar correctamente: funcionamiento del corazón, del sistema musculoesquelético, del sistema nervioso, etc.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Una kilocaloría es la medida del valor energético de la comida. Nuestro cuerpo quema calorías utilizando ATP (<em style=\"position: relative; margin: 0px; padding: 0px; font-size: 12px;\">adenosin-trifosfórico</em>) que es un nucleótido que obtiene energía de las células. La energía llega a nuestro organismo a través de la oxidación de los alimentos que ingerimos:</p><ul style=\"position: relative; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style-type: none; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Grasas</strong>: aceites, embutidos, quesos curados, etc.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Hidratos de carbono</strong>: patatas, pan, pasta, fruta, pastelería y bollería, etc.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\"><strong style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 0, 0);\">Proteínas</strong>: carne magra, pescado, huevos, lácteos frescos, etc. Estas están destinadas a la reparación celular.<br style=\"position: relative; margin: 0px; padding: 0px;\">&nbsp;</li></ul><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Las calorías no son malas, son necesarias, el problema es cuando se ingieren más calorías de las que el cuerpo necesita.&nbsp;</p><h3 style=\"position: relative; margin: 20px 0px; padding: 0px; line-height: 25px; font-family: Bupa, Arial, Helvetica, sans-serif; font-weight: 900; color: rgb(0, 0, 0); clear: left; font-size: 18px;\">Dieta normocalórica</h3><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Una dieta normocalórica o una dieta basada en huerta, mar y granja es aquella que tiene una combinación de todos los elementos necesarios para que el cuerpo realice sus funciones correctamente.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">No existen cantidades establecidas para todos puesto que las necesidades dependerán de la edad, la estructura corporal de la persona y de la actividad física que realice. Por ejemplo, un niño entre 4 y 13 años con una actividad moderada deberá consumir entre 1600 y 2200 kilocalorías al día, pero si tiene una actividad sedentaria no se recomienda que pase de 1600.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Igualmente, una mujer adulta de entre 19 y 30 años con una actividad moderada podrá consumir entre 2000 y 2200 kilocalorías, pero si apenas tiene actividad física no se recomienda que pase de los 2000.</p><h3 style=\"position: relative; margin: 20px 0px; padding: 0px; line-height: 25px; font-family: Bupa, Arial, Helvetica, sans-serif; font-weight: 900; color: rgb(0, 0, 0); clear: left; font-size: 18px;\">Dietas hipercalóricas</h3><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Las dietas hipercalóricas son las propias de trabajos físicos fuertes como el desarrollado en la minería, el campo, la construcción, el mercado y el deporte. Estas dietas se caracterizan por un aporte mayor en calorías y alimentos energéticos, sobre todo de hidratos de carbono integrales (pan, patata, arroz, pasta), hasta un 65 % del total de la dieta diaria, pero siempre cuidando la ingesta de aceite y alimentos grasos, dulces u alcohol.</p><h3 style=\"position: relative; margin: 20px 0px; padding: 0px; line-height: 25px; font-family: Bupa, Arial, Helvetica, sans-serif; font-weight: 900; color: rgb(0, 0, 0); clear: left; font-size: 18px;\">Dieta hipocalórica</h3><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Cuando la ingesta de calorías es mayor a la energía necesaria del cuerpo, las calorías sobrantes se acumulan en forma de grasa. Esto favorece el sobrepeso en las personas, un problema grave problema para la salud de las sociedades de hoy en día. Un exceso de grasa en las personas favorece la aparición de enfermedades cardiovasculares, enfermedades metabólicas como la diabetes y algunos tipos de cáncer.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Establecer una dieta hipocalórica ayuda a reducir la grasa acumulada y el peso sobrante. Para ello la cantidad de alimentos energéticos -grasas, proteínas e hidratos de carbono- debe reducirse aumentando la ingesta de alimentos con altos contenidos en vitaminas y fibras que ayudan a la eliminación de estas grasas.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Para que la pérdida de peso se realice de manera saludable esta tiene que hacerse de forma paulatina. Las pérdidas repentinas de peso solo perjudican el organismo favoreciendo la aparición de trastorno gastrointestinales, daños en el páncreas, trastornos alimentarios, etc.</p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Para perder peso es importante tener en cuenta las siguientes normas:</p><ul style=\"position: relative; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style-type: none; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Comprender y entender la necesidad de mejorar el estado de salud.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Adoptar hábitos saludables de comida.</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Crear un plan de recompensas diferente a \"comer más\".</li><li style=\"position: relative; margin: 10px 0px; padding: 0px 0px 0px 2em; background: url(&quot;/img/site_general/diseno/xul-bolo.png.pagespeed.ic.bOvZMXjjbH.png&quot;) 0px 0px no-repeat transparent; line-height: 25px;\">Aumentar su actividad física periódica.<br style=\"position: relative; margin: 0px; padding: 0px;\">&nbsp;</li></ul><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\">Las dietas coherentes y efectivas de reducción de peso se basan en reducir la ingesta calórica e incluir una comida variada y baja en calorías. En estas ocasiones lo mejor es acudir al endocrino que valore el estado de salud general y pueda establecer una dieta personalizada en base a las necesidades del paciente y sus hábitos de vida. &nbsp; &nbsp;</p><p style=\"position: relative; margin-right: 0px; margin-left: 0px; padding: 10px 0px 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif; margin-bottom: 0px !important;\">FUENTES:<br style=\"position: relative; margin: 0px; padding: 0px;\"><a href=\"https://www.healthychildren.org/Spanish/healthy-living/nutrition/Paginas/Energy-In-Recommended-Food-Drink-Amounts-for-Children.aspx\" style=\"position: relative; margin: 0px; padding: 0px; color: rgb(0, 121, 200);\">https://www.healthychildren.org/Spanish/healthy-living/nutrition/Paginas/Energy-In-Recommended-Food-Drink-Amounts-for-Children.aspx</a><br style=\"position: relative; margin: 0px; padding: 0px;\"></p><p style=\"position: relative; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 25px; color: rgb(102, 102, 102); font-family: Bupa, Arial, Helvetica, sans-serif;\"><a href=\"https://www.fisterra.com/ayuda-en-consulta/dietas/dieta-2.000-kcalorias-menus/\" style=\"background-color: rgb(255, 255, 255); font-size: 1rem; position: relative; margin: 0px; padding: 0px; color: rgb(0, 121, 200);\">https://www.fisterra.com/ayuda-en-consulta/dietas/dieta-2.000-kcalorias-menus/</a>&nbsp;</p>', '2020-05-10 00:00:00', '#Nutrición', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `ID_Res` int(11) NOT NULL,
  `reserva` int(1) NOT NULL DEFAULT '0',
  `confReserva` int(1) NOT NULL DEFAULT '0',
  `ID_Usuario` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`ID_Res`, `reserva`, `confReserva`, `ID_Usuario`, `fecha`) VALUES
(1, 0, 1, '10', '2020-05-21 18:00:00'),
(2, 1, 0, '10', '2020-05-26 16:00:00'),
(3, 0, 1, '10', '2020-06-05 16:00:00'),
(4, 1, 0, '12', '2020-05-25 16:00:00'),
(5, 0, 1, '12', '2020-05-27 16:00:00'),
(6, 0, 1, '12', '2020-05-29 16:00:00'),
(7, 1, 0, '12', '2020-05-10 18:00:00'),
(8, 0, 1, '10', '2020-05-22 18:00:00'),
(9, 1, 0, '10', '2020-05-27 18:00:00');

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
('Amorchito', 'icmaster17@hotmail.com', '646251579', 'quiero saber si esto no afecta a nada, es tan solo una prueba', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`fecha`) VALUES
('2020-05-10 16:00:00'),
('2020-05-10 18:00:00'),
('2020-05-10 20:00:00'),
('2020-05-11 16:00:00'),
('2020-05-11 18:00:00'),
('2020-05-11 20:00:00'),
('2020-05-12 17:00:00'),
('2020-05-13 16:00:00'),
('2020-05-13 18:00:00'),
('2020-05-14 18:00:00'),
('2020-05-14 20:00:00'),
('2020-05-15 16:00:00'),
('2020-05-15 18:00:00'),
('2020-05-18 16:00:00'),
('2020-05-18 18:00:00'),
('2020-05-19 18:00:00'),
('2020-05-20 16:00:00'),
('2020-05-20 18:00:00'),
('2020-05-21 18:00:00'),
('2020-05-22 16:00:00'),
('2020-05-25 16:00:00'),
('2020-05-25 18:00:00'),
('2020-05-26 16:00:00'),
('2020-05-26 18:00:00'),
('2020-05-27 16:00:00'),
('2020-05-27 18:00:00'),
('2020-05-28 16:00:00'),
('2020-05-28 18:00:00'),
('2020-05-29 18:00:00'),
('2020-06-01 16:00:00'),
('2020-06-01 18:00:00'),
('2020-06-01 20:00:00'),
('2020-06-03 16:00:00'),
('2020-06-03 18:00:00'),
('2020-06-03 20:00:00'),
('2020-06-05 18:00:00'),
('2020-06-05 20:00:00');

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
('img/articulos/imagenDefecto.jpg', '646251579', '2015-06-14', 'Av/ Pi i Margall 58 puerta 10, C/ Viriato 28 bajo', '54452356Z', 12, 12, '1'),
('img/pacientes/imagenDefecto.jpg', '666666666', '1996-07-18', 'C/ anonima 17', '66666666H', 11, 11, '1');

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
('2020-05-10', 35, 432, 645, 543, 654, 'gfreshdsdg', 11, 1),
('2020-05-15', 34, 432, 432, 543, 432, 'hgdfjhgfj', 11, 2),
('2020-05-10', 65, 3, 65, 4, 765, 'nhgfdshssh', 12, 3),
('2020-05-20', 2, 2, 2, 2, 2, 'gtfrsdgd', 11, 4);

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
('Ignacio Macias Martinez', 'icmaster17@hotmail.com', '$2y$14$ueJIzGg0udkji2EMXruOWeJcLXrbAx04P1jZrjpOYj75fxn6DZUh6', 9, 'A', '1'),
('carlos gutiérrez', 'carlos@hotmail.com', '$2y$14$TnhQMNZn0RG4eYYEn4QnKekHJDKzLfrlcvackntn26GfxYQ90dqN.', 10, 'U', '1'),
('anonimo anonimo', 'anonimo@hotmail.com', '$2y$14$oMOXpQUAWn5OHH3NGP.PTujdn4vwPitHfuYnPFnzt4smfARjXLnXe', 11, 'U', '1'),
('zaira cabrera', 'zaira@hotmail.com', '$2y$14$83I2ElyIw3Y.7bb20y76QuNu9wxwZAqj594c.HRD.QyYhKRBlNFiK', 12, 'U', '1');

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
  MODIFY `ID_art` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `ID_Res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID_com` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `ID_Mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `ID_res` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `revisiones`
--
ALTER TABLE `revisiones`
  MODIFY `ID_revision` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `num_Usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
