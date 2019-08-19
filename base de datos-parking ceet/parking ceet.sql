-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2019 a las 01:45:41
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parking ceet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Documento` varchar(30) COLLATE utf8_bin NOT NULL,
  `Nombres` varchar(30) COLLATE utf8_bin NOT NULL,
  `Correo` varchar(50) COLLATE utf8_bin NOT NULL,
  `Direccion` varchar(50) COLLATE utf8_bin NOT NULL,
  `Placa` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Vehiculo` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Documento`, `Nombres`, `Correo`, `Direccion`, `Placa`, `Vehiculo`) VALUES
('12', 'david', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', 'jh78i', 'MOTO'),
('24234534534', 'kevin', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', 'NQC87E', 'Moto'),
('24356', 'kevin', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', 'gj7689', 'carro'),
('3605', 'kevin', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', '1224-wfw', 'MOTO'),
('367451', 'MONACO', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', 'NQC87E', 'MOTO'),
('390784', 'kevin', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', 'NQC87E', 'carro'),
('4521', 'kevin', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', '1224-wfw', 'carro'),
('54678', 'kevin', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', 'hgertgrdfz', 'fgbfd'),
('6784', 'simona', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', '144-fsf', 'carro'),
('78', 'kevin', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', '1224-wfw', 'carro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `placa` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_hora_ingreso` timestamp NULL DEFAULT current_timestamp(),
  `fecha_hora_salida` timestamp NULL DEFAULT current_timestamp(),
  `tiempo_total` time DEFAULT NULL,
  `costo_servicio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id`, `tipo`, `placa`, `fecha_hora_ingreso`, `fecha_hora_salida`, `tiempo_total`, `costo_servicio`) VALUES
(16, 'CARRO', 'UTH765', '2019-08-04 23:39:04', NULL, NULL, NULL),
(17, 'CARRO', 'YPK14D', '2019-08-05 00:11:58', NULL, NULL, NULL),
(18, 'CARRO', 'fgh456', '2019-08-05 00:18:05', NULL, NULL, NULL),
(19, 'MOTO', 'EHG345', '2019-08-05 02:30:52', NULL, NULL, NULL),
(20, 'MOTO', 'THF123', '2019-08-05 23:55:45', NULL, NULL, NULL),
(21, 'MOTO', 'YPK14D', '2019-08-06 00:45:06', NULL, NULL, NULL),
(22, 'MOTO', 'THF123', '2019-08-06 00:48:58', NULL, NULL, NULL),
(23, 'CARRO', 'nqc87e', '2019-08-09 01:40:22', NULL, NULL, NULL),
(24, 'CARRO', 'NQC87E', '2019-08-09 01:40:39', NULL, NULL, NULL),
(25, 'CARRO', 'YHT895', '2019-08-09 03:49:45', NULL, NULL, NULL),
(26, 'CARRO', 'UUU111', '2019-08-09 03:50:29', '2019-08-09 03:50:29', NULL, NULL),
(27, 'MOTO', 'NQC87E', '2019-08-10 02:01:33', '2019-08-10 02:01:33', NULL, NULL),
(28, 'MOTO', 'bhg124', '2019-08-13 00:40:12', '2019-08-13 00:40:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pk`
--

CREATE TABLE `pk` (
  `Documento` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Nombres` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Correo` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Direccion` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Telefono` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Usuario` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Rol` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pk`
--

INSERT INTO `pk` (`Documento`, `Nombres`, `Correo`, `Direccion`, `Telefono`, `Usuario`, `pass`, `Rol`) VALUES
('1033775629', 'Stiven Burgos', 'stiven9510@gmail.com', 'carrera 12 bis c #42 b 10 sur', '3209026101', 'Stiv95', '1033775629', 'Empleado'),
('24356', 'Jesu Muriel', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', '3182680095', 'EdwinMuri', 'Sena123', 'Administrador'),
('4521', 'kevin', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', '3166271821', 'kev', '766788787', 'Empleado'),
('6565756', 'kevin', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', '3166271821', 'kev', '', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE `tarifa` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `costo_minuto` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_modificacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tarifa`
--

INSERT INTO `tarifa` (`id`, `tipo`, `costo_minuto`, `fecha_modificacion`) VALUES
(37, 'CARRO', '10', '2019-08-04 19:53:08'),
(41, 'MOTO', '50', '2019-08-05 00:13:56'),
(42, 'BICICLETA', '50', '2019-08-06 00:03:41'),
(43, 'CARRO', '150', '2019-08-12 22:13:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `correo` varchar(30) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(50) COLLATE utf8_bin NOT NULL,
  `pass` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `usuario`, `pass`) VALUES
(1, 'name', 'kevinh', '15456', 'kevinhl082@gmail.com'),
(2, 'name', 'mari', '45689', 'maria.a@gmail.com'),
(3, 'brayan camilo', 'bray', '69851s', 'brayan.a@gmail.com'),
(4, 'joan maria perez', 'jmaria.p@gmail.com', 'jmari', '46845'),
(5, 'andres romero', 'andru@gmail.com', 'andru', '1234'),
(6, '', '', '', ''),
(7, 'PEPE', 'kevinhl082@gmail.com', 'PEP', '123'),
(8, 'kevin hernandez lucio', 'kevinhl082@gmail.com', 'ppp', '123'),
(9, 'pedro', 'kevinhl082@gmail.com', 'aaa', '123'),
(10, 'kevin hernandez lucio', 'kevinhl082@gmail.com', 'nicopinm', '424'),
(11, 'kevin hernandez lucio', 'kevinhl082@gmail.com', 'dfd', 'fd'),
(12, 'dhdkjsk', 'kevinhl082@gmail.com', 'eee', '123'),
(13, 'maria', 'pepe@hotmail.com', 'mari', '456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Documento`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `pk`
--
ALTER TABLE `pk`
  ADD PRIMARY KEY (`Documento`);

--
-- Indices de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
