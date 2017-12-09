-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2017 a las 04:34:25
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdinvestigacionv2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulos` int(11) NOT NULL,
  `nombre_arti` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `autores` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `numero_issn` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `idioma` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `nombre_revista` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `categoria_revista` char(2) COLLATE latin1_spanish_ci NOT NULL,
  `medio_divul` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `linkarticulo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulos`, `nombre_arti`, `autores`, `numero_issn`, `idioma`, `fecha`, `nombre_revista`, `categoria_revista`, `medio_divul`, `linkarticulo`, `id_grupo`) VALUES
(27, 'Hydra ', 'Fabian', '13345', 'EspaÃ±ol', '2008-05-16', 'gata', 'C', 'Electronico', 'http://gato.com', 2),
(28, 'Esto es Hydra', 'fabian', '654', 'EspaÃ±ol', '2007-05-16', 'rivista', 'A1', 'Electronico', 'http://', 2),
(29, 'Una mirada a la globalizaciÃ³n y la competitividad', 'Wilson Gamboa', '2011-6624', 'EspaÃ±ol', '2009-10-06', 'Unisangil Empresarial', 'C', 'Electronico', 'www.matices.com/arti', 8),
(30, 'Prototipo para el control de temperatura y humedad', 'BenÃ­tez MuÃ±oz, s. Rueda GualdrÃ³n, F. AcuÃ±a SÃ¡nchez, N;  Gamboa Contreras, W;  Blanco Olarte, E; Retamoso Llamas,', '0304-2847', 'EspaÃ±ol', '2009-11-11', 'Facultad Nacional de AgronomÃ­a', 'B', 'Electronico', 'http://articulos/grastronimia', 8),
(31, 'RobÃ³tica MÃ³vil â€“ Una aproximaciÃ³n preliminar', 'MuÃ±oz Neira, M.', '2027-4408', 'EspaÃ±ol', '2008-11-03', 'Matices', 'C', 'Electronico', 'http://matices/robotica', 8),
(32, 'Calidad fÃ­sico quÃ­mica del agua del rÃ­o Fonce ', 'Guerrero Salazar, W;  Vargas TangÃ¼a, F; Fuquen Vargas, P', '2027-4408', 'EspaÃ±ol', '2011-11-17', 'Matices ', 'C', 'Electronico', '', 8),
(33, 'Usando el protocolo de comunicaciÃ³n serial sÃ­ncr', 'Sierra Solano, M. y Medina Rojas, A', '2027-4408', 'EspaÃ±ol', '2011-11-12', 'Matices TecnolÃ³gicos', 'C', 'Electronico', '', 8),
(34, 'g', 'asf', 'asdf', 'EspaÃ±ol', '0000-00-00', 'sfd', 'A2', 'Fisico', 'sfd', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `profesion` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`cedula`, `nombre`, `telefono`, `correo`, `contrasena`, `profesion`, `id_grupo`) VALUES
(1234, 'Graciela OIarte Rueda', '3208975432', 'ices@unisangil.edu.co', '123', 'Enfermera Jefe ', 11),
(12345, 'Argenis RamÃ­rez RamÃ­rez ', '3158743224', 'idcea@unisangil.edu.co', '123', 'Ingeniera Financiera', 12),
(76543, 'Henry Javier BarÃ³n Gonzalez', '3124567890', 'hbaron@unisangil.edu.co', '123', 'Ingeniero Sistemas', 2),
(123456, 'Wilson Gamboa Contreras', '3208975432', 'wilson@unisangil.edu.co', '123', 'Ingeniero Electronico', 8),
(1234567, 'Miguel Arturo Fajardo Rojas', '3208975432', 'cess@unisangil.edu.co', '123', 'Ingeniero Financiero', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupos` int(11) NOT NULL,
  `nombre_grupos` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `categoria` char(2) COLLATE latin1_spanish_ci NOT NULL,
  `ano_creacion` int(4) NOT NULL,
  `descripcion` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `linea_investigacion` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `programas_vincula` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `facultad` varchar(250) COLLATE latin1_spanish_ci NOT NULL,
  `sede` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(250) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupos`, `nombre_grupos`, `categoria`, `ano_creacion`, `descripcion`, `linea_investigacion`, `programas_vincula`, `facultad`, `sede`, `imagen`) VALUES
(2, 'Hydra', 'C', 2009, 'HYDRA es el grupo de investigaciÃ³n de ingenierÃ­a de sistemas y tecnologÃ­a en sistemas de UNISANGIL, el cual desarrolla trabajos de investigaciÃ³n en temas de redes neuronales artificiales (inteligencia artificial, reconocimiento de patrones), construcciÃ³n de software (arquitectura de software, uso de frameworks, mejores prÃ¡cticas, patrones de diseÃ±o), desarrollo de aplicativos y juegos para mÃ³viles, desarrollo de software para la web y telecomunicaciones.', 'Aplicaciones tecnolÃ³gicas, IngenierÃ­a del softwa', 'Ingenieria de sistemas, TecnologÃ­a de sistemas', 'Naturales e IngenierÃ­a', 'San Gil', ''),
(8, 'Identus', 'C', 2002, 'El grupo de InnovaciÃ³n y desarrollo tecnolÃ³gico de UNISANGIL- IDENTUS, promueve y desarrolla procesos de investigaciÃ³n tendientes a resolver problemas del orden tÃ©cnico y tecnolÃ³gico de los sectores agropecuario, agrÃ­cola e industrial de la regiÃ³n, ademÃ¡s de asumir una responsabilidad tÃ©cnica ante las cadenas productivas del paÃ­s y una responsabilidad social frente a los productores de la regiÃ³n.  ', 'Agroindustria, AutomatizaciÃ³n de procesos, Biotec', 'IngenierÃ­as: Ambiental, Agricola, Mantenimiento, ', 'Naturales e IngenierÃ­a', 'San Gil', ''),
(11, ' ICES', 'D', 2007, ' El grupo ICES: Nace en el 2007 para desarrollar investigaciones conjuntamente con los estudiantes de cada una de las disciplinas en formaciÃ³n, es asÃ­ que cada lÃ­nea de investigaciÃ³n esta conformada por un docente investigador responsable de la investigaciÃ³n acompaÃ±ado de un grupo de estudiantes de enfermerÃ­a o de licenciatura de acuerdo a la disciplina que apoyan el proceso de investigaciÃ³n a fin de fortalecer el aprendizaje desarrollado en las tutorÃ­as de sus asignaturas destinadas pa', 'Salud Materna-Perinatal, Salud Familiar, Salud Ocu', 'EnfermerÃ­a, PsicologÃ­a, Licenciatura en EducaciÃ³n', 'EducaciÃ³n y de la Salud', 'San Gil', ''),
(12, ' IDCEA', 'Re', 2006, ' IDCEA se formo en el aÃ±o 2006. Ã‰ste grupo propone impulsar e incentivar la participaciÃ³n del sector empresarial y de la comunidad en general de la regiÃ³n, asÃ­ como la participaciÃ³n de la comunidad acadÃ©mica de UNISANGIL, en los diferentes fases de la investigaciÃ³n, innovaciÃ³n y desarrollo de nuevos procesos administrativos, productos y servicios que le permitan al sector asumir los retos de la globalizaciÃ³n en todos los aspectos y Ã¡reas que midan su competitividad en el entorno.     ', 'InnovaciÃ³n EstratÃ©gica, Comportamiento Historia y Ã‰xito Empresarial, Cadenas Productivas', 'AdministraciÃ³n de Empresas, ContadurÃ­a PÃºblica y TecnologÃ­a en GestiÃ³n TurÃ­stica y Hotelera.', 'EconÃ³micas y Administrativas', 'San Gil', ''),
(13, ' CESS', 'Re', 2008, ' Ã‰ste grupo realiza proyectos de investigaciÃ³n y desarrollo econÃ³mico y social, que potencien las prÃ¡cticas sociales del sector de la economÃ­a solidaria y los procesos de autogestiÃ³n con participaciÃ³n de las comunidades, teniendo en cuenta valores como la Ã©tica, la justicia social, en consecuencia con el objetos social y la misiÃ³n de Unisangil.', 'EconomÃ­a Solidaria', 'TecnologÃ­a en GestiÃ³n de Empresas de EconomÃ­a Solidaria.', 'EconÃ³micas y Administrativas', 'San Gil', ''),
(14, ' GECO', '', 2008, ' La creaciÃ³n del grupo de investigaciÃ³n GECO tiene el fundamento de hacer parte de la  base de datos sobre producciÃ³n acadÃ©mico cientÃ­fico en Colciencias, en la que es posible identificar a los actores, su generaciÃ³n de nuevo conocimiento a travÃ©s de productos como proyectos, ponencias, artÃ­culos entre otros.', 'LÃ­nea de anÃ¡lisis en derecho pÃºblico, jurÃ­dico y socio jurÃ­dico, LÃ­nea de estudio en aspectos ', 'Derecho', 'JurÃ­dicas y PolÃ­ticas', 'San Gil', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `titulo_libro` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `autor_libro` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_libro` date NOT NULL,
  `isbn_libro` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `lugar_publica` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `medio_divul_libro` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `link_libro` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `titulo_libro`, `autor_libro`, `fecha_libro`, `isbn_libro`, `lugar_publica`, `medio_divul_libro`, `link_libro`, `id_grupo`) VALUES
(3, 'libros titulo', 'libros auytor', '2016-10-07', 'libros987 isbn', 'libros publica', 'Electronico', 'www.libros.com', 4),
(4, 'libros', 'libros', '2016-10-13', 'libros987', 'libros', 'Electronico', 'www.libros.com', 4),
(5, 'asdfasd', 'libros', '2016-10-14', 'libros987', 'libros', 'Electronico', 'www.sdgsdfg', 2),
(6, 'DetecciÃ³n de patrones caracterÃ­sticos con transf', 'SantafÃ© RamÃ³n, Y., Chaparro, B. y Franco AcuÃ±a, J', '2012-11-10', '1692-7257', 'colombia', 'Electronico', 'www.libros.com/libro', 8),
(7, 'DiseÃ±o de una aplicaciÃ³n para detecciÃ³n de ECG ', 'SantafÃ© RamÃ³n, y Quiroz GÃ³mez, J.', '2012-11-11', '345345', 'Editorial M', 'Fisico', '.', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patente`
--

CREATE TABLE `patente` (
  `id_patente` int(11) NOT NULL,
  `nombre_patente` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `autores_patente` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `fecha_patente` date NOT NULL,
  `nombre_comercial_patente` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `disponibilidad_patente` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `instfinanciera_patente` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `tipo_patente` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `patente`
--

INSERT INTO `patente` (`id_patente`, `nombre_patente`, `autores_patente`, `fecha_patente`, `nombre_comercial_patente`, `disponibilidad_patente`, `instfinanciera_patente`, `tipo_patente`, `id_grupo`) VALUES
(1, 'Equipo secador para panela en polvo utilizando radiaciÃ³n infrarroja', 'Oscar Javier Velasco SÃ¡nchez, Carlos Adolfo Ãngel Castro y Wilson Gamboa', '2016-11-09', 'Secadora de Panela', 'Restringido', 'UNISANGIL', 'InvenciÃ³n', 2),
(2, 'Pulverizadora', 'investigacon', '2016-11-11', 'pulve', 'Restringido', 'UNISANGIL', 'InnovaciÃ³n', 2),
(4, 'Equipo secador para panela en polvo utilizando radiaciÃ³n infrarroja', 'Oscar Javier Velasco SÃ¡nchez, Carlos Adolfo Ãngel Castro, y  Wilson Gamboa', '2016-10-14', 'Secadora de Panela', 'Restringido', 'UNISANGIL', 'InvenciÃ³n', 8),
(5, 'Pulverizadora de panela', 'Oscar Javier Velasco SÃ¡nchez, Carlos Adolfo Ãngel Castro, y Wilson Gamboa', '2015-02-17', 'Pulverizador de panela', 'Restringido', 'UNISANGIL', 'InnovaciÃ³n', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_tecn`
--

CREATE TABLE `producto_tecn` (
  `id_productotecn` int(11) NOT NULL,
  `nombre_producto` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `institu_financiera` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `tipo_registro` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `calidad_invencion` char(3) COLLATE latin1_spanish_ci NOT NULL,
  `ciudad` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `id_software` int(11) NOT NULL,
  `nombre_software` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `nombre_comerci_soft` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `tipo_registr_soft` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `sitioweb_soft` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulos`),
  ADD KEY `articulo` (`id_grupo`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `director` (`id_grupo`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupos`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `libro` (`id_grupo`);

--
-- Indices de la tabla `patente`
--
ALTER TABLE `patente`
  ADD PRIMARY KEY (`id_patente`),
  ADD KEY `patente` (`id_grupo`);

--
-- Indices de la tabla `producto_tecn`
--
ALTER TABLE `producto_tecn`
  ADD PRIMARY KEY (`id_productotecn`),
  ADD KEY `product_tecno` (`id_grupo`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id_software`),
  ADD KEY `software` (`id_grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `patente`
--
ALTER TABLE `patente`
  MODIFY `id_patente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `producto_tecn`
--
ALTER TABLE `producto_tecn`
  MODIFY `id_productotecn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `software`
--
ALTER TABLE `software`
  MODIFY `id_software` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
