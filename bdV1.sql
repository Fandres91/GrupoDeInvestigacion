-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2017 a las 22:31:18
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6
CREATE DATABASE bdinvestigacionV2;

/*con este comando digo que BD voy a usar */
USE bdinvestigacionV2;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_datos`
--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(20) DEFAULT NULL,
  `ocupacion` text,
  `telefono` varchar(20) DEFAULT NULL,
  `sitioweb` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Base de datos: `basedatosinvestiga`
--
CREATE DATABASE IF NOT EXISTS `basedatosinvestiga` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `basedatosinvestiga`;

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
  `id_grupo` varchar(11) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulos`, `nombre_arti`, `autores`, `numero_issn`, `idioma`, `fecha`, `nombre_revista`, `categoria_revista`, `medio_divul`, `linkarticulo`, `id_grupo`) VALUES
(21, 'cambieeeee', 'marian', '1234-323', 'Ingles', '0005-06-04', 'fabian', 'B', 'Electronico', 'htpp://www.articulo.com/ya', 'Hydra'),
(41, 'Prueba', 'Prueba', '353', 'EspaÃ±ol', '2013-02-02', 'ciinatic', 'C', 'Fisico', 'www.ada.com', 'Hydra'),
(45, 'Boton actualizar sirve', 'Boton actualizar sirve', 'Boton actualizar sirve', 'EspaÃ±ol', '2016-09-22', 'Boton actualizar sirve', 'A1', 'Electronico', 'Boton actualizar sirve', 'Hydra'),
(46, 'gestion de rutas de transporte publico colectivo p', 'fabian andres duran santos, marian ferrer gonzales, henry javier barÃ³n Gonzalez', '999-789', 'Ingles', '2016-09-14', 'Ciinatic', 'C', 'Electronico', 'www.ciinatic.com/articulo', 'Hydra'),
(47, 'pagina', 'fabian andres duran santos, marian ferrer gonzales, henru javie vaorn confasels', '465', 'Ingles', '2016-09-02', 'revista', 'A2', 'Electronico', 'http://www.google.com', 'Hydra'),
(48, 'nuevo habilitado', 'Fabian , marian', '465', 'EspaÃ±ol', '2016-09-15', 'df', 'B', 'Fisico', 'http://', 'Hydra'),
(49, 'consulta prueba', 'consulta prueba', 'consulta prueba', 'consulta prueba', '2016-09-08', 'consulta prueba', 'c', 'consulta prueba', 'consulta prueba', 'Identus'),
(50, 'otro articulo', 'consulta prueba', 'consulta prueba', 'consulta prueba', '2016-09-08', 'consulta prueba', 'c', 'consulta prueba', 'consulta prueba', 'Identus'),
(51, 'gestion', 'maron', '654-654', 'EspaÃ±ol', '2016-01-02', 'cinas', 'A1', 'Electronico', 'http://fan.com', 'limn'),
(52, 'campo cambo', 'gabian', '6-465', 'Ingles', '5654-02-01', 'cinatin', 'A2', 'Electronico', 'http://.com', 'limn'),
(53, 'fabin', 'dabi', '65', 'Ingles', '2016-09-02', 'asfds', 'B', 'Electronico', 'http://', 'nuevo');

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
  `id_grupo` varchar(11) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`cedula`, `nombre`, `telefono`, `correo`, `contrasena`, `profesion`, `id_grupo`) VALUES
(123, 'camilo', '30165', 'camilo', '123', 'af', 'nuevo'),
(123456, 'Fabian Anres', '3016546', 'fabian@unisangil.edu.co', '123456', 'sistemas', 'panela'),
(684598, 'Henry Javier BarÃ³n Gonzalez', '3020654978', 'hbaron@unisangil.edu.co', 'hbarin', 'Ingeniero de sistemas', 'Hydra'),
(9865498, 'Wilson Alonso Gonzales', '3015649878', 'wilson@unisangil.edu.co', 'wilso', 'Ingeniero de electronico', 'Bios'),
(11058498, 'yenny ', '3065464', 'yeni@unisangil.edu.co', '123456', 'psicologa', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `nombre_grupos` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `categoria` char(2) COLLATE latin1_spanish_ci NOT NULL,
  `ano_creacion` int(4) NOT NULL,
  `descripcion` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `linea_investigacion` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `programas_vincula` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `sede` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`nombre_grupos`, `categoria`, `ano_creacion`, `descripcion`, `linea_investigacion`, `programas_vincula`, `sede`) VALUES
('Bios', 'D', 2011, 'nada nada', 'BiologÃ­a', 'Programas referentes a la biologÃ­a', 'Chiquinquira'),
('Hydra', 'C', 2016, ' esto es texto esto es texto esto es texto', 'todas', 'esto es texto', 'San Gil'),
('nuevo', 'F', 2015, 'nada nada', 'nada', 'ndad', 'sanil'),
('panela', 'A', 2020, 'panela', 'cambieeeee', 'cambieeeee', 'Chiquinquira');

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
  `id_grupo` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `titulo_libro`, `autor_libro`, `fecha_libro`, `isbn_libro`, `lugar_publica`, `medio_divul_libro`, `link_libro`, `id_grupo`) VALUES
(1, 'Miradas al mas allá', '', '2016-08-09', '16516565', 'Libros Simon', 'Fisico', '', 'Identus'),
(2, 'Software', 'fabian', '2016-09-01', '654-654', 'Unisangil', 'digital', 'wwww.uni.com', 'limn');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patente`
--

CREATE TABLE `patente` (
  `id_patente` int(11) NOT NULL,
  `nombre_patente` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

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
  `id_grupo` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `producto_tecn`
--

INSERT INTO `producto_tecn` (`id_productotecn`, `nombre_producto`, `institu_financiera`, `tipo_registro`, `calidad_invencion`, `ciudad`, `id_grupo`) VALUES
(1, 'Panela', 'Unisangil', 'patente', 'A1', 'San Gil', 'Identus');

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
  `id_grupo` varchar(11) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`id_software`, `nombre_software`, `nombre_comerci_soft`, `fecha`, `tipo_registr_soft`, `sitioweb_soft`, `id_grupo`) VALUES
(1, 'Desarrollo e implementacion de una herramienta multiplaforma para guiar de forma interactiva la elaboracion de proyectos', 'GuideProject', '2016-08-02', 'Registrado', 'www.guideProjec.com', 'Hydra');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulos`),
  ADD KEY `grupo` (`id_grupo`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `grupo` (`id_grupo`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`nombre_grupos`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `grupo` (`id_grupo`);

--
-- Indices de la tabla `patente`
--
ALTER TABLE `patente`
  ADD PRIMARY KEY (`id_patente`);

--
-- Indices de la tabla `producto_tecn`
--
ALTER TABLE `producto_tecn`
  ADD PRIMARY KEY (`id_productotecn`),
  ADD KEY `grupo` (`id_grupo`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id_software`),
  ADD KEY `grupo` (`id_grupo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `patente`
--
ALTER TABLE `patente`
  MODIFY `id_patente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto_tecn`
--
ALTER TABLE `producto_tecn`
  MODIFY `id_productotecn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `software`
--
ALTER TABLE `software`
  MODIFY `id_software` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;--
-- Base de datos: `bdinvestigacionv2`
--
CREATE DATABASE IF NOT EXISTS `bdinvestigacionv2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdinvestigacionv2`;

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
(123, 'Daisy Johana Acosta Ortiz', '3208975432', 'acosta@unisangil.edu.co', '123', 'Abogada', 14),
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
  MODIFY `id_software` int(11) NOT NULL AUTO_INCREMENT;--
-- Base de datos: `editor`
--
CREATE DATABASE IF NOT EXISTS `editor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `editor`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `email` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `introduccion` varchar(1000) DEFAULT NULL,
  `objetivos` varchar(1000) DEFAULT NULL,
  `problema` varchar(1000) DEFAULT NULL,
  `justificacion` varchar(1000) DEFAULT NULL,
  `referente` varchar(1000) DEFAULT NULL,
  `metodologia` varchar(1000) DEFAULT NULL,
  `bibliografia` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`email`, `nombre`, `contrasena`, `sexo`, `telefono`, `imagen`, `titulo`, `introduccion`, `objetivos`, `problema`, `justificacion`, `referente`, `metodologia`, `bibliografia`) VALUES
('fabian@hotmail.com', 'fabian', '123456', 'M', '3017772355', 'amigo.png', 'Diseño y desarrollo de un prototipo para alimentar mascotas de tamaño mediano', 'La buena alimentación en las mascotas ayuda en su desarrollo ', 'Intrpdiccion a algoIntrpdiccion a algoIntrpdiccion a algoIntrpdiccion a algo', 'Intrpdiccion a algoIntrpdiccion a algoIntrpdiccion a algo', 'Intrpdiccion a algoIntrpdiccion a algoIntrpdiccion a algo', 'Intrpdiccion a algoIntrpdiccion a algoIntrpdiccion a algo', 'Intrpdiccion a algoIntrpdiccion a algoIntrpdiccion a algo', 'Intrpdiccion a algoIntrpdiccion a algoIntrpdiccion a algo'),
('fago_@hotmai.com', 'fabina andres duran', '123456', 'M', '3017772355', 'amigo.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`email`);
ALTER TABLE `contactos` ADD FULLTEXT KEY `buscador` (`email`,`nombre`,`sexo`);
--
-- Base de datos: `hydrabd`
--
CREATE DATABASE IF NOT EXISTS `hydrabd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hydrabd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `id_cedula` int(11) NOT NULL,
  `nombre_director` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `profesion` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_semillero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_cedula` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `id_semillero` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `autores` varchar(200) NOT NULL,
  `resumen` varchar(600) NOT NULL,
  `fecha` date NOT NULL,
  `link_pagina` varchar(100) NOT NULL,
  `link_video` varchar(100) NOT NULL,
  `archivo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `titulo`, `autores`, `resumen`, `fecha`, `link_pagina`, `link_video`, `archivo`) VALUES
(1, 'Guide project', 'Fabian andres', 'babsbfkjasf', '2017-01-03', 'www.nada.com', 'www.ypou.coo', ''),
(2, 'sin titulo', ' todos', 'en blnaco', '2017-01-11', 'www.na', 'ww.cm', ''),
(3, 'sin titulo', ' todos', 'en blnaco', '2017-01-18', 'www.na', 'ww.cm', ''),
(4, 'sin titulo', ' todos', 'en blnaco', '2017-01-19', 'www.na', 'ww.cm', ''),
(5, 'sin titulo', ' todos', 'en blnaco', '0000-00-00', 'www.na', 'ww.cm', ''),
(6, 'sin titulo', ' todos', 'en blnaco', '0000-00-00', 'www.na', 'ww.cm', ''),
(7, 'asddfsfdf', ' todos', 'en blnaco', '2017-01-12', 'www.na', 'ww.cm', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semilleros`
--

CREATE TABLE `semilleros` (
  `id_semillero` int(11) NOT NULL,
  `nombre_semillero` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `programas_vincula` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id_cedula`),
  ADD KEY `semillero` (`id_semillero`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_cedula`),
  ADD KEY `semillero` (`id_semillero`),
  ADD KEY `proyecto` (`id_proyecto`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `semilleros`
--
ALTER TABLE `semilleros`
  ADD PRIMARY KEY (`id_semillero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `director`
--
ALTER TABLE `director`
  MODIFY `id_cedula` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_cedula` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `semilleros`
--
ALTER TABLE `semilleros`
  MODIFY `id_semillero` int(11) NOT NULL AUTO_INCREMENT;--
-- Base de datos: `locator`
--
CREATE DATABASE IF NOT EXISTS `locator` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `locator`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_contacto`
--

CREATE TABLE `admin_contacto` (
  `id_admin_contacto` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin_contacto`
--

INSERT INTO `admin_contacto` (`id_admin_contacto`, `id_admin`, `id_contacto`) VALUES
(14, 3, 14),
(15, 3, 15),
(16, 3, 16),
(17, 3, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregarcontacto`
--

CREATE TABLE `agregarcontacto` (
  `id_contacto` int(11) NOT NULL,
  `nombreco` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `apellidoco` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `parentescoco` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `fotoco` longblob,
  `numerocelularco` varchar(10) CHARACTER SET utf8 NOT NULL,
  `estadoco` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `contactoposicionlat` text CHARACTER SET utf8,
  `contactoposicionlon` text CHARACTER SET utf8,
  `zonatext` text CHARACTER SET utf8,
  `zonatextalert` text CHARACTER SET utf8,
  `contactoemail` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contactoreporte` varchar(15) COLLATE utf8_spanish_ci DEFAULT 'DESACTIVADO',
  `infozona` text COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `agregarcontacto`
--

INSERT INTO `agregarcontacto` (`id_contacto`, `nombreco`, `apellidoco`, `parentescoco`, `fotoco`, `numerocelularco`, `estadoco`, `contactoposicionlat`, `contactoposicionlon`, `zonatext`, `zonatextalert`, `contactoemail`, `contactoreporte`, `infozona`) VALUES
(14, 'Altair', 'Invenlaha', 'Hija', 0x4368727973616e7468656d756d2e6a7067, '2222222222', 'Activo', '6.473504555018997', '-73.25869218853154', '{6.463972062521893,-73.26001167297363},{6.4635029945335445,-73.2585096359253},{6.464654342455537,-73.25898170471191},{6.464654342455537,-73.25971126556396},{6.463972062521893,-73.26001167297363}', '6.463972062521893 -73.26001167297363,6.4635029945335445 -73.2585096359253,6.464654342455537 -73.25898170471191,6.464654342455537 -73.25971126556396,6.463972062521893 -73.26001167297363', NULL, 'DESACTIVADO', NULL),
(15, 'Leydi', 'Paez', 'Mamá', 0x4465736572742e6a7067, '1111111190', 'Inactivo', '6.462737405933508', '-73.26200739887395', '{6.466829103599594,-73.26016187667847},{6.466658534436207,-73.25968980789185},{6.465592475861098,-73.25994729995728},{6.465933614849721,-73.26170682907104},{6.466743819025096,-73.26157808303833},{6.466829103599594,-73.26016187667847}', '6.466829103599594 -73.26016187667847,6.466658534436207 -73.25968980789185,6.465592475861098 -73.25994729995728,6.465933614849721 -73.26170682907104,6.466743819025096 -73.26157808303833,6.466829103599594 -73.26016187667847', 'redca@hotmail.es', 'ACTIVADO', 'El USUARIO lucho a modificado la zona segura del CONTACTO Leydi El Lunes 18 de Abril de 2016 A Las  5:15:18 PM '),
(16, 'Jimena', 'Saens', 'Hija', 0x50656e6775696e732e6a7067, '3333333333', 'Inactivo', NULL, NULL, '{6.465571154666657,-73.26048374176025},{6.465443227481197,-73.26009750366211},{6.46657324983293,-73.25971126556396},{6.466658534436207,-73.25999021530151},{6.465571154666657,-73.26048374176025}', '6.465571154666657 -73.26048374176025,6.465443227481197 -73.26009750366211,6.46657324983293 -73.25971126556396,6.466658534436207 -73.25999021530151,6.465571154666657 -73.26048374176025', NULL, 'DESACTIVADO', NULL),
(17, 'Tomas', 'sanches', 'Tio', 0x4b6f616c612e6a7067, '4444444444', 'Inactivo', '6.46361157906729', '-73.25903551128545', '{6.4653792638763115,-73.25985074043274},{6.465230015433474,-73.25927138328552},{6.4656564394389875,-73.25912117958069},{6.465848330124146,-73.25963616371155},{6.466551928679874,-73.25959324836731},{6.466786461314145,-73.26008677482605},{6.4656564394389875,-73.26055884361267},{6.4653792638763115,-73.25985074043274}', '6.4653792638763115 -73.25985074043274,6.465230015433474 -73.25927138328552,6.4656564394389875 -73.25912117958069,6.465848330124146 -73.25963616371155,6.466551928679874 -73.25959324836731,6.466786461314145 -73.26008677482605,6.4656564394389875 -73.26055884361267,6.4653792638763115 -73.25985074043274', 'elcorreo@ejemplo.com', 'ACTIVADO', 'El USUARIO lucho a modificado la zona segura del CONTACTO Leydi El Lunes 18 de Abril de 2016 A Las  5:15:18 PM ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevoadmin`
--

CREATE TABLE `nuevoadmin` (
  `id_admin` int(11) NOT NULL,
  `nombreadmin` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `edadadmin` int(11) DEFAULT NULL,
  `fotoadmin` longblob,
  `usernameadmin` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `passwordadmin` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `repasswordadmin` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `adminposicionlat` text CHARACTER SET utf8,
  `adminposicionlon` text CHARACTER SET utf8,
  `adminemail` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nuevoadmin`
--

INSERT INTO `nuevoadmin` (`id_admin`, `nombreadmin`, `edadadmin`, `fotoadmin`, `usernameadmin`, `passwordadmin`, `repasswordadmin`, `adminposicionlat`, `adminposicionlon`, `adminemail`) VALUES
(3, 'Luis Carlos', 23, 0x4465736572742e6a7067, 'lucho', 'lucho', 'lucho', '6.468742199999999', '-73.26031259999999', 'luxogogo7@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_contacto`
--
ALTER TABLE `admin_contacto`
  ADD PRIMARY KEY (`id_admin_contacto`),
  ADD KEY `fk_id_admin_idx` (`id_admin`),
  ADD KEY `fk_id_contacto_idx` (`id_contacto`);

--
-- Indices de la tabla `agregarcontacto`
--
ALTER TABLE `agregarcontacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD UNIQUE KEY `numerocelularco_UNIQUE` (`numerocelularco`);

--
-- Indices de la tabla `nuevoadmin`
--
ALTER TABLE `nuevoadmin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `adminemail_UNIQUE` (`adminemail`),
  ADD UNIQUE KEY `usernameadmin` (`usernameadmin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_contacto`
--
ALTER TABLE `admin_contacto`
  MODIFY `id_admin_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `agregarcontacto`
--
ALTER TABLE `agregarcontacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `nuevoadmin`
--
ALTER TABLE `nuevoadmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin_contacto`
--
ALTER TABLE `admin_contacto`
  ADD CONSTRAINT `fk_id_admin` FOREIGN KEY (`id_admin`) REFERENCES `nuevoadmin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_contacto` FOREIGN KEY (`id_contacto`) REFERENCES `agregarcontacto` (`id_contacto`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Base de datos: `mis_contactos`
--
CREATE DATABASE IF NOT EXISTS `mis_contactos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mis_contactos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `email` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sexo` char(1) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `telefono` varchar(13) DEFAULT NULL,
  `pais` varchar(50) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`email`, `nombre`, `sexo`, `nacimiento`, `telefono`, `pais`, `imagen`) VALUES
('fago_11@hotmail.com', 'faban', 'M', '2016-08-03', '301654', 'Colombia', 'amigo.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(11) NOT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `pais`) VALUES
(1, 'Colombia'),
(2, 'México'),
(3, 'Guatemala'),
(4, 'España'),
(5, 'Brasil'),
(6, 'Uruguay'),
(7, 'Perú'),
(8, 'Argentina'),
(9, 'Chile'),
(10, 'Paraguay'),
(11, 'Honduras'),
(12, 'El salvador'),
(13, 'Nicaragua'),
(14, 'Costa rica'),
(15, 'Panamá'),
(16, 'Venezuela'),
(17, 'Ecuador'),
(18, 'Bolivia'),
(19, 'Canada'),
(20, 'Estados Unidos'),
(21, 'Groenlandia'),
(22, 'República dominicana'),
(23, 'Haití'),
(24, 'Cuba'),
(25, 'Belice'),
(26, 'Inglaterra'),
(27, 'Francia'),
(28, 'Alemania'),
(29, 'Italia'),
(30, 'China'),
(31, 'Egipto'),
(32, 'Sudafrica'),
(33, 'Australia'),
(34, 'Nueva zelanda'),
(35, 'Pinchote');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`email`);
ALTER TABLE `contactos` ADD FULLTEXT KEY `buscador` (`email`,`nombre`,`sexo`,`telefono`,`pais`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Volcado de datos para la tabla `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{"angular_direct":"direct","snap_to_grid":"off","relation_lines":"true"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"hydrabd","table":"proyecto"},{"db":"hydrabd","table":"semilleros"},{"db":"hydrabd","table":"director"},{"db":"hydrabd","table":"estudiante"},{"db":"bdinvestigacionv2","table":"grupo"},{"db":"hydraBD","table":"semilleros"},{"db":"bdinvestigacionv2","table":"director"},{"db":"bdinvestigacionv2","table":"articulos"},{"db":"bdinvestigacionv2","table":"patente"},{"db":"editor","table":"contactos"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

--
-- Volcado de datos para la tabla `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('basedatosinvestiga', 'director', 'id_grupo', 'basedatosinvestiga', 'grupo', 'nombre_grupos'),
('bdinvestigacionv2', 'articulos', 'id_grupo', 'bdinvestigacionv2', 'grupo', 'id_grupos'),
('bdinvestigacionv2', 'director', 'id_grupo', 'bdinvestigacionv2', 'grupo', 'id_grupos'),
('bdinvestigacionv2', 'libros', 'id_grupo', 'bdinvestigacionv2', 'grupo', 'id_grupos'),
('bdinvestigacionv2', 'patente', 'id_grupo', 'bdinvestigacionv2', 'grupo', 'id_grupos'),
('bdinvestigacionv2', 'producto_tecn', 'id_grupo', 'bdinvestigacionv2', 'grupo', 'id_grupos'),
('bdinvestigacionv2', 'software', 'id_grupo', 'bdinvestigacionv2', 'grupo', 'id_grupos'),
('hydrabd', 'director', 'id_semillero', 'hydrabd', 'semilleros', 'id_semillero'),
('hydrabd', 'estudiante', 'id_proyecto', 'hydrabd', 'proyecto', 'id_proyecto'),
('hydrabd', 'estudiante', 'id_semillero', 'hydrabd', 'semilleros', 'id_semillero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'basedatosinvestiga', 'director', '{"sorted_col":"`id_grupo`  ASC"}', '2016-09-20 22:07:49'),
('root', 'bdinvestigacionv2', 'articulos', '{"sorted_col":"`id_grupo` ASC"}', '2016-10-14 14:01:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2016-05-20 20:18:00', '{"lang":"es","collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
