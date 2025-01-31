-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 09, 2024 at 05:30 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indianrailways`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_info`
--

DROP TABLE IF EXISTS `register_info`;
CREATE TABLE IF NOT EXISTS `register_info` (
  `FirstName` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `LastName` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `Address` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `UserName` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_info`
--

DROP TABLE IF EXISTS `ticket_info`;
CREATE TABLE IF NOT EXISTS `ticket_info` (
  `Name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `from_book` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `to_book` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
