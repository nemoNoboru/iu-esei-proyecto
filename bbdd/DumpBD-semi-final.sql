-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2015 at 06:43 PM
-- Server version: 5.5.44-0+deb8u1
-- PHP Version: 5.6.13-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `GSTRDB`
--
CREATE DATABASE IF NOT EXISTS `GSTRDB` DEFAULT CHARACTER SET utf16 COLLATE utf16_spanish2_ci;
USE `GSTRDB`;

-- --------------------------------------------------------

--
-- Table structure for table `Funcionalidad`
--

DROP TABLE IF EXISTS `Funcionalidad`;
CREATE TABLE IF NOT EXISTS `Funcionalidad` (
`fun_id` int(11) NOT NULL,
  `fun_name` varchar(64) COLLATE latin1_spanish_ci NOT NULL,
  `fun_desc` varchar(64) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `Funcionalidad`
--

INSERT INTO `Funcionalidad` (`fun_id`, `fun_name`, `fun_desc`) VALUES
(7, 'consultarWPA', 'consulta en paginas de la aplicacion integracion'),
(8, 'altaWPA', 'dar de alta en la aplicacion integrada'),
(9, 'bajaWPA', 'dar de baja en la aplicacion integrada'),
(10, 'modificacionWPA', 'modificar en la aplicacion integrada'),
(11, 'miscWPA', 'paginas comunes');

-- --------------------------------------------------------

--
-- Table structure for table `Pag_Fun`
--

DROP TABLE IF EXISTS `Pag_Fun`;
CREATE TABLE IF NOT EXISTS `Pag_Fun` (
  `pag_id` int(11) NOT NULL,
  `fun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `Pag_Fun`
--

INSERT INTO `Pag_Fun` (`pag_id`, `fun_id`) VALUES
(12, 7),
(13, 7),
(8, 8),
(9, 8),
(10, 9),
(11, 9),
(17, 10),
(18, 10),
(14, 11),
(15, 11),
(16, 11);

-- --------------------------------------------------------

--
-- Table structure for table `Pagina`
--

DROP TABLE IF EXISTS `Pagina`;
CREATE TABLE IF NOT EXISTS `Pagina` (
`pag_id` int(11) NOT NULL,
  `pag_name` varchar(64) COLLATE latin1_spanish_ci NOT NULL,
  `pag_desc` varchar(64) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `Pagina`
--

INSERT INTO `Pagina` (`pag_id`, `pag_name`, `pag_desc`) VALUES
(8, 'WPAaltaApuesta', 'alta apuesta de la aplicacion integrada'),
(9, 'WPAaltaSocios', 'alta socios de la aplicacion integrada'),
(10, 'WPAbajaApuestas', 'pagina de la aplicacion integrada'),
(11, 'WPAbajaSocios', 'pagina de la aplicacion integrada'),
(12, 'WPAconsultaApuestas', 'pagina de la aplicacion integrada'),
(13, 'WPAconsultaSocios', 'pagina de la aplicacion integrada'),
(14, 'WPAjornadas', 'pagina de la aplicacion integrada'),
(15, 'WPApremios', 'pagina de la aplicacion integrada'),
(16, 'WPAmenu', 'pagina de la aplicacion integrada'),
(17, 'WPAmodificacionApuestas', 'pagina aplicacion integrada'),
(18, 'WPAmodificacionSocios', 'pagina aplicacion integrada');

-- --------------------------------------------------------

--
-- Table structure for table `Rol`
--

DROP TABLE IF EXISTS `Rol`;
CREATE TABLE IF NOT EXISTS `Rol` (
`rol_id` int(11) NOT NULL,
  `rol_name` varchar(64) COLLATE latin1_spanish_ci NOT NULL,
  `rol_desc` varchar(64) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `Rol`
--

INSERT INTO `Rol` (`rol_id`, `rol_name`, `rol_desc`) VALUES
(5, 'Administradores', 'administradores globales'),
(6, 'administradores_wpa', 'administradores de la aplicacion'),
(7, 'usuarios', 'usuarios normales');

-- --------------------------------------------------------

--
-- Table structure for table `Rol_Fun`
--

DROP TABLE IF EXISTS `Rol_Fun`;
CREATE TABLE IF NOT EXISTS `Rol_Fun` (
  `rol_id` int(11) NOT NULL,
  `fun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `Rol_Fun`
--

INSERT INTO `Rol_Fun` (`rol_id`, `fun_id`) VALUES
(5, 7),
(5, 8),
(5, 9),
(5, 10),
(5, 11),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(7, 7),
(7, 11);

-- --------------------------------------------------------

--
-- Table structure for table `User_Fun`
--

DROP TABLE IF EXISTS `User_Fun`;
CREATE TABLE IF NOT EXISTS `User_Fun` (
  `user_id` int(11) NOT NULL,
  `fun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `User_Fun`
--

INSERT INTO `User_Fun` (`user_id`, `fun_id`) VALUES
(10, 7),
(10, 8),
(10, 9),
(10, 10),
(10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `User_Pag`
--

DROP TABLE IF EXISTS `User_Pag`;
CREATE TABLE IF NOT EXISTS `User_Pag` (
  `user_id` int(11) NOT NULL,
  `pag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User_Rol`
--

DROP TABLE IF EXISTS `User_Rol`;
CREATE TABLE IF NOT EXISTS `User_Rol` (
  `user_id` varchar(4) COLLATE latin1_spanish_ci NOT NULL,
  `rol_id` varchar(4) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `User_Rol`
--

INSERT INTO `User_Rol` (`user_id`, `rol_id`) VALUES
('10', '5'),
('10', '6'),
('11', '6'),
('12', '7');

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
CREATE TABLE IF NOT EXISTS `Usuario` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(64) COLLATE latin1_spanish_ci NOT NULL,
  `user_pass` varchar(64) COLLATE latin1_spanish_ci NOT NULL,
  `user_desc` varchar(64) COLLATE latin1_spanish_ci NOT NULL,
  `user_email` varchar(64) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='tabla de usuarios';

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`user_id`, `user_name`, `user_pass`, `user_desc`, `user_email`) VALUES
(10, 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'administrador global', 'admin@admin.com'),
(11, 'adminWPA', 'f4635aa49224b316fabc4a1926a4cbe4d8734481', 'administador de la aplicacion integrada', 'admin@wpawpa.com'),
(12, 'pepe', '265392dc2782778664cc9d56c8e3cd9956661bb0', 'usuario normal', 'pepe@wpawpa.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Funcionalidad`
--
ALTER TABLE `Funcionalidad`
 ADD PRIMARY KEY (`fun_id`);

--
-- Indexes for table `Pagina`
--
ALTER TABLE `Pagina`
 ADD PRIMARY KEY (`pag_id`);

--
-- Indexes for table `Rol`
--
ALTER TABLE `Rol`
 ADD PRIMARY KEY (`rol_id`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Funcionalidad`
--
ALTER TABLE `Funcionalidad`
MODIFY `fun_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Pagina`
--
ALTER TABLE `Pagina`
MODIFY `pag_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `Rol`
--
ALTER TABLE `Rol`
MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Usuario`
--
ALTER TABLE `Usuario`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
