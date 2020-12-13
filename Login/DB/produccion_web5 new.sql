-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2020 a las 19:18:04
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `produccion_web5`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `altadecuenta` (IN `email` VARCHAR(100), IN `password` VARCHAR(1000), IN `nombre` VARCHAR(100), IN `apellido` VARCHAR(100), IN `edad` INT(3) UNSIGNED, IN `tipo_rol` VARCHAR(20), IN `accion` VARCHAR(20))  NO SQL
BEGIN
INSERT INTO usuarios (email, password, nombre, apellido, edad) VALUES (email,
password,nombre,apellido,edad);
INSERT INTO roles(email, tipo_rol, accion) VALUES (email,tipo_rol,accion);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CO_din_productos` (IN `ID` INT(11))  NO SQL
SELECT co.idproducto as idproducto,co.fecha AS fecha, codin.label as campo_extra,codin.data as data
from comentarios co, comentarios_campo_dinamic codin
WHERE co.idproducto=ID AND codin.producto_id=ID AND co.activo =1 AND codin.activo=1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `CP_din_productos` (IN `ID` INT(11))  NO SQL
SELECT pr.idciudad as ciudades, prdin.label as campo, prdin.data as data FROM productos pr, productos_campo_dinamico prdin
WHERE pr.idproducto=ID AND prdin.id_producto=ID AND pr.activo=1 AND prdin.activo=1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Creacioncomentario` (IN `idproducto` INT(11), IN `ip` VARCHAR(16), IN `fecha` DATE, IN `comentario` VARCHAR(160), IN `estrellas` INT, IN `activo` INT, IN `email` VARCHAR(100))  NO SQL
INSERT INTO comentarios(idproducto, ip, fecha, comentario, estrellas, activo, email)VALUES (idproducto,ip,fecha,comentario,estrellas,activo,email)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `accion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`accion`) VALUES
('borrar'),
('editar'),
('ver');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `idciudad` varchar(3) NOT NULL,
  `nombreciudad` varchar(50) NOT NULL,
  `idpais` varchar(3) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idciudad`, `nombreciudad`, `idpais`, `activo`) VALUES
('ABA', 'Abakan', 'RUS', 0),
('ABD', 'Abadan', 'IRN', 0),
('ABJ', 'Abidjan', 'CIV', 0),
('ACC', 'Accra', 'GHA', 0),
('ADD', 'Addis Ababa', 'ETH', 0),
('ADE', 'Aden', 'YEM', 0),
('ADL', 'Adelaida', 'AUS', 0),
('ADZ', 'San Andres Is.', 'COL', 0),
('AGP', 'Malaga', 'ESP', 0),
('AJU', 'Aracaju', 'BRA', 0),
('AKL', 'Auckland', 'NZL', 0),
('ALC', 'Alicante', 'ESP', 0),
('ALG', 'Argel', 'DZA', 0),
('ALY', 'Alejandria', 'EGY', 0),
('AMS', 'Amsterdam', 'NLD', 0),
('ANC', 'Anchorage', 'USA', 0),
('ANK', 'Ankara', 'TUR', 0),
('APW', 'Apia', 'WSM', 0),
('AQP', 'Arequipa', 'PER', 0),
('ARH', 'Atenas', 'GRC', 0),
('ARI', 'Aaica', 'CHL', 0),
('ASM', 'Asmara', 'ERI', 0),
('ASU', 'Asuncion', 'PRY', 0),
('ATL', 'Atlanta', 'USA', 1),
('AUA', 'Aruba', 'ANT', 0),
('AUH', 'Abu Dhabi', 'ARE', 0),
('AVI', 'Ciego De Avila', 'CUB', 0),
('AYP', 'Ayacucho', 'PER', 0),
('AYT', 'Antalya', 'TUR', 0),
('BAH', 'Bahrain', 'BHR', 0),
('BAQ', 'Barranquilla', 'COL', 0),
('BCN', 'Barcelona', 'ESP', 1),
('BDA', 'Bermuda', 'BMU', 0),
('BEL', 'Belem', 'BRA', 0),
('BEY', 'Beirut', 'LBN', 0),
('BGI', 'Barbados', 'BRB', 0),
('BGO', 'Bergen', 'NOR', 0),
('BGW', 'Baghdad', 'IRQ', 0),
('BHD', 'Belfast', 'GBR', 0),
('BHZ', 'Belo Horizonte', 'BRA', 0),
('BIO', 'Bilbao', 'ESP', 0),
('BJL', 'Banjul', 'GMB', 0),
('BJM', 'Bujumbura', 'BDI', 0),
('BJS', 'Beijing', 'CHN', 0),
('BKK', 'Bangkok', 'THA', 0),
('BKO', 'Bamako', 'MLI', 0),
('BLQ', 'Bolonia', 'ITA', 0),
('BLZ', 'Blantyre', 'MWI', 0),
('BNA', 'Nashville', 'USA', 0),
('BOD', 'Bordeaux', 'FRA', 0),
('BOG', 'Bogota', 'COL', 0),
('BOL', 'Hartford', 'USA', 0),
('BOM', 'Bombay', 'IND', 0),
('BON', 'Bonaire', 'ANT', 0),
('BOS', 'Boston', 'USA', 0),
('BRE', 'Bremen', 'DEU', 0),
('BRI', 'Bari', 'ITA', 0),
('BRN', 'Berna', 'CHE', 0),
('BRU', 'Bruselas', 'BEL', 0),
('BSB', 'Brasilia', 'BRA', 0),
('BSL', 'Basilea', 'CHE', 0),
('BSR', 'Basra', 'IRQ', 0),
('BTS', 'Bratislava', 'SVK', 0),
('BUD', 'Budapest', 'HUN', 0),
('BUE', 'Buenos Aires', 'ARG', 1),
('BUF', 'Buffalo', 'USA', 0),
('BUH', 'Bucarest', 'ROM', 0),
('BWI', 'Baltimore', 'USA', 0),
('BWN', 'Bandar Seri', 'BRN', 0),
('BZC', 'Buzios', 'BRA', 0),
('BZE', 'Belice', 'BLZ', 0),
('BZV', 'Brazzaville', 'COG', 0),
('CAI', 'Cairo', 'EGY', 1),
('CAN', 'Guangzhou', 'CHN', 0),
('CAS', 'Casablanca', 'MAR', 0),
('CBB', 'Cochabamba', 'BOL', 0),
('CBR', 'Camberra', 'AUS', 0),
('CCS', 'Caracas', 'VEN', 0),
('CCU', 'Calcuta', 'IND', 0),
('CGB', 'Cuiaba', 'BRA', 0),
('CGN', 'Colonia/Bonn', 'DEU', 0),
('CHC', 'Christchurch', 'NZL', 0),
('CHI', 'Chicago', 'USA', 0),
('CIX', 'Chiclayo', 'PER', 0),
('CKY', 'Conakry', 'GIN', 0),
('CLE', 'Cleveland', 'USA', 0),
('CLO', 'Cali', 'COL', 0),
('CMB', 'Colombo', 'LKA', 0),
('CMH', 'Columbus', 'USA', 0),
('CNS', 'Cairns', 'AUS', 0),
('COO', 'Cotonou', 'BEN', 0),
('CPH', 'Copenhague', 'DNK', 0),
('CPT', 'Ciudad Del Cabo', 'ZAF', 0),
('CTG', 'Cartagena', 'COL', 0),
('CUN', 'Cancun', 'MEX', 1),
('CUR', 'Curacao', 'ANT', 0),
('CVG', 'Cincinati', 'USA', 0),
('CWB', 'Curitiba', 'BRA', 0),
('CYO', 'Cayo Largo Del Sur', 'CUB', 0),
('CYR', 'Colonia', 'URY', 0),
('CZM', 'Cozumel', 'MEX', 0),
('DAC', 'Dhaka', 'BGD', 0),
('DAY', 'Dayton', 'USA', 0),
('DBV', 'Dubrobvnik', 'HRV', 0),
('DEL', 'Delhi', 'IND', 0),
('DEN', 'Denver', 'USA', 0),
('DFW', 'Dallas', 'USA', 0),
('DHA', 'Dhahran', 'SAU', 0),
('DIR', 'Dire Dawa', 'ETH', 0),
('DKR', 'Dakar', 'SEN', 0),
('DLC', 'Dalian', 'CHN', 0),
('DOH', 'Doha', 'QAT', 0),
('DPS', 'Denpasar', 'IDN', 0),
('DRS', 'Dresde', 'DEU', 0),
('DTT', 'Detroit', 'USA', 0),
('DUB', 'Dublin', 'GBR', 0),
('DUS', 'Dusseldorf', 'DEU', 0),
('DXB', 'Dubai', 'ARE', 0),
('EDI', 'Edimburgo', 'GBR', 0),
('EMA', 'East Midlands', 'GBR', 0),
('EWR', 'Newark', 'USA', 0),
('FAO', 'Faro', 'PRT', 0),
('FLN', 'Florianopolis', 'BRA', 0),
('FLR', 'Florencia', 'ITA', 0),
('FOR', 'Fortaleza', 'BRA', 0),
('FRA', 'Frankfurt', 'DEU', 0),
('GDL', 'Guadalajara', 'MEX', 0),
('GEO', 'Georgetown', 'GUY', 0),
('GIB', 'Gibraltar', 'GBR', 0),
('GLA', 'Glasgow', 'GBR', 0),
('GND', 'Granada', 'GRD', 0),
('GOT', 'Gotemburgo', 'SWE', 0),
('GUA', 'Guatemala', 'GTM', 0),
('GVA', 'Ginebra', 'CHE', 0),
('GYE', 'Guayaquil', 'ECU', 0),
('GYN', 'Goiania', 'BRA', 0),
('HAM', 'Hamburgo', 'DEU', 0),
('HAN', 'Handi', 'VNM', 0),
('HAV', 'La Habana', 'CUB', 0),
('HBA', 'Hobart', 'AUS', 0),
('HEL', 'Helsinki', 'FIN', 0),
('HKG', 'Hong Kong', 'HKG', 0),
('HKT', 'Phuket', 'THA', 0),
('HNL', 'Honolulu', 'USA', 0),
('HOG', 'Holguin', 'CUB', 0),
('IBZ', 'Ibiza', 'ESP', 0),
('IEV', 'Kiev', 'UKR', 0),
('IGU', 'Foz Do Iguazu', 'BRA', 0),
('IND', 'Indianappolis', 'USA', 0),
('IOS', 'Ilheus', 'BRA', 0),
('IPC', 'Is. De Pascua', 'CHL', 0),
('IQQ', 'Iquique', 'CHL', 0),
('IQT', 'Iquitos', 'PER', 0),
('ISB', 'Islamabad', 'PAK', 0),
('IST', 'Estambul', 'TUR', 0),
('JED', 'Jeddah', 'SAU', 0),
('JIB', 'Yibuti', 'DJI', 0),
('JKT', 'Jakarta', 'IDN', 0),
('JNB', 'Johannesburgo', 'ZAF', 0),
('JPA', 'Joao Pessoa', 'BRA', 0),
('JRS', 'Jerusalem', 'ISR', 0),
('JUL', 'Juliaca', 'PER', 0),
('KAN', 'Kano', 'NGA', 0),
('KHH', 'Kaohsiung', 'TWN', 0),
('KHI', 'Karachi', 'PAK', 0),
('KIN', 'Kingston', 'JAM', 0),
('KLU', 'Klagenfurt', 'AUT', 0),
('KRS', 'Kristiansand', 'NOR', 0),
('KRT', 'Khartoum', 'SDN', 0),
('KTM', 'Katmandu', 'NPL', 0),
('KUL', 'Kuala Lumpur', 'MYS', 0),
('KWI', 'Kuwait', 'KWT', 0),
('LAD', 'Luanda', 'AGO', 0),
('LAS', 'Las Vegas', 'USA', 0),
('LAX', 'Los Angeles', 'USA', 0),
('LBA', 'Leeds', 'GBR', 0),
('LBV', 'Libreville', 'GAB', 0),
('LCG', 'La Coru�a', 'ESP', 0),
('LEI', 'Almeira', 'ESP', 0),
('LEJ', 'Leipzig', 'DEU', 0),
('LFW', 'Lome', 'TGO', 0),
('LIL', 'Lille', 'FRA', 0),
('LIM', 'Lima', 'PER', 0),
('LIS', 'Lisboa', 'PRT', 0),
('LJU', 'Ljubljana', 'SVN', 0),
('LLW', 'Lilongwe', 'MWI', 0),
('LNZ', 'Linz', 'AUT', 0),
('LON', 'Londres', 'GBR', 0),
('LOS', 'Lagos', 'NGA', 1),
('LPB', 'La Paz', 'BOL', 0),
('LSC', 'La Serena', 'CHL', 0),
('LUN', 'Lusaka', 'ZMB', 0),
('LUX', 'Luxemburgo', 'LUX', 0),
('LYS', 'Lyon', 'FRA', 0),
('MAA', 'Madras', 'IND', 0),
('MAD', 'Madrid', 'ESP', 1),
('MAH', 'Menorca', 'ESP', 0),
('MAO', 'Manaos', 'BRA', 0),
('MAR', 'Maracaibo', 'VEN', 0),
('MBJ', 'Montego Bay', 'JAM', 0),
('MCT', 'Muscat', 'OMN', 0),
('MCZ', 'Maceio', 'BRA', 0),
('MDE', 'Medellin', 'COL', 0),
('MEL', 'Melbourne', 'AUS', 0),
('MEM', 'Memphis', 'USA', 0),
('MEX', 'Mexico, Ciudad De', 'MEX', 0),
('MGA', 'Managua', 'NIC', 0),
('MIA', 'Miami', 'USA', 1),
('MID', 'Merida', 'MEX', 0),
('MIL', 'Milan', 'ITA', 0),
('MJV', 'Murcia', 'ESP', 0),
('MKC', 'Kansas', 'USA', 0),
('MKE', 'Milwaukee', 'USA', 0),
('MLA', 'Malta', 'MLT', 0),
('MLH', 'Mulhouse', 'FRA', 0),
('MLW', 'Monrovia', 'LBR', 0),
('MMA', 'Malmo', 'SWE', 0),
('MME', 'Teesside', 'GBR', 0),
('MNL', 'Manila', 'PHL', 0),
('MOW', 'Moscu', 'RUS', 0),
('MPM', 'Maputo', 'MOZ', 0),
('MRS', 'Marsella', 'FRA', 0),
('MSP', 'Minneapolis', 'USA', 0),
('MSY', 'New Orleans', 'USA', 0),
('MTY', 'Monterrey', 'MEX', 0),
('MUC', 'Munich', 'DEU', 1),
('MVD', 'Montevideo', 'URY', 0),
('MZO', 'Manzanillo', 'CUB', 0),
('NAN', 'Nadi', 'FJI', 0),
('NAP', 'Napoles', 'ITA', 0),
('NAS', 'Nassau', 'BHS', 0),
('NAT', 'Natal', 'BRA', 0),
('NCE', 'Niza', 'FRA', 0),
('NGO', 'Nagoya', 'JPN', 0),
('NIC', 'Nicosia', 'CYP', 0),
('NIM', 'Niamey', 'NGA', 0),
('NKC', 'Nouakchott', 'MRT', 0),
('NYC', 'New York', 'USA', 0),
('ODS', 'Odesa', 'UKR', 0),
('OKA', 'Okinawa', 'JPN', 0),
('OPO', 'Oporto', 'PRT', 0),
('ORF', 'Norfolk', 'USA', 0),
('ORL', 'Orlando', 'USA', 0),
('OSA', 'Osaka', 'JPN', 0),
('OSL', 'Oslo', 'NOR', 0),
('OVD', 'Oviedo', 'ESP', 0),
('PAR', 'Paris', 'FRA', 1),
('PDP', 'Punta Del Este', 'URY', 0),
('PEM', 'Puerto Maldonado', 'PER', 0),
('PEN', 'Penang', 'MYS', 0),
('PER', 'Perth', 'AUS', 0),
('PFO', 'Paphos', 'CYP', 0),
('PHL', 'Filadelfia', 'USA', 0),
('PHX', 'Phoenix', 'USA', 0),
('PIE', 'St. Petersburgo', 'USA', 0),
('PIT', 'Pittsburgo', 'USA', 0),
('PIU', 'Piura', 'PER', 0),
('PMC', 'Puerto Montt', 'CHL', 0),
('PMI', 'Palma De Mallorca', 'ESP', 0),
('PMO', 'Palermo', 'ITA', 0),
('PNA', 'Pamplona', 'ESP', 0),
('PTY', 'Panama', 'PAN', 0),
('PUJ', 'Punta Cana', 'DOM', 0),
('PUQ', 'Punta Arenas', 'CHL', 0),
('PVR', 'Puerto Vallarta', 'MEX', 0),
('RAK', 'Marrakech', 'MAR', 0),
('RBA', 'Rabat', 'MAR', 0),
('RDU', 'Raleigh', 'USA', 0),
('REC', 'Recife', 'BRA', 0),
('REK', 'Reykjavyk', 'ISL', 0),
('RIC', 'Richmond', 'USA', 0),
('RIO', 'Rio De Janeiro', 'BRA', 1),
('ROC', 'Rochester', 'USA', 0),
('ROM', 'Roma', 'ITA', 1),
('RUH', 'Riyadh', 'SAU', 0),
('SAL', 'San Salvador', 'SLV', 0),
('SAN', 'San Diego', 'USA', 0),
('SAO', 'San Pablo', 'BRA', 0),
('SAP', 'San Pedro Sula', 'HND', 0),
('SDQ', 'Santo Domingo', 'DOM', 0),
('SEA', 'Seattle', 'USA', 0),
('SEL', 'Seul', 'KOR', 1),
('SFO', 'San Francisco', 'USA', 0),
('SGN', 'Ho Chi Minh', 'VNM', 0),
('SHA', 'Shanghai', 'CHN', 0),
('SHJ', 'Sharjah', 'ARE', 0),
('SID', 'Ilha Do Sal', 'CPV', 0),
('SIN', 'Singapur', 'SGP', 0),
('SJC', 'San Jose ( C.A.L )', 'USA', 0),
('SJO', 'San Jose ( C. R. )', 'CRI', 0),
('SJU', 'San Juan ( P. R )', 'PRI', 0),
('SLC', 'Salt Lake City', 'USA', 0),
('SLZ', 'San Luis', 'BRA', 0),
('SNN', 'Shannon', 'GBR', 0),
('SOF', 'Sofia', 'BGR', 0),
('SSA', 'Salvador', 'BRA', 0),
('STO', 'Estocolmo', 'SWE', 0),
('STR', 'Stuttgart', 'DEU', 0),
('SVQ', 'Sevilla', 'ESP', 0),
('SXB', 'Estrasburgo', 'FRA', 1),
('SXM', 'St. Maarten', 'ANT', 0),
('SYD', 'Sydney', 'AUS', 1),
('SZG', 'Salzburgo', 'AUT', 0),
('TBP', 'Tumbes', 'PER', 0),
('TCQ', 'Tacna', 'PER', 0),
('TGU', 'Tegucigalpa', 'HND', 0),
('THR', 'Teheran', 'IRN', 0),
('TIA', 'Tirana', 'ALB', 0),
('TJA', 'Tarija', 'BOL', 0),
('TLV', 'Tel Aviv', 'ISR', 0),
('TNG', 'Tanger', 'MAR', 0),
('TNR', 'Antananarivo', 'MDG', 0),
('TPA', 'Tampa', 'USA', 0),
('TPE', 'Taipei', 'TWN', 0),
('TPP', 'Tarapoto', 'PER', 0),
('TRN', 'Torino', 'ITA', 0),
('TRU', 'Trujillo', 'PER', 0),
('TSR', 'Timisoara', 'ROM', 0),
('TUS', 'Tucson', 'USA', 0),
('TYO', 'Tokio', 'JPN', 1),
('UIO', 'Quito', 'ECU', 0),
('ULN', 'Ulan Bator', 'MNG', 0),
('VAP', 'Valparaiso', 'CHL', 0),
('VER', 'Berlin', 'DEU', 0),
('VER', 'Veracruz', 'MEX', 0),
('VGO', 'Vigo', 'ESP', 0),
('VIE', 'Viena', 'AUT', 0),
('VIT', 'Vitoria', 'ESP', 0),
('VLC', 'Valencia', 'ESP', 0),
('VLN', 'Valencia', 'VEN', 0),
('VRA', 'Varadero', 'CUB', 0),
('WAS', 'Washington D. C.', 'USA', 0),
('WAW', 'Varsovia', 'POL', 0),
('WLG', 'Wellington', 'NZL', 0),
('YAO', 'Yaounde', 'CMR', 0),
('YEG', 'Edmonton', 'CAN', 0),
('YOW', 'Ottawa', 'CAN', 0),
('YQG', 'Windsor', 'CAN', 0),
('YTO', 'Toronto', 'CAN', 1),
('YUL', 'Montreal', 'CAN', 0),
('YVR', 'Vancouver', 'CAN', 0),
('YWG', 'Winnipeg', 'CAN', 0),
('YYC', 'Calgary', 'CAN', 0),
('YYJ', 'Victoria', 'CAN', 0),
('ZAG', 'Zagreb', 'HRV', 0),
('ZAZ', 'Zaragoza', 'ESP', 0),
('ZCO', 'Temuco', 'CHL', 0),
('ZIH', 'Ixtapa', 'MEX', 0),
('ZLO', 'Manzanillo', 'MEX', 0),
('ZRH', 'Zurich', 'CHE', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idproducto` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(160) NOT NULL,
  `estrellas` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idproducto`, `ip`, `fecha`, `comentario`, `estrellas`, `activo`, `email`) VALUES
(8, '104', '2020-12-11', 'Esto es una prueba', 5, 1, 'admin@gmail.com'),
(8, '::1', '2020-12-12', 'test', 4, 1, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_campos_dinamicos_data`
--

CREATE TABLE `comentarios_campos_dinamicos_data` (
  `id` int(2) NOT NULL,
  `id_producto` int(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `detalle` varchar(300) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios_campos_dinamicos_data`
--

INSERT INTO `comentarios_campos_dinamicos_data` (`id`, `id_producto`, `email`, `detalle`, `activo`) VALUES
(27, 8, 'admin@gmail.com', 'Pepe', 0),
(28, 8, 'admin@gmail.com', '4966-3463', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_campo_dinamic`
--

CREATE TABLE `comentarios_campo_dinamic` (
  `id` int(3) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `activo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios_campo_dinamic`
--

INSERT INTO `comentarios_campo_dinamic` (`id`, `producto_id`, `label`, `activo`) VALUES
(23, 8, 'Apellido', 1),
(24, 8, 'Telefono', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `continentes`
--

CREATE TABLE `continentes` (
  `idcontinente` varchar(2) NOT NULL,
  `nombrecontinente` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `continentes`
--

INSERT INTO `continentes` (`idcontinente`, `nombrecontinente`, `activo`) VALUES
('0', 'Todo', 1),
('AF', 'África', 1),
('AM', 'América', 1),
('AS', 'Asia', 1),
('EU', 'Europa', 1),
('OC', 'Oceania', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `idpais` varchar(3) NOT NULL,
  `nombrepais` varchar(50) NOT NULL,
  `idcontinente` varchar(2) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`idpais`, `nombrepais`, `idcontinente`, `activo`) VALUES
('ABW', 'Aruba', 'AM', 0),
('AGO', 'Angola', 'AF', 0),
('AIA', 'Anguilla', 'AM', 0),
('ALB', 'Albania', 'EU', 0),
('AND', 'Andorra', 'EU', 0),
('ANT', 'Antillas Holandesas', 'OC', 0),
('ARE', 'Emiratos Arabes', 'AS', 0),
('ARG', 'Argentina', 'AM', 1),
('ARM', 'Armenia', 'AS', 0),
('ASM', 'Samoa Americana', 'OC', 0),
('ATG', 'Antigua y Barbuda', 'AM', 0),
('AUS', 'Australia', 'OC', 1),
('AUT', 'Austria', 'EU', 0),
('AZE', 'Azerbaijan', 'AS', 0),
('BDI', 'Burundi', 'AF', 0),
('BEL', 'Belgica', 'EU', 0),
('BEN', 'Benin', 'AF', 0),
('BFA', 'Burkina Faso', 'AF', 0),
('BGD', 'Bangladesh', 'AS', 0),
('BGR', 'Bulgaria', 'EU', 0),
('BHR', 'Bahrain', 'AS', 0),
('BHS', 'Bahamas', 'AM', 0),
('BIH', 'Bosnia Herzegovina', 'EU', 0),
('BLR', 'Belarus', 'EU', 0),
('BLZ', 'Belice', 'AM', 0),
('BMU', 'Bermuda', 'AM', 0),
('BOL', 'Bolivia', 'AM', 0),
('BRA', 'Brasil', 'AM', 1),
('BRB', 'Barbados', 'AM', 0),
('BRN', 'Brunei', 'AS', 0),
('BTN', 'Bhutan', 'AS', 0),
('BWA', 'Botswana', 'AF', 0),
('CAF', 'República Centro-Africana', 'AF', 0),
('CAN', 'Canadá', 'AM', 1),
('CCK', 'Cocos (Keeling) Islands', 'OC', 0),
('CHE', 'Suiza', 'EU', 0),
('CHL', 'Chile', 'AM', 0),
('CHN', 'China', 'AS', 0),
('CIV', 'Costa de Marfil', 'AF', 0),
('CMR', 'Camerún', 'AF', 0),
('COD', 'República Democratica del Congo', 'AF', 0),
('COG', 'Congo', 'AF', 0),
('COK', 'Islas Cook', 'OC', 0),
('COL', 'Colombia', 'AM', 0),
('COM', 'Comoras', 'AF', 0),
('CPV', 'Cabo Verde', 'AF', 0),
('CRI', 'Costa Rica', 'AM', 0),
('CUB', 'Cuba', 'AM', 0),
('CXR', 'Islas de Navidad', 'OC', 0),
('CYM', 'Islas Cayman', 'AM', 0),
('CYP', 'Chipre', 'AS', 0),
('CZE', 'Republica Checa', 'EU', 0),
('DEU', 'Alemania', 'EU', 1),
('DJI', 'Yibuti', 'AF', 0),
('DMA', 'Dominica', 'AM', 0),
('DNK', 'Dinamarca', 'EU', 0),
('DOM', 'Republica Dominicada', 'AM', 0),
('DZA', 'Argelia', 'AF', 0),
('ECU', 'Ecuador', 'AM', 0),
('EGY', 'Egipto', 'AF', 1),
('ERI', 'Eritrea', 'AF', 0),
('ESH', 'Sahara Occidental', 'AF', 0),
('ESP', 'España', 'EU', 1),
('EST', 'Estonia', 'EU', 0),
('ETH', 'Etiopía', 'AF', 0),
('FIN', 'Finlandia', 'EU', 0),
('FJI', 'Islas Fiji', 'OC', 0),
('FLK', 'Islas Malvinas', 'AM', 0),
('FRA', 'Francia', 'EU', 1),
('FRO', 'Islas Feroes', 'EU', 0),
('FSM', 'Micronesia', 'OC', 0),
('GAB', 'Gabon', 'AF', 0),
('GBR', 'Reino Unido', 'EU', 0),
('GEO', 'Georgia', 'AS', 0),
('GHA', 'Ghana', 'AF', 0),
('GIB', 'Gibraltar', 'EU', 0),
('GIN', 'Guinea', 'AF', 0),
('GLP', 'Guadeloupe', 'AM', 0),
('GMB', 'Gambia', 'AF', 0),
('GNB', 'Guinea-Bissau', 'AF', 0),
('GNQ', 'Guinea Equatorial', 'AF', 0),
('GRC', 'Grecia', 'EU', 0),
('GRD', 'Granada', 'AM', 0),
('GRL', 'Groenlandia', 'AM', 0),
('GTM', 'Guatemala', 'AM', 0),
('GUF', 'Guyana Francesa', 'AM', 0),
('GUM', 'Guam', 'OC', 0),
('GUY', 'Guyana', 'AM', 0),
('HKG', 'Hong Kong', 'AS', 0),
('HND', 'Honduras', 'AM', 0),
('HRV', 'Croacia', 'EU', 0),
('HTI', 'Haiti', 'AM', 0),
('HUN', 'Hungria', 'EU', 0),
('IDN', 'Indonesia', 'AS', 0),
('IND', 'India', 'AS', 0),
('IRN', 'Iran', 'AS', 0),
('IRQ', 'Iraq', 'AS', 0),
('ISL', 'Islandia', 'EU', 0),
('ISR', 'Israel', 'AS', 0),
('ITA', 'Italia', 'EU', 1),
('JAM', 'Jamaica', 'AM', 0),
('JOR', 'Jordan', 'AS', 0),
('JPN', 'Japon', 'AS', 1),
('KAZ', 'Kazakstan', 'AS', 0),
('KEN', 'Kenia', 'AF', 0),
('KGZ', 'Kyrgyzstan', 'AS', 0),
('KHM', 'Cambodia', 'AS', 0),
('KIR', 'Kiribati', 'OC', 0),
('KOR', 'Korea Del Sur', 'AS', 1),
('KWT', 'Kuwait', 'AS', 0),
('LAO', 'Laos', 'AS', 0),
('LBN', 'Libano', 'AS', 0),
('LBR', 'Liberia', 'AF', 0),
('LCA', 'Santa Lucia', 'AM', 0),
('LIE', 'Liechtenstein', 'EU', 0),
('LKA', 'Sri Lanka', 'AS', 0),
('LSO', 'Lesoto', 'AF', 0),
('LTU', 'Lituania', 'EU', 0),
('LUX', 'Luxemburgo', 'EU', 0),
('LVA', 'Letonia', 'EU', 0),
('MAC', 'Macao', 'AS', 0),
('MAR', 'Morruecos', 'AF', 0),
('MCO', 'Monaco', 'EU', 0),
('MDA', 'Moldavia', 'EU', 0),
('MDG', 'Madagascar', 'AF', 0),
('MDV', 'Maldivas', 'AS', 0),
('MEX', 'Mexico', 'AM', 1),
('MKD', 'Macedonia', 'EU', 0),
('MLI', 'Mali', 'AF', 0),
('MLT', 'Malta', 'EU', 0),
('MMR', 'Myanmar', 'AS', 0),
('MNG', 'Mongolia', 'AS', 0),
('MOZ', 'Mozambique', 'AF', 0),
('MRT', 'Mauritania', 'AF', 0),
('MSR', 'Montserrat', 'AM', 0),
('MWI', 'Malawi', 'AF', 0),
('MYS', 'Malasia', 'AS', 0),
('NGA', 'Nigeria', 'AF', 1),
('NIC', 'Nicaragua', 'AM', 0),
('NLD', 'Holanda', 'EU', 0),
('NOR', 'Noruega', 'EU', 0),
('NPL', 'Nepal', 'AS', 0),
('NZL', 'Nueva Zelanda', 'OC', 1),
('OMN', 'Oman', 'AS', 0),
('PAK', 'Pakistan', 'AS', 0),
('PAN', 'Panama', 'AM', 0),
('PER', 'Perú', 'AM', 0),
('PHL', 'Filipinas', 'AS', 0),
('PLW', 'Palau', 'OC', 0),
('PNG', 'Papua Nueva Guinea', 'OC', 0),
('POL', 'Polonia', 'EU', 0),
('PRI', 'Puerto Rico', 'AM', 0),
('PRK', 'Korea del Norte', 'AS', 0),
('PRT', 'Portugal', 'EU', 0),
('PRY', 'Paraguay', 'AM', 0),
('PSE', 'Palestina', 'AS', 0),
('PYF', 'Polynesia Francesa', 'OC', 0),
('QAT', 'Qatar', 'AS', 0),
('ROM', 'Rumania', 'EU', 0),
('RUS', 'Rusia Federal', 'EU', 0),
('RWA', 'Rwanda', 'AF', 0),
('SAU', 'Arabia Saudita', 'AS', 0),
('SDN', 'Sudan', 'AF', 0),
('SEN', 'Senegal', 'AF', 0),
('SGP', 'Singapur', 'AS', 0),
('SLB', 'Islands Salomon', 'OC', 0),
('SLV', 'El Salvador', 'AM', 0),
('SMR', 'San Marino', 'EU', 0),
('SUR', 'Suriname', 'AM', 0),
('SVK', 'Eslovaquia', 'EU', 0),
('SVN', 'Eslovenia', 'EU', 0),
('SWE', 'Suecia', 'EU', 0),
('SYR', 'Syria', 'AS', 0),
('TGO', 'Togo', 'AF', 0),
('THA', 'Tailandia', 'AS', 0),
('TJK', 'Kasajistan', 'AS', 0),
('TTO', 'Trinidad y Tobago', 'AM', 0),
('TUN', 'Tunes', 'AF', 0),
('TUR', 'Turquia', 'AS', 0),
('TWN', 'Taiwan', 'AS', 0),
('TZA', 'Tanzania', 'AF', 0),
('UKR', 'Ucraine', 'EU', 0),
('URY', 'Uruguay', 'AM', 0),
('USA', 'EEUU', 'AM', 1),
('VAT', 'Vaticano', 'EU', 0),
('VEN', 'Venezuela', 'AM', 0),
('VNM', 'Vietnam', 'AS', 0),
('WSM', 'Samoa', 'OC', 0),
('YEM', 'Yemen', 'AS', 0),
('ZAF', 'Sur Africana', 'AF', 0),
('ZMB', 'Zambia', 'AF', 0),
('ZWE', 'Zimbawe', 'AF', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `idciudad` varchar(3) NOT NULL,
  `precio` int(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `detalle` varchar(1000) NOT NULL,
  `url` varchar(300) NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `idciudad`, `precio`, `descripcion`, `detalle`, `url`, `destacado`, `activo`) VALUES
(1, 'PAR', 45020, 'VISITANDO: Francia PARIS - BORDEUX - MARSELLA - NIZA - RENNES - CANNES.', 'Francia Aéreos ES/FE/ES, 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/francia-paris.jpeg', 1, 1),
(2, 'ROM', 43000, 'VISITANDO: Italia ROMA, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', 'España Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out. City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/italia-roma.jpeg', 1, 1),
(3, 'MUC', 44000, 'VISITANDO: Alemania, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', 'Alemania Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out. City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/alemania-hamburgo.jpeg', 1, 1),
(4, 'MIA', 20000, 'Estados Unidos Visitando: Miami/ Quebec / Montreal / Ottawa / Toronto / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Estados Unidos Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out. City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/eeuu-miami.jpeg', 1, 1),
(5, 'YTO', 20000, 'Canada Visitando: Toronto / Quebec / Montreal / Ottawa / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Canada Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/canada-toronto.jpeg', 1, 1),
(6, 'CUN', 20000, 'Mexico Visitando: Cancún / Playa del Carmen/ Montreal / Ottawa / Toronto / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'México Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/mexico-cancun.jpeg', 1, 1),
(7, 'RIO', 60030, 'INCLUYE: Brasil GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines. ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Brasil Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/brasil-riodejaneiro.jpeg', 1, 1),
(8, 'BUE', 60030, 'INCLUYE: Argentina GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines).  ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Argentina Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/argentina-buenosaires.jpeg', 1, 1),
(9, 'TYO', 36200, 'VISITANDO: Japon Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Japon Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/japon-tokyo.jpeg', 1, 1),
(10, 'SEL', 36200, 'VISITANDO: Corea del Sur Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Corea del Sur Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/korea-seul.jpeg', 1, 1),
(11, 'CAI', 36020, 'VISITANDO: Egipto/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Egipto Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/egipto-elcairo.jpeg', 1, 1),
(12, 'LOS', 36550, 'VISITANDO: Nigeria/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Nigeria Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/nigeria-lagos.jpeg', 1, 1),
(13, 'SYD', 360630, 'VISITANDO: Australia/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Australia Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/australia-sydney.jpeg', 1, 1),
(14, 'BCN', 45010, 'VISITANDO: España MADRID, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', ' España Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out,  City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/españa-barcelona.jpeg', 1, 1),
(15, 'MAD', 45010, 'VISITANDO: España MADRID, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', ' España Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out,  City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/españa-madrid.jpeg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_campo_dinamico`
--

CREATE TABLE `productos_campo_dinamico` (
  `id` int(3) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `activo` int(1) NOT NULL,
  `data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos_campo_dinamico`
--

INSERT INTO `productos_campo_dinamico` (`id`, `id_producto`, `label`, `activo`, `data`) VALUES
(8, 8, 'Traslados', 1, 'No incluidos'),
(9, 4, 'Traslados2', 2, 'Incluidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `email` varchar(100) NOT NULL,
  `tipo_rol` varchar(20) NOT NULL,
  `accion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`email`, `tipo_rol`, `accion`) VALUES
('admin@gmail.com', 'admin', 'editar'),
('administrator@gmail.com', 'usuarios', 'ver');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_rol`
--

CREATE TABLE `tipo_rol` (
  `idrol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_rol`
--

INSERT INTO `tipo_rol` (`idrol`) VALUES
('admin'),
('usuarios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `edad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email`, `password`, `nombre`, `apellido`, `edad`) VALUES
('admin@gmail.com', '$2y$10$4boIyFdO4FWr3D5RRs5tCeVPBc1668HYTmOAoYib.O0OcIprOkcHy', 'admin', 'admin', 33),
('administrator@gmail.com', '$2y$10$vCUN5mD4AacQHtnCLugZYuwAzRDcyBcUO62AxGOkfcOHjWxxoI6sC', 'prueba', 'test', 33);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`accion`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`idciudad`,`idpais`) USING BTREE,
  ADD KEY `idpais` (`idpais`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idproducto`,`ip`,`fecha`),
  ADD KEY `email` (`email`);

--
-- Indices de la tabla `comentarios_campos_dinamicos_data`
--
ALTER TABLE `comentarios_campos_dinamicos_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`) USING BTREE;

--
-- Indices de la tabla `comentarios_campo_dinamic`
--
ALTER TABLE `comentarios_campo_dinamic`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `continentes`
--
ALTER TABLE `continentes`
  ADD PRIMARY KEY (`idcontinente`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`idpais`,`idcontinente`),
  ADD UNIQUE KEY `nombrepais` (`nombrepais`),
  ADD KEY `idcontinente` (`idcontinente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`) USING BTREE,
  ADD KEY `productos_ibfk_1` (`idciudad`) USING BTREE;

--
-- Indices de la tabla `productos_campo_dinamico`
--
ALTER TABLE `productos_campo_dinamico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productoid` (`id_producto`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`email`,`tipo_rol`,`accion`) USING BTREE,
  ADD KEY `tipo_rol` (`tipo_rol`),
  ADD KEY `accion` (`accion`);

--
-- Indices de la tabla `tipo_rol`
--
ALTER TABLE `tipo_rol`
  ADD PRIMARY KEY (`idrol`),
  ADD UNIQUE KEY `idrol` (`idrol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios_campos_dinamicos_data`
--
ALTER TABLE `comentarios_campos_dinamicos_data`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `comentarios_campo_dinamic`
--
ALTER TABLE `comentarios_campo_dinamic`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT de la tabla `productos_campo_dinamico`
--
ALTER TABLE `productos_campo_dinamico`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`idpais`) REFERENCES `paises` (`idpais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarios_campos_dinamicos_data`
--
ALTER TABLE `comentarios_campos_dinamicos_data`
  ADD CONSTRAINT `comentarios_campos_dinamicos_data_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `comentarios_campo_dinamic` (`producto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comentarios_campo_dinamic`
--
ALTER TABLE `comentarios_campo_dinamic`
  ADD CONSTRAINT `comentarios_campo_dinamic_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `paises`
--
ALTER TABLE `paises`
  ADD CONSTRAINT `paises_ibfk_1` FOREIGN KEY (`idcontinente`) REFERENCES `continentes` (`idcontinente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idciudad`) REFERENCES `ciudades` (`idciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos_campo_dinamico`
--
ALTER TABLE `productos_campo_dinamico`
  ADD CONSTRAINT `product_campos_din` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`idproducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuarios` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `roles_ibfk_2` FOREIGN KEY (`tipo_rol`) REFERENCES `tipo_rol` (`idrol`),
  ADD CONSTRAINT `roles_ibfk_3` FOREIGN KEY (`accion`) REFERENCES `acciones` (`accion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
