-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: miservicio_mysql
-- Tiempo de generación: 09-06-2020 a las 03:14:48
-- Versión del servidor: 8.0.20
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ci_ajax_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `id` int NOT NULL,
  `employee_name` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `employee_name`, `address`, `created_at`, `updated_at`) VALUES
(4, 'Veasna', 'Kandal', '2016-11-06 12:31:26', NULL),
(5, 'Darío Reta', 'por ahí', '2020-05-29 18:40:19', NULL),
(6, 'Tincho', 'Lejos', '2020-05-29 21:28:06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tareas`
--

CREATE TABLE `tbl_tareas` (
  `id_tarea` int NOT NULL,
  `id_employee` int DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `cant_h_x_d` int DEFAULT NULL,
  `cant_horas` int DEFAULT NULL,
  `creada_en` datetime DEFAULT NULL,
  `actualizada_en` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tareas`
--

INSERT INTO `tbl_tareas` (`id_tarea`, `id_employee`, `nombre`, `cant_h_x_d`, `cant_horas`, `creada_en`, `actualizada_en`) VALUES
(8, NULL, 'tarea5', 2, 55, '2020-05-30 00:45:27', NULL),
(9, NULL, 'tare7', 4, 440, '2020-05-30 00:47:21', '2020-05-30 00:52:09'),
(10, NULL, 'rte', 2, 45, '2020-05-30 01:41:06', NULL),
(11, NULL, 'tarea10', 2, 18, '2020-06-01 14:43:11', NULL),
(12, 5, 'tarea copada', 3, 44, '2020-06-02 18:24:21', '2020-06-08 23:12:12'),
(13, NULL, 'tarea33', 2, 23, '2020-06-08 17:25:06', NULL),
(14, NULL, 'tarea 34', 1, 33, '2020-06-08 17:25:56', NULL),
(15, NULL, 'tarea35', 2, 44, '2020-06-08 22:13:07', NULL),
(16, NULL, 'tarea36', 5, 36, '2020-06-08 22:42:21', NULL),
(17, NULL, 'tarea40', 2, 40, '2020-06-08 23:01:10', NULL),
(18, NULL, 'tarea41', 1, 41, '2020-06-08 23:08:35', NULL),
(19, 4, 'tarea42', 2, 42, '2020-06-08 23:10:48', NULL),
(20, 1, 'tarea43', 2, 34, '2020-06-08 23:11:56', NULL),
(21, 6, 'tarea 44', 3, 45, '2020-06-08 23:44:21', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_tareas`
--
ALTER TABLE `tbl_tareas`
  ADD PRIMARY KEY (`id_tarea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_tareas`
--
ALTER TABLE `tbl_tareas`
  MODIFY `id_tarea` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
