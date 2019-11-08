-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2019 a las 19:35:04
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diariointimo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoanimo`
--

CREATE TABLE `estadoanimo` (
  `id` int(11) NOT NULL,
  `estadoDeAnimo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadoanimo`
--

INSERT INTO `estadoanimo` (`id`, `estadoDeAnimo`) VALUES
(1, 'estadoModificado'),
(2, 'jesucristo'),
(3, 'JesucristoRegreso2'),
(4, 'estadoModificado'),
(5, 'estadoModificado'),
(6, 'estadoModificado'),
(7, 'estadoModificado'),
(8, 'estadoModificado'),
(9, 'estadoModificado'),
(10, 'estadoModificado'),
(11, 'estadoModificado'),
(12, 'estadoModificado'),
(13, 'nuevo Estado de animo'),
(14, 'estadoModificado'),
(15, 'nuevo Estado de animo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posteo`
--

CREATE TABLE `posteo` (
  `id` int(11) NOT NULL,
  `post` varchar(200) NOT NULL,
  `estadoAnimo_id` int(11) NOT NULL,
  `fechaEntrada` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posteo`
--

INSERT INTO `posteo` (`id`, `post`, `estadoAnimo_id`, `fechaEntrada`) VALUES
(1, 'esta es la tarea que se debio hacer el dsfasdf', 1, NULL),
(2, 'dasfasfsdfadFF', 3, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estadoanimo`
--
ALTER TABLE `estadoanimo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posteo`
--
ALTER TABLE `posteo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estadoAnimo_id` (`estadoAnimo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estadoanimo`
--
ALTER TABLE `estadoanimo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `posteo`
--
ALTER TABLE `posteo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posteo`
--
ALTER TABLE `posteo`
  ADD CONSTRAINT `posteo_ibfk_1` FOREIGN KEY (`estadoAnimo_id`) REFERENCES `estadoanimo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
