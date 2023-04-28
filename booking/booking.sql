-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 avr. 2023 à 18:50
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

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
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id_reservation` bigint(20) UNSIGNED NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `num_passport` varchar(20) NOT NULL,
  `client_first_name` varchar(255) NOT NULL,
  `client_last_name` varchar(255) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `recu` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_reservation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_reservation` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
