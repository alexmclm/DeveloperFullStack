-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2019 a las 17:40:49
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
-- Base de datos: `formulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `fechaRegistro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombreCompleto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `password`, `email`, `nombreCompleto`) VALUES
(1, 'dsfas', 'dsf', 'dsf', 'dasf'),
(2, 'fasdf', '$2y$10$eBTZek3HsLlMX.x6mkoZV.92KH4gRftJyJUQezVbgzaHwyM0Am9Ka', 'dsf', 'fdasf'),
(3, 'dfdasf', '$2y$10$IR/Y4Lv2IlFCcZw/KVfe7uRO9.SnY0.RgvdK5kEvwufHFf3pZHJP6', 'dsf', 'dfas'),
(4, 'dsfas', '$2y$10$0Meiv8c2Vi9sF7F8R7BG2.pphpzdojLoU1dBgJESGWfLXGVEQ1XRq', 'dsf', 'dasf'),
(5, 'juan', 'juan', 'aaa@aa.com', 'juanPerez'),
(6, 'juan', '$2y$10$MuKjPhwRmAjP.9zTvP8IP.pAPzbOGN9OOoz6A1KaeGlbLHB5LYdVW', 'juanjuan', 'juanjuanperez'),
(7, 'alberto', '$2y$10$lSI4VvrvWNlXVnJlG2oY4Ocs2uOSdO8qKEpTcjwOmn.d3o8q3mSLO', 'albertoKdos', 'albertoFernandez'),
(8, 'cristina', '$2y$10$gNd1l5wK81lierCXug3h4eYjAjv5vXB0lqFR15DO9pfLRhukDxySS', 'cristinak2', 'kristinaFernandez'),
(9, 'alex', '$2y$10$dEL/jrz41bevI15kjohYVu/i0w0LBG4fPP/OxxWDGmxhbe4te0vHC', 'dsf', 'dasf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
