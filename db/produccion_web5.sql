-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2020 a las 00:07:51
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `produccion_web4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `idciudad` varchar(3) NOT NULL,
  `nombreciudad` varchar(50) NOT NULL,
  `idpais` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idciudad`, `nombreciudad`, `idpais`) VALUES
('ABA', 'Abakan', 'RUS'),
('ABD', 'Abadan', 'IRN'),
('ABJ', 'Abidjan', 'CIV'),
('ACC', 'Accra', 'GHA'),
('ADD', 'Addis Ababa', 'ETH'),
('ADE', 'Aden', 'YEM'),
('ADL', 'Adelaida', 'AUS'),
('ADZ', 'San Andres Is.', 'COL'),
('AGP', 'Malaga', 'ESP'),
('AJU', 'Aracaju', 'BRA'),
('AKL', 'Auckland', 'NZL'),
('ALC', 'Alicante', 'ESP'),
('ALG', 'Argel', 'DZA'),
('ALY', 'Alejandria', 'EGY'),
('AMS', 'Amsterdam', 'NLD'),
('ANC', 'Anchorage', 'USA'),
('ANK', 'Ankara', 'TUR'),
('APW', 'Apia', 'WSM'),
('AQP', 'Arequipa', 'PER'),
('ARH', 'Atenas', 'GRC'),
('ARI', 'Aaica', 'CHL'),
('ASM', 'Asmara', 'ERI'),
('ASU', 'Asuncion', 'PRY'),
('ATL', 'Atlanta', 'USA'),
('AUA', 'Aruba', 'ANT'),
('AUH', 'Abu Dhabi', 'ARE'),
('AVI', 'Ciego De Avila', 'CUB'),
('AYP', 'Ayacucho', 'PER'),
('AYT', 'Antalya', 'TUR'),
('BAH', 'Bahrain', 'BHR'),
('BAQ', 'Barranquilla', 'COL'),
('BCN', 'Barcelona', 'ESP'),
('BDA', 'Bermuda', 'BMU'),
('BEL', 'Belem', 'BRA'),
('BEY', 'Beirut', 'LBN'),
('BGI', 'Barbados', 'BRB'),
('BGO', 'Bergen', 'NOR'),
('BGW', 'Baghdad', 'IRQ'),
('BHD', 'Belfast', 'GBR'),
('BHZ', 'Belo Horizonte', 'BRA'),
('BIO', 'Bilbao', 'ESP'),
('BJL', 'Banjul', 'GMB'),
('BJM', 'Bujumbura', 'BDI'),
('BJS', 'Beijing', 'CHN'),
('BKK', 'Bangkok', 'THA'),
('BKO', 'Bamako', 'MLI'),
('BLQ', 'Bolonia', 'ITA'),
('BLZ', 'Blantyre', 'MWI'),
('BNA', 'Nashville', 'USA'),
('BOD', 'Bordeaux', 'FRA'),
('BOG', 'Bogota', 'COL'),
('BOL', 'Hartford', 'USA'),
('BOM', 'Bombay', 'IND'),
('BON', 'Bonaire', 'ANT'),
('BOS', 'Boston', 'USA'),
('BRE', 'Bremen', 'DEU'),
('BRI', 'Bari', 'ITA'),
('BRN', 'Berna', 'CHE'),
('BRU', 'Bruselas', 'BEL'),
('BSB', 'Brasilia', 'BRA'),
('BSL', 'Basilea', 'CHE'),
('BSR', 'Basra', 'IRQ'),
('BTS', 'Bratislava', 'SVK'),
('BUD', 'Budapest', 'HUN'),
('BUE', 'Buenos Aires', 'ARG'),
('BUF', 'Buffalo', 'USA'),
('BUH', 'Bucarest', 'ROM'),
('BWI', 'Baltimore', 'USA'),
('BWN', 'Bandar Seri', 'BRN'),
('BZC', 'Buzios', 'BRA'),
('BZE', 'Belice', 'BLZ'),
('BZV', 'Brazzaville', 'COG'),
('CAI', 'Cairo', 'EGY'),
('CAN', 'Guangzhou', 'CHN'),
('CAS', 'Casablanca', 'MAR'),
('CBB', 'Cochabamba', 'BOL'),
('CBR', 'Camberra', 'AUS'),
('CCS', 'Caracas', 'VEN'),
('CCU', 'Calcuta', 'IND'),
('CGB', 'Cuiaba', 'BRA'),
('CGN', 'Colonia/Bonn', 'DEU'),
('CHC', 'Christchurch', 'NZL'),
('CHI', 'Chicago', 'USA'),
('CIX', 'Chiclayo', 'PER'),
('CKY', 'Conakry', 'GIN'),
('CLE', 'Cleveland', 'USA'),
('CLO', 'Cali', 'COL'),
('CMB', 'Colombo', 'LKA'),
('CMH', 'Columbus', 'USA'),
('CNS', 'Cairns', 'AUS'),
('COO', 'Cotonou', 'BEN'),
('CPH', 'Copenhague', 'DNK'),
('CPT', 'Ciudad Del Cabo', 'ZAF'),
('CTG', 'Cartagena', 'COL'),
('CUN', 'Cancun', 'MEX'),
('CUR', 'Curacao', 'ANT'),
('CVG', 'Cincinati', 'USA'),
('CWB', 'Curitiba', 'BRA'),
('CYO', 'Cayo Largo Del Sur', 'CUB'),
('CYR', 'Colonia', 'URY'),
('CZM', 'Cozumel', 'MEX'),
('DAC', 'Dhaka', 'BGD'),
('DAY', 'Dayton', 'USA'),
('DBV', 'Dubrobvnik', 'HRV'),
('DEL', 'Delhi', 'IND'),
('DEN', 'Denver', 'USA'),
('DFW', 'Dallas', 'USA'),
('DHA', 'Dhahran', 'SAU'),
('DIR', 'Dire Dawa', 'ETH'),
('DKR', 'Dakar', 'SEN'),
('DLC', 'Dalian', 'CHN'),
('DOH', 'Doha', 'QAT'),
('DPS', 'Denpasar', 'IDN'),
('DRS', 'Dresde', 'DEU'),
('DTT', 'Detroit', 'USA'),
('DUB', 'Dublin', 'GBR'),
('DUS', 'Dusseldorf', 'DEU'),
('DXB', 'Dubai', 'ARE'),
('EDI', 'Edimburgo', 'GBR'),
('EMA', 'East Midlands', 'GBR'),
('EWR', 'Newark', 'USA'),
('FAO', 'Faro', 'PRT'),
('FLN', 'Florianopolis', 'BRA'),
('FLR', 'Florencia', 'ITA'),
('FOR', 'Fortaleza', 'BRA'),
('FRA', 'Frankfurt', 'DEU'),
('GDL', 'Guadalajara', 'MEX'),
('GEO', 'Georgetown', 'GUY'),
('GIB', 'Gibraltar', 'GBR'),
('GLA', 'Glasgow', 'GBR'),
('GND', 'Granada', 'GRD'),
('GOT', 'Gotemburgo', 'SWE'),
('GUA', 'Guatemala', 'GTM'),
('GVA', 'Ginebra', 'CHE'),
('GYE', 'Guayaquil', 'ECU'),
('GYN', 'Goiania', 'BRA'),
('HAM', 'Hamburgo', 'DEU'),
('HAN', 'Handi', 'VNM'),
('HAV', 'La Habana', 'CUB'),
('HBA', 'Hobart', 'AUS'),
('HEL', 'Helsinki', 'FIN'),
('HKG', 'Hong Kong', 'HKG'),
('HKT', 'Phuket', 'THA'),
('HNL', 'Honolulu', 'USA'),
('HOG', 'Holguin', 'CUB'),
('IBZ', 'Ibiza', 'ESP'),
('IEV', 'Kiev', 'UKR'),
('IGU', 'Foz Do Iguazu', 'BRA'),
('IND', 'Indianappolis', 'USA'),
('IOS', 'Ilheus', 'BRA'),
('IPC', 'Is. De Pascua', 'CHL'),
('IQQ', 'Iquique', 'CHL'),
('IQT', 'Iquitos', 'PER'),
('ISB', 'Islamabad', 'PAK'),
('IST', 'Estambul', 'TUR'),
('JED', 'Jeddah', 'SAU'),
('JIB', 'Yibuti', 'DJI'),
('JKT', 'Jakarta', 'IDN'),
('JNB', 'Johannesburgo', 'ZAF'),
('JPA', 'Joao Pessoa', 'BRA'),
('JRS', 'Jerusalem', 'ISR'),
('JUL', 'Juliaca', 'PER'),
('KAN', 'Kano', 'NGA'),
('KHH', 'Kaohsiung', 'TWN'),
('KHI', 'Karachi', 'PAK'),
('KIN', 'Kingston', 'JAM'),
('KLU', 'Klagenfurt', 'AUT'),
('KRS', 'Kristiansand', 'NOR'),
('KRT', 'Khartoum', 'SDN'),
('KTM', 'Katmandu', 'NPL'),
('KUL', 'Kuala Lumpur', 'MYS'),
('KWI', 'Kuwait', 'KWT'),
('LAD', 'Luanda', 'AGO'),
('LAS', 'Las Vegas', 'USA'),
('LAX', 'Los Angeles', 'USA'),
('LBA', 'Leeds', 'GBR'),
('LBV', 'Libreville', 'GAB'),
('LCG', 'La Coru�a', 'ESP'),
('LEI', 'Almeira', 'ESP'),
('LEJ', 'Leipzig', 'DEU'),
('LFW', 'Lome', 'TGO'),
('LIL', 'Lille', 'FRA'),
('LIM', 'Lima', 'PER'),
('LIS', 'Lisboa', 'PRT'),
('LJU', 'Ljubljana', 'SVN'),
('LLW', 'Lilongwe', 'MWI'),
('LNZ', 'Linz', 'AUT'),
('LON', 'Londres', 'GBR'),
('LOS', 'Lagos', 'NGA'),
('LPB', 'La Paz', 'BOL'),
('LSC', 'La Serena', 'CHL'),
('LUN', 'Lusaka', 'ZMB'),
('LUX', 'Luxemburgo', 'LUX'),
('LYS', 'Lyon', 'FRA'),
('MAA', 'Madras', 'IND'),
('MAD', 'Madrid', 'ESP'),
('MAH', 'Menorca', 'ESP'),
('MAO', 'Manaos', 'BRA'),
('MAR', 'Maracaibo', 'VEN'),
('MBJ', 'Montego Bay', 'JAM'),
('MCT', 'Muscat', 'OMN'),
('MCZ', 'Maceio', 'BRA'),
('MDE', 'Medellin', 'COL'),
('MEL', 'Melbourne', 'AUS'),
('MEM', 'Memphis', 'USA'),
('MEX', 'Mexico, Ciudad De', 'MEX'),
('MGA', 'Managua', 'NIC'),
('MIA', 'Miami', 'USA'),
('MID', 'Merida', 'MEX'),
('MIL', 'Milan', 'ITA'),
('MJV', 'Murcia', 'ESP'),
('MKC', 'Kansas', 'USA'),
('MKE', 'Milwaukee', 'USA'),
('MLA', 'Malta', 'MLT'),
('MLH', 'Mulhouse', 'FRA'),
('MLW', 'Monrovia', 'LBR'),
('MMA', 'Malmo', 'SWE'),
('MME', 'Teesside', 'GBR'),
('MNL', 'Manila', 'PHL'),
('MOW', 'Moscu', 'RUS'),
('MPM', 'Maputo', 'MOZ'),
('MRS', 'Marsella', 'FRA'),
('MSP', 'Minneapolis', 'USA'),
('MSY', 'New Orleans', 'USA'),
('MTY', 'Monterrey', 'MEX'),
('MUC', 'Munich', 'DEU'),
('MVD', 'Montevideo', 'URY'),
('MZO', 'Manzanillo', 'CUB'),
('NAN', 'Nadi', 'FJI'),
('NAP', 'Napoles', 'ITA'),
('NAS', 'Nassau', 'BHS'),
('NAT', 'Natal', 'BRA'),
('NCE', 'Niza', 'FRA'),
('NGO', 'Nagoya', 'JPN'),
('NIC', 'Nicosia', 'CYP'),
('NIM', 'Niamey', 'NGA'),
('NKC', 'Nouakchott', 'MRT'),
('NYC', 'New York', 'USA'),
('ODS', 'Odesa', 'UKR'),
('OKA', 'Okinawa', 'JPN'),
('OPO', 'Oporto', 'PRT'),
('ORF', 'Norfolk', 'USA'),
('ORL', 'Orlando', 'USA'),
('OSA', 'Osaka', 'JPN'),
('OSL', 'Oslo', 'NOR'),
('OVD', 'Oviedo', 'ESP'),
('PAR', 'Paris', 'FRA'),
('PDP', 'Punta Del Este', 'URY'),
('PEM', 'Puerto Maldonado', 'PER'),
('PEN', 'Penang', 'MYS'),
('PER', 'Perth', 'AUS'),
('PFO', 'Paphos', 'CYP'),
('PHL', 'Filadelfia', 'USA'),
('PHX', 'Phoenix', 'USA'),
('PIE', 'St. Petersburgo', 'USA'),
('PIT', 'Pittsburgo', 'USA'),
('PIU', 'Piura', 'PER'),
('PMC', 'Puerto Montt', 'CHL'),
('PMI', 'Palma De Mallorca', 'ESP'),
('PMO', 'Palermo', 'ITA'),
('PNA', 'Pamplona', 'ESP'),
('PTY', 'Panama', 'PAN'),
('PUJ', 'Punta Cana', 'DOM'),
('PUQ', 'Punta Arenas', 'CHL'),
('PVR', 'Puerto Vallarta', 'MEX'),
('RAK', 'Marrakech', 'MAR'),
('RBA', 'Rabat', 'MAR'),
('RDU', 'Raleigh', 'USA'),
('REC', 'Recife', 'BRA'),
('REK', 'Reykjavyk', 'ISL'),
('RIC', 'Richmond', 'USA'),
('RIO', 'Rio De Janeiro', 'BRA'),
('ROC', 'Rochester', 'USA'),
('ROM', 'Roma', 'ITA'),
('RUH', 'Riyadh', 'SAU'),
('SAL', 'San Salvador', 'SLV'),
('SAN', 'San Diego', 'USA'),
('SAO', 'San Pablo', 'BRA'),
('SAP', 'San Pedro Sula', 'HND'),
('SDQ', 'Santo Domingo', 'DOM'),
('SEA', 'Seattle', 'USA'),
('SEL', 'Seul', 'KOR'),
('SFO', 'San Francisco', 'USA'),
('SGN', 'Ho Chi Minh', 'VNM'),
('SHA', 'Shanghai', 'CHN'),
('SHJ', 'Sharjah', 'ARE'),
('SID', 'Ilha Do Sal', 'CPV'),
('SIN', 'Singapur', 'SGP'),
('SJC', 'San Jose ( C.A.L )', 'USA'),
('SJO', 'San Jose ( C. R. )', 'CRI'),
('SJU', 'San Juan ( P. R )', 'PRI'),
('SLC', 'Salt Lake City', 'USA'),
('SLZ', 'San Luis', 'BRA'),
('SNN', 'Shannon', 'GBR'),
('SOF', 'Sofia', 'BGR'),
('SSA', 'Salvador', 'BRA'),
('STO', 'Estocolmo', 'SWE'),
('STR', 'Stuttgart', 'DEU'),
('SVQ', 'Sevilla', 'ESP'),
('SXB', 'Estrasburgo', 'FRA'),
('SXM', 'St. Maarten', 'ANT'),
('SYD', 'Sydney', 'AUS'),
('SZG', 'Salzburgo', 'AUT'),
('TBP', 'Tumbes', 'PER'),
('TCQ', 'Tacna', 'PER'),
('TGU', 'Tegucigalpa', 'HND'),
('THR', 'Teheran', 'IRN'),
('TIA', 'Tirana', 'ALB'),
('TJA', 'Tarija', 'BOL'),
('TLV', 'Tel Aviv', 'ISR'),
('TNG', 'Tanger', 'MAR'),
('TNR', 'Antananarivo', 'MDG'),
('TPA', 'Tampa', 'USA'),
('TPE', 'Taipei', 'TWN'),
('TPP', 'Tarapoto', 'PER'),
('TRN', 'Torino', 'ITA'),
('TRU', 'Trujillo', 'PER'),
('TSR', 'Timisoara', 'ROM'),
('TUS', 'Tucson', 'USA'),
('TYO', 'Tokio', 'JPN'),
('UIO', 'Quito', 'ECU'),
('ULN', 'Ulan Bator', 'MNG'),
('VAP', 'Valparaiso', 'CHL'),
('VER', 'Berlin', 'DEU'),
('VER', 'Veracruz', 'MEX'),
('VGO', 'Vigo', 'ESP'),
('VIE', 'Viena', 'AUT'),
('VIT', 'Vitoria', 'ESP'),
('VLC', 'Valencia', 'ESP'),
('VLN', 'Valencia', 'VEN'),
('VRA', 'Varadero', 'CUB'),
('WAS', 'Washington D. C.', 'USA'),
('WAW', 'Varsovia', 'POL'),
('WLG', 'Wellington', 'NZL'),
('YAO', 'Yaounde', 'CMR'),
('YEG', 'Edmonton', 'CAN'),
('YOW', 'Ottawa', 'CAN'),
('YQG', 'Windsor', 'CAN'),
('YTO', 'Toronto', 'CAN'),
('YUL', 'Montreal', 'CAN'),
('YVR', 'Vancouver', 'CAN'),
('YWG', 'Winnipeg', 'CAN'),
('YYC', 'Calgary', 'CAN'),
('YYJ', 'Victoria', 'CAN'),
('ZAG', 'Zagreb', 'HRV'),
('ZAZ', 'Zaragoza', 'ESP'),
('ZCO', 'Temuco', 'CHL'),
('ZIH', 'Ixtapa', 'MEX'),
('ZLO', 'Manzanillo', 'MEX'),
('ZRH', 'Zurich', 'CHE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idproducto` int(11) NOT NULL,
  `ip` int(16) NOT NULL,
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
(6, 13131313, '2020-09-07', 'muy buenooooo!!!', 5, 1, 'roberto.rosa@gmail.com'),
(9, 10101010, '2020-09-02', 'no me gustó mucho!', 3, 1, 'david.spinozzi@gmail.com'),
(14, 12121212, '2020-09-02', 'muy buen destino!', 5, 1, 'nicolas.ceijas@gmail.com'),
(15, 111111, '2020-09-04', 'me gustó mucho!!', 4, 1, 'elisa.leiva@gmail.com'),
(15, 10101010, '2020-09-01', 'excelente destino!!', 5, 1, 'david.spinozzi@gmail.com');

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
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`idpais`, `nombrepais`, `idcontinente`, `activo`) VALUES
('ABW', 'Aruba', 'AM', 1),
('AGO', 'Angola', 'AF', 1),
('AIA', 'Anguilla', 'AM', 1),
('ALB', 'Albania', 'EU', 1),
('AND', 'Andorra', 'EU', 1),
('ANT', 'Antillas Holandesas', 'OC', 1),
('ARE', 'Emiratos Arabes', 'AS', 1),
('ARG', 'Argentina', 'AM', 1),
('ARM', 'Armenia', 'AS', 1),
('ASM', 'Samoa Americana', 'OC', 1),
('ATG', 'Antigua y Barbuda', 'AM', 1),
('AUS', 'Australia', 'OC', 1),
('AUT', 'Austria', 'EU', 1),
('AZE', 'Azerbaijan', 'AS', 1),
('BDI', 'Burundi', 'AF', 1),
('BEL', 'Belgica', 'EU', 1),
('BEN', 'Benin', 'AF', 1),
('BFA', 'Burkina Faso', 'AF', 1),
('BGD', 'Bangladesh', 'AS', 1),
('BGR', 'Bulgaria', 'EU', 1),
('BHR', 'Bahrain', 'AS', 1),
('BHS', 'Bahamas', 'AM', 1),
('BIH', 'Bosnia Herzegovina', 'EU', 1),
('BLR', 'Belarus', 'EU', 1),
('BLZ', 'Belice', 'AM', 1),
('BMU', 'Bermuda', 'AM', 1),
('BOL', 'Bolivia', 'AM', 1),
('BRA', 'Brasil', 'AM', 1),
('BRB', 'Barbados', 'AM', 1),
('BRN', 'Brunei', 'AS', 1),
('BTN', 'Bhutan', 'AS', 1),
('BWA', 'Botswana', 'AF', 1),
('CAF', 'República Centro-Africana', 'AF', 1),
('CAN', 'Canadá', 'AM', 1),
('CCK', 'Cocos (Keeling) Islands', 'OC', 1),
('CHE', 'Suiza', 'EU', 1),
('CHL', 'Chile', 'AM', 1),
('CHN', 'China', 'AS', 1),
('CIV', 'Costa de Marfil', 'AF', 1),
('CMR', 'Camerún', 'AF', 1),
('COD', 'República Democratica del Congo', 'AF', 1),
('COG', 'Congo', 'AF', 1),
('COK', 'Islas Cook', 'OC', 1),
('COL', 'Colombia', 'AM', 1),
('COM', 'Comoras', 'AF', 1),
('CPV', 'Cabo Verde', 'AF', 1),
('CRI', 'Costa Rica', 'AM', 1),
('CUB', 'Cuba', 'AM', 1),
('CXR', 'Islas de Navidad', 'OC', 1),
('CYM', 'Islas Cayman', 'AM', 1),
('CYP', 'Chipre', 'AS', 1),
('CZE', 'Republica Checa', 'EU', 1),
('DEU', 'Alemania', 'EU', 1),
('DJI', 'Yibuti', 'AF', 1),
('DMA', 'Dominica', 'AM', 1),
('DNK', 'Dinamarca', 'EU', 1),
('DOM', 'Republica Dominicada', 'AM', 1),
('DZA', 'Argelia', 'AF', 1),
('ECU', 'Ecuador', 'AM', 1),
('EGY', 'Egipto', 'AF', 1),
('ERI', 'Eritrea', 'AF', 1),
('ESH', 'Sahara Occidental', 'AF', 1),
('ESP', 'España', 'EU', 1),
('EST', 'Estonia', 'EU', 1),
('ETH', 'Etiopía', 'AF', 1),
('FIN', 'Finlandia', 'EU', 1),
('FJI', 'Islas Fiji', 'OC', 1),
('FLK', 'Islas Malvinas', 'AM', 1),
('FRA', 'Francia', 'EU', 1),
('FRO', 'Islas Feroes', 'EU', 1),
('FSM', 'Micronesia', 'OC', 1),
('GAB', 'Gabon', 'AF', 1),
('GBR', 'Reino Unido', 'EU', 1),
('GEO', 'Georgia', 'AS', 1),
('GHA', 'Ghana', 'AF', 1),
('GIB', 'Gibraltar', 'EU', 1),
('GIN', 'Guinea', 'AF', 1),
('GLP', 'Guadeloupe', 'AM', 1),
('GMB', 'Gambia', 'AF', 1),
('GNB', 'Guinea-Bissau', 'AF', 1),
('GNQ', 'Guinea Equatorial', 'AF', 1),
('GRC', 'Grecia', 'EU', 1),
('GRD', 'Granada', 'AM', 1),
('GRL', 'Groenlandia', 'AM', 1),
('GTM', 'Guatemala', 'AM', 1),
('GUF', 'Guyana Francesa', 'AM', 1),
('GUM', 'Guam', 'OC', 1),
('GUY', 'Guyana', 'AM', 1),
('HKG', 'Hong Kong', 'AS', 1),
('HND', 'Honduras', 'AM', 1),
('HRV', 'Croacia', 'EU', 1),
('HTI', 'Haiti', 'AM', 1),
('HUN', 'Hungria', 'EU', 1),
('IDN', 'Indonesia', 'AS', 1),
('IND', 'India', 'AS', 1),
('IRN', 'Iran', 'AS', 1),
('IRQ', 'Iraq', 'AS', 1),
('ISL', 'Islandia', 'EU', 1),
('ISR', 'Israel', 'AS', 1),
('ITA', 'Italia', 'EU', 1),
('JAM', 'Jamaica', 'AM', 1),
('JOR', 'Jordan', 'AS', 1),
('JPN', 'Japon', 'AS', 1),
('KAZ', 'Kazakstan', 'AS', 1),
('KEN', 'Kenia', 'AF', 1),
('KGZ', 'Kyrgyzstan', 'AS', 1),
('KHM', 'Cambodia', 'AS', 1),
('KIR', 'Kiribati', 'OC', 1),
('KOR', 'Korea Del Sur', 'AS', 1),
('KWT', 'Kuwait', 'AS', 1),
('LAO', 'Laos', 'AS', 1),
('LBN', 'Libano', 'AS', 1),
('LBR', 'Liberia', 'AF', 1),
('LCA', 'Santa Lucia', 'AM', 1),
('LIE', 'Liechtenstein', 'EU', 1),
('LKA', 'Sri Lanka', 'AS', 1),
('LSO', 'Lesoto', 'AF', 1),
('LTU', 'Lituania', 'EU', 1),
('LUX', 'Luxemburgo', 'EU', 1),
('LVA', 'Letonia', 'EU', 1),
('MAC', 'Macao', 'AS', 1),
('MAR', 'Morruecos', 'AF', 1),
('MCO', 'Monaco', 'EU', 1),
('MDA', 'Moldavia', 'EU', 1),
('MDG', 'Madagascar', 'AF', 1),
('MDV', 'Maldivas', 'AS', 1),
('MEX', 'Mexico', 'AM', 1),
('MKD', 'Macedonia', 'EU', 1),
('MLI', 'Mali', 'AF', 1),
('MLT', 'Malta', 'EU', 1),
('MMR', 'Myanmar', 'AS', 1),
('MNG', 'Mongolia', 'AS', 1),
('MOZ', 'Mozambique', 'AF', 1),
('MRT', 'Mauritania', 'AF', 1),
('MSR', 'Montserrat', 'AM', 1),
('MWI', 'Malawi', 'AF', 1),
('MYS', 'Malasia', 'AS', 1),
('NGA', 'Nigeria', 'AF', 1),
('NIC', 'Nicaragua', 'AM', 1),
('NLD', 'Holanda', 'EU', 1),
('NOR', 'Noruega', 'EU', 1),
('NPL', 'Nepal', 'AS', 1),
('NZL', 'Nueva Zelanda', 'OC', 1),
('OMN', 'Oman', 'AS', 1),
('PAK', 'Pakistan', 'AS', 1),
('PAN', 'Panama', 'AM', 1),
('PER', 'Perú', 'AM', 1),
('PHL', 'Filipinas', 'AS', 1),
('PLW', 'Palau', 'OC', 1),
('PNG', 'Papua Nueva Guinea', 'OC', 1),
('POL', 'Polonia', 'EU', 1),
('PRI', 'Puerto Rico', 'AM', 1),
('PRK', 'Korea del Norte', 'AS', 1),
('PRT', 'Portugal', 'EU', 1),
('PRY', 'Paraguay', 'AM', 1),
('PSE', 'Palestina', 'AS', 1),
('PYF', 'Polynesia Francesa', 'OC', 1),
('QAT', 'Qatar', 'AS', 1),
('ROM', 'Rumania', 'EU', 1),
('RUS', 'Rusia Federal', 'EU', 1),
('RWA', 'Rwanda', 'AF', 1),
('SAU', 'Arabia Saudita', 'AS', 1),
('SDN', 'Sudan', 'AF', 1),
('SEN', 'Senegal', 'AF', 1),
('SGP', 'Singapur', 'AS', 1),
('SLB', 'Islands Salomon', 'OC', 1),
('SLV', 'El Salvador', 'AM', 1),
('SMR', 'San Marino', 'EU', 1),
('SUR', 'Suriname', 'AM', 1),
('SVK', 'Eslovaquia', 'EU', 1),
('SVN', 'Eslovenia', 'EU', 1),
('SWE', 'Suecia', 'EU', 1),
('SYR', 'Syria', 'AS', 1),
('TGO', 'Togo', 'AF', 1),
('THA', 'Tailandia', 'AS', 1),
('TJK', 'Kasajistan', 'AS', 1),
('TTO', 'Trinidad y Tobago', 'AM', 1),
('TUN', 'Tunes', 'AF', 1),
('TUR', 'Turquia', 'AS', 1),
('TWN', 'Taiwan', 'AS', 1),
('TZA', 'Tanzania', 'AF', 1),
('UKR', 'Ucraine', 'EU', 1),
('URY', 'Uruguay', 'AM', 1),
('USA', 'EEUU', 'AM', 1),
('VAT', 'Vaticano', 'EU', 1),
('VEN', 'Venezuela', 'AM', 1),
('VNM', 'Vietnam', 'AS', 1),
('WSM', 'Samoa', 'OC', 1),
('YEM', 'Yemen', 'AS', 1),
('ZAF', 'Sur Africana', 'AF', 1),
('ZMB', 'Zambia', 'AF', 1),
('ZWE', 'Zimbawe', 'AF', 1);

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
(1, 'PAR', 45020, 'VISITANDO: Francia MADRID, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', 'España Aéreos ES/FE/ES, 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/spain.jpg', 1, 1),
(2, 'ROM', 43000, 'VISITANDO: Italia MADRID, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', 'España Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out. City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/spain.jpg', 1, 1),
(3, 'MUC', 44000, 'VISITANDO: Alemania, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', 'España Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out. City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/spain.jpg', 1, 1),
(4, 'MIA', 20000, 'Estados Unidos Visitando: Bsssoston / Quebec / Montreal / Ottawa / Toronto / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Estados Unidos Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out. City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/estadosunidos.jpg', 1, 1),
(5, 'YTO', 20000, 'Canada Visitando: Bsssoston / Quebec / Montreal / Ottawa / Toronto / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Estados Unidos Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/estadosunidos.jpg', 1, 1),
(6, 'CUN', 20000, 'Mexico Visitando: Bsssoston / Quebec / Montreal / Ottawa / Toronto / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Estados Unidos Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/estadosunidos.jpg', 1, 1),
(7, 'RIO', 60030, 'INCLUYE: Brasil GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines. ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Argentina Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/peru.jpg', 1, 1),
(8, 'BUE', 60030, 'INCLUYE: Argentina GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines).  ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.', 'Argentina Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/peru.jpg', 1, 1),
(9, 'TYO', 36200, 'VISITANDO: Japon Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Japon Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/canada.jpg', 1, 1),
(10, 'SEL', 36200, 'VISITANDO: Corea del Sur Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Japon Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/canada.jpg', 1, 1),
(11, 'CAI', 36020, 'VISITANDO: Egipto/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Egipto Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/canada.jpg', 1, 1),
(12, 'LOS', 36550, 'VISITANDO: Nigeria/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Egipto Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/canada.jpg', 1, 1),
(13, 'SYD', 360630, 'VISITANDO: Australia/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).', 'Australia Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out, City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/canada.jpg', 1, 1),
(14, 'BCN', 45010, 'VISITANDO: España MADRID, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', ' España Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out,  City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/spain.jpg', 1, 1),
(15, 'MAD', 45010, 'VISITANDO: España MADRID, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.', ' España Aéreos ES/FE/ES. 04 Noches de alojamiento con régimen según elección. Traslados In / Out,  City Tour. Notas: AÉREOS NETOS NO COMISONABLES. Consulte a su ejecutivo de ventas por asistencia al viajero.', './images/spain.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `edad` int(3) NOT NULL,
  `perfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email`, `password`, `nombre`, `apellido`, `edad`, `perfil`) VALUES
('david.spinozzi@gmail.com', '123456', 'David', 'Spinozzi', 31, 'user'),
('elisa.leiva@gmail.com', '123456', 'Elisa', 'Leiva', 25, 'Admin'),
('nicolas.ceijas@gmail.com', '123456', 'Nicolas', 'Ceijas', 25, 'user'),
('roberto.rosa@gmail.com', '123456', 'Roberto', 'Rosa', 30, 'admin');

--
-- Índices para tablas volcadas
--

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
  ADD KEY `productos_ibfk_1` (`idciudad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`email`) REFERENCES `usuarios` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
