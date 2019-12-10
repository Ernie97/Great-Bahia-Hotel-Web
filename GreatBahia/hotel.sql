-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2018 a las 20:40:59
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `Precio` int(11) NOT NULL,
  `FechaEntrada` date NOT NULL,
  `FechaSalida` date NOT NULL,
  `Habitacion_Alquilada` int(11) NOT NULL,
  `Id_Alquiler` int(11) NOT NULL,
  `Huesped_Alquilado` int(11) NOT NULL,
  `TipoPension` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `num_habitacion` int(11) NOT NULL,
  `Tipo_habitacion` int(11) NOT NULL,
  `Vistas_Mar` tinyint(4) NOT NULL,
  `Fumador` tinyint(4) NOT NULL,
  `Id_Habitacion` int(11) NOT NULL,
  `Reservado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`num_habitacion`, `Tipo_habitacion`, `Vistas_Mar`, `Fumador`, `Id_Habitacion`, `Reservado`) VALUES
(1, 1, 0, 1, 1, 0),
(2, 1, 0, 1, 2, 0),
(3, 1, 0, 1, 3, 0),
(4, 1, 0, 1, 4, 0),
(5, 2, 0, 1, 5, 0),
(6, 2, 0, 1, 6, 0),
(7, 6, 0, 1, 7, 0),
(8, 2, 0, 1, 8, 0),
(9, 3, 0, 1, 9, 0),
(10, 2, 0, 1, 10, 0),
(11, 2, 1, 0, 11, 0),
(12, 2, 1, 0, 12, 0),
(13, 2, 1, 0, 13, 0),
(14, 4, 1, 0, 14, 0),
(15, 6, 1, 0, 15, 0),
(16, 6, 1, 0, 16, 0),
(17, 4, 1, 0, 17, 0),
(18, 4, 1, 0, 18, 0),
(19, 4, 1, 0, 19, 0),
(20, 5, 1, 0, 20, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huesped`
--

CREATE TABLE `huesped` (
  `Id_huesped` int(11) NOT NULL,
  `Nombre_Completo` varchar(50) NOT NULL,
  `Nacionalidad` varchar(50) NOT NULL,
  `TelefonoMovil` int(11) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `NIF` char(9) NOT NULL,
  `Contrasena` varchar(20) NOT NULL,
  `Nick_Name` varchar(20) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Tiene_Reserva` tinyint(4) NOT NULL,
  `Cuenta_Bancaria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `huesped`
--

INSERT INTO `huesped` (`Id_huesped`, `Nombre_Completo`, `Nacionalidad`, `TelefonoMovil`, `FechaNacimiento`, `NIF`, `Contrasena`, `Nick_Name`, `Correo`, `Tiene_Reserva`, `Cuenta_Bancaria`) VALUES
(1, 'nombre', 'nacionalidad', 678212393, '2018-04-02', '03942385', 'jaja', 'nickName', 'correo', 1, 0),
(2, 'Ernesto Perez', 'España', 311111111, '2018-04-02', '03952385', 'perez', 'Perez97', 'ernesto@hgd.es', 1, 0),
(3, 'jajaad', 'España', 34224, '2018-05-04', '2424', 'peter', 'peter', 'YouMad@j', 0, 0),
(6, 'pepe', 'madrid', 134, '2018-05-04', '34431', 'pepe', 'pepe', 'YouMad@l', 0, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regimen_estancia`
--

CREATE TABLE `regimen_estancia` (
  `Id_Regimen` int(11) NOT NULL,
  `NombreRegimen` varchar(50) NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio_extra` float NOT NULL,
  `ImagenRegimen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `regimen_estancia`
--

INSERT INTO `regimen_estancia` (`Id_Regimen`, `NombreRegimen`, `Descripcion`, `Precio_extra`, `ImagenRegimen`) VALUES
(1, 'SOLO ALOJAMIENTO', 'Incluye solo estancia.', 0, 'habIndv.jpg'),
(2, 'ALOJAMIENTO Y DESAYUNO', 'Incluye estancia y desayuno en nuestro buffet todos los dias.', 35, 'desayuno.jpg'),
(3, 'MEDIA PENSIÓN', 'Incluye estancia y desayuno o cena a eleccion del huesped.', 58, 'comida.jpg'),
(4, 'PENSIÓN COMPLETA', 'Incluye estancia, desayuno, comida y cena.', 99, 'cena.jpg'),
(5, 'TODO INCLUIDO', 'Incluye estancia, desayuno, comida, cena, consumiciones en cafetería y chiringuito.', 199, 'cocktail.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipohabitacion`
--

CREATE TABLE `tipohabitacion` (
  `Id_Tipo` int(11) NOT NULL,
  `Descripcion` text NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio_Base` float NOT NULL,
  `ImagenTipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipohabitacion`
--

INSERT INTO `tipohabitacion` (`Id_Tipo`, `Descripcion`, `Nombre`, `Precio_Base`, `ImagenTipo`) VALUES
(1, 'Ideal para quienes viajan solos. El precio se adecúa a las necesidades de todos aquellos huéspedes que buscan tener un lugar tranquilo para descansar en sus viajes de placer o negocios.', 'HABITACIÓN INDIVIDUAL', 56, 'habIndv.jpg'),
(2, 'Como su nombre lo indica, esta clase de habitaciones son para dos personas. Las camas varían, pueden ser matrimoniales o dos camas individuales independientes.\r\n', 'HABITACIÓN DOBLE', 95, 'habDoble.jpg'),
(3, 'Estas habitaciones cuentan con 3 camas, o 2 más una supletoria. Es perfecta para los viajes con tus amigos.\r\nCuentan con los mismos servicios que las habitaciones dobles.', 'HABITACIÓN TRIPLE', 147, 'habTriple.jpg'),
(4, 'La habitación mas lujosa del hotel, cuentan con dos habitaciones dobles, 2 baños, salón y estancia. \r\nCuenta con television de plasma 4K y servicio minibar gratis.', 'SUITE', 399, 'suite.jpg\r\n'),
(5, 'Pensada para aquellas parejas recién casadas y que quieren disfrutar de una luna de miel con privacidad e intimidad, habitación en el lugar mas exclusivo del hotel. Además de una cama matrimonial amplia, cuenta con jacuzzi y una vista única.', 'SUITE NUPCIAL', 460, 'suiteNupcial.jpg'),
(6, 'Para todos aquellos que planeen sus vacaciones con toda la familia. Esta opción es ideal para disfrutar de la comodidad de un hotel junto con los tuyos.\r\nCuenta con una cama de matrimonio y dos camas supletorias.', 'HABITACIÓN FAMILIAR', 159, 'habFamiliar.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`Id_Alquiler`),
  ADD UNIQUE KEY `Habitacion_Alquilada` (`Habitacion_Alquilada`),
  ADD UNIQUE KEY `Cliente_Alquilado` (`Huesped_Alquilado`),
  ADD KEY `TipoPension` (`TipoPension`) USING BTREE;

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`Id_Habitacion`),
  ADD KEY `Tipo_habitacion` (`Tipo_habitacion`);

--
-- Indices de la tabla `huesped`
--
ALTER TABLE `huesped`
  ADD PRIMARY KEY (`Id_huesped`),
  ADD UNIQUE KEY `NIF` (`NIF`),
  ADD UNIQUE KEY `Contrasena` (`Contrasena`),
  ADD UNIQUE KEY `Nick_Name` (`Nick_Name`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- Indices de la tabla `regimen_estancia`
--
ALTER TABLE `regimen_estancia`
  ADD PRIMARY KEY (`Id_Regimen`),
  ADD UNIQUE KEY `NombrePension` (`NombreRegimen`);

--
-- Indices de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
  ADD PRIMARY KEY (`Id_Tipo`),
  ADD UNIQUE KEY `Nombre` (`Nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `Id_Alquiler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `Id_Habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `huesped`
--
ALTER TABLE `huesped`
  MODIFY `Id_huesped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `regimen_estancia`
--
ALTER TABLE `regimen_estancia`
  MODIFY `Id_Regimen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipohabitacion`
--
ALTER TABLE `tipohabitacion`
  MODIFY `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `alquiler_ibfk_1` FOREIGN KEY (`Habitacion_Alquilada`) REFERENCES `habitaciones` (`Id_Habitacion`) ON DELETE CASCADE,
  ADD CONSTRAINT `alquiler_ibfk_2` FOREIGN KEY (`Huesped_Alquilado`) REFERENCES `huesped` (`Id_huesped`) ON DELETE CASCADE,
  ADD CONSTRAINT `alquiler_ibfk_3` FOREIGN KEY (`TipoPension`) REFERENCES `regimen_estancia` (`Id_Regimen`) ON DELETE CASCADE;

--
-- Filtros para la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `habitaciones_ibfk_1` FOREIGN KEY (`Tipo_habitacion`) REFERENCES `tipohabitacion` (`Id_Tipo`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
