-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: miservicio_mysql
-- Tiempo de generación: 20-06-2020 a las 01:43:48
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
(6, 'Tincho', 'Lejos', '2020-05-29 21:28:06', NULL),
(7, 'Marcelo', 'Guaymallén', '2020-06-11 15:05:08', NULL),
(8, 'Pedro', 'Godoy Cruz', '2020-06-11 12:06:52', NULL),
(9, 'Dante', 'Guaymallén', '2020-06-19 22:35:53', NULL);

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
(11, NULL, 'tarea10', 2, 18, '2020-06-01 14:43:11', NULL),
(12, 5, 'tarea copada', 3, 44, '2020-06-02 18:24:21', '2020-06-08 23:12:12'),
(13, NULL, 'tarea33', 2, 23, '2020-06-08 17:25:06', NULL),
(14, NULL, 'tarea 34', 1, 33, '2020-06-08 17:25:56', NULL),
(15, NULL, 'tarea35', 2, 44, '2020-06-08 22:13:07', NULL),
(16, 2, 'tarea36', 5, 36, '2020-06-08 22:42:21', '2020-06-11 11:16:26'),
(18, 5, 'tarea41', 1, 41, '2020-06-08 23:08:35', '2020-06-19 12:18:33'),
(21, 6, 'tarea 44', 3, 45, '2020-06-08 23:44:21', NULL),
(24, 7, 'tt', 1, 34, '2020-06-16 20:00:49', '2020-06-19 12:14:23'),
(25, NULL, 'con desplegable', 12, 123, '2020-06-19 00:48:58', NULL),
(26, 8, 'con desplegable 2', 4, 40, '2020-06-19 01:07:26', '2020-06-19 09:48:18'),
(28, NULL, 'fd', 0, 0, '2020-06-19 01:33:44', NULL),
(32, 6, 'uuuu', 9, 89, '2020-06-19 02:00:41', '2020-06-19 12:18:48'),
(36, 8, 'aa', 2, 3, '2020-06-19 12:18:02', NULL),
(39, 0, '4', 4, 4, '2020-06-19 12:47:32', NULL),
(40, 4, '3', 3, 3, '2020-06-19 12:48:06', NULL),
(41, 0, 'a', 1, 1, '2020-06-19 12:57:09', NULL),
(42, 0, 'aa', 2, 2, '2020-06-19 12:57:42', NULL),
(43, 5, 'ee', 2, 2, '2020-06-19 12:59:35', '2020-06-19 12:59:46'),
(44, 6, 'rr', 1, 1, '2020-06-19 13:01:16', NULL),
(45, 0, 'ttrtrtr', 3, 3, '2020-06-19 13:01:53', NULL),
(48, 6, '43', 4, 4, '2020-06-19 14:44:07', NULL),
(50, 6, '8', 8, 8, '2020-06-19 14:44:54', NULL),
(51, 6, '9', 9, 9, '2020-06-19 14:45:28', NULL),
(52, 4, '3', 2, 3, '2020-06-19 14:46:22', NULL),
(55, 0, '55', 4, 4, '2020-06-19 14:53:05', NULL),
(56, 7, 'er', 4, 4, '2020-06-19 14:53:45', NULL),
(57, 8, '4', 2, 3, '2020-06-19 14:54:19', NULL),
(58, 6, '567', 0, 0, '2020-06-19 19:17:43', NULL),
(59, 0, 'dfg', 3, 2, '2020-06-19 20:38:36', NULL),
(60, 0, '45', 0, 0, '2020-06-19 20:39:25', NULL),
(61, 8, 'sd', 4, 4, '2020-06-19 20:40:38', NULL),
(63, 8, 'bbb', 1, 1, '2020-06-19 20:45:57', NULL),
(65, 7, 'cc', 3, 3, '2020-06-19 20:48:04', NULL),
(66, 9, 'xx', 5, 5, '2020-06-19 20:48:17', '2020-06-19 22:36:59'),
(67, 8, 'qq', 1, 1, '2020-06-19 20:58:25', NULL),
(68, 6, 'ww', 1, 1, '2020-06-19 20:58:38', '2020-06-19 21:08:17'),
(71, 7, 'ww', 1, 1, '2020-06-19 21:08:02', '2020-06-19 21:08:11'),
(72, 9, 'ww', 1, 1, '2020-06-19 22:36:17', NULL);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_tareas`
--
ALTER TABLE `tbl_tareas`
  MODIFY `id_tarea` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
