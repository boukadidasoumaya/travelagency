-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 10:20 AM
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
  `country_id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `population` text NOT NULL,
  `climate` text NOT NULL,
  `currency` text NOT NULL,
  `history` text NOT NULL,
  `price_car` int(11) NOT NULL,
  `price_trip` int(11) NOT NULL,
  `price_tour_guide` int(11) NOT NULL,
  `photo_for_home` varchar(50) NOT NULL,
  `hero_src` varchar(100) NOT NULL,
  `about_src` varchar(100) NOT NULL,
  `cta_src` varchar(100) NOT NULL,
  `contact_src` varchar(100) NOT NULL,
  `services_src` varchar(100) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `pic3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `population`, `climate`, `currency`, `history`, `price_car`, `price_trip`, `price_tour_guide`, `photo_for_home`, `hero_src`, `about_src`, `cta_src`, `contact_src`, `services_src`, `pic1`, `pic2`, `pic3`) VALUES
(5, 'Japan', '', '', '', '', 400, 3500, 200, 'images/japan.jpg', '', '', '', '', '', '', '', ''),
(6, 'Tunisia', '', '', '', '', 150, 1500, 200, 'images/tunisie.jpg', '', '', '', '', '', '', '', ''),
(12, 'Bali', '', '', '', '', 0, 0, 0, 'images/bali.jpg', '', '', '', '', '', '', '', ''),
(65, 'fd', 'fvd', '', 'vfd', 'dfv', 544, 0, 0, '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
