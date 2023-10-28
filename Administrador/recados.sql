-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2016 at 03:12 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `funildevendas`
--
CREATE DATABASE `funildevendas`;
USE `funildevendas`;
-- --------------------------------------------------------

--
-- Table structure for table `recados`
--

CREATE TABLE IF NOT EXISTS `recados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `recado` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `recados`
--

INSERT INTO `recados` (`id`, `nome`, `email`, `recado`, `created`) VALUES
(3, 'Jessica', 'jessica@celke.com.br', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu dapibus risus. Quisque vulputate enim dapibus, aliquam elit vitae, venenatis libero. Nam luctus pharetra sollicitudin. Quisque lobortis massa et ultrices lacinia. Nullam enim lectus, tempor non tempus nec, ornare porttitor orci. Duis et vulputate dui, eget ullamcorper mauris.', '2016-05-18 22:06:17'),
(4, 'Cesar', 'celkeadm@gmail.com', 'Nunc placerat fringilla elit, sed mollis turpis ornare ut. In id accumsan sapien. Praesent sit amet enim at arcu imperdiet posuere. Integer commodo gravida libero id semper. Nam sit amet malesuada sem, et laoreet magna. Praesent auctor orci fringilla libero pharetra, interdum tincidunt mauris imperdiet.', '2016-05-18 22:06:56'),
(5, 'Kelly', 'kelly@celke.com.br', 'Suspendisse a tempor est. Sed sollicitudin, eros vel dapibus lobortis, purus mi venenatis ante, in pulvinar tellus arcu vitae tortor. Donec volutpat egestas nunc, id pellentesque ipsum accumsan in. Suspendisse potenti. Mauris molestie, lectus quis bibendum efficitur, tortor nunc mollis neque, ac pellentesque diam augue sit amet orci. Nam at sodales nunc. Curabitur eget magna eget lorem eleifend lacinia non in risus.', '2016-05-18 22:07:19'),
(6, 'Gabriel', 'gabriel@celke.com.br', 'Nulla velit orci, feugiat eget rutrum vitae, molestie ut sapien. Pellentesque dictum maximus leo, at eleifend purus maximus vel. Suspendisse lobortis interdum dictum. Pellentesque in pellentesque ligula. Morbi pharetra ut sapien et viverra. Nam ac turpis vestibulum, elementum elit ac, fermentum lorem. Nam massa sem, porttitor vitae metus et, ultrices malesuada nisi.', '2016-05-18 22:11:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
