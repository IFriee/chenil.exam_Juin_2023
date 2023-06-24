-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 24 juin 2023 à 12:49
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `canifornie`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Sexe` varchar(10) DEFAULT NULL,
  `Sterilise` tinyint(1) DEFAULT NULL,
  `DateNaiss` date DEFAULT NULL,
  `NumeroId` varchar(20) DEFAULT NULL,
  `ProprietaireId` int NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `ProprietaireId` (`ProprietaireId`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`Id`, `Nom`, `Sexe`, `Sterilise`, `DateNaiss`, `NumeroId`, `ProprietaireId`) VALUES
(75, 'Twix', 'Femelle', 1, '2022-06-22', '345654', 6),
(76, 'Lola', 'Femelle', 1, '0004-04-03', '434443', 7),
(78, 'Crispy', 'Male', 0, '0333-03-03', '4433222', 7),
(83, 'Daisy', 'Femelle', 1, '2022-10-03', '45894987497409', 15),
(84, 'Eliott', 'ENORME', 1, '2006-03-03', '54334', 6);

-- --------------------------------------------------------

--
-- Structure de la table `proprietaires`
--

DROP TABLE IF EXISTS `proprietaires`;
CREATE TABLE IF NOT EXISTS `proprietaires` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `DateNaiss` date DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Tel` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `proprietaires`
--

INSERT INTO `proprietaires` (`Id`, `Nom`, `Prenom`, `DateNaiss`, `Email`, `Tel`) VALUES
(6, 'Wengler', 'Eliott', '1999-07-03', 'eliott.wengler@hotmail.fr', '0495742768'),
(7, 'Benjamin', 'Delbar', '1930-03-03', 'centpourcent@eliott.com', '069696969'),
(14, 'Bond', 'James', '1945-04-04', 'eliott.wengler@hotmail.fr', '0495742799'),
(15, 'Iosif', 'Ally', '2003-12-12', 'alex@ifofosup.com', '0495742776');

-- --------------------------------------------------------

--
-- Structure de la table `sejours`
--

DROP TABLE IF EXISTS `sejours`;
CREATE TABLE IF NOT EXISTS `sejours` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `DateDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `AnimalId` int DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `AnimalId` (`AnimalId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `sejours`
--

INSERT INTO `sejours` (`Id`, `DateDebut`, `DateFin`, `AnimalId`) VALUES
(2, '2023-06-13', '2023-06-16', 76),
(9, '2023-04-21', '2023-05-10', 75),
(12, '2023-07-11', '2023-07-17', 83);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD CONSTRAINT `animaux_ibfk_1` FOREIGN KEY (`ProprietaireId`) REFERENCES `proprietaires` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Contraintes pour la table `sejours`
--
ALTER TABLE `sejours`
  ADD CONSTRAINT `sejours_ibfk_1` FOREIGN KEY (`AnimalId`) REFERENCES `animaux` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
