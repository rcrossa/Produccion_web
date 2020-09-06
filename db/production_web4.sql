-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2020 at 09:50 PM
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
-- Database: `production_web3`
--

-- --------------------------------------------------------

--
-- Table structure for table `ciudades`
--

CREATE TABLE `ciudades` (
  `idciudad` varchar(3) NOT NULL,
  `nombreciudad` varchar(50) NOT NULL,
  `idpais` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ciudades`
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
-- Table structure for table `comentarios`
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
-- Dumping data for table `comentarios`
--

INSERT INTO `comentarios` (`idproducto`, `ip`, `fecha`, `comentario`, `estrellas`, `activo`, `email`) VALUES
(6, 13131313, '2020-09-07', 'muy buenooooo!!!', 5, 1, 'roberto.rosa@gmail.com'),
(9, 10101010, '2020-09-02', 'no me gustó mucho!', 3, 1, 'david.spinozzi@gmail.com'),
(14, 12121212, '2020-09-02', 'muy buen destino!', 5, 1, 'nicolas.ceijas@gmail.com'),
(15, 111111, '2020-09-04', 'me gustó mucho!!', 4, 1, 'elisa.leiva@gmail.com'),
(15, 10101010, '2020-09-01', 'excelente destino!!', 5, 1, 'david.spinozzi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `continentes`
--

CREATE TABLE `continentes` (
  `idcontinente` varchar(2) NOT NULL,
  `nombrecontinente` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `continentes`
--

INSERT INTO `continentes` (`idcontinente`, `nombrecontinente`) VALUES
('AF', 'África'),
('AM', 'América'),
('AS', 'Asia'),
('EU', 'Europa'),
('OC', 'Oceania');

-- --------------------------------------------------------

--
-- Table structure for table `paises`
--

CREATE TABLE `paises` (
  `idpais` varchar(3) NOT NULL,
  `nombrepais` varchar(50) NOT NULL,
  `idcontinente` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paises`
--

INSERT INTO `paises` (`idpais`, `nombrepais`, `idcontinente`) VALUES
('ALB', 'Albania', 'EU'),
('DEU', 'Alemania', 'EU'),
('AND', 'Andorra', 'EU'),
('AGO', 'Angola', 'AF'),
('AIA', 'Anguilla', 'AM'),
('ATG', 'Antigua y Barbuda', 'AM'),
('ANT', 'Antillas Holandesas', 'OC'),
('SAU', 'Arabia Saudita', 'AS'),
('DZA', 'Argelia', 'AF'),
('ARG', 'Argentina', 'AM'),
('ARM', 'Armenia', 'AS'),
('ABW', 'Aruba', 'AM'),
('AUS', 'Australia', 'OC'),
('AUT', 'Austria', 'EU'),
('AZE', 'Azerbaijan', 'AS'),
('BHS', 'Bahamas', 'AM'),
('BHR', 'Bahrain', 'AS'),
('BGD', 'Bangladesh', 'AS'),
('BRB', 'Barbados', 'AM'),
('BLR', 'Belarus', 'EU'),
('BEL', 'Belgica', 'EU'),
('BLZ', 'Belice', 'AM'),
('BEN', 'Benin', 'AF'),
('BMU', 'Bermuda', 'AM'),
('BTN', 'Bhutan', 'AS'),
('BOL', 'Bolivia', 'AM'),
('BIH', 'Bosnia Herzegovina', 'EU'),
('BWA', 'Botswana', 'AF'),
('BRA', 'Brasil', 'AM'),
('BRN', 'Brunei', 'AS'),
('BGR', 'Bulgaria', 'EU'),
('BFA', 'Burkina Faso', 'AF'),
('BDI', 'Burundi', 'AF'),
('CPV', 'Cabo Verde', 'AF'),
('KHM', 'Cambodia', 'AS'),
('CMR', 'Camerún', 'AF'),
('CAN', 'Canadá', 'AM'),
('CHL', 'Chile', 'AM'),
('CHN', 'China', 'AS'),
('CYP', 'Chipre', 'AS'),
('CCK', 'Cocos (Keeling) Islands', 'OC'),
('COL', 'Colombia', 'AM'),
('COM', 'Comoras', 'AF'),
('COG', 'Congo', 'AF'),
('CIV', 'Costa de Marfil', 'AF'),
('CRI', 'Costa Rica', 'AM'),
('HRV', 'Croacia', 'EU'),
('CUB', 'Cuba', 'AM'),
('DNK', 'Dinamarca', 'EU'),
('DMA', 'Dominica', 'AM'),
('ECU', 'Ecuador', 'AM'),
('USA', 'EEUU', 'AM'),
('EGY', 'Egipto', 'AF'),
('SLV', 'El Salvador', 'AM'),
('ARE', 'Emiratos Arabes', 'AS'),
('ERI', 'Eritrea', 'AF'),
('SVK', 'Eslovaquia', 'EU'),
('SVN', 'Eslovenia', 'EU'),
('ESP', 'España', 'EU'),
('EST', 'Estonia', 'EU'),
('ETH', 'Etiopía', 'AF'),
('PHL', 'Filipinas', 'AS'),
('FIN', 'Finlandia', 'EU'),
('FRA', 'Francia', 'EU'),
('GAB', 'Gabon', 'AF'),
('GMB', 'Gambia', 'AF'),
('GEO', 'Georgia', 'AS'),
('GHA', 'Ghana', 'AF'),
('GIB', 'Gibraltar', 'EU'),
('GRD', 'Granada', 'AM'),
('GRC', 'Grecia', 'EU'),
('GRL', 'Groenlandia', 'AM'),
('GLP', 'Guadeloupe', 'AM'),
('GUM', 'Guam', 'OC'),
('GTM', 'Guatemala', 'AM'),
('GIN', 'Guinea', 'AF'),
('GNQ', 'Guinea Equatorial', 'AF'),
('GNB', 'Guinea-Bissau', 'AF'),
('GUY', 'Guyana', 'AM'),
('GUF', 'Guyana Francesa', 'AM'),
('HTI', 'Haiti', 'AM'),
('NLD', 'Holanda', 'EU'),
('HND', 'Honduras', 'AM'),
('HKG', 'Hong Kong', 'AS'),
('HUN', 'Hungria', 'EU'),
('IND', 'India', 'AS'),
('IDN', 'Indonesia', 'AS'),
('IRN', 'Iran', 'AS'),
('IRQ', 'Iraq', 'AS'),
('ISL', 'Islandia', 'EU'),
('SLB', 'Islands Salomon', 'OC'),
('CYM', 'Islas Cayman', 'AM'),
('COK', 'Islas Cook', 'OC'),
('CXR', 'Islas de Navidad', 'OC'),
('FRO', 'Islas Feroes', 'EU'),
('FJI', 'Islas Fiji', 'OC'),
('FLK', 'Islas Malvinas', 'AM'),
('ISR', 'Israel', 'AS'),
('ITA', 'Italia', 'EU'),
('JAM', 'Jamaica', 'AM'),
('JPN', 'Japon', 'AS'),
('JOR', 'Jordan', 'AS'),
('TJK', 'Kasajistan', 'AS'),
('KAZ', 'Kazakstan', 'AS'),
('KEN', 'Kenia', 'AF'),
('KIR', 'Kiribati', 'OC'),
('PRK', 'Korea del Norte', 'AS'),
('KOR', 'Korea Del Sur', 'AS'),
('KWT', 'Kuwait', 'AS'),
('KGZ', 'Kyrgyzstan', 'AS'),
('LAO', 'Laos', 'AS'),
('LSO', 'Lesoto', 'AF'),
('LVA', 'Letonia', 'EU'),
('LBN', 'Libano', 'AS'),
('LBR', 'Liberia', 'AF'),
('LIE', 'Liechtenstein', 'EU'),
('LTU', 'Lituania', 'EU'),
('LUX', 'Luxemburgo', 'EU'),
('MAC', 'Macao', 'AS'),
('MKD', 'Macedonia', 'EU'),
('MDG', 'Madagascar', 'AF'),
('MYS', 'Malasia', 'AS'),
('MWI', 'Malawi', 'AF'),
('MDV', 'Maldivas', 'AS'),
('MLI', 'Mali', 'AF'),
('MLT', 'Malta', 'EU'),
('MRT', 'Mauritania', 'AF'),
('MEX', 'Mexico', 'AM'),
('FSM', 'Micronesia', 'OC'),
('MDA', 'Moldavia', 'EU'),
('MCO', 'Monaco', 'EU'),
('MNG', 'Mongolia', 'AS'),
('MSR', 'Montserrat', 'AM'),
('MAR', 'Morruecos', 'AF'),
('MOZ', 'Mozambique', 'AF'),
('MMR', 'Myanmar', 'AS'),
('NPL', 'Nepal', 'AS'),
('NIC', 'Nicaragua', 'AM'),
('NGA', 'Nigeria', 'AF'),
('NOR', 'Noruega', 'EU'),
('NZL', 'Nueva Zelanda', 'OC'),
('OMN', 'Oman', 'AS'),
('PAK', 'Pakistan', 'AS'),
('PLW', 'Palau', 'OC'),
('PSE', 'Palestina', 'AS'),
('PAN', 'Panama', 'AM'),
('PNG', 'Papua Nueva Guinea', 'OC'),
('PRY', 'Paraguay', 'AM'),
('PER', 'Perú', 'AM'),
('POL', 'Polonia', 'EU'),
('PYF', 'Polynesia Francesa', 'OC'),
('PRT', 'Portugal', 'EU'),
('PRI', 'Puerto Rico', 'AM'),
('QAT', 'Qatar', 'AS'),
('GBR', 'Reino Unido', 'EU'),
('CAF', 'República Centro-Africana', 'AF'),
('CZE', 'Republica Checa', 'EU'),
('COD', 'República Democratica del Congo', 'AF'),
('DOM', 'Republica Dominicada', 'AM'),
('ROM', 'Rumania', 'EU'),
('RUS', 'Rusia Federal', 'EU'),
('RWA', 'Rwanda', 'AF'),
('ESH', 'Sahara Occidental', 'AF'),
('WSM', 'Samoa', 'OC'),
('ASM', 'Samoa Americana', 'OC'),
('SMR', 'San Marino', 'EU'),
('LCA', 'Santa Lucia', 'AM'),
('SEN', 'Senegal', 'AF'),
('SGP', 'Singapur', 'AS'),
('LKA', 'Sri Lanka', 'AS'),
('SDN', 'Sudan', 'AF'),
('SWE', 'Suecia', 'EU'),
('CHE', 'Suiza', 'EU'),
('ZAF', 'Sur Africana', 'AF'),
('SUR', 'Suriname', 'AM'),
('SYR', 'Syria', 'AS'),
('THA', 'Tailandia', 'AS'),
('TWN', 'Taiwan', 'AS'),
('TZA', 'Tanzania', 'AF'),
('TGO', 'Togo', 'AF'),
('TTO', 'Trinidad y Tobago', 'AM'),
('TUN', 'Tunes', 'AF'),
('TUR', 'Turquia', 'AS'),
('UKR', 'Ucraine', 'EU'),
('URY', 'Uruguay', 'AM'),
('VAT', 'Vaticano', 'EU'),
('VEN', 'Venezuela', 'AM'),
('VNM', 'Vietnam', 'AS'),
('YEM', 'Yemen', 'AS'),
('DJI', 'Yibuti', 'AF'),
('ZMB', 'Zambia', 'AF'),
('ZWE', 'Zimbawe', 'AF');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
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
-- Dumping data for table `productos`
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
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`email`, `password`, `nombre`, `apellido`, `edad`, `perfil`) VALUES
('david.spinozzi@gmail.com', '123456', 'David', 'Spinozzi', 31, 'user'),
('elisa.leiva@gmail.com', '123456', 'Elisa', 'Leiva', 25, 'Admin'),
('nicolas.ceijas@gmail.com', '123456', 'Nicolas', 'Ceijas', 25, 'user'),
('roberto.rosa@gmail.com', '123456', 'Roberto', 'Rosa', 30, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`idciudad`,`idpais`) USING BTREE,
  ADD KEY `idpais` (`idpais`);

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idproducto`,`ip`,`fecha`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `continentes`
--
ALTER TABLE `continentes`
  ADD PRIMARY KEY (`idcontinente`);

--
-- Indexes for table `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`idpais`,`idcontinente`),
  ADD UNIQUE KEY `nombrepais` (`nombrepais`),
  ADD KEY `idcontinente` (`idcontinente`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`) USING BTREE;

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`idpais`) REFERENCES `paises` (`idpais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`email`) REFERENCES `usuarios` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paises`
--
ALTER TABLE `paises`
  ADD CONSTRAINT `paises_ibfk_1` FOREIGN KEY (`idcontinente`) REFERENCES `continentes` (`idcontinente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idciudad`) REFERENCES `ciudades` (`idciudad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
