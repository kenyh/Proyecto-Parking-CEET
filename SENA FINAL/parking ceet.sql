-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2019 a las 01:39:44
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

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
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `placa` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_hora_ingreso` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_hora_salida` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `costo_servicio` int(11) DEFAULT '0',
  `estado` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ABIERTO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id`, `tipo`, `placa`, `fecha_hora_ingreso`, `fecha_hora_salida`, `costo_servicio`, `estado`) VALUES
(185, 'CARRO', 'THF123', '2019-09-15 04:40:00', '2019-09-15 04:40:13', 5000, 'CERRADO'),
(186, 'MOTO', 'dsd111', '2019-09-17 00:14:53', '2019-09-17 00:15:03', 2500, 'CERRADO'),
(187, 'MOTO', 'dsd111', '2019-09-17 00:15:58', '2019-09-17 00:16:07', 10000, 'CERRADO'),
(188, 'CARRO', 'AS12SS', '2019-09-17 23:38:17', '2019-09-17 23:38:17', 0, 'ABIERTO');

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
('1022441211', 'Jesus Muriel', 'edwinmuriel1717@hotmail.e', 'carrera 40a # 1d-03', '3182680095', 'EdwinMuri', 'Sena123', 'Administrador'),
('1032445874', 'Yanira gutierrez', 'yanira@hotmail.com', 'calle 20 bis', '3157489574', 'Yanirita', 'Sena2', 'Administrador'),
('1033225468', 'Camilo tequia', 'tequia@hotmail.es', 'carrera 50a', '312412356', 'Camilin', 'Sena12', 'Administrador'),
('1033775629', 'Stiven Burgos', 'stiven9510@gmail.com', 'carrera 12 bis c #42 b 10 sur', '3209026101', 'Stiv95', 'Sena321', 'Empleado'),
('4521', 'kevin', 'kevinhl082@gmail.com', 'cra 81 c bis# 42a46 sur', '3166271821', 'kev', '766788787', 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE `tarifa` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `costo_minuto` int(11) NOT NULL,
  `fecha_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tarifa`
--

INSERT INTO `tarifa` (`id`, `tipo`, `costo_minuto`, `fecha_modificacion`) VALUES
(1, 'MOTO', 10000, '2019-09-17 00:15:50'),
(2, 'CARRO', 5000, '2019-09-12 12:48:59');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo` (`tipo`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
