-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2022 at 08:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `username` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mob` int(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `type of event` text NOT NULL,
  `food` text NOT NULL,
  `drinks` text NOT NULL,
  `no of people` int(10) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(10) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  UNIQUE KEY `username` (`username`) USING HASH
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`username`, `fname`, `lname`, `mob`, `email`, `type of event`, `food`, `drinks`, `no of people`, `date`, `address`, `city`, `state`) VALUES
('Riyash', 'riyash', 'patel', 1234567890, 'abc@gmail.com', 'Wedding', 'Veg', 'None', 123, '0000-00-00', 'ranip', 'Ahmedabad', 'gujarat'),
('PrinsaPatel', 'Prinsa', 'Patel', 1234567890, 'abc@gmail.com', 'cocert', 'Veg', 'mocktail', 450, '0000-00-00', 'ranip', 'Ahmedabad', 'gujarat'),
('xyz', 'iii', 'dcsd', 1234567791, 'xyz@gmail.com', 'Birthday Party', 'Veg', 'mocktail', 123, '2022-10-30', 'wef', 'asfsaqq', 'qdfagdsf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
