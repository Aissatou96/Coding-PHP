-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 26 juin 2020 à 00:42
-- Version du serveur :  8.0.18
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
-- Base de données :  `gestionallocations`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `numCh` varchar(50) NOT NULL,
  `numBatiment` varchar(50) NOT NULL,
  `typeCh` varchar(50) NOT NULL,
  PRIMARY KEY (`numCh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`numCh`, `numBatiment`, `typeCh`) VALUES
('', 'jeux', 'duo'),
('001-8224', '001', 'Duo'),
('001-8264', '001', 'individuelle'),
('002-8255', '002', 'Duo'),
('003-2589', '003', 'individuelle'),
('004-8764', '004', 'Duo');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `matricule` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `typeEtudiant` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `datenaiss` date NOT NULL,
  `typeBourse` varchar(50) DEFAULT NULL,
  `profil` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `numCh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`matricule`),
  KEY `FOREIGN KEY` (`numCh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `prenom`, `nom`, `typeEtudiant`, `email`, `telephone`, `datenaiss`, `typeBourse`, `profil`, `adresse`, `numCh`) VALUES
('2012BACK4778', 'Malick', 'Ba', 'Boursier', 'malick@gmail.com', '778523214', '1990-06-16', 'entiere', 'nonLoger', NULL, NULL),
('2016CIOU8264', 'Aïssatou', 'CISSE', 'Boursiere', 'aissatou@gmail.com', '786329454', '1996-09-10', 'Demi', 'loger', NULL, '001-8264'),
('2018FANA0256', 'Amina', 'FALL', 'nonBoursiere', 'mina@yahoo.fr', '702326699', '1999-12-22', NULL, NULL, 'Mermoz', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`numCh`) REFERENCES `chambre` (`numCh`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
