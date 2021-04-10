-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-04-2021 a las 20:08:30
-- Versión del servidor: 5.7.33-0ubuntu0.18.04.1
-- Versión de PHP: 7.0.33-47+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Zapateria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Zapatos`
--

CREATE TABLE `Zapatos` (
  `Referencia` varchar(30) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Talla` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Zapatos`
--

INSERT INTO `Zapatos` (`Referencia`, `Marca`, `Color`, `Talla`) VALUES
('9876ND', 'Princesita', 'Azul', '24'),
('AD-578', 'Adidas', 'Negro', '39'),
('AD-578036', 'Adidas', 'Negro', '39'),
('HD-8463948', 'Sifrina', 'Blanco', '24'),
('KS-7896', 'Kolosh', 'Beige', '37'),
('MK187966', ' Desconocido', ' Marron', ' 27'),
('MK80076', 'Kolosh', 'White', '39'),
('Z-40032', 'Zero', 'Rosado', '38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Zapatos`
--
ALTER TABLE `Zapatos`
  ADD PRIMARY KEY (`Referencia`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
