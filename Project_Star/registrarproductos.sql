-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 08-02-2023 a las 22:07:54
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrarproductos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrarproductos`
--

CREATE TABLE `registrarproductos` (
  `ID` int(11) NOT NULL COMMENT 'id del producto',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre del producto',
  `Cantidad` smallint(6) NOT NULL COMMENT 'Cantidad',
  `Tipo` text NOT NULL COMMENT 'Tipo de producto',
  `Precio` decimal(19,4) NOT NULL COMMENT 'Precio del Producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrarproductos`
--
ALTER TABLE `registrarproductos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrarproductos`
--
ALTER TABLE `registrarproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del producto';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
