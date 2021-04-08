-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 12 mars 2021 à 14:38
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
-- Structure de la table `musicien`
--

DROP TABLE IF EXISTS `musicien`;
CREATE TABLE IF NOT EXISTS `musicien` (
  `Num_mus` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `Num_Rep` int(11) NOT NULL,
  PRIMARY KEY (`Num_mus`),
  KEY `musicien_ibfk_1` (`Num_Rep`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `musicien`
--

INSERT INTO `musicien` (`Num_mus`, `nom`, `Num_Rep`) VALUES
(1, 'nom1', 1),
(2, 'nom2', 2),
(3, 'nom3', 3),
(4, 'nom4', 4),
(5, 'nom5', 5),
(6, 'nom6', 6),
(7, 'nom7', 7),
(8, 'nom8', 8),
(9, 'nom9', 9),
(10, 'nv musicien', 6),
(11, 'musicien aaaa', 2),
(12, 'musicien bbb', 5),
(13, 'musicien zzzz', 3),
(14, 'musicien rrrr', 7);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `musicien`
--
ALTER TABLE `musicien`
  ADD CONSTRAINT `musicien_ibfk_1` FOREIGN KEY (`Num_Rep`) REFERENCES `representation` (`Num_Rep`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
