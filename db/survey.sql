-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 23, 2019 at 12:21 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey1`
--

-- --------------------------------------------------------

--
-- Table structure for table `addofficer`
--

DROP TABLE IF EXISTS `addofficer`;
CREATE TABLE IF NOT EXISTS `addofficer` (
  `off_id` varchar(500) NOT NULL,
  `off_name` varchar(15) NOT NULL,
  `off_address` varchar(100) NOT NULL,
  `off_mobno` bigint(10) NOT NULL,
  `off_pass` text NOT NULL,
  PRIMARY KEY (`off_id`),
  UNIQUE KEY `off_mobno` (`off_mobno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addofficer`
--

INSERT INTO `addofficer` (`off_id`, `off_name`, `off_address`, `off_mobno`, `off_pass`) VALUES
('2', 'vipul', 'asr', 808080808, '123456'),
('1', 'sajal', 'jbad', 8393089650, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('sajal', 'sajal');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

DROP TABLE IF EXISTS `college`;
CREATE TABLE IF NOT EXISTS `college` (
  `rank` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `district` varchar(100) NOT NULL,
  `engg_intake` int(11) NOT NULL,
  `hon_intake` int(11) NOT NULL,
  `courses` varchar(100) NOT NULL,
  `univ` varchar(100) NOT NULL,
  `web` varchar(200) NOT NULL,
  `off_id` varchar(500) NOT NULL,
  PRIMARY KEY (`rank`),
  UNIQUE KEY `rank` (`rank`),
  KEY `off_id` (`off_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`rank`, `type`, `name`, `address`, `district`, `engg_intake`, `hon_intake`, `courses`, `univ`, `web`, `off_id`) VALUES
(588, 'Private', 'iimt', 'meerut', 'Meerut', 540, 0, 'B-Tech,M-Tech', 'uptu', 'iimtindia.net', '1'),
(145, 'Private', 'Kite ', 'meerut', 'Meerut', 0, 321, 'B.Com', 'uptu', 'kite.kitegroup.edu.in', '1'),
(245, 'Private', 'viit', 'bulandshahr', 'Bulandshahr', 620, 440, 'B-Tech,M-Tech,B.Com', 'ccsu', 'viit.edu.in', '2'),
(300, 'Private', 'I.P. College', 'Bulandshahr', 'Bulandshahr', 0, 900, 'B.Com', 'ccsu', 'ipcollegebsr.org', '2'),
(84, 'Private', 'Dayal Bagh Education institute', 'Dayal Bagh Agra', 'Agra', 640, 0, 'B-Tech,M-Tech', 'Deemed University', 'deiac.in', '1'),
(220, 'Private', 'ACE College of engineering', 'Agra', 'Agra', 340, 50, 'B-Tech,B.Com', 'AKTU', 'acecollegeagra.com', '1'),
(45, 'Regular', 'A.M.U.', 'Aligarh', 'Aligarh', 999, 500, 'B-Tech,M-Tech,B.Com', 'Self University', 'amu.ac.in', '1'),
(253, 'Private', 'Mangalaytan ', 'Beswan', 'Aligarh', 900, 500, 'B-Tech,M-Tech,B.Com', 'Self University', 'mangalayatan.in', '1'),
(445, 'Private', 'Accurate Institutes', 'Ghaziabad', 'Ghaziabad', 440, 0, 'B-Tech,M-Tech', 'AKTU', 'accurate.in', '1'),
(992, 'Private', 'IILN College Of Engineering', 'Kavi Nagar Gahaziabad', 'Ghaziabad', 672, 0, 'B-Tech,M-Tech', 'AKTU', 'iilmcet@ac.in', '1'),
(235740, 'Private', 'Jaypee University', 'Jaypee University, Anupshahr', 'Bulandshahr', 100, 500, 'B-Tech,B.Com', 'Self University', 'jaypeeu.ac.in', '1'),
(124, 'Private', 'Vivekananda', 'Khair Road, Aligarh', 'Aligarh', 800, 0, 'B-Tech', 'B.R.Ambedkar University', 'bctm.in', '2'),
(760, 'Private', 'DS College', 'GT Road, Aligarh', 'Aligarh', 0, 900, 'B.Com', 'AKTU', 'dspgcollege.org', '2');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `sr_no` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(15) NOT NULL,
  PRIMARY KEY (`sr_no`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sr_no`, `value`) VALUES
(1, 'Average'),
(2, 'Average'),
(3, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

DROP TABLE IF EXISTS `help`;
CREATE TABLE IF NOT EXISTS `help` (
  `sr_no.` int(11) NOT NULL AUTO_INCREMENT,
  `email_id` varchar(30) NOT NULL,
  `mob_no` bigint(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`sr_no.`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`sr_no.`, `email_id`, `mob_no`, `name`) VALUES
(1, 'sajalabansal2010@gmail.com', 8393089650, 'Sajal Bansal'),
(2, 'matha', 8080808, 'shdgs');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

DROP TABLE IF EXISTS `officer`;
CREATE TABLE IF NOT EXISTS `officer` (
  `user` int(11) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`user`, `pass`) VALUES
(1, 'sajal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
