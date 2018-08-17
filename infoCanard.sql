-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Ven 17 Août 2018 à 13:36
-- Version du serveur :  5.7.23-0ubuntu0.18.04.1
-- Version de PHP :  7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `canardVolant`
--

-- --------------------------------------------------------

--
-- Structure de la table `infoCanard`
--

CREATE TABLE `infoCanard` (
  `id` int(11) NOT NULL,
  `lieu` varchar(50) NOT NULL,
  `jour` datetime NOT NULL,
  `race` varchar(50) NOT NULL,
  `couleur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `infoCanard`
--

INSERT INTO `infoCanard` (`id`, `lieu`, `jour`, `race`, `couleur`) VALUES
(12, 'dfzref', '2018-08-17 10:02:00', 'Challans', 'Rouen clair'),
(13, 'okokok', '2018-08-17 12:10:00', 'Blanc de l\'Allier', 'Blanc'),
(14, 'efezfeefz', '2018-08-18 11:37:00', 'Blanc de l\'Allier', 'Blanc'),
(15, 'zrefez', '2018-08-17 22:38:00', 'Blanc de l\'Allier', 'Blanc'),
(16, 'eadea', '2018-08-17 09:39:00', 'Blanc de l\'Allier', 'Blanc'),
(17, 'ef', '2018-08-17 11:44:00', 'Challans', 'Rouen foncé'),
(18, 'fdfdhhfd', '2018-08-17 11:55:00', 'Bourbourg', 'Rouen foncé'),
(19, '\'éétfezez', '2018-08-17 12:03:00', 'Blanc de l\'Allier', 'Blanc');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `infoCanard`
--
ALTER TABLE `infoCanard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `infoCanard`
--
ALTER TABLE `infoCanard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
