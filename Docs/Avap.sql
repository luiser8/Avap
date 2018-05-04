-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2018 a las 00:05:04
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sagaj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `nfactura` int(5) UNSIGNED ZEROFILL NOT NULL,
  `norden` int(5) UNSIGNED ZEROFILL NOT NULL,
  `fechaf` date NOT NULL,
  `status` enum('PAGADA','NO PAGADA') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`nfactura`, `norden`, `fechaf`, `status`) VALUES
(00003, 00003, '2016-09-18', 'NO PAGADA'),
(00004, 00006, '2016-09-26', 'NO PAGADA');

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `norden` int(5) UNSIGNED ZEROFILL NOT NULL,
  `rif` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechao` date NOT NULL,
  `id_iva` int(2) UNSIGNED ZEROFILL NOT NULL,
  `nsiniestro` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npoliza` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statuso` enum('PENDIENTE','PROCESADA') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`norden`, `rif`, `fechao`, `id_iva`, `nsiniestro`, `npoliza`, `placa`, `statuso`) VALUES
(00002, 'J-001488111', '2016-09-12', 01, 'as1245125-1451ff', 'auto-1124145587', 'AA1457F', 'PENDIENTE'),
(00003, 'J-001488111', '2016-09-12', 01, '4123455KK-1474F', 'auto-11F77KJ', 'AB1663U', 'PROCESADA'),
(00004, 'V-22872234', '2016-09-25', 01, '', '', NULL, 'PROCESADA'),
(00005, 'V-21391785', '2016-09-26', 01, '', '', NULL, 'PENDIENTE'),
(00006, 'V-21173928', '2016-09-26', 01, '', '', NULL, 'PENDIENTE'),
(00007, 'V-21173928', '2016-09-26', 01, '', '', NULL, 'PENDIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordrep`
--

CREATE TABLE `ordrep` (
  `norden` int(5) UNSIGNED ZEROFILL NOT NULL,
  `codr` int(5) UNSIGNED ZEROFILL NOT NULL,
  `cantsol` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ordrep`
--

INSERT INTO `ordrep` (`norden`, `codr`, `cantsol`) VALUES
(00002, 00010, 1),
(00003, 00012, 1),
(00004, 00013, 1),
(00004, 00014, 1),
(00004, 00015, 1),
(00004, 00016, 1),
(00005, 00010, 3),
(00005, 00017, 1),
(00006, 00008, 2),
(00006, 00009, 3),
(00007, 00018, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(6) UNSIGNED ZEROFILL NOT NULL,
  `rif` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre1` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre2` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido1` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido2` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `razon_s` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` int(11) UNSIGNED ZEROFILL NOT NULL,
  `direccion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `rif`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `razon_s`, `telefono`, `direccion`, `correo`) VALUES
(000001, 'V-22872234', 'Elio', 'Daniel', 'Cabrera', 'Marcano', '', 04264820100, 'Urb. Terrazas del Sol, edificio 1, apartamento 1-4-3. Puerto la Cruz, Anzoátegui.', 'eliodcabrera@gmail.com'),
(000002, 'v-23808008', 'Luis', '', 'Lucart', '', '', 04263025124, '', 'lucartluis@htomail.com'),
(000003, 'J-001488111', '', '', '', '', 'Seguros Universitas C.A', 02122655100, 'Av. Tamanaco, centro empresaria, urb El Rosal, piso 9, oficina 09. Caracas', 'segurosuniversitas@hotmail.com'),
(000004, 'V-24666652', 'Maximiliano', '', 'Campos', '', '', 04126954860, '', 'maximilianocampos14@gmail.com'),
(000005, 'J-14247853', '', '', '', '', 'Seguros Terrazas del Sol C.A', 02812487541, '', 'terrazas@gmail.com'),
(000006, 'V-21391785', 'Gustavo', '', 'Russian', '', '', 04148999199, '', 'grussianmoreno@gmail.com'),
(000007, 'V-21173928', 'Ana', '', 'Mata', '', '', 04147842645, '', 'anagmata@gmail.com'),
(000011, 'V-12345678', 'Carlos', '', 'Ortiz', '', '', 04121451247, '', 'ortiz_20@hotmail.com'),
(000012, '231556', 'jose', 'alejandro', 'lopez', 'r', 's', 04167933215, '', 'jl@gmail.com'),
(000013, 'V-20052456', 'alexander', 'jose', 'arasme', 'farias', 'xo', 00000156625, 'maturin', 'ja@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuesto`
--

CREATE TABLE `repuesto` (
  `codr` int(5) UNSIGNED ZEROFILL NOT NULL,
  `categoriar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marcar` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelor` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preciou` decimal(9,2) NOT NULL,
  `statusiva` enum('APLICABLE','NO APLICABLE') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `repuesto`
--

INSERT INTO `repuesto` (`codr`, `categoriar`, `marcar`, `modelor`, `descripcion`, `preciou`, `statusiva`) VALUES
(00008, 'MECANICO', 'TOYOTA', 'QGP17', 'FILTRO DE AIRE TOYOTA CARINA II, ARAYA 82-93', '87599.78', 'APLICABLE'),
(00009, 'ELECTRICO', 'TOYOTA', 'QGP90', 'JUEGO DE CABLES DE BUJIAS TOYOTA LAND CRUISER 4,5 LTS 24 V 2000', '78499.99', 'APLICABLE'),
(00010, 'MECANICO', 'CHEVROLET', 'CVL24', 'KIT GOMA TRIPOIDE L/CAJA CORSA 1,6', '48400.15', 'NO APLICABLE'),
(00011, 'MECANICO', 'MOTORCRAFT', 'MTC49', 'BASE MOTOR DELANTERA FORD FESTIVA 323', '158400.39', 'APLICABLE'),
(00012, 'MECANICO', 'FORD', 'MTC18', 'ASPA VENTILADOR FORD SIERRA', '2400.00', 'APLICABLE'),
(00013, 'MICAS', 'MICASA', 'MIC412F', 'MICA DELANTERA IZQUIERDA 15\" FOCUS 2012', '11450.20', 'APLICABLE'),
(00014, 'MICAS', 'MICASA', 'MIC413F', 'MICA DELANTERA DERECHA 15\" FOCUS 2012', '11450.20', 'NO APLICABLE'),
(00015, 'MICAS', 'MICASA', 'MIC414B', 'MICA TRASERA IZQUIERDA 18\" FOCUS 2012', '18720.50', 'NO APLICABLE'),
(00016, 'MICAS', 'MICASA', 'MIC415B', 'MICA TRASERA DERECHA 18\" FOCUS 2012', '18720.50', 'NO APLICABLE'),
(00017, 'CARROCERIA', 'CHEVROLET', 'CH1458S', 'PARACHOQUES DELANTERO CHEVROLET SPARK 2011', '120000.00', 'APLICABLE'),
(00018, 'ELECTRICO', 'DUNCAN', 'dcn145', 'Bateria 1100', '81500.30', 'APLICABLE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(2) UNSIGNED ZEROFILL NOT NULL,
  `tiporol` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `tiporol`) VALUES
(01, 'Administrador'),
(02, 'Encargado'),
(03, 'Gerente Estratégico'),
(04, 'Vendedor'),
(05, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `user` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clave` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rol` int(2) UNSIGNED ZEROFILL NOT NULL,
  `idpersona` int(6) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user`, `clave`, `id_rol`, `idpersona`) VALUES
('cabrera25', '12345', 01, 000001),
('carlos11', '12345', 03, 000011),
('jarasme', '827ccb0eea', 01, 000013),
('lucart1', '12345', 04, 000002),
('mata30', '12345', 05, 000007),
('max10', '12345', 02, 000004),
('rumoner', '12345', 05, 000006),
('terrazas1', '12345', 05, 000005),
('univer18', '45678', 05, 000003);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `placa` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `año` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`placa`, `marca`, `modelo`, `año`) VALUES
('AA1457F', 'CHEVROLET', 'CORSA', 2005),
('AB1663U', 'FORD', 'FESTIVA', 1999);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`nfactura`),
  ADD UNIQUE KEY `norden` (`norden`),
  ADD KEY `norden_2` (`norden`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`norden`),
  ADD KEY `rif` (`rif`),
  ADD KEY `id_iva` (`id_iva`),
  ADD KEY `placa` (`placa`);

--
-- Indices de la tabla `ordrep`
--
ALTER TABLE `ordrep`
  ADD PRIMARY KEY (`norden`,`codr`),
  ADD KEY `codr` (`codr`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`,`rif`),
  ADD UNIQUE KEY `rif` (`rif`),
  ADD UNIQUE KEY `idpersona` (`idpersona`);

--
-- Indices de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  ADD PRIMARY KEY (`codr`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user`),
  ADD UNIQUE KEY `idpersona_2` (`idpersona`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `idpersona` (`idpersona`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `nfactura` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--

-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `norden` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `repuesto`
--
ALTER TABLE `repuesto`
  MODIFY `codr` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(2) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`norden`) REFERENCES `orden` (`norden`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_3` FOREIGN KEY (`placa`) REFERENCES `vehiculo` (`placa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orden_ibfk_4` FOREIGN KEY (`rif`) REFERENCES `persona` (`rif`);

--
-- Filtros para la tabla `ordrep`
--
ALTER TABLE `ordrep`
  ADD CONSTRAINT `ordrep_ibfk_1` FOREIGN KEY (`codr`) REFERENCES `repuesto` (`codr`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ordrep_ibfk_2` FOREIGN KEY (`norden`) REFERENCES `orden` (`norden`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
