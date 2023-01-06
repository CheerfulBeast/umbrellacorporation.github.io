-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2022 at 02:36 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umbrella`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `getDonorsInfo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `getDonorsInfo` (IN `uid` INT)  BEGIN
	SELECT * FROM donates WHERE id = uid;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

DROP TABLE IF EXISTS `donates`;
CREATE TABLE IF NOT EXISTS `donates` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donates`
--

INSERT INTO `donates` (`id`, `name`, `age`, `contact`, `type`, `date`) VALUES
(1, 'Michael Angelo', 20, '09668456789', 'B+', '2022-05-28'),
(2, 'Jorge Antonette Urot', 20, '09263266321', 'B+', '2022-05-28');

-- --------------------------------------------------------

--
-- Stand-in structure for view `firsthead_position`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `firsthead_position`;
CREATE TABLE IF NOT EXISTS `firsthead_position` (
`email` varchar(255)
,`password` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `positions` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`email`, `password`, `action`, `positions`) VALUES
('', 'kim123', 'Deleted', '2022-06-01 21:47:07'),
('mychojamil@usep.edu.ph', 'mycho123', 'Deleted', '2022-06-01 21:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `age`, `contact`, `type`, `date`) VALUES
(1, 'Andrew Santos', 43, '09386755431', 'O+', '2022-05-31'),
(2, 'Harley Jetson Cutamora', 20, '09667844321', 'B-', '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `positions` varchar(255) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`email`, `password`, `positions`) VALUES
('hjrcutamora@usep.edu.ph', 'pass123', 'Head I'),
('jacurot@usep.edu.ph', 'admin', 'Head II'),
('cliftonrojo@usep.edu.ph', 'clipp123', 'Head I');

--
-- Triggers `staff`
--
DROP TRIGGER IF EXISTS `deleteLog`;
DELIMITER $$
CREATE TRIGGER `deleteLog` BEFORE DELETE ON `staff` FOR EACH ROW INSERT INTO logs VALUES (OLD.email, OLD.password, "Deleted", NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure for view `firsthead_position`
--
DROP TABLE IF EXISTS `firsthead_position`;

DROP VIEW IF EXISTS `firsthead_position`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `firsthead_position`  AS SELECT `staff`.`email` AS `email`, `staff`.`password` AS `password` FROM `staff` WHERE (`staff`.`positions` = 'Head I') ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
