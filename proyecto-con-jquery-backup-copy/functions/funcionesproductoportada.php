<?php

$productos = array(
    0 => array(
        'id' => 0,
        'nombre' => 'Todo',
        'parent_id' => ''
    ),
    1 => array(
        'id' => 1,
        'nombre' => 'Europa',
        'parent_id' => 0
    ),
    2 => array(
        'id' => 2,
        'nombre' => 'America del Norte',
        'parent_id' => 0
    ),
    3 => array(
        'id' => 3,
        'nombre' => 'America del Sur',
        'parent_id' => 0
    ),
    4 => array(
        'id' => 4,
        'nombre' => 'Asia',
        'parent_id' => 0
    ),
    5 => array(
        'id' => 5,
        'nombre' => 'Africa',
        'parent_id' => 0
    ),
    6 => array(
        'id' => 6,
        'nombre' => 'Oceania',
        'parent_id' => 0
    ),
    7 => array(
        'id' => 7,
        'nombre' => 'España',
        'precio' => '$45000',
        'descripcion' => 'VISITANDO: MADRID, SANTIAGO DE COMPOSTELA -RINLO - CABO VIDIO - LA MANJOYA - COVADONGA - CUEVAS DEL SOPLAO - SANTANDER - BILBAO - SAN SEBASTIAN.',
        'descripcion_details' => array("ESPANIA Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/spain.jpg',
        'continente' => 'Europa',
        'parent_id' => 1,
        'destacado' => false,
        'ciudades' => array("Andalucia", "Aragon", "Asturias", "Baleares", "Ceuta", "Canarias", "Cantabria", "Castilla-La Mancha", "Castilla y Leon", "Cataluna", "Comunidad Valenciana", "Extremadura", "Galicia", "La Rioja", "Madrid", "Melilla", "Murcia", "Navarra", "Pais Vasco"),
    ),
    8 => array(
        'id' => 8,
        'nombre' => 'Francia',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).',
        'descripcion_details' => array("FRANCIA Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Europa',
        'parent_id' => 1,
        'destacado' => true,
        'ciudades' => array("Alsace", "Aquitaine", "Auvergne", "Basse-Normandie", "Bourgogne", "Bretagne", "Centre", "Champagne-Ardenne", "Corse", "Franche-Comte", "Haute-Normandie", "Ile-de-France", "Languedoc-Roussillon", "Limousin", "Lorraine", "Midi-Pyrenees", "Nord-Pas-de-Calais", "Pays de la Loire", "Picardie", "Poitou-Charentes", "Provence-Alpes-Cote d'Azur", "Rhone-Alpes")
    ),
    9 => array(
        'id' => 9,
        'nombre' => 'Italia',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines Clase turista.',
        'descripcion_details' => array("Italia Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Europa',
        'parent_id' => 1,
        'destacado' => false,
        'ciudades' => array("Abruzzo", "Basilicata", "Calabria", "Campania", "Emilia-Romagna", "Friuli-Venezia Giulia", "Lazio", "Liguria", "Lombardia", "Marche", "Molise", "Piemonte", "Puglia", "Sardegna", "Sicilia", "Toscana", "Trentino-Alto Adige", "Umbria", "Valle d'Aosta", "Veneto")
    ),
    10 => array(
        'id' => 10,
        'nombre' => 'Alemania',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).',
        'descripcion_details' => array("Alemania Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Europa',
        'parent_id' => 1,
        'destacado' => true,
        'ciudades' => array("Baden-Wuerttemberg", "Bayern", "Berlin", "Brandenburg", "Bremen", "Hamburg", "Hessen", "Mecklenburg-Vorpommern", "Niedersachsen", "Nordrhein-Westfalen", "Rheinland-Pfalz", "Saarland", "Sachsen", "Sachsen-Anhalt", "Schleswig-Holstein", "Thueringen")
    ),
    11 => array(
        'id' => 11,
        'nombre' => 'Portugal',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).',
        'descripcion_details' => array("Portugal Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Europa',
        'parent_id' => 1,
        'destacado' => false,
        'ciudades' => array("Aveiro", "Acores", "Beja", "Braga", "Braganca", "Castelo Branco", "Coimbra", "Evora", "Faro", "Guarda", "Leiria", "Lisboa", "Madeira", "Portalegre", "Porto", "Santarem", "Setubal", "Viana do Castelo", "Vila Real", "Viseu")
    ),
    12 => array(
        'id' => 12,
        'nombre' => 'Estados Unidos',
        'precio' => '$20000',
        'descripcion' => 'Visitando: Bsssoston / Quebec / Montreal / Ottawa / Toronto / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.',
        'descripcion_details' => array("Estados Unidos Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/estadosunidos.jpg',
        'continente' => 'America del Norte',
        'parent_id' => 2,
        'destacado' => true,
        'ciudades' => array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming")
    ),
    13 => array(
        'id' => 13,
        'nombre' => 'Canada',
        'precio' => '$20000',
        'descripcion' => 'Visitando: Boston / Quebec / Montreal / Ottawa / Toronto / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.',
        'descripcion_details' => array("Canada Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/estadosunidos.jpg',
        'continente' => 'America del Norte',
        'parent_id' => 2,
        'destacado' => false,
        'ciudades' => array("Alberta", "British Columbia", "Manitoba", "New Brunswick", "Newfoundland and Labrador", "Northwest Territories", "Nova Scotia", "Nunavut", "Ontario", "Prince Edward Island", "Quebec", "Saskatchewan", "Yukon Territory")
    ),
    14 => array(
        'id' => 14,
        'nombre' => 'Mexico',
        'precio' => '$20000',
        'descripcion' => 'Visitando: Boston / Quebec / Montreal / Ottawa / Toronto / Niagara Falls - Incluye: boleto por American Airlines. Desayunos Americanos. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.',
        'descripcion_details' => array("Mexico Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/estadosunidos.jpg',
        'continente' => 'America del Norte',
        'parent_id' => 2,
        'destacado' => true,
        'ciudades' => array("Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "Chihuahua", "Coahuila de Zaragoza", "Colima", "Distrito Federal", "Durango", "Guanajuato", "Guerrero", "Hidalgo", "Jalisco", "Mexico", "Michoacan de Ocampo", "Morelos", "Nayarit", "Nuevo Leon", "Oaxaca", "Puebla", "Queretaro de Arteaga", "Quintana Roo", "San Luis Potosi", "Sinaloa", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz-Llave", "Yucatan", "Zacatecas")
    ),
    15 => array(
        'id' => 15,
        'nombre' => 'Peru',
        'precio' => '$60000',
        'descripcion' => 'INCLUYE: GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines).   ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.',
        'descripcion_details' => array("Peru Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/peru.jpg',
        'continente' => 'America del Sur',
        'parent_id' => 3,
        'destacado' => false,
        'ciudades' => array("Amazonas", "Ancash", "Apurimac", "Arequipa", "Ayacucho", "Cajamarca", "Callao", "Cusco", "Huancavelica", "Huanuco", "Ica", "Junin", "La Libertad", "Lambayeque", "Lima", "Loreto", "Madre de Dios", "Moquegua", "Pasco", "Piura", "Puno", "San Martin", "Tacna", "Tumbes", "Ucayali")
    ),
    16 => array(
        'id' => 16,
        'nombre' => 'Brasil',
        'precio' => '$60000',
        'descripcion' => 'INCLUYE: GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines).   ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.',
        'descripcion_details' => array("Brasil Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/peru.jpg',
        'continente' => 'America del Sur',
        'parent_id' => 3,
        'destacado' => true,
        'ciudades' => array("Acre", "Alagoas", "Amapa", "Amazonas", "Bahia", "Ceara", "Distrito Federal", "Espirito Santo", "Goias", "Maranhao", "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Para", "Paraiba", "Parana", "Pernambuco", "Piaui", "Rio de Janeiro", "Rio Grande do Norte", "Rio Grande do Sul", "Rondonia", "Roraima", "Santa Catarina", "Sao Paulo", "Sergipe", "Tocantins")
    ),
    17 => array(
        'id' => 17,
        'nombre' => 'Uruguay',
        'precio' => '$60000',
        'descripcion' => 'INCLUYE: GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines).   ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.',
        'descripcion_details' => array("Uruguay Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/peru.jpg',
        'continente' => 'America del Sur',
        'parent_id' => 3,
        'destacado' => false,
        'ciudades' => array("Artigas", "Canelones", "Cerro Largo", "Colonia", "Durazno", "Flores", "Florida", "Lavalleja", "Maldonado", "Montevideo", "Paysandu", "Rio Negro", "Rivera", "Rocha", "Salto", "San Jose", "Soriano", "Tacuarembo", "Treinta y Tres")
    ),
    18 => array(
        'id' => 18,
        'nombre' => 'Bolivia',
        'precio' => '$60000',
        'descripcion' => 'INCLUYE: GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines).   ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.',
        'descripcion_details' => array("Bolivia Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/peru.jpg',
        'continente' => 'America del Sur',
        'parent_id' => 3,
        'destacado' => true,
        'ciudades' => array("Chuquisaca", "Cochabamba", "Beni", "La Paz", "Oruro", "Pando", "Potosi", "Santa Cruz", "Tarija")
    ),
    19 => array(
        'id' => 19,
        'nombre' => 'Paraguay',
        'precio' => '$60000',
        'descripcion' => 'INCLUYE: GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines).   ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.',
        'descripcion_details' => array("Paraguay Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/peru.jpg',
        'continente' => 'America del Sur',
        'parent_id' => 3,
        'destacado' => false,
        'ciudades' => array("Alto Paraguay", "Alto Parana", "Amambay", "Asuncion", "Boqueron", "Caaguazu", "Caazapa", "Canindeyu", "Central", "Concepcion", "Cordillera", "Guaira", "Itapua", "Misiones", "Neembucu", "Paraguari", "Presidente Hayes", "San Pedro")
    ),
    20 => array(
        'id' => 20,
        'nombre' => 'Argentina',
        'precio' => '$60000',
        'descripcion' => 'INCLUYE: GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines).   ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.',
        'descripcion_details' => array("Argentina Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/peru.jpg',
        'continente' => 'America del Sur',
        'parent_id' => 3,
        'destacado' => true,
        'ciudades' => array("Buenos Aires", "Buenos Aires Capital", "Catamarca", "Chaco", "Chubut", "Cordoba", "Corrientes", "Entre Rios", "Formosa", "Jujuy", "La Pampa", "La Rioja", "Mendoza", "Misiones", "Neuquen", "Rio Negro", "Salta", "San Juan", "San Luis", "Santa Cruz", "Santa Fe", "Santiago del Estero", "Tierra del Fuego", "Tucuman")
    ),
    21 => array(
        'id' => 21,
        'nombre' => 'Chile',
        'precio' => '$60000',
        'descripcion' => 'INCLUYE: GUÍA: Operado con guía en español e inglés. Pasaje (Latam Airlines).   ALOJAMIENTO: 3 noches de alojamiento en Lima. 1 noche de alojamiento en Paracas. 2 noches de alojamiento en Cusco. 1 noche de alojamiento en Aguas Calientes. ALIMENTACIÓN: Desayuno diario incluidos. Opcional: asistencia CORIS con seguro de cancelación USD 36 por persona.',
        'descripcion_details' => array("Chile Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/peru.jpg',
        'continente' => 'America del Sur',
        'parent_id' => 3,
        'destacado' => false,
        'ciudades' => array("Aysen", "Antofagasta", "Araucania", "Atacama", "Bio-Bio", "Coquimbo", "O'Higgins", "Los Lagos", "Magallanes y la Antartica Chilena", "Maule", "Santiago Region Metropolitana", "Tarapaca", "Valparaiso")
    ),
    22 => array(
        'id' => 22,
        'nombre' => 'Japon',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).',
        'descripcion_details' => array("Japon Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Asia',
        'parent_id' => 4,
        'destacado' => true,
        'ciudades' => array("Aichi", "Akita", "Aomori", "Chiba", "Ehime", "Fukui", "Fukuoka", "Fukushima", "Gifu", "Gumma", "Hiroshima", "Hokkaido", "Hyogo", "Ibaraki", "Ishikawa", "Iwate", "Kagawa", "Kagoshima", "Kanagawa", "Kochi", "Kumamoto", "Kyoto", "Mie", "Miyagi", "Miyazaki", "Nagano", "Nagasaki", "Nara", "Niigata", "Oita", "Okayama", "Okinawa", "Osaka", "Saga", "Saitama", "Shiga", "Shimane", "Shizuoka", "Tochigi", "Tokushima", "Tokyo", "Tottori", "Toyama", "Wakayama", "Yamagata", "Yamaguchi", "Yamanashi")
    ),
    23 => array(
        'id' => 23,
        'nombre' => 'Corea del Sur',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).',
        'descripcion_details' => array("Corea del Sur Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Asia',
        'parent_id' => 4,
        'destacado' => false,
        'ciudades' => array("Seoul", "Busan City", "Daegu City", "Incheon City", "Gwangju City", "Daejeon City", "Ulsan", "Gyeonggi Province", "Gangwon Province", "North Chungcheong Province", "South Chungcheong Province", "North Jeolla Province", "South Jeolla Province", "North Gyeongsang Province", "South Gyeongsang Province", "Jeju")
    ),
    24 => array(
        'id' => 24,
        'nombre' => 'China',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).',
        'descripcion_details' => array("China Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Asia',
        'parent_id' => 4,
        'destacado' => true,
        'ciudades' => array("Anhui", "Fujian", "Gansu", "Guangdong", "Guizhou", "Hainan", "Hebei", "Heilongjiang", "Henan", "Hubei", "Hunan", "Jiangsu", "Jiangxi", "Jilin", "Liaoning", "Qinghai", "Shaanxi", "Shandong", "Shanxi", "Sichuan", "Yunnan", "Zhejiang", "Guangxi", "Nei Mongol", "Ningxia", "Xinjiang", "Xizang (Tibet)", "Beijing", "Chongqing", "Shanghai", "Tianjin")
    ),
    25 => array(
        'id' => 25,
        'nombre' => 'India',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).',
        'descripcion_details' => array("India Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Asia',
        'parent_id' => 4,
        'destacado' => false,
        'ciudades' => array("Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttaranchal", "Uttar Pradesh", "West Bengal")
    ),
    26 => array(
        'id' => 26,
        'nombre' => 'Egipto',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).',
        'descripcion_details' => array("Egipto Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Africa',
        'parent_id' => 5,
        'destacado' => true,
        'ciudades' => array("Ad Daqahliyah", "Al Bahr al Ahmar", "Al Buhayrah", "Al Fayyum", "Al Gharbiyah", "Al Iskandariyah", "Al Isma'iliyah", "Al Jizah", "Al Minufiyah", "Al Minya", "Al Qahirah", "Al Qalyubiyah", "Al Wadi al Jadid", "Ash Sharqiyah", "As Suways", "Aswan", "Asyut", "Bani Suwayf", "Bur Sa'id", "Dumyat", "Janub Sina'", "Kafr ash Shaykh", "Matruh", "Qina", "Shamal Sina'", "Suhaj")
    ),
    27 => array(
        'id' => 27,
        'nombre' => 'Nigeria',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).',
        'descripcion_details' => array("Nigeria Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Africa',
        'parent_id' => 5,
        'destacado' => false,
        'ciudades' => array("Abia", "Abuja Federal Capital", "Adamawa", "Akwa Ibom", "Anambra", "Bauchi", "Bayelsa", "Benue", "Borno", "Cross River", "Delta", "Ebonyi", "Edo", "Ekiti", "Enugu", "Gombe", "Imo", "Jigawa", "Kaduna", "Kano", "Katsina", "Kebbi", "Kogi", "Kwara", "Lagos", "Nassarawa", "Niger", "Ogun", "Ondo", "Osun", "Oyo", "Plateau", "Rivers", "Sokoto", "Taraba", "Yobe", "Zamfara")
    ),
    28 => array(
        'id' => 28,
        'nombre' => 'Argelia',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).',
        'descripcion_details' => array("Argelia Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Africa',
        'parent_id' => 5,
        'destacado' => true,
        'ciudades' => array("Adrar", "Ain Defla", "Ain Temouchent", "Alger", "Annaba", "Batna", "Bechar", "Bejaia", "Biskra", "Blida", "Bordj Bou Arreridj", "Bouira", "Boumerdes", "Chlef", "Constantine", "Djelfa", "El Bayadh", "El Oued", "El Tarf", "Ghardaia", "Guelma", "Illizi", "Jijel", "Khenchela", "Laghouat", "Muaskar", "Medea", "Mila", "Mostaganem", "M'Sila", "Naama", "Oran", "Ouargla", "Oum el Bouaghi", "Relizane", "Saida", "Setif", "Sidi Bel Abbes", "Skikda", "Souk Ahras", "Tamanghasset", "Tebessa", "Tiaret", "Tindouf", "Tipaza", "Tissemsilt", "Tizi Ouzou", "Tlemcen")
    ),
    29 => array(
        'id' => 29,
        'nombre' => 'Australia',
        'precio' => '$36000',
        'descripcion' => 'VISITANDO: Vancouver/ Hope / Kelowna / Revelstoke / Golden / Columbia Ice Field / Canmore /  Banff / Calgar. Incluye: vuelo por American Airlines (Clase turista).',
        'descripcion_details' => array("Australia Aéreos ES/FE/ES", "04 Noches de alojamiento con régimen según elección.", "Traslados In / Out", "City Tour", "Notas: AÉREOS NETOS NO COMISONABLES.", "Consulte a su ejecutivo de ventas por asistencia al viajero."),
        'url' => './images/canada.jpg',
        'continente' => 'Oceania',
        'parent_id' => 6,
        'destacado' => false,
        'ciudades' => array("ciudad1")
    ),
);

$json_string = json_encode($productos, true);
$file = '../json/productos.json';
file_put_contents($file, $json_string);