 
-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-09-2016 a las 15:54:55
-- Versión del servidor: 10.0.23-MariaDB-0+deb8u1
-- Versión de PHP: 5.6.20-0+deb8u1

CREATE DATABASE system_sisdbe;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `system_sisdbe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `becario`
--

CREATE TABLE IF NOT EXISTS `becario` (
  `id` int(10) NOT NULL,
  `status` char(1) NOT NULL,
  `id_datos` int(10) NOT NULL,
  `id_materia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE IF NOT EXISTS `calificacion` (
  `id` int(10) NOT NULL,
  `calificacion` float(2,2) NOT NULL,
  `id_materia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `id` int(10) NOT NULL,
  `nacionalidad` char(1) NOT NULL,
  `cedula` varchar(15) NOT NULL,
  `primer_nombre` varchar(15) NOT NULL,
  `segundo_nombre` varchar(15) NOT NULL,
  `primer_apellido` varchar(15) NOT NULL,
  `segundo_apellido` varchar(15) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `lugar_nacimiento` varchar(250) NOT NULL,
  `telefono_movil` text NOT NULL,
  `telefono_casa` text NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `ciudad` varchar(60) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `codigo_postal` varchar(4) NOT NULL,
  `nivel_estudios` char(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `discapacidad` char(1) NOT NULL,
  `descripcion_discapacidad` varchar(250) NOT NULL,
  `enfermedad` char(1) NOT NULL,
  `descripcion_enfermedad` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(10) NOT NULL,
  `nombre_articulo` varchar(100) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(10) NOT NULL,
  `cargo` char(1) NOT NULL,
  `status` char(1) NOT NULL,
  `salario` double NOT NULL,
  `horario` char(1) NOT NULL,
  `id_datos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `id_datos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `becario`
--
ALTER TABLE `becario`
 ADD PRIMARY KEY (`id`), ADD KEY `id_datos` (`id_datos`,`id_materia`), ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
 ADD PRIMARY KEY (`id`), ADD KEY `id_materia` (`id_materia`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
 ADD PRIMARY KEY (`id`), ADD KEY `id_datos` (`id_datos`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`), ADD KEY `id_datos` (`id_datos`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `becario`
--
ALTER TABLE `becario`
ADD CONSTRAINT `fk_datos_becario` FOREIGN KEY (`id_datos`) REFERENCES `personal` (`id`),
ADD CONSTRAINT `fk_materia_becario` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id`);

--
-- Filtros para la tabla `calificacion`
--
ALTER TABLE `calificacion`
ADD CONSTRAINT `fk_materia_calificacion` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
ADD CONSTRAINT `fk_datos_personal` FOREIGN KEY (`id_datos`) REFERENCES `datos` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `fk_datos_usuarios` FOREIGN KEY (`id_datos`) REFERENCES `datos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
