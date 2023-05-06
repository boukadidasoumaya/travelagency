-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 24, 2023 at 09:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clients`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `name` varchar(1000) NOT NULL,
  `country_id` int(100) NOT NULL,
  `pricetg` int(100) NOT NULL,
  `price_car` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`name`, `country_id`, `pricetg`, `price_car`) VALUES
('', 0, 0, 0),
('rrr', 64, 0, 0),
('rrr', 64, 0, 0),
('rrr', 64, 0, 0),
('rrr', 64, 0, 0),
('', 0, 0, 0),
('fqdsqf65', 56, 520, 200),
('fqdsqf65', 56, 520, 200),
('', 0, 0, 0),
('sdfs', 65, 54, 200),
('tun', 216, 120, 200),
('tun', 216, 120, 200),
('tun', 215, 200, 100),
('tun', 215, 200, 100),
('malysia', 50, 0, 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
