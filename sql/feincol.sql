-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 12:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feincol`
--

-- --------------------------------------------------------

--
-- Table structure for table `contenido`
--

CREATE TABLE `contenido` (
  `contenido_id` int(11) NOT NULL,
  `contenido_seccion` int(11) DEFAULT NULL,
  `contenido_tipo` int(11) DEFAULT NULL,
  `contenido_padre` int(11) DEFAULT NULL,
  `contenido_columna_alineacion` int(11) DEFAULT NULL,
  `contenido_columna` varchar(255) DEFAULT NULL,
  `contenido_columna_espacios` int(11) DEFAULT NULL,
  `contenido_disenio` int(11) DEFAULT NULL,
  `contenido_borde` int(11) DEFAULT NULL,
  `contenido_estado` int(11) DEFAULT NULL,
  `contenido_fecha` date DEFAULT NULL,
  `contenido_titulo` varchar(500) DEFAULT NULL,
  `contenido_titulo_ver` int(11) DEFAULT NULL,
  `contenido_imagen` varchar(500) DEFAULT NULL,
  `contenido_archivo` varchar(255) DEFAULT NULL,
  `contenido_fondo_imagen` varchar(50) DEFAULT NULL,
  `contenido_fondo_imagen_tipo` int(11) DEFAULT NULL,
  `contenido_fondo_color` varchar(100) DEFAULT NULL,
  `contenido_introduccion` text DEFAULT NULL,
  `contenido_descripcion` text DEFAULT NULL,
  `contenido_enlace` varchar(500) DEFAULT NULL,
  `contenido_enlace_abrir` int(11) DEFAULT NULL,
  `contenido_vermas` varchar(100) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contenido`
--

INSERT INTO `contenido` (`contenido_id`, `contenido_seccion`, `contenido_tipo`, `contenido_padre`, `contenido_columna_alineacion`, `contenido_columna`, `contenido_columna_espacios`, `contenido_disenio`, `contenido_borde`, `contenido_estado`, `contenido_fecha`, `contenido_titulo`, `contenido_titulo_ver`, `contenido_imagen`, `contenido_archivo`, `contenido_fondo_imagen`, `contenido_fondo_imagen_tipo`, `contenido_fondo_color`, `contenido_introduccion`, `contenido_descripcion`, `contenido_enlace`, `contenido_enlace_abrir`, `contenido_vermas`, `orden`) VALUES
(1, 2, 3, 0, 0, '', 0, 0, 0, 1, '2024-05-21', 'Texto del header', 0, '', '', '', 0, '', '<script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>', '<p><span class=\"welcome-text\">&iexcl;Bienvenidos! <span class=\"highlight\">m&aacute;s de</span> 43 a&ntilde;os <span class=\"highlight\">de experiencia</span></span></p><script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>', '', 0, '', 1),
(2, 3, 2, 0, 0, '', 0, 0, 0, 1, '2024-05-22', 'Enlaces extra', 0, '', '', '', 0, '', '<script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>', '<script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>', '', 0, '', 2),
(3, 3, 5, 2, 0, 'col-sm-3', 0, 1, 0, 1, '2024-05-22', 'FAQ', 0, '', '', '', 0, '', '<script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>', '<script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>', '/#', 0, 'FAQ', 3),
(4, 3, 5, 2, 0, 'col-sm-3', 0, 1, 0, 1, '2024-05-22', 'Servicios enlace', 0, '', '', '', 0, '', '', '<script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>', '#', 0, 'Servicios', 4),
(5, 3, 5, 2, 0, 'col-sm-3', 0, 1, 0, 1, '2024-05-22', 'Directorio enlace', 0, '', '', '', 0, '', '', '<script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>', '#', 0, 'Directorio', 5),
(6, 3, 5, 2, 0, 'col-sm-3', 0, 1, 0, 1, '2024-05-22', 'Proximos eventos enlace', 0, '', '', '', 0, '', '', '', '#', 0, 'Pr&oacute;ximos eventos', 6),
(7, 3, 5, 2, 0, 'col-sm-3', 0, 1, 0, 1, '2024-05-22', 'Galeria enlace', 0, '', '', '', 0, '', '', '', '#', 0, 'Galer&iacute;a', 7),
(8, 3, 5, 2, 0, 'col-sm-3', 0, 1, 0, 1, '2024-05-22', 'Notas de interes enlace', 0, '', '', '', 0, '', '', '', '#', 0, 'Notas de inter&eacute;s', 8),
(9, 3, 5, 2, 0, 'col-sm-3', 0, 1, 0, 1, '2024-05-22', 'Simulador enlace', 0, '', '', '', 0, '', '', '', '#', 0, 'Simulador', 9),
(10, 3, 5, 2, 0, 'col-sm-3', 0, 1, 0, 1, '2024-05-22', 'Contacto enlace', 0, '', '', '', 0, '', '', '', '#', 0, 'Contacto', 10),
(11, 1, 2, 0, 0, '', 0, 0, 0, 1, '2024-05-22', 'Ahorro, crÃ¨dito, beneficios sociales', 0, '', '', 'fondoservicios.png', 0, '', '', '', '', 0, '', 11),
(12, 1, 5, 11, 0, 'col-sm-4', 0, 4, 0, 1, '2024-05-22', 'AHORRO', 1, 'ahorro.png', '', '', 0, '', '', '<p>Escribo mis prop&oacute;sitos, estamos convencidos, que el ahorro es la base para la realizaci&oacute;n de tus sue&ntilde;os.</p>', '/page/ahorros', 0, 'Conoce m&aacute;s', 12),
(13, 1, 5, 11, 0, 'col-sm-4', 0, 4, 0, 1, '2024-05-22', 'CRÃ‰DITO', 1, 'credito.png', '', '', 0, '', '', '<p>Hago lo necesario, de la mejor inversi&oacute;n depende mi futuro y el de mi familia.</p>', '/page/credito', 0, 'Conoce m&aacute;s', 13),
(14, 1, 5, 11, 0, 'col-sm-4', 0, 4, 0, 1, '2024-05-22', 'BENEFICIOS SOCIALES', 1, 'beneficios.png', '', '', 0, '', '', '<p>Comparto en familia, Detalles de lo que vale la pena hablar y un compromiso en el que todos podemos participar.</p>', '/page/beneficios', 0, 'Conoce m&aacute;s', 14);

-- --------------------------------------------------------

--
-- Table structure for table `enlaces`
--

CREATE TABLE `enlaces` (
  `enlaces_id` int(11) NOT NULL,
  `enlaces_titulo` varchar(255) DEFAULT NULL,
  `enlaces_link` varchar(255) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info_pagina`
--

CREATE TABLE `info_pagina` (
  `info_pagina_id` bigint(20) NOT NULL,
  `info_pagina_facebook` varchar(255) DEFAULT NULL,
  `info_pagina_instagram` varchar(255) DEFAULT NULL,
  `info_pagina_twitter` varchar(255) DEFAULT NULL,
  `info_pagina_pinterest` varchar(255) DEFAULT NULL,
  `info_pagina_youtube` varchar(255) DEFAULT NULL,
  `info_pagina_flickr` varchar(255) DEFAULT NULL,
  `info_pagina_linkedin` varchar(255) DEFAULT NULL,
  `info_pagina_google` varchar(255) DEFAULT NULL,
  `info_pagina_telefono` varchar(255) DEFAULT NULL,
  `info_pagina_whatsapp` varchar(255) DEFAULT NULL,
  `info_pagina_correos_contacto` varchar(255) DEFAULT NULL,
  `info_pagina_direccion_contacto` text DEFAULT NULL,
  `info_pagina_informacion_contacto` text DEFAULT NULL,
  `info_pagina_info_horario` varchar(255) DEFAULT NULL,
  `info_pagina_informacion_contacto_footer` text DEFAULT NULL,
  `info_pagina_latitud` varchar(255) DEFAULT NULL,
  `info_pagina_longitud` varchar(255) DEFAULT NULL,
  `info_pagina_zoom` varchar(255) DEFAULT NULL,
  `info_pagina_descripcion` text DEFAULT NULL,
  `info_pagina_tags` text DEFAULT NULL,
  `info_pagina_robot` varchar(500) DEFAULT NULL,
  `info_pagina_sitemap` varchar(500) DEFAULT NULL,
  `info_pagina_scripts` text DEFAULT NULL,
  `info_pagina_metricas` text DEFAULT NULL,
  `orden` bigint(20) DEFAULT NULL,
  `info_pagina_host` varchar(200) NOT NULL,
  `info_pagina_port` int(11) NOT NULL,
  `info_pagina_username` varchar(200) NOT NULL,
  `info_pagina_password` varchar(200) NOT NULL,
  `info_pagina_correo_remitente` varchar(200) NOT NULL,
  `info_pagina_nombre_remitente` varchar(200) NOT NULL,
  `info_pagina_correo_oculto` varchar(200) NOT NULL,
  `info_pagina_titulo_legal` varchar(200) NOT NULL,
  `info_pagina_descripcion_legal` longtext NOT NULL,
  `info_pagina_favicon` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `info_pagina`
--

INSERT INTO `info_pagina` (`info_pagina_id`, `info_pagina_facebook`, `info_pagina_instagram`, `info_pagina_twitter`, `info_pagina_pinterest`, `info_pagina_youtube`, `info_pagina_flickr`, `info_pagina_linkedin`, `info_pagina_google`, `info_pagina_telefono`, `info_pagina_whatsapp`, `info_pagina_correos_contacto`, `info_pagina_direccion_contacto`, `info_pagina_informacion_contacto`, `info_pagina_info_horario`, `info_pagina_informacion_contacto_footer`, `info_pagina_latitud`, `info_pagina_longitud`, `info_pagina_zoom`, `info_pagina_descripcion`, `info_pagina_tags`, `info_pagina_robot`, `info_pagina_sitemap`, `info_pagina_scripts`, `info_pagina_metricas`, `orden`, `info_pagina_host`, `info_pagina_port`, `info_pagina_username`, `info_pagina_password`, `info_pagina_correo_remitente`, `info_pagina_nombre_remitente`, `info_pagina_correo_oculto`, `info_pagina_titulo_legal`, `info_pagina_descripcion_legal`, `info_pagina_favicon`) VALUES
(1, 'https://www.facebook.com/feincol/', '', 'https://twitter.com/feincol_', '', '', '', '', '', '(57+1) 415 9432 - 267 4080 - Cel:315614 8956', '', 'comunicacionesfeincol@feincol.com', 'Av. Calle 17 No. 123B - 49 - Bogot&aacute;, Colombia', '<script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>', 'Lunes - Viernes: 7 A.M a 5 P.M.', '<p><span style=\"color: rgb(255, 255, 255);\"><strong>FEINCOL </strong>es una entidad asociativa sin</span><br><span style=\"color: rgb(255, 255, 255);\">&aacute;nimo de lucro con m&aacute;s de 43 a&ntilde;os de</span><br><span style=\"color: rgb(255, 255, 255);\">experiencia, organizada bajo los principios</span><br><span style=\"color: rgb(255, 255, 255);\">y valores de la Econom&iacute;a Solidaria.</span></p><script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>', '', '', '', '', '', '', '', '', '', NULL, '1', 1, '1', '1', '1', '1', '1', '', '<script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>', 'logotipo-150x150.png');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `log_usuario` varchar(50) DEFAULT NULL,
  `log_tipo` varchar(50) DEFAULT NULL,
  `log_fecha` datetime DEFAULT NULL,
  `log_log` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `log_usuario`, `log_tipo`, `log_fecha`, `log_log`) VALUES
(1, 'admin', 'CREAR CONTENIDO', '2024-05-21 12:37:17', 'Array\n(\n    [contenido_seccion] => 2\n    [contenido_tipo] => 3\n    [contenido_padre] => 0\n    [contenido_columna] => \n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 0\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-21\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Texto del header\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => \n    [contenido_vermas] => \n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_id] => 1\n)\n'),
(2, 'admin', 'EDITAR CONTENIDO', '2024-05-21 12:40:38', 'Array\n(\n    [contenido_seccion] => 2\n    [contenido_tipo] => 3\n    [contenido_padre] => 0\n    [contenido_columna] => \n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 0\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-21\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Texto del header\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <p><span class=\"welcome-text\"><span style=\"font-size: 18pt;\">&iexcl;Bienvenidos!</span> <span class=\"highlight\"><span style=\"color: rgb(16, 111, 247);\">m&aacute;s de</span> <span class=\"years\" style=\"font-size: 18pt;\">43 a&ntilde;os</span></span> <span style=\"color: rgb(16, 111, 247);\">de experiencia</span></span></p><script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => \n    [contenido_vermas] => \n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 1\n)\n'),
(3, 'admin', 'EDITAR CONTENIDO', '2024-05-21 12:44:03', 'Array\n(\n    [contenido_seccion] => 2\n    [contenido_tipo] => 3\n    [contenido_padre] => 0\n    [contenido_columna] => \n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 0\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-21\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Texto del header\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <p><span class=\"welcome-text\"><span style=\"font-size: 18pt;\">&iexcl;Bienvenidos!</span> <span class=\"highlight\"><span style=\"color: rgb(16, 111, 247);\">m&aacute;s de</span> <span class=\"years\" style=\"font-size: 18pt;\">43 a&ntilde;os</span></span> <span style=\"color: rgb(16, 111, 247);\">de experiencia</span></span></p><script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => \n    [contenido_vermas] => \n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 1\n)\n'),
(4, 'admin', 'EDITAR CONTENIDO', '2024-05-21 12:46:34', 'Array\n(\n    [contenido_seccion] => 2\n    [contenido_tipo] => 3\n    [contenido_padre] => 0\n    [contenido_columna] => \n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 0\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-21\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Texto del header\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <p><span class=\"welcome-text\"><span style=\"font-size: 18pt;\">&iexcl;Bienvenidos!</span> <span class=\"highlight\"><span style=\"color: rgb(16, 111, 247);\">m&aacute;s de</span></span> <span class=\"years\" style=\"font-size: 18pt;\">43 a&ntilde;os</span> <span style=\"color: rgb(16, 111, 247);\">de experiencia</span></span></p><script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => \n    [contenido_vermas] => \n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 1\n)\n'),
(5, 'admin', 'EDITAR CONTENIDO', '2024-05-21 12:48:16', 'Array\n(\n    [contenido_seccion] => 2\n    [contenido_tipo] => 3\n    [contenido_padre] => 0\n    [contenido_columna] => \n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 0\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-21\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Texto del header\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <p><span class=\"welcome-text\">&iexcl;Bienvenidos! <span class=\"highlight\">m&aacute;s de</span> <span class=\"years\">43 a&ntilde;os</span>de experiencia</span></p><script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => \n    [contenido_vermas] => \n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 1\n)\n'),
(6, 'admin', 'EDITAR CONTENIDO', '2024-05-21 12:48:52', 'Array\n(\n    [contenido_seccion] => 2\n    [contenido_tipo] => 3\n    [contenido_padre] => 0\n    [contenido_columna] => \n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 0\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-21\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Texto del header\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <p><span class=\"welcome-text\">&iexcl;Bienvenidos! <span class=\"highlight\">m&aacute;s de</span> <span class=\"years\">43 a&ntilde;os </span>de experiencia</span></p><script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => \n    [contenido_vermas] => \n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 1\n)\n'),
(7, 'admin', 'EDITAR CONTENIDO', '2024-05-21 12:50:26', 'Array\n(\n    [contenido_seccion] => 2\n    [contenido_tipo] => 3\n    [contenido_padre] => 0\n    [contenido_columna] => \n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 0\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-21\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Texto del header\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <p><span class=\"welcome-text\">&iexcl;Bienvenidos! <span class=\"highlight\">m&aacute;s de</span> 43 a&ntilde;os <span class=\"highlight\">de experiencia</span></span></p><script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => \n    [contenido_vermas] => \n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 1\n)\n'),
(8, 'admin', 'CREAR CONTENIDO', '2024-05-22 10:21:42', 'Array\n(\n    [contenido_seccion] => 3\n    [contenido_tipo] => 2\n    [contenido_padre] => 0\n    [contenido_columna] => \n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 0\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Enlaces extra\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => \n    [contenido_vermas] => \n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_id] => 2\n)\n'),
(9, 'admin', 'CREAR CONTENIDO', '2024-05-22 10:23:20', 'Array\n(\n    [contenido_seccion] => 3\n    [contenido_tipo] => 5\n    [contenido_padre] => 2\n    [contenido_columna] => col-sm-3\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 1\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => FAQ\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 1\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => /#\n    [contenido_vermas] => FAQ\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_id] => 3\n)\n'),
(10, 'admin', 'EDITAR CONTENIDO', '2024-05-22 10:44:23', 'Array\n(\n    [contenido_seccion] => 3\n    [contenido_tipo] => 5\n    [contenido_padre] => 2\n    [contenido_columna] => col-sm-3\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 1\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => FAQ\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => /#\n    [contenido_vermas] => FAQ\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 3\n)\n'),
(11, 'admin', 'CREAR CONTENIDO', '2024-05-22 10:45:05', 'Array\n(\n    [contenido_seccion] => 3\n    [contenido_tipo] => 5\n    [contenido_padre] => 2\n    [contenido_columna] => col-sm-3\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 1\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Servicios enlace\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => #\n    [contenido_vermas] => Servicios\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_id] => 4\n)\n'),
(12, 'admin', 'CREAR CONTENIDO', '2024-05-22 10:45:49', 'Array\n(\n    [contenido_seccion] => 3\n    [contenido_tipo] => 5\n    [contenido_padre] => 2\n    [contenido_columna] => col-sm-3\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 1\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Directorio enlace\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => #\n    [contenido_vermas] => Directorio\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_id] => 5\n)\n'),
(13, 'admin', 'CREAR CONTENIDO', '2024-05-22 10:46:35', 'Array\n(\n    [contenido_seccion] => 3\n    [contenido_tipo] => 5\n    [contenido_padre] => 2\n    [contenido_columna] => col-sm-3\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 0\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Proximos eventos enlace\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_descripcion] => <script src=\"//cdn.public.flmngr.com/FLMNFLMN/widgets.js\"></script>\n    [contenido_enlace] => #\n    [contenido_vermas] => Pr&oacute;ximos eventos\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_id] => 6\n)\n'),
(14, 'admin', 'CREAR CONTENIDO', '2024-05-22 10:54:31', 'Array\n(\n    [contenido_seccion] => 3\n    [contenido_tipo] => 5\n    [contenido_padre] => 2\n    [contenido_columna] => col-sm-3\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 1\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Contacto enlace\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => \n    [contenido_enlace] => #\n    [contenido_vermas] => Contacto\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_id] => 10\n)\n'),
(15, 'admin', 'EDITAR CONTENIDO', '2024-05-22 10:55:41', 'Array\n(\n    [contenido_seccion] => 3\n    [contenido_tipo] => 5\n    [contenido_padre] => 2\n    [contenido_columna] => col-sm-3\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 1\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Proximos eventos enlace\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => \n    [contenido_enlace] => #\n    [contenido_vermas] => Pr&oacute;ximos eventos\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 6\n)\n'),
(16, 'admin', 'EDITAR CONTENIDO', '2024-05-22 10:55:47', 'Array\n(\n    [contenido_seccion] => 3\n    [contenido_tipo] => 5\n    [contenido_padre] => 2\n    [contenido_columna] => col-sm-3\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 1\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Notas de interes enlace\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => \n    [contenido_enlace] => #\n    [contenido_vermas] => Notas de inter&eacute;s\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 8\n)\n'),
(17, 'admin', 'EDITAR CONTENIDO', '2024-05-22 10:55:55', 'Array\n(\n    [contenido_seccion] => 3\n    [contenido_tipo] => 5\n    [contenido_padre] => 2\n    [contenido_columna] => col-sm-3\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 1\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Simulador enlace\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => \n    [contenido_enlace] => #\n    [contenido_vermas] => Simulador\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 9\n)\n'),
(18, 'admin', 'EDITAR CONTENIDO', '2024-05-22 10:56:19', 'Array\n(\n    [contenido_seccion] => 3\n    [contenido_tipo] => 5\n    [contenido_padre] => 2\n    [contenido_columna] => col-sm-3\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 1\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Galeria enlace\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => \n    [contenido_enlace] => #\n    [contenido_vermas] => Galer&iacute;a\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 7\n)\n'),
(19, 'admin', 'CREAR BANNER', '2024-05-22 15:28:14', 'Array\n(\n    [publicidad_seccion] => 1\n    [publicidad_nombre] => Evento liderazgo entidad asociativa [FEINCOL 30 A&Ntilde;OS]]\n    [publicidad_nombre2] => \n    [publicidad_fecha] => 2024-05-22\n    [publicidad_nombre_ver] => \n    [publicidad_imagen] => banner.png\n    [publicidad_imagenresponsive] => banner1.png\n    [publicidad_video] => \n    [publicidad_color_fondo] => \n    [publicidad_posicion] => \n    [publicidad_descripcion] => \n    [publicidad_estado] => 1\n    [publicidad_click] => 0\n    [publicidad_enlace] => \n    [publicidad_tipo_enlace] => 0\n    [publicidad_texto_enlace] => \n    [publicidad_enlace_alineacion] => \n    [mostrarinfo] => 1\n    [publicidad_id] => 1\n)\n'),
(20, 'admin', 'EDITAR BANNER', '2024-05-22 15:30:01', 'Array\n(\n    [publicidad_seccion] => 1\n    [publicidad_nombre] => Evento liderazgo entidad asociativa [FEINCOL 30 A&Ntilde;OS]]\n    [publicidad_nombre2] => \n    [publicidad_fecha] => 2024-05-22\n    [publicidad_nombre_ver] => \n    [publicidad_imagen] => banner.png\n    [publicidad_imagenresponsive] => banner1.png\n    [publicidad_video] => \n    [publicidad_color_fondo] => \n    [publicidad_posicion] => \n    [publicidad_descripcion] => <p>FEINCOL es una entidad asociativa sin<br>&aacute;nimo de lucro con m&aacute;s de <span style=\"color: rgb(126, 140, 141);\"><strong>43 a&ntilde;os de</strong></span><br><span style=\"color: rgb(126, 140, 141);\"><strong>experiencia</strong></span>, organizada bajo los principios<br>y valores de la Econom&iacute;a Solidaria.</p>\n    [publicidad_estado] => 1\n    [publicidad_click] => 0\n    [publicidad_enlace] => #\n    [publicidad_tipo_enlace] => 1\n    [publicidad_texto_enlace] => Ver m&aacute;s\n    [publicidad_enlace_alineacion] => \n    [mostrarinfo] => 1\n    [publicidad_id] => 1\n)\n'),
(21, 'admin', 'EDITAR BANNER', '2024-05-22 15:36:56', 'Array\n(\n    [publicidad_seccion] => 1\n    [publicidad_nombre] => Evento liderazgo entidad asociativa [FEINCOL 30 A&Ntilde;OS]\n    [publicidad_nombre2] => \n    [publicidad_fecha] => 2024-05-22\n    [publicidad_nombre_ver] => \n    [publicidad_imagen] => banner.png\n    [publicidad_imagenresponsive] => banner1.png\n    [publicidad_video] => \n    [publicidad_color_fondo] => \n    [publicidad_posicion] => \n    [publicidad_descripcion] => <p>FEINCOL es una entidad asociativa sin<br>Ã¡nimo de lucro con mÃ¡s de <span style=\"color: rgb(126, 140, 141);\"><strong>43 aÃ±os de</strong></span><br><span style=\"color: rgb(126, 140, 141);\"><strong>experiencia</strong></span>, organizada bajo los principios<br>y valores de la EconomÃ­a Solidaria.</p>\n    [publicidad_estado] => 1\n    [publicidad_click] => 0\n    [publicidad_enlace] => #\n    [publicidad_tipo_enlace] => 1\n    [publicidad_texto_enlace] => Ver m&aacute;s\n    [publicidad_enlace_alineacion] => \n    [mostrarinfo] => 1\n    [publicidad_id] => 1\n)\n'),
(22, 'admin', 'CREAR BANNER', '2024-05-22 15:52:56', 'Array\n(\n    [publicidad_seccion] => 1\n    [publicidad_nombre] => Banner 1\n    [publicidad_nombre2] => \n    [publicidad_fecha] => 2024-05-22\n    [publicidad_nombre_ver] => \n    [publicidad_imagen] => banner2.png\n    [publicidad_imagenresponsive] => banner3.png\n    [publicidad_video] => \n    [publicidad_color_fondo] => \n    [publicidad_posicion] => \n    [publicidad_descripcion] => \n    [publicidad_estado] => 1\n    [publicidad_click] => 0\n    [publicidad_enlace] => \n    [publicidad_tipo_enlace] => 0\n    [publicidad_texto_enlace] => \n    [publicidad_enlace_alineacion] => \n    [mostrarinfo] => 0\n    [publicidad_id] => 2\n)\n'),
(23, 'admin', 'EDITAR BANNER', '2024-05-22 16:20:52', 'Array\n(\n    [publicidad_seccion] => 1\n    [publicidad_nombre] => Banner 1\n    [publicidad_nombre2] => \n    [publicidad_fecha] => 2024-05-22\n    [publicidad_nombre_ver] => \n    [publicidad_imagen] => banner2.png\n    [publicidad_imagenresponsive] => banner3.png\n    [publicidad_video] => \n    [publicidad_color_fondo] => \n    [publicidad_posicion] => \n    [publicidad_descripcion] => \n    [publicidad_estado] => 2\n    [publicidad_click] => 0\n    [publicidad_enlace] => \n    [publicidad_tipo_enlace] => 0\n    [publicidad_texto_enlace] => \n    [publicidad_enlace_alineacion] => \n    [mostrarinfo] => 0\n    [publicidad_id] => 2\n)\n'),
(24, 'admin', 'EDITAR BANNER', '2024-05-22 16:45:23', 'Array\n(\n    [publicidad_seccion] => 1\n    [publicidad_nombre] => Evento liderazgo entidad asociativa [FEINCOL 30 A&Ntilde;OS]\n    [publicidad_nombre2] => \n    [publicidad_fecha] => 2024-05-22\n    [publicidad_nombre_ver] => \n    [publicidad_imagen] => banner.png\n    [publicidad_imagenresponsive] => banner1.png\n    [publicidad_video] => \n    [publicidad_color_fondo] => \n    [publicidad_posicion] => \n    [publicidad_descripcion] => <p><span style=\"font-size: 18pt;\">FEINCOL es una entidad asociativa sin</span><br><span style=\"font-size: 18pt;\">&aacute;nimo de lucro con m&aacute;s de <span style=\"color: rgb(126, 140, 141);\"><strong>43 a&ntilde;os de</strong></span></span><br><span style=\"font-size: 18pt;\"><span style=\"color: rgb(126, 140, 141);\"><strong>experiencia</strong></span>, organizada bajo los principios</span><br><span style=\"font-size: 18pt;\">y valores de la Econom&iacute;a Solidaria.</span></p>\n    [publicidad_estado] => 1\n    [publicidad_click] => 0\n    [publicidad_enlace] => #\n    [publicidad_tipo_enlace] => 1\n    [publicidad_texto_enlace] => Ver m&aacute;s\n    [publicidad_enlace_alineacion] => \n    [mostrarinfo] => 1\n    [publicidad_id] => 1\n)\n'),
(25, 'admin', 'EDITAR BANNER', '2024-05-22 16:45:53', 'Array\n(\n    [publicidad_seccion] => 1\n    [publicidad_nombre] => Evento liderazgo entidad asociativa [FEINCOL 30 A&Ntilde;OS]\n    [publicidad_nombre2] => \n    [publicidad_fecha] => 2024-05-22\n    [publicidad_nombre_ver] => \n    [publicidad_imagen] => banner.png\n    [publicidad_imagenresponsive] => banner1.png\n    [publicidad_video] => \n    [publicidad_color_fondo] => \n    [publicidad_posicion] => \n    [publicidad_descripcion] => <p><span style=\"font-size: 18pt;\">FEINCOL es una entidad asociativa sin</span><br><span style=\"font-size: 18pt;\">&aacute;nimo de lucro con m&aacute;s de <span style=\"color: rgb(51, 51, 51);\"><strong>43 a&ntilde;os de</strong></span></span><br><span style=\"font-size: 18pt;\"><span style=\"color: rgb(51, 51, 51);\"><strong>experiencia</strong></span>, organizada bajo los principios</span><br><span style=\"font-size: 18pt;\">y valores de la Econom&iacute;a Solidaria.</span></p>\n    [publicidad_estado] => 1\n    [publicidad_click] => 0\n    [publicidad_enlace] => #\n    [publicidad_tipo_enlace] => 1\n    [publicidad_texto_enlace] => Ver m&aacute;s\n    [publicidad_enlace_alineacion] => \n    [mostrarinfo] => 1\n    [publicidad_id] => 1\n)\n'),
(26, 'admin', 'CREAR CONTENIDO', '2024-05-22 17:02:21', 'Array\n(\n    [contenido_seccion] => 1\n    [contenido_tipo] => 2\n    [contenido_padre] => 0\n    [contenido_columna] => \n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 0\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Ahorro, crÃ¨dito, beneficios sociales\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => \n    [contenido_enlace] => \n    [contenido_vermas] => \n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_id] => 11\n)\n'),
(27, 'admin', 'CREAR CONTENIDO', '2024-05-22 17:03:44', 'Array\n(\n    [contenido_seccion] => 1\n    [contenido_tipo] => 5\n    [contenido_padre] => 11\n    [contenido_columna] => col-sm-4\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 4\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => AHORRO\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 1\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => <p>Escribo mis prop&oacute;sitos, estamos convencidos, que el ahorro es la base para la realizaci&oacute;n de tus sue&ntilde;os.</p>\n    [contenido_enlace] => /page/ahorros\n    [contenido_vermas] => Conoce m&aacute;s\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_id] => 12\n)\n'),
(28, 'admin', 'CREAR CONTENIDO', '2024-05-22 17:05:01', 'Array\n(\n    [contenido_seccion] => 1\n    [contenido_tipo] => 5\n    [contenido_padre] => 11\n    [contenido_columna] => col-sm-4\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 4\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => CRÃ‰DITO\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 1\n    [contenido_imagen] => credito.png\n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => <p>Hago lo necesario, de la mejor inversi&oacute;n depende mi futuro y el de mi familia.</p>\n    [contenido_enlace] => /page/credito\n    [contenido_vermas] => Conoce m&aacute;s\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_id] => 13\n)\n'),
(29, 'admin', 'CREAR CONTENIDO', '2024-05-22 17:05:54', 'Array\n(\n    [contenido_seccion] => 1\n    [contenido_tipo] => 5\n    [contenido_padre] => 11\n    [contenido_columna] => col-sm-4\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 4\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => BENEFICIOS SOCIALES\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 1\n    [contenido_imagen] => beneficios.png\n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => <p>Comparto en familia, Detalles de lo que vale la pena hablar y un compromiso en el que todos podemos participar.</p>\n    [contenido_enlace] => /page/beneficios\n    [contenido_vermas] => /page/beneficios\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_id] => 14\n)\n'),
(30, 'admin', 'EDITAR CONTENIDO', '2024-05-22 17:06:24', 'Array\n(\n    [contenido_seccion] => 1\n    [contenido_tipo] => 5\n    [contenido_padre] => 11\n    [contenido_columna] => col-sm-4\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 4\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => AHORRO\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 1\n    [contenido_imagen] => ahorro.png\n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => <p>Escribo mis prop&oacute;sitos, estamos convencidos, que el ahorro es la base para la realizaci&oacute;n de tus sue&ntilde;os.</p>\n    [contenido_enlace] => /page/ahorros\n    [contenido_vermas] => Conoce m&aacute;s\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 12\n)\n'),
(31, 'admin', 'EDITAR CONTENIDO', '2024-05-22 17:06:48', 'Array\n(\n    [contenido_seccion] => 1\n    [contenido_tipo] => 2\n    [contenido_padre] => 0\n    [contenido_columna] => \n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 0\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => Ahorro, crÃ¨dito, beneficios sociales\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 0\n    [contenido_imagen] => \n    [contenido_fondo_imagen] => fondoservicios.png\n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => \n    [contenido_enlace] => \n    [contenido_vermas] => \n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 11\n)\n'),
(32, 'admin', 'EDITAR CONTENIDO', '2024-05-22 17:19:41', 'Array\n(\n    [contenido_seccion] => 1\n    [contenido_tipo] => 5\n    [contenido_padre] => 11\n    [contenido_columna] => col-sm-4\n    [contenido_columna_espacios] => 0\n    [contenido_columna_alineacion] => 0\n    [contenido_disenio] => 4\n    [contenido_borde] => 0\n    [contenido_estado] => 1\n    [contenido_fecha] => 2024-05-22\n    [contenido_caja] => \n    [contenido_top] => \n    [contenido_bottom] => \n    [contenido_left] => \n    [contenido_right] => \n    [contenido_titulo] => BENEFICIOS SOCIALES\n    [contenido_subtitulo] => \n    [contenido_titulo_ver] => 1\n    [contenido_imagen] => beneficios.png\n    [contenido_fondo_imagen] => \n    [contenido_fondo_imagen_tipo] => 0\n    [contenido_enlace_abrir] => 0\n    [contenido_fondo_color] => \n    [contenido_introduccion] => \n    [contenido_descripcion] => <p>Comparto en familia, Detalles de lo que vale la pena hablar y un compromiso en el que todos podemos participar.</p>\n    [contenido_enlace] => /page/beneficios\n    [contenido_vermas] => Conoce m&aacute;s\n    [contenido_video] => \n    [contenido_icono] => \n    [contenido_archivo] => \n    [contenido_id] => 14\n)\n');

-- --------------------------------------------------------

--
-- Table structure for table `publicidad`
--

CREATE TABLE `publicidad` (
  `publicidad_id` int(11) NOT NULL,
  `publicidad_seccion` int(11) DEFAULT NULL,
  `publicidad_nombre` varchar(500) DEFAULT NULL,
  `publicidad_fecha` date DEFAULT NULL,
  `publicidad_imagen` varchar(500) DEFAULT NULL,
  `publicidad_imagenresponsive` varchar(255) DEFAULT NULL,
  `publicidad_color_fondo` varchar(255) DEFAULT NULL,
  `publicidad_video` text DEFAULT NULL,
  `publicidad_posicion` varchar(255) DEFAULT NULL,
  `publicidad_descripcion` text DEFAULT NULL,
  `publicidad_estado` int(11) DEFAULT NULL,
  `publicidad_click` int(11) DEFAULT NULL,
  `publicidad_enlace` varchar(500) DEFAULT NULL,
  `publicidad_tipo_enlace` int(11) DEFAULT NULL,
  `publicidad_texto_enlace` varchar(255) DEFAULT NULL,
  `mostrarinfo` int(2) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `publicidad`
--

INSERT INTO `publicidad` (`publicidad_id`, `publicidad_seccion`, `publicidad_nombre`, `publicidad_fecha`, `publicidad_imagen`, `publicidad_imagenresponsive`, `publicidad_color_fondo`, `publicidad_video`, `publicidad_posicion`, `publicidad_descripcion`, `publicidad_estado`, `publicidad_click`, `publicidad_enlace`, `publicidad_tipo_enlace`, `publicidad_texto_enlace`, `mostrarinfo`, `orden`) VALUES
(1, 1, 'Evento liderazgo entidad asociativa [FEINCOL 30 A&Ntilde;OS]', '2024-05-22', 'banner.png', 'banner1.png', '', '', '', '<p><span style=\"font-size: 18pt;\">FEINCOL es una entidad asociativa sin</span><br><span style=\"font-size: 18pt;\">&aacute;nimo de lucro con m&aacute;s de <span style=\"color: rgb(51, 51, 51);\"><strong>43 a&ntilde;os de</strong></span></span><br><span style=\"font-size: 18pt;\"><span style=\"color: rgb(51, 51, 51);\"><strong>experiencia</strong></span>, organizada bajo los principios</span><br><span style=\"font-size: 18pt;\">y valores de la Econom&iacute;a Solidaria.</span></p>', 1, 0, '#', 1, 'Ver m&aacute;s', 1, 1),
(2, 1, 'Banner 1', '2024-05-22', 'banner2.png', 'banner3.png', '', '', '', '', 2, 0, '', 0, '', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `user_date` date DEFAULT NULL,
  `user_names` varchar(255) DEFAULT NULL,
  `user_cedula` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_telefono` varchar(255) DEFAULT NULL,
  `user_level` int(11) DEFAULT NULL,
  `user_state` int(11) DEFAULT NULL,
  `user_user` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_delete` int(11) DEFAULT NULL,
  `user_current_user` bigint(20) DEFAULT NULL,
  `user_code` varchar(500) DEFAULT NULL,
  `user_empresa` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_date`, `user_names`, `user_cedula`, `user_email`, `user_telefono`, `user_level`, `user_state`, `user_user`, `user_password`, `user_delete`, `user_current_user`, `user_code`, `user_empresa`) VALUES
(1, '2018-07-17', 'Administrador', '1232321321', 'gerencia@omegawebsystems.com', '123213123123', 1, 1, 'admin', '$2y$10$ULs0eFV/YanZb7L386//7O0wf6W4urgVrAaWDnRcSb.bLWi0ZmO8y', 1, 1, '1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`contenido_id`);

--
-- Indexes for table `enlaces`
--
ALTER TABLE `enlaces`
  ADD PRIMARY KEY (`enlaces_id`);

--
-- Indexes for table `info_pagina`
--
ALTER TABLE `info_pagina`
  ADD PRIMARY KEY (`info_pagina_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`publicidad_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_user` (`user_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contenido`
--
ALTER TABLE `contenido`
  MODIFY `contenido_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `enlaces`
--
ALTER TABLE `enlaces`
  MODIFY `enlaces_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_pagina`
--
ALTER TABLE `info_pagina`
  MODIFY `info_pagina_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `publicidad`
--
ALTER TABLE `publicidad`
  MODIFY `publicidad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
