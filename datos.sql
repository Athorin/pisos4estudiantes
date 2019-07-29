-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2015 a las 12:33:35
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

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`DNI`, `NOMBRE`, `APELLIDO1`, `APELLIDO2`, `TELEFONO`, `EMAIL`, `REGISTRADO`) VALUES
('11111111F', 'estudiante2', 'otro mas', '', 234213431, 'otroestudiante@estudiante.com', '2015-05-26 09:43:03'),
('12233445G', 'propietario', 'prueba', 'prueba2', 342134321, 'propietario@propietario.es', '2015-05-15 08:41:30'),
('32847238D', 'YO', 'ADMINISTRADOR', NULL, 32413423, 'admin@admin.com', '2015-05-26 09:22:22'),
('33333333F', 'propietario', 'uno', '', 23143214, 'propi@propi.com', '2015-05-26 09:45:44'),
('88412342A', 'estudiante', 'prueba', NULL, 4342523, 'estudiante@estudiante.com', '2015-05-14 09:05:33');

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`ID`, `NOMBRE`, `PROVINCIA`) VALUES
(12345, 'el mio pueblo', 'en algun lugar'),
(23456, 'el tuyo caserio', 'alguna');

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`ID`, `NOMBRE`) VALUES
(1, 'administrador'),
(2, 'propietario'),
(3, 'estudiante');

--
-- Volcado de datos para la tabla `tipo_vivienda`
--

INSERT INTO `tipo_vivienda` (`ID`, `NOMBRE`) VALUES
(1, 'piso'),
(2, 'estudio');

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`ID`, `USUARIO`, `CONTRASEÑA`, `TIPO_USUARIO`) VALUES
('11111111F', 'estudiante2', 'estudiante', 3),
('32847238D', 'admin', 'admin', 1),
('33333333F', 'propi', 'propietario', 2),
('88412342A', 'estudiante', 'estudiante', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
