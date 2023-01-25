-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2023 a las 05:14:53
-- Versión del servidor: 10.1.16-MariaDB
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
-- Base de datos: `mispracticas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_perfiles`
--

CREATE TABLE `cat_perfiles` (
  `id_perfil` tinyint(4) NOT NULL,
  `nombre_perfil` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preregistro`
--

CREATE TABLE `preregistro` (
  `id_preregistro` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apaterno` varchar(30) NOT NULL,
  `amaterno` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `id_perfil` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_perfiles`
--
ALTER TABLE `cat_perfiles`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `preregistro`
--
ALTER TABLE `preregistro`
  ADD PRIMARY KEY (`id_preregistro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_perfiles`
--
ALTER TABLE `cat_perfiles`
  MODIFY `id_perfil` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preregistro`
--
ALTER TABLE `preregistro`
  MODIFY `id_preregistro` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
