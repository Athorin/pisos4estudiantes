-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2015 a las 12:30:00
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyecto`
--
CREATE DATABASE IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `proyecto`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `DNI` varchar(9) COLLATE latin1_spanish_ci NOT NULL,
  `NOMBRE` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `APELLIDO1` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `APELLIDO2` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `TELEFONO` int(20) NOT NULL,
  `EMAIL` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `REGISTRADO` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
`ID` int(6) NOT NULL,
  `ID_LOCALIDAD` int(11) NOT NULL,
  `ID_VIVIENDA` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_estudiantes`
--

DROP TABLE IF EXISTS `grupo_estudiantes`;
CREATE TABLE IF NOT EXISTS `grupo_estudiantes` (
  `ID_GRUPO` int(11) NOT NULL,
  `ID_ESTUDIANTE` varchar(9) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

DROP TABLE IF EXISTS `localidades`;
CREATE TABLE IF NOT EXISTS `localidades` (
`ID` int(5) NOT NULL,
  `NOMBRE` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `PROVINCIA` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

DROP TABLE IF EXISTS `pisos`;
CREATE TABLE IF NOT EXISTS `pisos` (
`ID` int(6) NOT NULL,
  `ID_PROPIETARIO` varchar(9) COLLATE latin1_spanish_ci NOT NULL,
  `ID_LOCALIDAD` int(5) NOT NULL,
  `ID_TIPO` int(11) NOT NULL,
  `DIRECCION` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
`ID` int(2) NOT NULL,
  `NOMBRE` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vivienda`
--

DROP TABLE IF EXISTS `tipo_vivienda`;
CREATE TABLE IF NOT EXISTS `tipo_vivienda` (
`ID` int(2) NOT NULL,
  `NOMBRE` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` varchar(9) COLLATE latin1_spanish_ci NOT NULL,
  `USUARIO` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `CONTRASEÑA` varchar(16) COLLATE latin1_spanish_ci NOT NULL,
  `TIPO_USUARIO` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
 ADD PRIMARY KEY (`ID`), ADD KEY `ID_LOCALIDAD` (`ID_LOCALIDAD`), ADD KEY `ID_VIVIENDA` (`ID_VIVIENDA`);

--
-- Indices de la tabla `grupo_estudiantes`
--
ALTER TABLE `grupo_estudiantes`
 ADD KEY `ID_GRUPO` (`ID_GRUPO`,`ID_ESTUDIANTE`), ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
 ADD PRIMARY KEY (`ID`), ADD KEY `ID_PROPIETARIO` (`ID_PROPIETARIO`), ADD KEY `ID_PROPIETARIO_2` (`ID_PROPIETARIO`), ADD KEY `ID_LOCALIDAD` (`ID_LOCALIDAD`), ADD KEY `ID_TIPO` (`ID_TIPO`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tipo_vivienda`
--
ALTER TABLE `tipo_vivienda`
 ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`), ADD UNIQUE KEY `USUARIO` (`USUARIO`), ADD KEY `TIPO_USUARIO` (`TIPO_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23457;
--
-- AUTO_INCREMENT de la tabla `pisos`
--
ALTER TABLE `pisos`
MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_vivienda`
--
ALTER TABLE `tipo_vivienda`
MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
ADD CONSTRAINT `GRUPO_LOCALIDAD` FOREIGN KEY (`ID_LOCALIDAD`) REFERENCES `localidades` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `GRUPO_VIVIENDA` FOREIGN KEY (`ID_VIVIENDA`) REFERENCES `pisos` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `grupo_estudiantes`
--
ALTER TABLE `grupo_estudiantes`
ADD CONSTRAINT `GRUPO_ESTUDIANTES_R` FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `clientes` (`DNI`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `GRUPO_GRUPO` FOREIGN KEY (`ID_GRUPO`) REFERENCES `grupo` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pisos`
--
ALTER TABLE `pisos`
ADD CONSTRAINT `LOCALIDAD_PISO` FOREIGN KEY (`ID_LOCALIDAD`) REFERENCES `localidades` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `PROPIETARIO_PISO` FOREIGN KEY (`ID_PROPIETARIO`) REFERENCES `clientes` (`DNI`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `TIPO_PISO` FOREIGN KEY (`ID_TIPO`) REFERENCES `tipo_vivienda` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `CLIENTE_USUARIO` FOREIGN KEY (`ID`) REFERENCES `clientes` (`DNI`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `TIPO_USUARIO` FOREIGN KEY (`TIPO_USUARIO`) REFERENCES `tipo_usuario` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
