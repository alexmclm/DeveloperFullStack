-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2019 a las 19:30:48
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
-- Base de datos: `talentodigital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno1`
--

CREATE TABLE `alumno1` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno1`
--

INSERT INTO `alumno1` (`id`, `nombre`, `apellido`, `curso_id`) VALUES
(1, 'Alejandro', 'Garro', 1),
(2, 'Jesus', 'Garro', 2),
(3, 'Jesus', 'Gonzalez', 4),
(4, 'Nicola', 'Tesla', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `horarioEntrada` varchar(2) NOT NULL,
  `diaCursada` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `nombre`, `horarioEntrada`, `diaCursada`) VALUES
(1, 'Talento Digital 1', '09', 'Mar-Vie'),
(2, 'Talento Digital 2', '15', 'Lun-Jue'),
(3, 'Talento Digital 3', '18', 'Mar-Vie'),
(4, 'Talento Digital 4', '09', 'Lun-Jue');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno1`
--
ALTER TABLE `alumno1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursoAlumno` (`curso_id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno1`
--
ALTER TABLE `alumno1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno1`
--
ALTER TABLE `alumno1`
  ADD CONSTRAINT `cursoAlumno` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
