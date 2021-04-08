-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 12 mars 2021 à 15:33
-- Version du serveur :  5.7.28
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `afpa`
--

-- --------------------------------------------------------

--
-- Structure de la table `programmer`
--

DROP TABLE IF EXISTS `programmer`;
CREATE TABLE IF NOT EXISTS `programmer` (
  `id_prog` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Num_Rep` int(11) NOT NULL,
  `tarif` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_prog`),
  KEY `Num_Rep` (`Num_Rep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `programmer`
--

INSERT INTO `programmer` (`id_prog`, `Date`, `Num_Rep`, `tarif`) VALUES
(1, '2021-10-26 10:52:04', 1, 100),
(2, '2021-05-07 10:52:04', 5, 50),
(3, '2021-03-25 10:52:04', 6, 235),
(4, '2021-08-15 11:06:49', 4, 10),
(5, '2021-03-11 11:06:49', 5, 45),
(6, '2021-08-06 11:06:49', 6, 6),
(7, '2021-03-18 11:06:49', 1, 123),
(8, '2022-01-13 11:06:49', 2, 86),
(9, '2021-04-08 11:06:49', 3, 145);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `programmer`
--
ALTER TABLE `programmer`
  ADD CONSTRAINT `programmer_ibfk_1` FOREIGN KEY (`Num_Rep`) REFERENCES `representation` (`Num_Rep`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
