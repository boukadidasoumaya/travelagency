-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 avr. 2023 à 21:37
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `clients`
--

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `expectation` text NOT NULL,
  `population` text NOT NULL,
  `climate` text NOT NULL,
  `currency` text NOT NULL,
  `history` text NOT NULL,
  `price_car` int(11) NOT NULL,
  `price_trip` int(11) NOT NULL,
  `price_tour_guide` int(11) NOT NULL,
  `photo_for_home` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `expectation`, `population`, `climate`, `currency`, `history`, `price_car`, `price_trip`, `price_tour_guide`, `photo_for_home`) VALUES
(4, 'Greece', '', '', '', '', '', 200, 3000, 400, 'images/greece.jpg'),
(5, 'Japan', '', '', '', '', '', 400, 3500, 200, 'images/japan.jpg'),
(6, 'Tunisia', '', '', '', '', '', 150, 1500, 200, 'images/tunisie.jpg'),
(12, 'Bali', '', '', '', '', '', 0, 0, 0, 'images/bali.jpg'),
(14, 'new york', 'dsf', 'fqe', '', 'f', 'fe', 10, 10, 10, 'images/new_york.jfif');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
