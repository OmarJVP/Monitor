-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-06-2017 a las 18:21:25
-- Versión del servidor: 5.5.55-38.8-log
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `econszuk_monitor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_salesforce` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `expediente` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `consultorio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `etapa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `clinica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `hora_llegada` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `hora_creacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `urgente` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `hora_modificacion` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `ciclo` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `id_salesforce`, `nombre`, `expediente`, `consultorio`, `estatus`, `etapa`, `clinica`, `hora_llegada`, `hora_creacion`, `urgente`, `hora_modificacion`, `ciclo`) VALUES
(1, 'a27210000007C0LAAU', 'Leonardo Martinez', 'EP00003355', 'B-101', 'En Atención', 'Preparacion', 'Hamburgo', '9:00 AM', '2017-06-21 13:15:27', 'false', '2017-06-21 14:30:36', 0),
(2, 'a27210000007C0MAAU', 'Guillermo Osorio', 'EP00003356', 'B-202', 'En Espera', 'Preparacion', 'Hamburgo', '10:00 AM', '2017-06-21 13:15:28', 'false', '2017-06-21 13:15:28', 0),
(3, 'a27210000007C0NAAU', 'Fabiola Sanchez', 'EP00003357', 'null', 'En Espera', 'Preparacion', 'Hamburgo', '10:00 AM', '2017-06-21 13:15:28', 'false', '2017-06-21 13:15:28', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
