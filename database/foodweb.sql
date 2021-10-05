-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2021 at 02:09 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodweb_table`
--

DROP TABLE IF EXISTS `foodweb_table`;
CREATE TABLE IF NOT EXISTS `foodweb_table` (
  `CEmail` varchar(1000) NOT NULL,
  `C_Password` varchar(1000) NOT NULL,
  `quantity` int(255) NOT NULL,
  `CName` varchar(1000) NOT NULL,
  `address_line` varchar(10000) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `Complaint` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
