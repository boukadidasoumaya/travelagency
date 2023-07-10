-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 12 mai 2023 à 13:06
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
  `destination` int(11) DEFAULT NULL,
  `destination_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `booking`
--

INSERT INTO `booking` (`id_reservation`, `date`, `prix`, `user_id`, `destination`, `destination_name`) VALUES
(22, '2023-05-30', 6000.00, 5, 29100982, 'iceland'),
(26, '2023-05-24', 2650.00, 3, 80168271, 'Greece'),
(27, '2023-06-22', 2750.00, 5, 80168271, 'Greece'),
(28, '2023-05-25', 2800.00, 2, 83230753, 'italy'),
(30, '2023-05-13', 2750.00, 5, 39216216, 'Bali');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(50) NOT NULL,
  `content` varchar(250) NOT NULL,
  `comment_post_ID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`com_id`, `content`, `comment_post_ID`, `user_id`) VALUES
(31, 'its so fun ', 39216216, 5),
(32, 'recommended ', 39216216, 5),
(33, 'best destination ever ', 39216216, 5),
(36, 'waaw\r\n ', 80168271, 5),
(37, 'pretty ', 80168271, 5),
(38, 'amazing\r\n ', 80168271, 5),
(39, 'Magnifique\r\n ', 93358624, 5),
(40, 'superbe ', 93358624, 5),
(41, 'beaut ', 93358624, 5);

-- --------------------------------------------------------

--
-- Structure de la table `country`
--

CREATE TABLE `country` (
  `country_id` int(50) NOT NULL,
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
  `pic3` varchar(100) NOT NULL,
  `iframe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `population`, `climate`, `currency`, `history`, `price_car`, `price_trip`, `price_tour_guide`, `photo_for_home`, `hero_src`, `about_src`, `cta_src`, `contact_src`, `services_src`, `pic1`, `pic2`, `pic3`, `iframe`) VALUES
(13280073, 'Japan', '125,7millions ', ' hot and humid summers and cold winters ', 'Yen', ' encompassing ancient empires, feudal warlords, and a period of isolationism, followed by modernization and becoming a global economic powerhouse in the 20th century.', 250, 400, 400, 'japan.jpg', 'téléchargement (1).jpg', 'images (1).jpg', 'téléchargement (2).jpg', 'images (3).jpg', 'images (2).jpg', 'téléchargement (4).jpg', 'téléchargement (3).jpg', 'images.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27825967.239112582!2d115.74048684213125!3d31.641392307327177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34674e0fd77f192f%3A0xf54275d47c665244!2sJapon!5e0!3m2!1sfr!2stn!4v1683830822821!5m2!1sfr!2stn\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade'),
(39216216, 'Bali', '4,362 millions ', 'tropical', 'Indonesian Rupiah', 'rich history', 150, 2500, 100, 'bali2.jpg', 'Balih9.jpg', 'balih3.jpg', 'bali3.jpg', 'bali2.jpg', 'bali4.jpg', 'balih8.jpg', 'balih8.jpg', 'balih2.jpg', ''),
(80168271, 'Greece', '10 millions ', ' Mediterranean climate', 'euro', 'greek mythology', 2550, 100, 100, 'greece1.jpg', '0f6b54b6a2f3dac461bb9bba6d062ef7.jpg', '2cca8eb05824700df721f921485cad6d.jpg', 'b8ed44045d70f587456cddd3b8316d7b.jpg', 'e8059afa102c75bbff386c8e6cbfc4d7.jpg', 'c7c8fefbc341a8f2fd658a5309eed90a.jpg', '52ac3c884f0755dc1cd48035c95f63a1.jpg', '8ae54e781a50444a280602e7ae38829f.jpg', 'e17a128ec5e53318bdac54d838be45c4.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6436560.7829875015!2d19.037233931686103!3d38.02723094187691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135b4ac711716c63%3A0x363a1775dc9a2d1d!2zR3LDqGNl!5e0!3m2!1sfr!2stn!4v1683888174060!5m2!1sfr!2stn\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade'),
(83230753, 'Italy', '59,11 millions ', 'Alpine climate', 'euro', 'euro', 300, 2500, 150, '2.jpg', '3.jpg', '9.jpg', '5.jpg', '6.jpg', '10.jpg', '6.jpg', '7.jpg', '8.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6150925.430721685!2d7.426839636973355!3d41.1698443062962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d4fe82448dd203%3A0xe22cf55c24635e6f!2sItalie!5e0!3m2!1sfr!2stn!4v1683887793773!5m2!1sfr!2stn\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade'),
(85141236, 'Iceland', '372 520', 'cool, temperate maritime climate', 'Couronne islandaise', 'founded more than 1,000 years ago during the Viking age of exploration and settled by a mixed Norse and Celtic population', 150, 5000, 200, 'iceland1.jpg', 'YB7fQf.jpg', 'f9d99e4d4b3f162ef0b0d3c7eb57c698.jpg', 'view-over-the-reykjavik-city_400x225-mm-90.jpg', 'desktop-wallpaper-iceland-northern-lights-for-android-background-thumbnail.jpg', 'big1.jpg', 'wp2025192.jpg', 'Rxtc6C.jpg', 'e822e291ee7f7fc4f3bee652ca271173.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7285712.734484726!2d-38.848054220654944!3d63.524223518692644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48d22b52a3eb6043%3A0x6f8a0434e5c1459a!2sIslande!5e0!3m2!1sfr!2stn!4v1683888013988!5m2!1sfr!2stn\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade'),
(93358624, 'Tunisie', '11 millions ', ' Mediterranean climate', 'dinar tunisien', 'carthage', 100, 1500, 150, 'tunisie.jpg', '260ea0ac9103fc3dc68d11afebf564c3.jpg', '8b829617932d62ec375734fd72f38ad7.jpg', '0039d9fbfbcf4c3cd6765dae140a72a9.jpg', '9a99c83c954bf0de92d6a63a39eb5a35.jpg', '07bb42a3bc5caf8c438fff32d085be53.jpg', '86fa309a533485b2801fe5ad29d43299.jpg', '9b291391f21ef6ba4af7101db528fea0.jpg', '7c2bd0de408877e20d375ef79a0d5a20.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6784329.822169782!2d4.271195653050852!3d33.87262526910938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x125595448316a4e1%3A0x3a84333aaa019bef!2sTunisie!5e0!3m2!1sfr!2stn!4v1683888126203!5m2!1sfr!2stn\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade');

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
(3, 'Ahmed', 'Trigui', 'ahmed.trigui@insat.ucar.tn', '$2y$10$br3hZGM55IvcKSRMC2buledkKSrDo2DwwK5YbmhX978XpF4p17YqW', '2002-09-14', 'Tunisia', 'Sfax', '', 'ezqf5423', 'Suisse\r\nnew york', 0),
(4, 'Yosr', 'Ghozzi', 'Yosr.ghozzi@insat.ucar.tn', 'yosr', '0000-00-00', 'Tunisia', 'Mourouj', '', 're25gfd', 'Bali\r\nFrance', 0),
(5, 'Arij', 'Zaidi', 'arij.zaidi@insat.ucar.tn', '$2y$10$PO1P1emG2/izlE3W.p9J0uSBp7ofcukcHvDz3.HqeNNL19Vpx1vFu', '2002-05-23', 'Tunisia', 'Sidi Bouzid', 'levi.png', 'eef11sdf', 'Bali\r\nIceland', 0),
(6, 'admin', 'admin', 'arijzaidi18@gmail.com', '$2y$10$80KXTGZcU889CHlj8tOhMOk4A3C/FrJZjOga2SGG4YT8.ZKvonlJa', '0000-00-00', 'tunisia', '', '', '', '', 1),
(8, 'mohamed', 'benali', 'm2ohamedhedi.benali@insat.ucar.tn', '$2y$10$enwGZUOATRlW1YnBKwNy3OBWBGbtq424PfMXHBXpqMn0kT80IeqEu', '2023-05-09', 'tunisiaaz', 'zaghouan', '', 'a1111112', '', 0),
(10, 'ali', 'kallel', 'ali.kallel@insat.ucar.tn', '$2y$10$nLnM/OBakxDaBu0awln5hevd5SXdErzMYT1uTHQLrD4cA2ncYXpZq', '2023-05-10', 'tunisia', 'sfax', '', 'c1111111', '', 0);

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
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Index pour la table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_reservation` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
