-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 avr. 2023 à 00:00
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
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_birth` date NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `photo_profil` varchar(50) NOT NULL,
  `num_passport` varchar(50) NOT NULL,
  `historique` text NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_last_name`, `email`, `password`, `date_birth`, `country`, `city`, `photo_profil`, `num_passport`, `historique`, `admin`) VALUES
(1, 'Soumaya', 'Boukadida', 'soumaya.boukadida@insat.ucar.tn', 'soumaya', '2002-05-16', 'Tunisia', 'Megrine', '../home/images/soumaya.jpg', 'a32sc1563x', 'Bali\r\nItalie', 0),
(2, 'Mabehej', 'Ben Hassine', 'mabahej.benhassine@insat.ucar.tn', 'mabehej', '2002-08-08', 'Tunisia', 'Sousse', '../home/images/mabehej.jpg', 'd255eas23', 'New York\r\nGreece', 0),
(3, 'Ahmed', 'Trigui', 'ahmed.trigui@insat.ucar.tn', 'ahmed', '2002-09-14', 'Tunisia', 'Sfax', '', 'ezqf5423', 'Suisse\r\nnew york', 0),
(4, 'Yosr', 'Ghozzi', 'Yosr.ghozzi@insat.ucar.tn', 'yosr', '0000-00-00', 'Tunisia', 'Mourouj', '', 're25gfd', 'Bali\r\nFrance', 0),
(5, 'Arij', 'Zaidi', 'arij.zaidi@insat.ucar.tn', 'arij', '2002-05-23', 'Tunisia', 'Sidi Bouzid', '', 'eef11sdf', 'Bali\r\nIceland', 0),
(6, 'admin', 'admin', 'admin@gmail.com', 'admin', '0000-00-00', '', '', '', '', '', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
