-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2023 a las 23:42:55
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
-- Base de datos: `gestion_notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actcalculo`
--

CREATE TABLE `actcalculo` (
  `id_act` int(11) NOT NULL,
  `nom_act` varchar(100) NOT NULL,
  `nom_asig` text NOT NULL,
  `desc_act` varchar(100) NOT NULL,
  `fech_act` date NOT NULL,
  `file_act` varchar(1000) NOT NULL,
  `link_act` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actcalculo`
--

INSERT INTO `actcalculo` (`id_act`, `nom_act`, `nom_asig`, `desc_act`, `fech_act`, `file_act`, `link_act`) VALUES
(123, 'PROYECTO LISSAJOUS ', 'CALCULO DIFERENCIAL', 'Subir un video de minimo 4 minutos explicando la teoria', '2023-11-28', 'jhvj.pdf', 'http://localhost/SENA/pag_act.php?PROYECTO LISSAJOUS '),
(234, 'asersdf', 'CALCULO DIFERENCIAL', 'sdfsdf', '2455-02-11', 'CIRCULAR A PADRES - ACTUALIZACION DE DATOS.pdf', 'http://localhost/SENA/pag_act.php?asersdf'),
(45645, 'juan', 'CALCULO DIFERENCIAL', 'nolose', '0064-05-04', 'CORTES CELIN BREINER ANTONIO TI.pdf', 'http://localhost/SENA/pag_act.php?juan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actfund`
--

CREATE TABLE `actfund` (
  `id_act` int(11) NOT NULL,
  `nom_act` varchar(100) NOT NULL,
  `nom_asig` text NOT NULL,
  `desc_act` varchar(100) NOT NULL,
  `fech_act` date NOT NULL,
  `file_act` varchar(1000) NOT NULL,
  `link_act` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actingles`
--

CREATE TABLE `actingles` (
  `id_act` int(11) NOT NULL,
  `nom_act` varchar(100) NOT NULL,
  `nom_asig` text NOT NULL,
  `desc_act` varchar(100) NOT NULL,
  `fech_act` date NOT NULL,
  `file_act` varchar(1000) NOT NULL,
  `link_act` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id_act` int(11) NOT NULL,
  `nom_asig` varchar(100) NOT NULL,
  `nom_act` text NOT NULL,
  `desc_act` varchar(100) NOT NULL,
  `fech_act` date NOT NULL,
  `file_act` varchar(1000) NOT NULL,
  `link_act` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id_act`, `nom_asig`, `nom_act`, `desc_act`, `fech_act`, `file_act`, `link_act`) VALUES
(123, 'CALCULO DIFERENCIAL', 'PROYECTO LISSAJOUS ', 'Subir un video de minimo 4 minutos explicando la teoria', '2023-11-28', 'jhvj.pdf', 'http://localhost/SENA/pag_act.php?PROYECTO LISSAJOUS '),
(234, 'CALCULO DIFERENCIAL', 'asersdf', 'sdfsdf', '2455-02-11', 'CIRCULAR A PADRES - ACTUALIZACION DE DATOS.pdf', 'http://localhost/SENA/pag_act.php?asersdf'),
(45645, 'CALCULO DIFERENCIAL', 'juan', 'nolose', '0064-05-04', 'CORTES CELIN BREINER ANTONIO TI.pdf', 'http://localhost/SENA/pag_act.php?juan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actrazo`
--

CREATE TABLE `actrazo` (
  `id_act` int(11) NOT NULL,
  `nom_act` varchar(100) NOT NULL,
  `nom_asig` text NOT NULL,
  `desc_act` varchar(100) NOT NULL,
  `fech_act` date NOT NULL,
  `file_act` varchar(1000) NOT NULL,
  `link_act` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `cod_asig` int(11) NOT NULL,
  `nom_asig` text NOT NULL,
  `obligatorio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`cod_asig`, `nom_asig`, `obligatorio`) VALUES
(1012602, 'RAZONAMIENTO Y REPRESENTACION MATEMATICA', 'SI'),
(3012601, 'CALCULO DIFERENCIAL', 'SI'),
(4072601, 'FUNDAMENTOS DE ECONOMIA', 'SI'),
(4092601, 'INGLES I - MY FIRST COMPANY', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_tipoUS` int(5) NOT NULL,
  `nom_tipo_usu` text NOT NULL,
  `tipo_id` varchar(50) NOT NULL,
  `id_US` int(15) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `sexo` text NOT NULL,
  `fech_na` date NOT NULL,
  `cod_asig` int(15) NOT NULL,
  `nom_asig` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_tipoUS`, `nom_tipo_usu`, `tipo_id`, `id_US`, `nombre`, `apellido`, `sexo`, `fech_na`, `cod_asig`, `nom_asig`) VALUES
(2, 'Docente', 'Cedula de Ciudadania', 1, 'a', 'a', 'Hombre', '2023-01-02', 0, '1012602');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docudoc`
--

CREATE TABLE `docudoc` (
  `id` int(11) NOT NULL,
  `nombre_doc` varchar(100) NOT NULL,
  `archivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docudoc`
--

INSERT INTO `docudoc` (`id`, `nombre_doc`, `archivo`) VALUES
(1, 'GUIA', 'jhvj.pdf'),
(2, 'GUIA #2', 'Folleto CATEDRA.pdf'),
(3, 'GUIA #3', 'jhvj.pdf'),
(4, 'GUIA #4', 'jhvj.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `id` int(11) NOT NULL,
  `nombre_est` text NOT NULL,
  `apellido_est` text NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `archivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id`, `nombre_est`, `apellido_est`, `descripcion`, `archivo`) VALUES
(13, 'Andres', 'Caro', 'Documento', 'HOJA DE VIDA DC.pdf'),
(14, 'CARO', 'NARANJO', 'Resolucion #1', 'Folleto CATEDRA.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_tipoUS` int(5) NOT NULL,
  `nom_tipo_usu` text NOT NULL,
  `tipo_id` varchar(50) NOT NULL,
  `id_US` int(15) NOT NULL,
  `nombre_est` text NOT NULL,
  `apellido_est` text NOT NULL,
  `sexo` text NOT NULL,
  `fech_na` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_tipoUS`, `nom_tipo_usu`, `tipo_id`, `id_US`, `nombre_est`, `apellido_est`, `sexo`, `fech_na`) VALUES
(3, 'Estudiante', 'Tarjeta de Identidad', 2, 'e', 'e', 'Hombre', '2023-10-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files`
--

CREATE TABLE `files` (
  `id_file` int(200) NOT NULL,
  `filedata` varbinary(200) DEFAULT NULL,
  `filename` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipous`
--

CREATE TABLE `tipous` (
  `id_tipoUS` int(11) NOT NULL,
  `Nom_TipUS` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipous`
--

INSERT INTO `tipous` (`id_tipoUS`, `Nom_TipUS`) VALUES
(1, 'Superadministrador'),
(2, 'Docente'),
(3, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `tipo_id` varchar(40) NOT NULL,
  `id_US` int(15) NOT NULL,
  `id_tipoUS` int(10) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `fech_na` date NOT NULL,
  `sexo` text NOT NULL,
  `correo` varchar(100) NOT NULL,
  `lugar_procedencia` text NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `nom_tipo_usu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`tipo_id`, `id_US`, `id_tipoUS`, `usuario`, `nombre`, `apellido`, `fech_na`, `sexo`, `correo`, `lugar_procedencia`, `contrasena`, `nom_tipo_usu`) VALUES
('Cedula de Ciudadania', 1, 2, 'doc', 'a', 'a', '2023-01-02', 'Hombre', 'a@g.c', 'Bogota', '123', 'Docente'),
('Tarjeta de Identidad', 2, 3, 'est', 'e', 'e', '2023-10-08', 'Hombre', 'e@g.c', 'Cali', '123', 'Estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actcalculo`
--
ALTER TABLE `actcalculo`
  ADD PRIMARY KEY (`id_act`);

--
-- Indices de la tabla `actfund`
--
ALTER TABLE `actfund`
  ADD PRIMARY KEY (`id_act`);

--
-- Indices de la tabla `actingles`
--
ALTER TABLE `actingles`
  ADD PRIMARY KEY (`id_act`);

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id_act`);

--
-- Indices de la tabla `actrazo`
--
ALTER TABLE `actrazo`
  ADD PRIMARY KEY (`id_act`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`cod_asig`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_US`);

--
-- Indices de la tabla `docudoc`
--
ALTER TABLE `docudoc`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_US`);

--
-- Indices de la tabla `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id_file`);

--
-- Indices de la tabla `tipous`
--
ALTER TABLE `tipous`
  ADD PRIMARY KEY (`id_tipoUS`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_US`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docudoc`
--
ALTER TABLE `docudoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
