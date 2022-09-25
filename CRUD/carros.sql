-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2022 a las 07:06:48
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `motor` varchar(50) NOT NULL,
  `año` date NOT NULL,
  `color` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carros`
--

INSERT INTO `carros` (`id`, `img`, `modelo`, `marca`, `motor`, `año`, `color`, `status`) VALUES
(12, '1664079940_maxresdefault.jpg', 'Aventador', 'Lamborghini', 'muy grande', '2022-09-15', 'negro', 'activo'),
(13, '1663901354_App Image 2022-07-07 at 1.55.43 PM.jpg', 'aantonite', 'aantonite', 'antonite', '2022-09-06', 'asdf', 'activo'),
(14, '1663903139_maxresdefault.jpg', 'asdf', 'asdf', 'asdf', '2022-09-09', 'asdf', 'activo'),
(15, '1663904023_WshatsApp Image 2022-07-07 at 1.56.52 PM.jpg', 'sportage', 'kia', '2.7', '2010-10-12', 'roja', 'activo'),
(16, '1663988333_WhatsApp Image 2sdfg022-07-07 at 1.56.52 PM.jpg', 'espectra', 'Kia', '2.0', '2006-06-16', 'Blanco', 'activo'),
(17, '1663988660_WasdfhatsApp Image 2022-07-07 at 1.56.52 PM.jpg', 'asdf', 'asdf', 'asdf', '2022-09-09', 'asdf', 'activo'),
(18, '1663989251_WhatsApp Image 2022-07-07 at 1.55.43 PM.jpg', 'sise', 'sise', 'sise', '2022-09-08', 'sise', 'activo'),
(19, '1664032794_WhatsApp Image 2022-07-07 at 1.jklñ55.44 PM.jpg', 'sise', 'sise', 'sise', '2022-09-07', 'nose', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
