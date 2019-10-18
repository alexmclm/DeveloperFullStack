-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2019 a las 17:39:46
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
-- Base de datos: `tareastodo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `tarea` varchar(100) DEFAULT NULL,
  `hora` varchar(5) DEFAULT NULL,
  `tareaRealizada` tinyint(1) DEFAULT NULL,
  `fecha_realizada` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `tarea`, `hora`, `tareaRealizada`, `fecha_realizada`) VALUES
(1, '1231456', NULL, 0, '0000-00-00'),
(2, 'esperar a que sea las 4 pm', NULL, 1, '2019-10-20'),
(3, 'salir de la facultad', NULL, 0, '0000-00-00'),
(4, 'ir hacia la parada de colectivo', NULL, 0, '0000-00-00'),
(5, 'tomarse el colectivo', NULL, 0, '0000-00-00'),
(6, 'llegar a casa', NULL, 0, '0000-00-00'),
(7, 'hacer la clase 4', NULL, 0, '0000-00-00'),
(8, 'que este realizada la tarea', NULL, 1, '0000-00-00'),
(21, 'dsfdasfdasfdasfqaw', NULL, 0, '0000-00-00'),
(24, 'hacer             algo     33 ', NULL, 0, '2011-12-01'),
(25, '3333333', NULL, 0, '2011-12-01'),
(26, '333343ewdfasdhn    999', NULL, 1, '2011-12-01'),
(27, 'fecha', NULL, 0, '0000-00-00'),
(28, 'fecha', NULL, 0, '2019-10-08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
