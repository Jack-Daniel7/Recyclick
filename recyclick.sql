-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-11-2019 a las 04:54:21
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recyclick`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `identificacion` int(10) NOT NULL,
  `telefono` bigint(100) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `name`, `lastname`, `identificacion`, `telefono`, `rol`) VALUES
(1, 'javier', 'cuchumbe', 1061754897, 3196623413, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `quantity` int(3) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(100) NOT NULL,
  `telephone` bigint(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `otherother` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `name`, `lastname`, `identificacion`, `quantity`, `date`, `address`, `telephone`, `email`, `otherother`) VALUES
(3, 'gean', 'cardona', 1061754897, 0, '2019-10-16 22:44:09', 'piendamo', 3196623413, '0', 0),
(4, 'Chichan', 'Lope', 12345, 0, '2019-10-18 12:28:56', 'Uni', 1234321, '0', 0),
(5, 'eljajas', 'joker', 1061754897, 0, '2019-10-18 16:06:18', 'piendamo', 3196623413, 'jajas@gmail.com', 0),
(6, 'cristian', 'cuchumbe', 1061754897, 0, '2019-11-04 16:58:29', 'cauca', 3196623413, 'cristian@gmail.com', 0),
(7, 'paula', 'vasquez', 1061754897, 0, '2019-11-04 17:02:08', 'calle 66n # 11 -307', 3196623413, 'paula@gmail.com', 0),
(8, 'ANdrea', 'vasquez', 1061754897, 0, '2019-11-04 17:03:18', 'calle 66n # 11 - 307', 3196623413, 'paulavaz@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `rol` int(1) NOT NULL,
  `state` int(1) NOT NULL,
  `identificacion` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `rol`, `state`, `identificacion`) VALUES
(1, 'Javier', 'javierc@unicauca.edu.co', '1061754897', 1, 1, 0),
(10, 'Gean', 'gcardona@gmail.com', '1061754897', 2, 1, 0),
(11, 'Chichico', 'Eduar@gmail.com', 'qwer', 0, 1, 0),
(12, 'Jarbin', 'jajas@gmail.com', '1061754897', 0, 1, 0),
(13, 'cristian', 'cristian@gmail.com', '1061754897', 0, 1, 0),
(14, 'ANdrea', 'paulavaz@gmail.com', '1061754897', 0, 1, 0),
(15, 'yehison', 'yehison@gmail.com', '1061754897', 2, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operario`
--

CREATE TABLE `operario` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `identificacion` bigint(10) NOT NULL,
  `rol` int(2) NOT NULL,
  `route` varchar(100) NOT NULL,
  `vehicle` int(4) NOT NULL,
  `telephone` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `operario`
--

INSERT INTO `operario` (`id`, `name`, `lastname`, `identificacion`, `rol`, `route`, `vehicle`, `telephone`, `address`) VALUES
(1, 'Gean', 'cardona', 1061754897, 2, 'sena', 4, 319662341, '0'),
(2, 'yehison', 'cuchumbe', 1061754897, 2, 'asturias', 2, 3196623413, 'calle 66N # 11 - 307');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prizes`
--

CREATE TABLE `prizes` (
  `id` int(10) NOT NULL,
  `recompensa` varchar(100) NOT NULL,
  `peso` int(10) NOT NULL,
  `comentarios` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `serie` int(3) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `longtd` float(10,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) NOT NULL,
  `placas` varchar(10) NOT NULL,
  `serie` text NOT NULL,
  `seguro` text NOT NULL,
  `tecnomecanica` text NOT NULL,
  `other` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `operario`
--
ALTER TABLE `operario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prizes`
--
ALTER TABLE `prizes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `operario`
--
ALTER TABLE `operario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prizes`
--
ALTER TABLE `prizes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
