-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 30 avr. 2023 à 17:19
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
  `date` date NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `destination` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`id_reservation`, `date`, `prix`, `user_id`, `destination`) VALUES
(1, '2023-05-04', 3500.00, 1, 5),
(2, '2023-05-03', 1700.00, 4, 6),
(3, '2023-05-17', 1500.00, 4, 6),
(4, '2023-05-04', 0.00, 1, 65),
(5, '2023-05-25', 1650.00, 2, 6),
(6, '2023-12-01', 3500.00, 1, 5),
(7, '2023-05-06', 3500.00, 2, 5),
(8, '2023-05-06', 1500.00, 2, 6),
(9, '2023-05-04', 1500.00, 1, 6),
(10, '2023-05-06', 1500.00, 4, 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `booking_user_fk` (`user_id`),
  ADD KEY `booking_destination_fk` (`destination`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_reservation` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_destination_fk` FOREIGN KEY (`destination`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `booking_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
