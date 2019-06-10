-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2019 a las 22:12:51
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `parking ceet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id` int(100) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `correo` varchar(30) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(50) COLLATE utf8_bin NOT NULL,
  `pass` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
