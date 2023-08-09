-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2023 a las 18:38:09
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
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `Numero` int(3) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `Cod` int(3) NOT NULL,
  `Texto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hace`
--

CREATE TABLE `hace` (
  `Respuesta_ID` int(3) NOT NULL,
  `Comentario_Cod` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE `opcion` (
  `Cod` int(11) NOT NULL,
  `Texto` varchar(45) DEFAULT NULL,
  `Pregunta_ID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion_has_respuesta`
--

CREATE TABLE `opcion_has_respuesta` (
  `Opcion_Cod` int(11) NOT NULL,
  `Respuesta_ID` int(3) NOT NULL,
  `Respuesta_Zona_Num` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `Cod` int(3) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`Cod`, `Nom`) VALUES
(1, 'Brasil'),
(2, 'Paraguay'),
(3, 'Argentina'),
(4, 'Uruguay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `ID` int(3) NOT NULL,
  `Texto` varchar(60) DEFAULT NULL,
  `Categoria_Numero` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `ID` int(3) NOT NULL,
  `Edad` varchar(45) DEFAULT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  `Timestamp` datetime DEFAULT NULL,
  `Zona_Num` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `Num` int(3) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Pais_Cod` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`Num`, `Nombre`, `Pais_Cod`) VALUES
(20, 'Acre', 1),
(21, 'Alagos', 1),
(22, 'Amapá', 1),
(23, 'Amazonas', 1),
(24, 'Bahía', 1),
(25, 'Ceara', 1),
(26, 'Distrito Federal', 1),
(27, 'Espiríto Santo', 1),
(28, 'Goías', 1),
(29, 'Maranhão', 1),
(30, 'Mato Groasso', 1),
(31, 'Mato Grosso do Sul', 1),
(32, 'Minas Gerais', 1),
(33, 'Pará', 1),
(34, 'Paraíba', 1),
(35, 'Paraná', 1),
(36, 'Pernambuco', 1),
(37, 'Piauí', 1),
(38, 'Rio de Janeiro', 1),
(39, 'Rio Grande do Norte', 1),
(40, 'Rio Grande do Sul', 1),
(41, 'Rondônia', 1),
(42, 'Roraima', 1),
(43, 'Santa Catarina', 1),
(44, 'São Paulo', 1),
(45, 'Sergipe', 1),
(46, 'Tocantins', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Numero`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`Cod`);

--
-- Indices de la tabla `hace`
--
ALTER TABLE `hace`
  ADD PRIMARY KEY (`Respuesta_ID`,`Comentario_Cod`),
  ADD KEY `Comentario_Cod` (`Comentario_Cod`);

--
-- Indices de la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD PRIMARY KEY (`Cod`),
  ADD KEY `Pregunta_ID` (`Pregunta_ID`);

--
-- Indices de la tabla `opcion_has_respuesta`
--
ALTER TABLE `opcion_has_respuesta`
  ADD PRIMARY KEY (`Opcion_Cod`,`Respuesta_ID`,`Respuesta_Zona_Num`),
  ADD KEY `Respuesta_ID` (`Respuesta_ID`,`Respuesta_Zona_Num`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`Cod`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`ID`,`Categoria_Numero`),
  ADD KEY `Categoria_Numero` (`Categoria_Numero`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`ID`,`Zona_Num`),
  ADD KEY `Zona_Num` (`Zona_Num`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`Num`),
  ADD KEY `Pais_Cod` (`Pais_Cod`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `hace`
--
ALTER TABLE `hace`
  ADD CONSTRAINT `hace_ibfk_1` FOREIGN KEY (`Respuesta_ID`) REFERENCES `respuesta` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `hace_ibfk_2` FOREIGN KEY (`Comentario_Cod`) REFERENCES `comentario` (`Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD CONSTRAINT `opcion_ibfk_1` FOREIGN KEY (`Pregunta_ID`) REFERENCES `pregunta` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `opcion_has_respuesta`
--
ALTER TABLE `opcion_has_respuesta`
  ADD CONSTRAINT `opcion_has_respuesta_ibfk_1` FOREIGN KEY (`Opcion_Cod`) REFERENCES `opcion` (`Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `opcion_has_respuesta_ibfk_2` FOREIGN KEY (`Respuesta_ID`,`Respuesta_Zona_Num`) REFERENCES `respuesta` (`ID`, `Zona_Num`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `pregunta_ibfk_1` FOREIGN KEY (`Categoria_Numero`) REFERENCES `categoria` (`Numero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`Zona_Num`) REFERENCES `zona` (`Num`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `zona`
--
ALTER TABLE `zona`
  ADD CONSTRAINT `zona_ibfk_1` FOREIGN KEY (`Pais_Cod`) REFERENCES `pais` (`Cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
