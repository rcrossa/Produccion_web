-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2020 at 02:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produccion_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `continente` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `precio` int(255) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `descripcion_details` varchar(500) NOT NULL,
  `url` varchar(300) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `activo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `continente`, `pais`, `precio`, `descripcion`, `descripcion_details`, `url`, `destacado`, `activo`) VALUES
(1, 'Europa', 'Francia', 45020, 'VISITANDO: Francia MADRID, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', 'España Aéreos ES/FE/ES, 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/spain.jpg', 1, 'si'),
(2, 'Europa', 'Italia', 43000, 'VISITANDO: Italia MADRID, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', 'España Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out. City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/spain.jpg', 1, ''),
(3, 'Europa', 'Alemania', 44000, 'VISITANDO: Alemania, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', 'España Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out. City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/spain.jpg', 1, ''),
(4, 'America del Norte', 'EEUU', 20000, 'Estados Unidos Visitando: Bsssoston / Quebec / Montreal / Ottawa / Toronto / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Estados Unidos Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out. City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/estadosunidos.jpg', 1, ''),
(5, 'America del Norte', 'Canada', 20000, 'Canada Visitando: Bsssoston / Quebec / Montreal / Ottawa / Toronto / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Estados Unidos Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/estadosunidos.jpg', 1, ''),
(6, 'America del Norte', 'Mexico', 20000, 'Mexico Visitando: Bsssoston / Quebec / Montreal / Ottawa / Toronto / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Estados Unidos Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/estadosunidos.jpg', 1, ''),
(7, 'America del Sur', 'Brasil', 60030, 'INCLUYE: Brasil GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines. ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Argentina Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/peru.jpg', 1, ''),
(8, 'America del Sur', 'Argentina', 60030, 'INCLUYE: Argentina GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines).  ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Argentina Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/peru.jpg', 1, ''),
(9, 'Asia', 'Japon', 36200, 'VISITANDO: Japon Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Japon Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/canada.jpg', 1, ''),
(10, 'Asia', 'Corea del Sur', 36200, 'VISITANDO: Corea del Sur Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Japon Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/canada.jpg', 1, ''),
(11, 'Africa', 'Egipto', 36020, 'VISITANDO: Egipto/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Egipto Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/canada.jpg', 1, ''),
(12, 'Africa', 'Nigeria', 36550, 'VISITANDO: Nigeria/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Egipto Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/canada.jpg', 1, ''),
(13, 'Oceania', 'Australia', 360630, 'VISITANDO: Australia/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Australia Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/canada.jpg', 1, ''),
(15, 'Europa', 'España', 45010, 'VISITANDO: España MADRID, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', ' España Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out,  City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/spain.jpg', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `edad` int(22) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `perfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellido`, `edad`, `email`, `user_id`, `password`, `perfil`) VALUES
(21, 'Nicolas', 'Ceijas', 30, 'nico.ceijas@davinci.edu.ar', 'nico', '1234', 'admin'),
(22, 'Carlos', 'Rodriguez', 34, 'cr@hotmail.com', 'crodriguez', '1234', 'usuario'),
(24, 'Roberto', 'Rossa', 34, 'rcr@hotma.com', 'rc', '$1$gG2HNz4l$bvUSvTFwz5/EftEwf9UGq1', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
