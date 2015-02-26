-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2015 a las 07:14:20
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `catalogo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE IF NOT EXISTS `carrito` (
`id` int(11) NOT NULL,
  `id_juego` decimal(10,0) DEFAULT NULL,
  `cantidad` decimal(2,0) DEFAULT NULL,
  `tiempo` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `Cedula` decimal(10,0) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Telefono` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE IF NOT EXISTS `prestamo` (
`Id_prestamo` int(10) NOT NULL,
  `Tiempo` decimal(10,0) DEFAULT NULL,
  `Pago` decimal(10,2) DEFAULT NULL,
  `id_cliente` decimal(10,0) DEFAULT NULL,
  `id_juego` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuego`
--

CREATE TABLE IF NOT EXISTS `videojuego` (
  `Id_Juego` decimal(10,0) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(500) DEFAULT NULL,
  `Cantidad` decimal(10,0) DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL,
  `Plataforma` varchar(50) DEFAULT NULL,
  `Imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videojuego`
--

INSERT INTO `videojuego` (`Id_Juego`, `Nombre`, `Descripcion`, `Cantidad`, `Precio`, `Plataforma`, `Imagen`) VALUES
('1', 'FIFA15', 'FIFA 15 recrea con todo detalle el f&uacute;tbol para que los aficionados sientan la emoci&oacute;n del deporte rey como nunca antes. S&eacute; testigo de c&oacute;mo el p&uacute;blico anima y corea desde las gradas a sus equipos tal y como pasa en la realidad, adem&aacute;s de escuchar a los comentaristas seguir la trama del juego con las Presentaciones Din&aacute;micas de Partido.', '95', '14500.00', 'XBOX/PS/PC', 'img/Fifa15.jpg'),
('2', 'Grand Theft Auto V  ', 'Quinta entrega de la afamada saga de juegos sandbox de Rockstar Games. Con una atrevida nueva direcci&oacute;n en la libertad en mundo abierto, la narrativa, tres protagonistas (Michael, Trevor y Franklin), la jugabilidad basada en misiones y el multijugador online, Grand Theft Auto V se centra en la b&uacute;squeda del todopoderoso dinero en un reinventado Sur de California en la actualidad.', '35', '15000.00', 'XBOX/PS/PC', 'img/GTAV.jpg'),
('3', 'PES 2015', 'Hace realidad el lema -el campo es nuestro-. Gracias a la combinaci&oacute;n de esfuerzos de los equipos de Producci&oacute;n de PES de Tokio y Windsor, han sido recreados perfectamente los momentos de total nerviosismo y emoci&oacute;n del f&uacute;tbol de primera categor&iacute;a.', '80', '12000.00', 'XBOX/PS/PC', 'img/PES2015.jpg'),
('4', 'FAR CRY 4', 'Desarrollado y distribuido por Ubisoft para PC, PlayStation 3, PlayStation 4, Xbox 360 y Xbox One, es la cuarta entrega de la saga de acci&oacute;n first person shooter Far Cry en la que viajaremos hasta el Himalaya para luchar contra un tirano amo y se&ntilde;or de sus tierras.', '12', '8000.00', 'XBOX/PS/PC', 'img/FC4.jpg'),
('5', 'LEFT 4 DEAD 2', 'Ambientado en el apocalipsis zombi, L4D2 es la secuela largamente esperada del galardonado Left 4 Dead. Jugar&aacute;s como uno de los cuatro nuevos supervivientes, armado con un enorme y devastador arsenal de armas cl&aacute;sicas y mejoradas. Adem&aacute;s de las armas de fuego, tendr&aacute;s la oportunidad de atacar a los infectados con diversas armas de combate cuerpo a cuerpo, desde motosierras hasta hachas, e incluso una mort&iacute;fera sart&eacute;n.', '43', '9000.00', 'XBOX/PS/PC', 'img/L4D2.jpg'),
('6', 'CALL OF DUTY: ADVANCED WARFARE ', 'Es una nueva entrega de la saga de disparos de Activision ambientado en un futuro 40 años en el tiempo en el que los contratistas militares privados se han convertido en los grandes actores de la guerra internacional. El juego cuenta con Kevin Spacey como gran estrella, y nos ofrece armamento futurista, incluyendo exoesqueletos, armaduras y otros elementos de ciencia ficci&oacute;n.', '87', '15000.00', 'PC/XBOX/PS', 'img/COD.jpg'),
('7', 'GEARS OF WAR 3', 'Es el final de la trilog&iacute;a conocida actualmente. Desarrollado por Epic Games en exclusiva para Xbox 360. El jugador se convierte en Marcus Fenix, h&eacute;roe de guerra y l&iacute;der del pelot&oacute;n Delta, quien debe salvar a la humanidad, ya que 18 meses despu&eacute;s de la ca&iacute;da del &uacute;ltimo basti&oacute;n humano, la guerra contra los Locust contin&uacute;a, mientras, bajo la superficie, una temible amenaza infecta el planeta.', '20', '11000.00', 'XBOX/PS', 'img/GOW3.jpg'),
('8', 'CALL OF DUTY: GHOSTS', 'Desarrollado por Infinity Ward y distribuido por Activision. La acci&oacute;n transcurre  diez a&ntilde;os despu&eacute;s de un evento que devast&oacute; a las masas; por lo que USA ha dejado de ser una superpotencia. Una de las pocas fuerzas especiales de la naci&oacute;n, los Ghosts, tendr&aacute;n que combatir contra un poder global tecnol&oacute;gicamente superior reci&eacute;n surgido. Y no ser&aacute; por la libertad, sino simplemente por sobrevivir.', '9', '9000.00', 'XBOX/PS', 'img/CODG.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
 ADD PRIMARY KEY (`id`), ADD KEY `id_juego` (`id_juego`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`Cedula`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
 ADD PRIMARY KEY (`Id_prestamo`), ADD KEY `id_cliente` (`id_cliente`), ADD KEY `id_juego` (`id_juego`);

--
-- Indices de la tabla `videojuego`
--
ALTER TABLE `videojuego`
 ADD PRIMARY KEY (`Id_Juego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
MODIFY `Id_prestamo` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_juego`) REFERENCES `videojuego` (`Id_Juego`);

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`Cedula`),
ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`id_juego`) REFERENCES `videojuego` (`Id_Juego`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
