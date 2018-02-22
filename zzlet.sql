-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 22 fév. 2018 à 17:32
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `zzlet`
--
CREATE DATABASE IF NOT EXISTS `zzlet` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `zzlet`;

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `NOC` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`NOC`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`NOC`, `Name`) VALUES
(1, 'Coucou'),
(2, 'BFH');

-- --------------------------------------------------------

--
-- Structure de la table `listes`
--

DROP TABLE IF EXISTS `listes`;
CREATE TABLE IF NOT EXISTS `listes` (
  `NOL` int(11) NOT NULL,
  `NOC` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`NOL`),
  KEY `NOC` (`NOC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mots`
--

DROP TABLE IF EXISTS `mots`;
CREATE TABLE IF NOT EXISTS `mots` (
  `NOW` int(11) NOT NULL,
  `NOL` int(11) NOT NULL,
  `TRFR` varchar(255) NOT NULL,
  `TREN` varchar(255) NOT NULL,
  `LIEN` text,
  PRIMARY KEY (`NOW`),
  KEY `NOL` (`NOL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `listes`
--
ALTER TABLE `listes`
  ADD CONSTRAINT `listes_ibfk_1` FOREIGN KEY (`NOC`) REFERENCES `classes` (`NOC`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `mots`
--
ALTER TABLE `mots`
  ADD CONSTRAINT `mots_ibfk_1` FOREIGN KEY (`NOL`) REFERENCES `listes` (`NOL`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
