-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2024 a las 06:07:01
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estetica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilismo`
--

CREATE TABLE `estilismo` (
  `id` int(11) NOT NULL,
  `Estilista` varchar(50) NOT NULL,
  `Nomcliente` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Servicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estilismo`
--

INSERT INTO `estilismo` (`id`, `Estilista`, `Nomcliente`, `Fecha`, `Hora`, `Servicio`) VALUES
(1, 'Maribel', 'Ana ', '2024-11-12', '13:30:00', 'Peinados'),
(2, 'Daniel', 'Isaac', '2024-11-12', '13:30:00', 'Corte de cabello'),
(3, 'Maribel', 'Vanessa ', '2024-11-12', '09:24:00', 'Peinados'),
(8, 'Ana', 'Dulce', '2024-11-19', '12:00:00', 'Manicura'),
(9, 'Ana', 'Dulce', '2024-11-19', '12:00:00', 'Manicura'),
(10, 'Ana', 'Dulce', '2024-11-19', '12:00:00', 'Manicura'),
(11, 'Ana', 'Dulce', '2024-11-19', '12:00:00', 'Manicura'),
(12, 'Ana', 'Dulce', '2024-11-19', '12:00:00', 'Manicura'),
(13, 'Ana', 'Dulce', '2024-11-19', '12:00:00', 'Manicura'),
(14, 'Ana', 'Dulce', '2024-11-19', '12:00:00', 'Manicura'),
(15, 'Maribel', 'Guadalupe', '2024-10-29', '23:28:00', 'Limpieza facial'),
(16, 'Maribel', 'Guadalupe', '2024-10-29', '23:28:00', 'Limpieza facial'),
(17, 'Maribel', 'Guadalupe', '2024-10-29', '23:28:00', 'Limpieza facial'),
(18, 'Maribel', 'Guadalupe', '2024-10-29', '23:28:00', 'Limpieza facial'),
(19, 'Maribel', 'Guadalupe', '2024-10-29', '23:28:00', 'Limpieza facial'),
(20, 'Maribel', 'Guadalupe', '2024-10-29', '23:28:00', 'Limpieza facial'),
(22, 'Maribel', 'Guadalupe', '2024-11-05', '12:43:00', 'Limpieza facial'),
(23, '3', 'Mariana', '2024-10-29', '22:47:00', '4'),
(24, '3', 'Mariana', '2024-10-29', '22:47:00', '4'),
(25, '3', 'Mariana', '2024-10-29', '22:47:00', '4'),
(26, '3', 'Mariana', '2024-10-29', '22:47:00', '4'),
(27, '2', 'Daniel', '2024-11-04', '13:52:00', '2'),
(28, '2', 'Daniel', '2024-11-04', '13:52:00', '2'),
(29, '2', 'Daniel', '2024-11-04', '13:52:00', '2'),
(30, '2', 'Daniel', '2024-11-04', '13:52:00', '2'),
(31, '2', 'Daniel', '2024-11-04', '13:52:00', '2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estilismo`
--
ALTER TABLE `estilismo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estilismo`
--
ALTER TABLE `estilismo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
