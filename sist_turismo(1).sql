-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2023 a las 21:43:06
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

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `id_usuario`, `id_localidades`, `hora`) VALUES
(1, 'HOLA MUNDO', 2, 2, '0000-00-00 00:00:00'),
(2, 'HOLA MUNDO', 2, 2, '0000-00-00 00:00:00'),
(3, 'HOLA MUNDO', 2, 2, '0000-00-00 00:00:00'),
(4, 'HOLA MUNDO', 2, 2, '2023-11-01 16:42:56'),
(5, 'juego', 2, 2, '2023-11-01 17:25:30'),
(6, 'juego', 2, 2, '2023-11-01 17:25:32'),
(7, 'juego', 2, 2, '2023-11-01 17:25:36'),
(8, 'mariano', 1, 2, '2023-11-01 17:26:24'),
(9, 'hola stand1', 1, 1, '2023-11-01 18:28:07'),
(10, 'hola buenas', 1, 1, '2023-11-01 20:49:35');

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
  `numeromesa` varchar(11) NOT NULL,
  `nombreLocalidad` varchar(50) NOT NULL,
  `profesorACargo` varchar(50) NOT NULL,
  `cursos` varchar(200) NOT NULL,
  `id_evaluador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `numeromesa`, `nombreLocalidad`, `profesorACargo`, `cursos`, `id_evaluador`) VALUES
(1, 'stand2', 'Santa teresita', 'Karen Moser', '5C', '1'),
(2, 'stand1', 'Mar del Tuyu', 'Lucas Gimenez', '6C', '2');

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
  `representante` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `cursos`, `telefono`, `email`, `alumnoOProfesor`, `representante`) VALUES
(11, 'Nahuel', 'Gimenez', '5C', 0, '', 0, 1),
(12, 'Santiago ', 'Ramallo', '5C', 0, '', 0, 0),
(13, 'Julio', 'Sosa', '5C', 0, '', 0, 0),
(14, 'Franco', 'Monteño', '5C', 0, '', 0, 0),
(15, 'Karen', 'Moser', '', 2147483647, 'Moser@gmail.com', 1, 0),
(16, 'Ariel', 'Hernan', '6C', 0, '', 0, 1),
(17, 'Fran', 'Mandarino', '6C', 0, '', 0, 0),
(18, 'Rocio', 'Danonino', '6C', 0, '', 0, 0),
(19, 'Agustin', 'Perez', '6C', 0, '', 0, 0),
(20, 'Lucas', 'Gimenez', '', 2147483647, 'Lucas@gmail.com', 1, 0);

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
(1, 'Admin', '0', 'admin@gmail.com'),
(2, 'Ayelen', '1234', 'Ayelen@gmail.com'),
(3, 'mariano', '1234', 'mariano@gmail.com'),
(4, 'fran', '1234', 'fran@gmail.com'),
(5, 'jose', '1234', 'jose@gmail.com');

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `microemprendimientos`
--
ALTER TABLE `microemprendimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_localidades` (`id_localidades`),
  ADD KEY `id_evaluador` (`id_evaluador`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `criterios`
--
ALTER TABLE `criterios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `escuelas`
--
ALTER TABLE `escuelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `microemprendimientos`
--
ALTER TABLE `microemprendimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
