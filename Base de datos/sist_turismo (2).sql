-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2023 a las 22:05:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sist_turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_localidades` int(11) NOT NULL,
  `hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterios`
--

CREATE TABLE `criterios` (
  `id` int(11) NOT NULL,
  `informe` varchar(255) NOT NULL,
  `carpetaCampo` varchar(255) NOT NULL,
  `souvenir` varchar(255) NOT NULL,
  `fotos` varchar(255) NOT NULL,
  `laminas` varchar(255) NOT NULL,
  `powerpoint` varchar(255) NOT NULL,
  `folleteria` varchar(255) NOT NULL,
  `productosRegionales` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuelas`
--

CREATE TABLE `escuelas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `escuelas`
--

INSERT INTO `escuelas` (`id`, `nombre`, `direccion`) VALUES
(1, 'ksndaksj', 'sadkla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `id` int(11) NOT NULL,
  `evaluacion` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_localidades` int(11) NOT NULL,
  `hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id` int(11) NOT NULL,
  `numeromesa` varchar(40) NOT NULL,
  `nombreLocalidad` varchar(50) NOT NULL,
  `profesorACargo` varchar(50) NOT NULL,
  `cursos` int(11) NOT NULL,
  `foto` longblob NOT NULL,
  `id_evaluador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `numeromesa`, `nombreLocalidad`, `profesorACargo`, `cursos`, `foto`, `id_evaluador`) VALUES
(6, 'stand1', 'Santa Teresita', 'vjg vjgvj', 0, '', 2),
(7, 'stand2', 'Las Toninas', 'Ferreyra', 2, '', 2),
(40, 'stand1', 'Mar del Plata', 'Pieroni', 2, '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `microemprendimientos`
--

CREATE TABLE `microemprendimientos` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `id_localidades` int(11) NOT NULL,
  `id_evaluador` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `cursos` varchar(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alumnoOProfesor` tinyint(4) NOT NULL,
  `representante` tinyint(4) NOT NULL,
  `id_localidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `cursos`, `telefono`, `email`, `alumnoOProfesor`, `representante`, `id_localidades`) VALUES
(1, 'rpprueba', 'apelipr', 'dvfsfd', 0, '', 0, 1, 6),
(2, 'fdhbhsdb', 'cvugc', 'gvjgv', 0, '', 0, 0, 6),
(3, 'gjvjgvgv', 'vjgvjvj', 'j', 0, '', 0, 0, 6),
(4, 'vjgvgjvj', 'gvjgv', 'jg', 0, '', 0, 0, 7),
(5, 'vjg', 'vjgvj', '', 0, 'gvgjvjgv', 1, 0, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `contrasenia` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contrasenia`, `correo`) VALUES
(1, 'fghfg', '1234', 'nahuelgimenez404@gmail.com'),
(2, 'maria', '1234', 'maria@gmail.com'),
(3, 'Juanl', '1234', 'juan@gmail.com'),
(4, 'hdghdfhd', '1234', 'hjgjg@gmail.com'),
(5, 'Juanl', '1234', 'juan2@gmail.com'),
(6, 'fgfdgd', '1234', 'gsseg@gmail.com'),
(7, 'Nahuel', '1234', 'nahuelgimenez303@gmail.com'),
(8, 'Lautrophine', '1234', 'laurizzo556@gmail.com'),
(9, 'nahuelphone', '1233', 'nahuelgimenez504@gmail.com'),
(10, 'rama', '1234', 'rama@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_usuario` (`id_usuario`),
  ADD KEY `fk_id_localidades` (`id_localidades`);

--
-- Indices de la tabla `criterios`
--
ALTER TABLE `criterios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_usuario` (`id_usuario`),
  ADD KEY `fk_id_localidades` (`id_localidades`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_curso` (`cursos`);

--
-- Indices de la tabla `microemprendimientos`
--
ALTER TABLE `microemprendimientos`
  ADD KEY `fk_id_localidades_m` (`id_localidades`),
  ADD KEY `microemprendimientos_ibfk_1` (`id_evaluador`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
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
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `criterios`
--
ALTER TABLE `criterios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_id_localidades_c` FOREIGN KEY (`id_localidades`) REFERENCES `localidades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_usuario_c` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD CONSTRAINT `fk_id_localidades_e` FOREIGN KEY (`id_localidades`) REFERENCES `localidades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_usuario_e` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `microemprendimientos`
--
ALTER TABLE `microemprendimientos`
  ADD CONSTRAINT `fk_id_localidades_m` FOREIGN KEY (`id_localidades`) REFERENCES `localidades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `microemprendimientos_ibfk_1` FOREIGN KEY (`id_evaluador`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
