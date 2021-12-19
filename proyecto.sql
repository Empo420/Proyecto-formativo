-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2021 a las 01:58:05
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE `candidato` (
  `numeroIdentificacion` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `cantidadHijos` int(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `estadoCivil` varchar(20) NOT NULL,
  `cantidadMascotas` int(10) NOT NULL,
  `nivelEscolaridad` varchar(30) DEFAULT NULL,
  `contrasenia` int(100) NOT NULL,
  `imagen` mediumblob NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`numeroIdentificacion`, `nombre`, `direccion`, `telefono`, `cantidadHijos`, `genero`, `estadoCivil`, `cantidadMascotas`, `nivelEscolaridad`, `contrasenia`, `imagen`, `estado`) VALUES
(2755, 'Jeisson', 'carrera 1 N ¡', '3188497571', 2, 'masculino', 'casado', 1, 'tecnico', 5511, '', 0),
(4433, 'michel', 'carrera 1 N 66 A 50', '3188497571', 2, 'masculino', 'Tolima', 1, 'Profesional', 1122, '', 1),
(443332, 'Dayana pamo', 'carrera 1 N 66', '318333334', 2, 'femenino', 'casado', 1, 'tecnico', 3311, '', 1),
(19282272, 'Nicolas', 'carrera 1 N 66 A 50', '3188497571', 2, 'masculino', 'soltero', 1, 'Profesional', 222222, '', 1),
(82828282, 'Felipe peña', 'cra 5', '31628223', 2, 'masculino', 'casado', 1, 'tecnologo', 33323222, '', 1),
(1109840205, 'Esteban Mauricio Pamo Oyola', 'carrera 1', '3188497421', 2, 'masculino', 'Tolima', 3, 'tecnologo', 321, '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `nit` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `representante` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `contrasenia` varchar(100) NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`nit`, `nombre`, `representante`, `direccion`, `telefono`, `descripcion`, `contrasenia`, `estado`) VALUES
(4433, 'Fontendt', 'Leonardo villa', 'carrera 1 N ', '3188497571', 'software', '321', 1),
(676585, 'Globant', 'Felipe pecas', 'call 9 004', '32111556', 'Sistemas', '123', 1),
(2565311, 'Asiciados tecnologicos', 'Jose oviedo', 'cra 2 nro 9-50', '3145670098', 'Cocina', '3345', 1),
(3215567, 'Groups', 'Liceht navarro', 'carrera 1 N ¡', '3188497571', 'Sistemas', 'ee222', 1),
(22282882, 'Medical', 'Leonardo Villa', 'cra 5 333', '2245544', 'Administracion', '4466', 1),
(28373673, 'Lunitas', 'oscar binilla', 'carrera 1', '31223444', 'cocina', '442121', 1),
(55433222, 'medisoft', 'Esteba pamo', 'call 6 - 9995', '317980022', 'Veterinaria', '333', 1),
(82827827, 'Veterinaria DFG', 'Oscar Cadena', 'cra 3 nro 9 -6', '3125673234', 'Veterinaria', '789', 1),
(93377733, 'Lazaro software', 'Lazaro', 'av 4 call 554', '31788900', 'Contaduria', '98765', 1),
(833637282, 'Surf', 'Karlo mavcro', 'carrera 1 N ¡', '3156634920', 'Sistemas', '423222', 1),
(1133736573, 'PYHMarketing', 'Liceht navarro', 'cra 4 nro 45-122', '31223444', 'Sistemas', '123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `pregunta1` varchar(20) NOT NULL,
  `pregunta2` varchar(20) NOT NULL,
  `pregunta3` varchar(20) NOT NULL,
  `pregunta4` varchar(20) NOT NULL,
  `pregunta5` varchar(20) NOT NULL,
  `pregunta6` varchar(20) NOT NULL,
  `pregunta7` varchar(20) NOT NULL,
  `pregunta8` varchar(20) NOT NULL,
  `pregunta9` varchar(20) NOT NULL,
  `pregunta10` varchar(20) NOT NULL,
  `pregunta11` varchar(20) NOT NULL,
  `pregunta12` varchar(20) NOT NULL,
  `pregunta13` varchar(20) NOT NULL,
  `pregunta14` varchar(20) NOT NULL,
  `pregunta15` varchar(20) NOT NULL,
  `pregunta16` varchar(20) NOT NULL,
  `pregunta17` varchar(20) NOT NULL,
  `pregunta18` varchar(20) NOT NULL,
  `pregunta19` varchar(20) NOT NULL,
  `pregunta20` varchar(20) NOT NULL,
  `idCandidato` int(11) NOT NULL,
  `nitEmpresa` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`, `pregunta11`, `pregunta12`, `pregunta13`, `pregunta14`, `pregunta15`, `pregunta16`, `pregunta17`, `pregunta18`, `pregunta19`, `pregunta20`, `idCandidato`, `nitEmpresa`, `estado`) VALUES
(5, 'totalMenteDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'deAcuerdo', 'deAcuerdo', 'enDesacuerdo', 'indiferente', 'enDesacuerdo', 'indiferente', 'deAcuerdo', 'deAcuerdo', 'totalMenteDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'indiferente', 'enDesacuerdo', 'deAcuerdo', 'totalMenteDesacuerdo', 1109840205, 4433, 0),
(6, 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'indiferente', 'enDesacuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'enDesacuerdo', 'indiferente', 'indiferente', 'enDesacuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'indiferente', 'enDesacuerdo', 'indiferente', 'enDesacuerdo', 'totalMenteDesacuerdo', 1109840205, 4433, 1),
(7, 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'indiferente', 'indiferente', 'indiferente', 'indiferente', 'indiferente', 'deAcuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'indiferente', 'indiferente', 'enDesacuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'totalMenteDesacuerdo', 'totalMenteDesacuerdo', 1109840205, 676585, 1),
(8, 'totalMenteDesacuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'indiferente', 'totalMenteDesacuerdo', 'indiferente', 'indiferente', 'deAcuerdo', 'indiferente', 'indiferente', 'enDesacuerdo', 'indiferente', 'indiferente', 'totalMenteDesacuerdo', 'deAcuerdo', 'enDesacuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'deAcuerdo', 'enDesacuerdo', 1109840205, 3215567, 1),
(9, 'enDesacuerdo', 'totalMenteDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'indiferente', 'deAcuerdo', 'enDesacuerdo', 'deAcuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'deAcuerdo', 'totalMenteDesacuerdo', 'indiferente', 'enDesacuerdo', 'totalMenteDesacuerdo', 'indiferente', 'indiferente', 'deAcuerdo', 'deAcuerdo', 1109840205, 82827827, 1),
(10, 'enDesacuerdo', 'totalMenteDesacuerdo', 'indiferente', 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'indiferente', 'indiferente', 'totalMenteDesacuerdo', 'totalMenteDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'enDesacuerdo', 'deAcuerdo', 1109840205, 55433222, 1),
(11, 'indiferente', 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'indiferente', 'enDesacuerdo', 'enDesacuerdo', 'indiferente', 'totalMenteDesacuerdo', 'totalMenteDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'indiferente', 'deAcuerdo', 'indiferente', 'enDesacuerdo', 'indiferente', 'deAcuerdo', 1109840205, 3215567, 1),
(13, 'indiferente', 'enDesacuerdo', 'enDesacuerdo', 'deAcuerdo', 'indiferente', 'indiferente', 'totalMenteDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'indiferente', 'enDesacuerdo', 'indiferente', 'enDesacuerdo', 'indiferente', 'totalMenteDesacuerdo', 'enDesacuerdo', 'totalMenteDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 'enDesacuerdo', 1109840205, 93377733, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`numeroIdentificacion`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`nit`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCandidato` (`idCandidato`),
  ADD KEY `nitEmpresa` (`nitEmpresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`nitEmpresa`) REFERENCES `empresa` (`nit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`idCandidato`) REFERENCES `candidato` (`numeroIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
