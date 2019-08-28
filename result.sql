-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 11:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `x`
--

CREATE TABLE `x` (
  `R` varchar(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `status` varchar(8) NOT NULL,
  `tocth` varchar(4) NOT NULL,
  `dbmsth` varchar(4) NOT NULL,
  `dbmspr` varchar(4) NOT NULL,
  `seth` varchar(4) NOT NULL,
  `sepr` varchar(4) NOT NULL,
  `osth` varchar(4) NOT NULL,
  `ospr` varchar(4) NOT NULL,
  `m4` varchar(4) NOT NULL,
  `cl3` varchar(4) NOT NULL,
  `sem` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `x`
--

INSERT INTO `x` (`R`, `Name`, `status`, `tocth`, `dbmsth`, `dbmspr`, `seth`, `sepr`, `osth`, `ospr`, `m4`, `cl3`, `sem`) VALUES
('A49', 'SWAPNIL DHANANJAY ADNAK', 'REGULAR', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+', 'A+');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
