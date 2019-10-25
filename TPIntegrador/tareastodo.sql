-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2019 a las 12:13:27
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

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
  `tareaRealizada` tinyint(1) DEFAULT NULL,
  `fechaRealizada` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `tarea`, `tareaRealizada`, `fechaRealizada`) VALUES
(1, ' llegar a casa 1', 1, '20-10-1002'),
(3, 'tomar agua ', 1, '22-10-1002'),
(4, 'bañarse', 1, '23-10-1002'),
(5, 'sentarse en la pc', 1, '24-10-1002'),
(6, 'hacer lo de desarrollo fullstack', 0, '25-10-1002'),
(7, 'base de datos', 0, '26-10-1002'),
(8, 'arreglo', 0, '27-10-1002'),
(9, 'fasdf', 0, '2019/10/09'),
(10, 'la tarea es hacer esto a las 00hs', 1, ''),
(11, 'hacer esto otra vez', 0, '2019/10/22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombreUser` varchar(100) DEFAULT NULL,
  `passUser` varchar(100) DEFAULT NULL,
  `emailUser` varchar(200) DEFAULT NULL,
  `nombreCompreto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombreUser`, `passUser`, `emailUser`, `nombreCompreto`) VALUES
(1, 'alex', '$2y$10$pdxelxQVYWsRdwLKxYA2hu.UrhsNKonKx6LcVd.e6xEoOn.xul/He', 'alexmclm@gmail.com', 'fsdaf3'),
(2, 'alex2', '$2y$10$fVMkkdExmLBsmxxrIX9PPOstjvgW/p53eoCsVqitLVALRakhYTuH.', 'alexmclm@gmail.com', 'alex2 alex'),
(3, 'juana', '$2y$10$OPIgUwZLQc18KTVj.8SshOOS7U5ocGw1u/yTA61gsFdta12j5wRIm', 'juanajuana', 'juanaAlbewrta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
