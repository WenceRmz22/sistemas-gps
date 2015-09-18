-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2015 a las 00:08:39
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `f403`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f403_interes`
--

CREATE TABLE IF NOT EXISTS `f403_interes` (
  `IdPunto` int(11) NOT NULL,
  `IdRuta` int(11) NOT NULL,
  `Descripcion` varchar(70) NOT NULL,
  `Latitud` decimal(15,8) NOT NULL,
  `Longitud` decimal(15,8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `f403_interes`
--

INSERT INTO `f403_interes` (`IdPunto`, `IdRuta`, `Descripcion`, `Latitud`, `Longitud`) VALUES
(1, 2, 'Frontera', '30.20910487', '-102.12326154'),
(2, 2, 'Minessota', '32.63352876', '-104.25743155'),
(3, 2, 'Bodega 1', '31.64249044', '-103.70252134'),
(4, 2, 'Check point', '34.21945187', '-105.53396238'),
(5, 3, 'NADA', '24.74052614', '-100.93955979'),
(6, 4, 'Hola', '26.61540573', '-101.11251935'),
(7, 6, 'sadasdaaefafafafaaafaaafafa', '26.88958302', '-99.76543419'),
(8, 7, 'Aduana - Nuevo Laredo-Monterrey', '27.12739793', '-99.68436002'),
(9, 7, 'Preparar Cuota', '26.49353939', '-100.00424865'),
(10, 9, 'Saiida 1', '25.53617757', '-101.35704093'),
(11, 9, 'Salida 2', '25.29802687', '-103.44444327'),
(12, 10, 'Aduana', '27.29696475', '-99.59226135'),
(13, 10, 'Cuota Monterrey', '26.20395567', '-100.10157592'),
(14, 11, 'Entrada', '25.84398663', '-100.24642348'),
(15, 12, 'Aduana', '27.29593719', '-99.59509612'),
(16, 13, 'zx', '25.49534742', '-98.60092163'),
(17, 18, 'dESCRIPCION', '27.26744754', '-99.57698822'),
(18, 21, 'SDASDASD', '26.83104939', '-99.80937984'),
(19, 22, 'JHBJK', '25.78681385', '-99.31056029');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `f403_ruta`
--

CREATE TABLE IF NOT EXISTS `f403_ruta` (
  `IdRuta` int(11) NOT NULL,
  `IdCamion` varchar(20) NOT NULL,
  `PuntoIniLat` decimal(15,8) NOT NULL,
  `PuntoIniLon` decimal(15,8) NOT NULL,
  `PuntoFinLat` decimal(15,8) NOT NULL,
  `PuntoFinLon` decimal(15,8) NOT NULL,
  `PuntoGpsLat` decimal(15,8) NOT NULL,
  `PuntoGpsLon` decimal(15,8) NOT NULL,
  `Duracion` varchar(25) NOT NULL,
  `Distancia` varchar(20) NOT NULL,
  `NombreChofer` varchar(40) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `Origen` varchar(100) DEFAULT NULL,
  `Destino` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `f403_ruta`
--

INSERT INTO `f403_ruta` (`IdRuta`, `IdCamion`, `PuntoIniLat`, `PuntoIniLon`, `PuntoFinLat`, `PuntoFinLon`, `PuntoGpsLat`, `PuntoGpsLon`, `Duracion`, `Distancia`, `NombreChofer`, `activo`, `fecha`, `Origen`, `Destino`) VALUES
(7, 'Camion 1', '27.47791410', '-99.54957770', '25.68654280', '-100.31620350', '0.00000000', '0.00000000', '', '', NULL, 1, '2003-09-15 00:00:00', NULL, NULL),
(8, 'Camion 2', '24.02762240', '-104.65315520', '25.42650760', '-100.99506000', '0.00000000', '0.00000000', '', '', 'Juan', 1, '2003-09-15 00:00:00', NULL, NULL),
(9, 'Camion 3', '23.24939870', '-106.41116170', '27.47791410', '-99.54957770', '0.00000000', '0.00000000', '', '', NULL, 1, '2003-09-15 00:00:00', NULL, NULL),
(10, 'Camion 4', '27.47791410', '-99.54957770', '23.73697440', '-99.14110600', '0.00000000', '0.00000000', '', '', 'Luis Enriqueto', 1, '2003-09-15 00:00:00', NULL, NULL),
(11, 'Camion 10', '26.20342070', '-98.23000920', '24.02762240', '-104.65315520', '0.00000000', '0.00000000', '', '', 'Sonia Jimenez', 1, '0000-00-00 00:00:00', NULL, NULL),
(12, 'Camion 19', '27.47791410', '-99.54957770', '25.68654280', '-100.31620350', '0.00000000', '0.00000000', '', '', 'Juan Luis', 1, '2004-09-15 00:00:00', NULL, NULL),
(13, 'watakag', '27.47791410', '-99.54957770', '21.88526030', '-102.29157170', '0.00000000', '0.00000000', '', '', 'Chofer', 1, '0000-00-00 00:00:00', NULL, NULL),
(14, 'wdfa', '27.47791410', '-99.54957770', '23.73697440', '-99.14110600', '0.00000000', '0.00000000', '', '', 'sdf', 1, '2011-09-15 00:00:00', NULL, NULL),
(15, 'Identificador', '23.24939870', '-106.41116170', '27.47791410', '-99.54957770', '0.00000000', '0.00000000', '', '', 'Chofer', 1, '2011-09-15 00:00:00', NULL, NULL),
(16, 'Id1', '25.54287500', '-103.40678570', '21.88526030', '-102.29157170', '0.00000000', '0.00000000', '', '', 'Name', 1, '2011-09-15 00:00:00', NULL, NULL),
(17, 'iDENFICADOR', '27.47791410', '-99.54957770', '25.68654280', '-100.31620350', '0.00000000', '0.00000000', '', '', 'nOMBRE', 1, '2014-09-15 00:00:00', NULL, NULL),
(18, 'Camion 123', '27.47791410', '-99.54957770', '25.68654280', '-100.31620350', '0.00000000', '0.00000000', '', '', 'Chofer ', 1, '2015-01-01 01:05:00', 'Monterrey, N.L., MÃ©xico ', 'Nuevo Laredo, Tamps., MÃ©xico '),
(19, 'Identificador', '27.47791410', '-99.54957770', '25.68654280', '-100.31620350', '0.00000000', '0.00000000', '', '', 'Nombre', 1, '2015-01-19 17:10:00', '', ''),
(20, 'sdf', '27.47791410', '-99.54957770', '25.68654280', '-100.31620350', '0.00000000', '0.00000000', '', '', 'sdfdf', 1, '2015-01-01 17:05:00', 'Nuevo Laredo, Tamps., MÃ©xico ', 'Monterrey, N.L., MÃ©xico '),
(21, 'asc', '27.47791410', '-99.54957770', '25.68654280', '-100.31620350', '0.00000000', '0.00000000', '', '', 'as', 1, '2015-01-01 00:00:00', 'Boluevard AnÃ¡huac, Nuevo Laredo, Tamps., MÃ©xico ', 'Transversal ColÃ³n 1947, Col Obrera, 64490 Monterrey, N.L., MÃ©xico '),
(22, 'GGV', '26.05085330', '-98.29799660', '25.42650760', '-100.99506000', '0.00000000', '0.00000000', '', '', 'FHG', 1, '2015-03-01 17:05:00', 'Reynosa, Tamps., MÃ©xico ', 'Saltillo, Coah., MÃ©xico '),
(23, 'E', '27.47791410', '-99.54957770', '25.68654280', '-100.31620350', '0.00000000', '0.00000000', '', '', 'WE', 1, '2015-01-01 00:00:00', 'Boluevard AnÃ¡huac, Nuevo Laredo, Tamps., MÃ©xico ', 'Transversal ColÃ³n 1947, Col Obrera, 64490 Monterrey, N.L., MÃ©xico '),
(24, 'asd', '27.47791410', '-99.54957770', '25.68654280', '-100.31620350', '0.00000000', '0.00000000', '', '', 'as', 1, '2015-01-01 00:00:00', 'Boluevard AnÃ¡huac, Nuevo Laredo, Tamps., MÃ©xico ', 'Transversal ColÃ³n 1947, Col Obrera, 64490 Monterrey, N.L., MÃ©xico ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutasguardadas`
--

CREATE TABLE IF NOT EXISTS `rutasguardadas` (
  `idRutaG` int(11) NOT NULL,
  `DescripcionRuta` varchar(100) DEFAULT NULL,
  `latini` decimal(15,8) DEFAULT NULL,
  `lonini` decimal(15,8) DEFAULT NULL,
  `latfin` decimal(15,8) DEFAULT NULL,
  `lonfin` decimal(15,8) DEFAULT NULL,
  `Duracion` varchar(25) DEFAULT NULL,
  `Distancia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutasguardadas`
--

INSERT INTO `rutasguardadas` (`idRutaG`, `DescripcionRuta`, `latini`, `lonini`, `latfin`, `lonfin`, `Duracion`, `Distancia`) VALUES
(1, 'Monterrey, N.L., MÃ©xico-Nuevo Laredo, Tamps., MÃ©xico', '27.47791410', '-99.54957770', '25.68654280', '-100.31620350', '2 h 39 min', '220 km'),
(2, 'Monterrey, N.L., MÃ©xico-Nuevo Laredo, Tamps., MÃ©xico', '27.47791410', '-99.54957770', '25.68654280', '-100.31620350', '2 h 38 min', '220 km');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL,
  `userName` varchar(25) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`idUser`, `userName`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `f403_interes`
--
ALTER TABLE `f403_interes`
  ADD PRIMARY KEY (`IdPunto`);

--
-- Indices de la tabla `f403_ruta`
--
ALTER TABLE `f403_ruta`
  ADD PRIMARY KEY (`IdRuta`);

--
-- Indices de la tabla `rutasguardadas`
--
ALTER TABLE `rutasguardadas`
  ADD PRIMARY KEY (`idRutaG`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `f403_interes`
--
ALTER TABLE `f403_interes`
  MODIFY `IdPunto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `f403_ruta`
--
ALTER TABLE `f403_ruta`
  MODIFY `IdRuta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `rutasguardadas`
--
ALTER TABLE `rutasguardadas`
  MODIFY `idRutaG` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
