-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2017 a las 16:32:29
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fitit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coatch`
--

CREATE TABLE `coatch` (
  `id_coatch` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `CP` int(5) NOT NULL,
  `provincia` varchar(40) NOT NULL,
  `poblacion` varchar(40) NOT NULL,
  `telefono` int(9) NOT NULL,
  `redes` int(11) NOT NULL COMMENT 'crear subtabla',
  `formacion` text NOT NULL COMMENT 'separado por ;',
  `logros` text NOT NULL COMMENT 'separado por ;',
  `frase` varchar(200) NOT NULL,
  `productos` tinyint(4) NOT NULL DEFAULT '0',
  `iban` varchar(30) NOT NULL,
  `entidad_bancaria` varchar(40) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `fecha_union` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `coatch`
--

INSERT INTO `coatch` (`id_coatch`, `nombre`, `apellidos`, `dni`, `fecha_de_nacimiento`, `direccion`, `CP`, `provincia`, `poblacion`, `telefono`, `redes`, `formacion`, `logros`, `frase`, `productos`, `iban`, `entidad_bancaria`, `imagen`, `fecha_union`) VALUES
(2, 'Carlos', 'Ruiz Rico', '38853029A', '1986-03-08', 'NURIA 23 1º1º', 8330, 'Barcelona', '', 695539125, 1, 'CFGS ANIMACIÓN ACTIVIDADES FISICO DEPORTIVAS;ENTRENADOR PERSONAL, TÉCNICO SALA;PREPARADOR FÍSICO DE PADEL Y SNOWBOARD', '', 'LIMPIA TU MENTE DEL “NO PUEDO”', 0, 'IBAN ES98 2100 0331', 'LA CAIXA', 'carlos_files/carlos_ruiz_rico.png', '2017-11-15'),
(3, 'Jonatan', 'Trapero Rodríguez', '47668900C', '1994-01-04', 'c/Pablo Picasso 9 3ºA', 8830, 'Barcelona', 'Sant Boi de Llobregat', 697500577, 2, 'Más de 7 años de formación debido a la experiencia en fitness, culturismo y sobretodo en nutrición general.', 'Participación en Trofeo L’Hospitalet de Llobregat de Culturismo y Fitness 2014 y 2015;Participación en Trofeo Badalona de Culturismo y Fitness 2014 y 2015', 'Nunca bajes la cabeza, nunca digas que no puedes, no te limites, y nunca dejes de creer en ti.\r\n', 0, 'ES34 2100 0637 1101 0097 3385', 'La Caixa', 'jonatan_files/Jonatan_Trapero_Rodrguez.png', '2017-11-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id_redes` int(11) NOT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `spotify` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id_redes`, `facebook`, `instagram`, `youtube`, `spotify`) VALUES
(1, 'CAARLOS_PETTY', 'CAARLOS_PETTY', NULL, NULL),
(2, 'bodyjonybuilding', 'Bodyjonybuilding94', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) UNSIGNED NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(20) UNSIGNED NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `email`, `pass`, `rol`) VALUES
(2, 'mattador5225@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coatch`
--
ALTER TABLE `coatch`
  ADD PRIMARY KEY (`id_coatch`),
  ADD KEY `redes` (`redes`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id_redes`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`),
  ADD UNIQUE KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coatch`
--
ALTER TABLE `coatch`
  MODIFY `id_coatch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id_redes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `coatch`
--
ALTER TABLE `coatch`
  ADD CONSTRAINT `coatch_ibfk_1` FOREIGN KEY (`redes`) REFERENCES `redes` (`id_redes`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
