-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2015 at 07:28 PM
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
CREATE DATABASE IF NOT EXISTS `GSTRDB` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `Funcionalidad`
--

INSERT INTO `Funcionalidad` (`fun_id`, `fun_name`, `fun_desc`) VALUES
(7, 'aÃ±fjsaf', 'sdjjjdjjd');

-- --------------------------------------------------------

--
-- Table structure for table `Pag_Fun`
--

DROP TABLE IF EXISTS `Pag_Fun`;
CREATE TABLE IF NOT EXISTS `Pag_Fun` (
  `pag_id` int(11) NOT NULL,
  `fun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Pagina`
--

DROP TABLE IF EXISTS `Pagina`;
CREATE TABLE IF NOT EXISTS `Pagina` (
`pag_id` int(11) NOT NULL,
  `pag_name` varchar(64) COLLATE latin1_spanish_ci NOT NULL,
  `pag_desc` varchar(64) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `Pagina`
--

INSERT INTO `Pagina` (`pag_id`, `pag_name`, `pag_desc`) VALUES
(1, 'Pagina_1', 'Esto es una descripciÃ³n'),
(2, 'CER_GestionFuncionalidades', 'CERBERUS GestiÃ³n de Funcionalidades (NO BORRAR)'),
(3, 'CER_CrearFuncionalidad', 'CERBERUS CreaciÃ³n de Funcionalidades (NO BORRAR)'),
(4, 'CER_ModificarFuncionalidad', 'CERBERUS ModificaciÃ³n de Funcionalidades (NO BORRAR)'),
(5, 'CER_CrearPagina', 'CERBERUS CreaciÃ³n de PÃ¡ginas (NO BORRAR)'),
(6, 'CER_GestionPaginas', 'CERBERUS GestiÃ³n de PÃ¡ginas (NO BORRAR)'),
(7, 'CER_ModificarPagina', 'CERBERUS ModificaciÃ³n de PÃ¡ginas'),
(8, 'CER_CrearRol', 'CERBERUS CreaciÃ³n de Roles'),
(9, 'CER_GestionRoles', 'CERBERUS GestiÃ³n de Roles (NO BORRAR)'),
(10, 'CER_ModificarRol', 'CERBERUS ModificaciÃ³n de Roles (NO BORRAR)'),
(11, 'CER_CrearUsuario', 'CERBERUS CreaciÃ³n de Usuarios (NO BORRAR)'),
(12, 'CER_GestionUsuarios', 'CERBERUS GestiÃ³n de Usuarios (NO BORRAR)'),
(13, 'CER_ModificarPass', 'CERBERUS ModificaciÃ³n de ContraseÃ±as'),
(14, 'CER_ModificarUsuario', 'CERBERUS ModificaciÃ³n de Usuarios'),
(15, 'CER_Menu', 'CERBERUS Acceso al MenÃº Principal'),
(16, 'WPAmenu', 'MenÃº de IUET12015');

-- --------------------------------------------------------

--
-- Table structure for table `Rol`
--

DROP TABLE IF EXISTS `Rol`;
CREATE TABLE IF NOT EXISTS `Rol` (
`rol_id` int(11) NOT NULL,
  `rol_name` varchar(64) COLLATE latin1_spanish_ci NOT NULL,
  `rol_desc` varchar(64) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `Rol`
--

INSERT INTO `Rol` (`rol_id`, `rol_name`, `rol_desc`) VALUES
(2, 'rolDummy2', 'rol de test unit'),
(5, 'Hola_soy_rol', 'Descripcion_de_ser_un_rol');

-- --------------------------------------------------------

--
-- Table structure for table `Rol_Fun`
--

DROP TABLE IF EXISTS `Rol_Fun`;
CREATE TABLE IF NOT EXISTS `Rol_Fun` (
  `rol_id` int(11) NOT NULL,
  `fun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User_Fun`
--

DROP TABLE IF EXISTS `User_Fun`;
CREATE TABLE IF NOT EXISTS `User_Fun` (
  `user_id` int(11) NOT NULL,
  `fun_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User_Pag`
--

DROP TABLE IF EXISTS `User_Pag`;
CREATE TABLE IF NOT EXISTS `User_Pag` (
  `user_id` int(11) NOT NULL,
  `pag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `User_Pag`
--

INSERT INTO `User_Pag` (`user_id`, `pag_id`) VALUES
(1, 1),
(8, 2),
(8, 3),
(8, 4),
(8, 5),
(8, 6),
(8, 7),
(8, 8),
(8, 9),
(8, 10),
(8, 11),
(8, 12),
(8, 13),
(8, 14),
(8, 15),
(8, 16),
(4, 13),
(4, 16);

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
('9', '2'),
('1', '2'),
('4', '2');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='tabla de usuarios';

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`user_id`, `user_name`, `user_pass`, `user_desc`, `user_email`) VALUES
(1, 'userDummy1', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 'usuario de test unit o novevs', 'dummy@dummy'),
(2, 'userDummy2', '12345', 'usuario de test unit', 'dummy@dummy'),
(4, 'Test1', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'destalles test1', 'tes@test.t'),
(8, 'Odabeng', '24b86618cfdf52dc0b2384627ec0e9eaf91d16b4', 'face in my balls', 'troll@trapiamo.com'),
(9, 'Usuario_test_final', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', 'Esta_es_una_descripcion', 'email@corrooosssssoeo.es');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

DROP TABLE IF EXISTS `pma__bookmark`;
CREATE TABLE IF NOT EXISTS `pma__bookmark` (
`id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

DROP TABLE IF EXISTS `pma__column_info`;
CREATE TABLE IF NOT EXISTS `pma__column_info` (
`id` int(5) unsigned NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

--
-- Dumping data for table `pma__column_info`
--

INSERT INTO `pma__column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(1, 'GestorUsuarios', 'Usuario', 'user_id', '', '', '_', ''),
(2, 'GestorUsuarios', 'Usuario', 'user_name', '', '', '_', ''),
(3, 'GestorUsuarios', 'Usuario', 'user_desc', '', '', '_', ''),
(4, 'GestorUsuarios', 'Usuario', 'user_email', '', '', '_', ''),
(5, 'GestorUsuarios', 'User_Rol', 'user_id', '', '', '_', ''),
(6, 'GestorUsuarios', 'User_Rol', 'rol_id', '', '', '_', ''),
(7, 'GestorUsuarios', 'User_Pag', 'user_id', '', '', '_', ''),
(8, 'GestorUsuarios', 'User_Pag', 'pagi_id', '', '', '_', ''),
(10, 'GestorUsuarios', 'Rol', 'rol_Id', '', '', '_', ''),
(11, 'GestorUsuarios', 'Rol', 'rol_name', '', '', '_', ''),
(12, 'GestorUsuarios', 'Rol', 'rol_desc', '', '', '_', ''),
(15, 'GestorUsuarios', 'Pagina', 'pag_id', '', '', '_', ''),
(16, 'GestorUsuarios', 'Pagina', 'pag_url', '', '', '_', ''),
(17, 'GestorUsuarios', 'Pagina', 'pag_desc', '', '', '_', ''),
(18, 'GestorUsuarios', 'Funcionalidad', 'fun_id', '', '', '_', ''),
(19, 'GestorUsuarios', 'Funcionalidad', 'fun_name', '', '', '_', ''),
(20, 'GestorUsuarios', 'Funcionalidad', 'fun_desc', '', '', '_', ''),
(42, 'GestorUsuarios', 'Pagina', 'pag_name', '', '', '_', ''),
(43, 'GestorUsuarios', 'Rol', 'rol_id', '', '', '_', ''),
(44, 'GestorUsuarios', 'Rol_Fun', 'rol_id', '', '', '_', ''),
(45, 'GestorUsuarios', 'Rol_Fun', 'fun_id', '', '', '_', ''),
(47, 'GestorUsuarios', 'User_Pag', 'pag_id', '', '', '_', ''),
(48, 'GestorUsuarios', 'User_Fun', 'user_id', '', '', '_', ''),
(49, 'GestorUsuarios', 'User_Fun', 'fun_id', '', '', '_', ''),
(51, 'GestorUsuarios', 'Pag_fun', 'pag_id', '', '', '_', ''),
(52, 'GestorUsuarios', 'Pag_fun', 'fun_id', '', '', '_', ''),
(53, 'GestorUsuarios', 'Usuario', 'user_pass', '', '', '_', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_coords`
--

DROP TABLE IF EXISTS `pma__designer_coords`;
CREATE TABLE IF NOT EXISTS `pma__designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

DROP TABLE IF EXISTS `pma__favorite`;
CREATE TABLE IF NOT EXISTS `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

DROP TABLE IF EXISTS `pma__history`;
CREATE TABLE IF NOT EXISTS `pma__history` (
`id` bigint(20) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

DROP TABLE IF EXISTS `pma__navigationhiding`;
CREATE TABLE IF NOT EXISTS `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

--
-- Dumping data for table `pma__navigationhiding`
--

INSERT INTO `pma__navigationhiding` (`username`, `item_name`, `item_type`, `db_name`, `table_name`) VALUES
('GestorUsuarios', 'Rol', 'table', 'GestorUsuarios', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

DROP TABLE IF EXISTS `pma__pdf_pages`;
CREATE TABLE IF NOT EXISTS `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
`page_nr` int(10) unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

DROP TABLE IF EXISTS `pma__recent`;
CREATE TABLE IF NOT EXISTS `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('GestorUsuarios', '[{"db":"GestorUsuarios","table":"User_Rol"},{"db":"GestorUsuarios","table":"Rol"},{"db":"GestorUsuarios","table":"Pagina"},{"db":"GestorUsuarios","table":"Funcionalidad"},{"db":"GestorUsuarios","table":"Pag_fun"},{"db":"GestorUsuarios","table":"Rol_Fun"},{"db":"GestorUsuarios","table":"User_Fun"},{"db":"GestorUsuarios","table":"User_Pag"},{"db":"GestorUsuarios","table":"Usuario"}]'),
('root', '[{"db":"GestorUsuarios","table":"Usuario"},{"db":"GestorUsuarios","table":"Funcionalidad"},{"db":"GestorUsuarios","table":"Rol"},{"db":"GestorUsuarios","table":"Pagina"},{"db":"GestorUsuarios","table":"Pag_fun"},{"db":"GestorUsuarios","table":"User_Fun"},{"db":"GestorUsuarios","table":"Rol_Fun"},{"db":"GestorUsuarios","table":"User_Rol"},{"db":"GestorUsuarios","table":"User_Pag"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

DROP TABLE IF EXISTS `pma__relation`;
CREATE TABLE IF NOT EXISTS `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

DROP TABLE IF EXISTS `pma__savedsearches`;
CREATE TABLE IF NOT EXISTS `pma__savedsearches` (
`id` int(5) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

DROP TABLE IF EXISTS `pma__table_coords`;
CREATE TABLE IF NOT EXISTS `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

DROP TABLE IF EXISTS `pma__table_info`;
CREATE TABLE IF NOT EXISTS `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

DROP TABLE IF EXISTS `pma__table_uiprefs`;
CREATE TABLE IF NOT EXISTS `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

DROP TABLE IF EXISTS `pma__tracking`;
CREATE TABLE IF NOT EXISTS `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

DROP TABLE IF EXISTS `pma__userconfig`;
CREATE TABLE IF NOT EXISTS `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('GestorUsuarios', '2015-10-07 18:34:02', '{"collation_connection":"utf8mb4_general_ci"}'),
('root', '2015-10-07 19:01:25', '{"collation_connection":"utf8mb4_general_ci","Export\\/file_template_server":"DumpBD2.0","Export\\/file_template_table":"SQLdump-fin"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

DROP TABLE IF EXISTS `pma__usergroups`;
CREATE TABLE IF NOT EXISTS `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

DROP TABLE IF EXISTS `pma__users`;
CREATE TABLE IF NOT EXISTS `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

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
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_coords`
--
ALTER TABLE `pma__designer_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
 ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
 ADD PRIMARY KEY (`page_nr`), ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
 ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`), ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
 ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
 ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
 ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
 ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Funcionalidad`
--
ALTER TABLE `Funcionalidad`
MODIFY `fun_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Pagina`
--
ALTER TABLE `Pagina`
MODIFY `pag_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `Rol`
--
ALTER TABLE `Rol`
MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Usuario`
--
ALTER TABLE `Usuario`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
MODIFY `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
