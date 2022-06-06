-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 30, 2022 at 10:19 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `douvanjou`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_comp` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `immat` varchar(255) DEFAULT NULL,
  `domain` bigint(128) DEFAULT NULL,
  `desc_comp` text,
  `web_ste` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) UNSIGNED NOT NULL,
  `price_commit` decimal(10,2) NOT NULL DEFAULT '0.00',
  `desc_conf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `price_commit`, `desc_conf`) VALUES
(1, '20.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `don`
--

CREATE TABLE `don` (
  `id_don` bigint(20) UNSIGNED NOT NULL,
  `date_don` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `coment` text,
  `id_project` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(6) DEFAULT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `url` text,
  `desc_file` text,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_project` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_histo` bigint(20) UNSIGNED NOT NULL,
  `coment` text,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_steep` bigint(11) UNSIGNED DEFAULT NULL,
  `id_project` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id_pers` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `sex` varchar(16) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc_p` text,
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `budget` decimal(20,2) NOT NULL,
  `place_implement` varchar(255) DEFAULT NULL,
  `date_edit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_steep` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `projet_label`
--

CREATE TABLE `projet_label` (
  `id_proj_lab` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(64) DEFAULT NULL,
  `desc_lab` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projet_label`
--

INSERT INTO `projet_label` (`id_proj_lab`, `label`, `desc_lab`) VALUES
(1, 'Pour soutenir Douvanjou', NULL),
(2, 'Reconstruction de l\'école de la Sucrerie Henry', NULL),
(3, 'Éducation', NULL),
(4, 'Santé', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `repr_comp`
--

CREATE TABLE `repr_comp` (
  `id_repr` bigint(20) UNSIGNED NOT NULL,
  `grad` varchar(32) DEFAULT NULL,
  `id_comp` bigint(20) UNSIGNED DEFAULT NULL,
  `id_person` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `steep_project`
--

CREATE TABLE `steep_project` (
  `id_steep` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(64) DEFAULT NULL,
  `desc_lab` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `steep_project`
--

INSERT INTO `steep_project` (`id_steep`, `label`, `desc_lab`) VALUES
(1, 'À démarrer', ''),
(2, 'En cours', ''),
(3, 'Terminé', ''),
(4, 'Suspendu', '');

-- --------------------------------------------------------

--
-- Table structure for table `type_user`
--

CREATE TABLE `type_user` (
  `id_type` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(64) DEFAULT NULL,
  `desc_lab` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_user`
--

INSERT INTO `type_user` (`id_type`, `label`, `desc_lab`) VALUES
(1, 'ADHERENT', NULL),
(2, 'HONNEUR', NULL),
(3, 'BENEVOLE', NULL),
(4, 'FONDATEUR', NULL),
(5, 'COLLABORATEUR', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `e_mail` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `level` varchar(32) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_edit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `acpt_rglt_int` tinyint(1) NOT NULL DEFAULT '0',
  `date_exp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payed` tinyint(1) NOT NULL DEFAULT '0',
  `type` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_comp`),
  ADD KEY `fh_type_company_of_user` (`id_user`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `don`
--
ALTER TABLE `don`
  ADD PRIMARY KEY (`id_don`),
  ADD KEY `fk_donn_for_project` (`id_project`),
  ADD KEY `fk_don_made_by_user` (`id_user`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `fk_photo_of_user` (`id_user`),
  ADD KEY `fk_file_of_project` (`id_project`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_histo`),
  ADD KEY `fk_history_of_project` (`id_project`),
  ADD KEY `fk_steep_project` (`id_steep`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id_pers`),
  ADD KEY `fk_type_of_user` (`id_user`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `fk_steep_of_project` (`id_steep`);

--
-- Indexes for table `projet_label`
--
ALTER TABLE `projet_label`
  ADD PRIMARY KEY (`id_proj_lab`);

--
-- Indexes for table `repr_comp`
--
ALTER TABLE `repr_comp`
  ADD PRIMARY KEY (`id_repr`),
  ADD KEY `fk_represent_of_company` (`id_comp`),
  ADD KEY `fk_represent_is_a_person` (`id_person`);

--
-- Indexes for table `steep_project`
--
ALTER TABLE `steep_project`
  ADD PRIMARY KEY (`id_steep`);

--
-- Indexes for table `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_type_of_user` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_comp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `don`
--
ALTER TABLE `don`
  MODIFY `id_don` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_histo` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id_pers` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projet_label`
--
ALTER TABLE `projet_label`
  MODIFY `id_proj_lab` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `repr_comp`
--
ALTER TABLE `repr_comp`
  MODIFY `id_repr` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `steep_project`
--
ALTER TABLE `steep_project`
  MODIFY `id_steep` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id_type` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `fh_type_company_of_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `don`
--
ALTER TABLE `don`
  ADD CONSTRAINT `	fk_don_made_by_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_donn_for_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `	fk_file_of_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_photo_of_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `fk_history_of_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_steep_project` FOREIGN KEY (`id_steep`) REFERENCES `steep_project` (`id_steep`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `fk_user_is_a_person` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_steep_of_project` FOREIGN KEY (`id_steep`) REFERENCES `steep_project` (`id_steep`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `repr_comp`
--
ALTER TABLE `repr_comp`
  ADD CONSTRAINT `fk_represent_is_a_person` FOREIGN KEY (`id_person`) REFERENCES `person` (`id_pers`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_represent_of_company` FOREIGN KEY (`id_repr`) REFERENCES `company` (`id_comp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_type_of_user` FOREIGN KEY (`type`) REFERENCES `type_user` (`id_type`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
