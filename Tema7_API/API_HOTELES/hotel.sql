-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2024 a las 12:03:50
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `hoteles`
--

CREATE DATABASE IF NOT EXISTS hotel;

CREATE TABLE IF NOT EXISTS `hoteles` (
  `id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `categoria` int NOT NULL,
  `numero_habitacion` varchar(255) NOT NULL,
  `poblacion` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`id`, `nombre`, `categoria`, `numero_habitacion`, `poblacion`, `direccion`) VALUES
(1, 'David Hotel', 5, '101', 'Ciudad Nueva', 'Calle Principal, 123'),
(2, 'Messi', 5, '101', 'Ciudad Nueva', 'Calle Principal, 123'),
(6, 'David', 3, '28', '46003 Valencia', 'Boix, 4'),
(7, 'Alkazar', 1, '18', '46002 Valencia', 'Mosén Femades, 11'),
(8, 'david', 5, '5', 'lliria', 'lliria'),
(9, 'Antonio', 5, '300', 'Pamplona', 'Pamplona'),
(10, 'Canarias H', 5, '100', 'Fuerte Ventura', 'Fuerte Ventura calle 1\n'),
(11, 'Alicante Hotel', 4, '200', 'Muro de Alcoy', 'calle 1'),
(12, 'Canarias H', 5, '100', 'Fuerte Ventura', 'Fuerte Ventura calle 1\n'),
(13, 'Nuevo Hotel', 4, '101', 'Ciudad Nueva', 'Calle Principal, 123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
