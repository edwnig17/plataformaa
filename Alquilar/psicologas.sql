-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2023 a las 07:19:01
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `psy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `psicologas`
--

CREATE TABLE `psicologas` (
  `id_psicologa` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `inicio` text NOT NULL,
  `corte` varchar(50) DEFAULT NULL,
  `plataforma` varchar(50) NOT NULL,
  `celular` int(100) NOT NULL,
  `valor_servicio` varchar(70) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `observacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `psicologas`
--

INSERT INTO `psicologas` (`id_psicologa`, `nombre`, `inicio`, `corte`, `plataforma`, `celular`, `valor_servicio`, `correo`, `contraseña`, `pin`, `observacion`) VALUES
(0, 'Yilan', '24/07/2023', '24/08/2023', 'Netflix', 316706966, '100', 'edwingstiven20@gmail.com', '1234', '12', 'yo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
