-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2018 a las 19:33:32
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sonilab_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `id_idioma` int(11) NOT NULL,
  `nom_idioma` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalextern`
--

CREATE TABLE `personalextern` (
  `dni_personalExtern` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `nom_personalExtern` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primer_cognom_personalExtern` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `segon_cognom_personalExtern` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_personalExtern` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon_personalExtern` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccio_personalExtern` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naixement_personalExtern` date DEFAULT NULL,
  `nss_personalExtern` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iban_personalExtern` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalextern_idioma`
--

CREATE TABLE `personalextern_idioma` (
  `dni_personalExtern` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_idioma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalextern_rol`
--

CREATE TABLE `personalextern_rol` (
  `dni_personalExtern` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolpersonalextern`
--

CREATE TABLE `rolpersonalextern` (
  `id_rol` int(11) NOT NULL,
  `nom_rol` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcio_rol` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuari`
--

CREATE TABLE `rolusuari` (
  `id_rol` int(11) NOT NULL,
  `nom_rol` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcio_rol` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuari`
--

CREATE TABLE `usuari` (
  `alias_usuari` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nom_usuari` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primer_cognom_usuari` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `segon_cognom_usuari` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_usuari` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefon_usuari` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `contrasenya_usuari` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id_idioma`);

--
-- Indices de la tabla `personalextern`
--
ALTER TABLE `personalextern`
  ADD PRIMARY KEY (`dni_personalExtern`);

--
-- Indices de la tabla `personalextern_idioma`
--
ALTER TABLE `personalextern_idioma`
  ADD KEY `dni_personalExtern` (`dni_personalExtern`),
  ADD KEY `id_idioma` (`id_idioma`);

--
-- Indices de la tabla `personalextern_rol`
--
ALTER TABLE `personalextern_rol`
  ADD KEY `dni_personalExtern` (`dni_personalExtern`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `rolpersonalextern`
--
ALTER TABLE `rolpersonalextern`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `rolusuari`
--
ALTER TABLE `rolusuari`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD PRIMARY KEY (`alias_usuari`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id_idioma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rolpersonalextern`
--
ALTER TABLE `rolpersonalextern`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rolusuari`
--
ALTER TABLE `rolusuari`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personalextern_idioma`
--
ALTER TABLE `personalextern_idioma`
  ADD CONSTRAINT `personalextern_idioma_ibfk_1` FOREIGN KEY (`dni_personalExtern`) REFERENCES `personalextern` (`dni_personalExtern`) ON DELETE SET NULL,
  ADD CONSTRAINT `personalextern_idioma_ibfk_2` FOREIGN KEY (`id_idioma`) REFERENCES `idioma` (`id_idioma`) ON DELETE SET NULL;

--
-- Filtros para la tabla `personalextern_rol`
--
ALTER TABLE `personalextern_rol`
  ADD CONSTRAINT `personalextern_rol_ibfk_1` FOREIGN KEY (`dni_personalExtern`) REFERENCES `personalextern` (`dni_personalExtern`) ON DELETE SET NULL,
  ADD CONSTRAINT `personalextern_rol_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rolpersonalextern` (`id_rol`) ON DELETE SET NULL;

--
-- Filtros para la tabla `usuari`
--
ALTER TABLE `usuari`
  ADD CONSTRAINT `usuari_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rolusuari` (`id_rol`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
