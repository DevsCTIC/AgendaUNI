-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2015 a las 15:16:07
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cine`
--
USE cine;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE IF NOT EXISTS `pelicula` (
  `cod_pel_in` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom_pel_vc` varchar(255) NOT NULL,
  `tip_pel_in` tinyint(4) NOT NULL DEFAULT '0',
  `yea_pel_si` smallint(5) unsigned NOT NULL DEFAULT '0',
  `act_pri_pel_in` int(10) unsigned NOT NULL DEFAULT '0',
  `dir_pel_in` int(10) unsigned NOT NULL DEFAULT '0',
  `pre_ven_pel_in` int(10) unsigned NOT NULL DEFAULT '0',
  `est_pel_in` int(10) unsigned NOT NULL DEFAULT '0',
  `apt_pel_in` int(10) unsigned NOT NULL DEFAULT '0',
  `res_pel_in` int(10) unsigned NOT NULL DEFAULT '0',
  `des_pel_vc` varchar(4000) DEFAULT NULL,
  `vid_pel_vc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cod_pel_in`),
  KEY `ak_pelicula` (`tip_pel_in`,`yea_pel_si`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`cod_pel_in`, `nom_pel_vc`, `tip_pel_in`, `yea_pel_si`, `act_pri_pel_in`, `dir_pel_in`, `pre_ven_pel_in`, `est_pel_in`, `apt_pel_in`, `res_pel_in`, `des_pel_vc`, `vid_pel_vc`) VALUES
(1, 'STAR WARS: EL DESPERTAR DE LA FUERZA', 5, 1994, 2, 1, 1, 1, 14, 0, 'Esta nueva entrega de la Guerra de las Galaxias se establecerá 30 años después de ''El retorno del Jedi'', contando con una nueva generación tanto de héroes como de oscuros villanos y, por supuesto, la vuelta de algunos de los personajes favoritos de los fans.', 'clLYRvtsoZ0'),
(2, 'EL SECRETO DE UNA OBSECION', 5, 1972, 6, 5, 1, 1, 14, 1, 'Basada en la película dirigida por Juan José Campanella, llega a la pantalla grande SECRETOS DE UNA OBSESIÓN, la adaptación del impecable film nacional El Secreto de sus Ojos. Esta nueva versión presenta un thriller potente e intenso escrito y dirigido por el nominado al premio de la Academia® Billy Ray (Captain Phillips, The Hunger Games), producido por el ganador de un Oscar® Mark Johnson (Rain Man, Breaking Bad) y contando con la presencia de Juan José Campanella como productor ejecutivo. Continuando con las figuras de renombre, el film está protagonizado por el nominado al premio de la Academia® Chiwetel Ejiofor y las ganadoras del mismo premio, Nicole Kidman y Julia Roberts.', 'avd9XgXCDTM'),
(3, 'FRANCISCO, EL PADRE JORGE', 2, 1997, 10, 9, 1, 1, 14, 1, 'A través de una periodista (Silvia Abascal) que está escribiendo un libro sobre el Papa Francisco (Darío Gandinetti) recorremos la emocionante vida del padre Jorge en su permanente lucha contra la pobreza, la prostitución, la explotación laboral, la droga y la corrupción. Desde el adolescente que descubre su vocación hasta el jesuita elegido Papa, descubrimos la misma calidez, buen humor y sabiduría con la que el Papa asombra hoy al mundo.', 'zA0fOYKYxmQ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula_tipo`
--

CREATE TABLE IF NOT EXISTS `pelicula_tipo` (
  `cod_pel_tip_in` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nom_pel_tip_vc` varchar(100) NOT NULL,
  PRIMARY KEY (`cod_pel_tip_in`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `pelicula_tipo`
--

INSERT INTO `pelicula_tipo` (`cod_pel_tip_in`, `nom_pel_tip_vc`) VALUES
(1, 'Sci Fi'),
(2, 'Drama'),
(3, 'Adventure'),
(4, 'War'),
(5, 'Comedy'),
(6, 'Horror'),
(7, 'Action'),
(8, 'Kids');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `cod_per_in` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom_per_vc` varchar(255) NOT NULL,
  `act_per_ti` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `dir_per_ti` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cod_per_in`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`cod_per_in`, `nom_per_vc`, `act_per_ti`, `dir_per_ti`) VALUES
(1, 'Quentin Tarantino', 0, 1),
(2, 'John Travolta', 1, 0),
(3, 'Samuel L. Jackson,', 1, 0),
(4, 'Uma Thurman', 1, 0),
(5, 'Francis Ford Coppola', 0, 1),
(6, 'Marlon Brando', 1, 0),
(7, 'Al Pacino', 1, 0),
(8, 'James Caan', 1, 0),
(9, 'Roberto Benigni', 0, 1),
(10, 'Roberto Benigni', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
