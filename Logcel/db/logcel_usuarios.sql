-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2022 a las 05:29:50
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
-- Base de datos: `logcel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logcel_usuarios`
--

CREATE TABLE `logcel_usuarios` (
  `us_Id` int(11) NOT NULL,
  `us_Nombre` varchar(65) NOT NULL,
  `us_Nrocontacto` int(10) NOT NULL,
  `us_Nrocontacto_2` int(10) NOT NULL,
  `us_Marca` varchar(30) NOT NULL,
  `us_Dañoshad` varchar(2) NOT NULL,
  `us_Dañossof` varchar(2) NOT NULL,
  `us_textinfo` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logcel_usuarios`
--

INSERT INTO `logcel_usuarios` (`us_Id`, `us_Nombre`, `us_Nrocontacto`, `us_Nrocontacto_2`, `us_Marca`, `us_Dañoshad`, `us_Dañossof`, `us_textinfo`) VALUES
(19, 'mari', 21548, 5216587, 'pp', 'si', 'no', 'hola'),
(21, 'Luis miguel ', 2147483647, 563986, 'Lg', 'si', 'no', 'Ninguna'),
(22, 'mario', 2147483647, 5289635, 'motorola', 'no', 'no', 'Ninguna');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logcel_usuarios`
--
ALTER TABLE `logcel_usuarios`
  ADD PRIMARY KEY (`us_Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logcel_usuarios`
--
ALTER TABLE `logcel_usuarios`
  MODIFY `us_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
