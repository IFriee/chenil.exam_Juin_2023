-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 juin 2023 à 18:02
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
  `PrixSejourId` int DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `ProprietaireId` (`ProprietaireId`),
  KEY `fk_animaux_prix_sejours` (`PrixSejourId`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`Id`, `Nom`, `Sexe`, `Sterilise`, `DateNaiss`, `NumeroId`, `ProprietaireId`, `PrixSejourId`) VALUES
(75, 'Twix', 'Femelle', 1, '2022-06-22', '345654', 6, 1),
(76, 'Lola', 'Femelle', 1, '0004-04-03', '434443', 7, 2),
(78, 'Crispy', 'Male', 0, '0333-03-03', '4433222', 7, 3),
(83, 'Daisy', 'Femelle', 1, '2022-10-03', '45894987497409', 15, 4),
(84, 'Eliott', 'ENORME', 1, '2006-03-03', '54334', 6, 2),
(90, 'Exam', 'ENORME', 0, '2029-05-05', '69', 7, 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD CONSTRAINT `animaux_ibfk_1` FOREIGN KEY (`ProprietaireId`) REFERENCES `proprietaires` (`Id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_animaux_prix_sejours` FOREIGN KEY (`PrixSejourId`) REFERENCES `prix_sejours` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
