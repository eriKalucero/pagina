-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-08-2023 a las 19:07:08
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eriiguada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imgtabla`
--

CREATE TABLE `imgtabla` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imgtabla`
--

INSERT INTO `imgtabla` (`id`, `nombre`, `imagen`, `texto`) VALUES
(1, 'mario', './img/mario.png', 'mario bros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajobd`
--

CREATE TABLE `trabajobd` (
  `id_usuario` int(20) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `trabajobd`
--

INSERT INTO `trabajobd` (`id_usuario`, `usuario`, `contraseña`) VALUES
(1, 'profesor', 363),
(2, 'profesor', 363),
(3, 'profesor', 363),
(4, 'profesor', 363);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imgtabla`
--
ALTER TABLE `imgtabla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajobd`
--
ALTER TABLE `trabajobd`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imgtabla`
--
ALTER TABLE `imgtabla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `trabajobd`
--
ALTER TABLE `trabajobd`
  MODIFY `id_usuario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
