-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 03 sep. 2023 à 16:45
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `Idcours` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(220) NOT NULL,
  PRIMARY KEY (`Idcours`),
  KEY `Idlivraison` (`Idcours`)
) ENGINE=InnoDB AUTO_INCREMENT=123660 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`Idcours`, `title`, `description`, `date`) VALUES
(123222, 'physique', 'ooo', '19-12-2022'),
(123223, 'allemand', 'good', '19-12-2100'),
(123456, 'philo', 'tttt', '19-11-2020'),
(123650, 'zzzz', 'rrrr', '19-12-2021');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` varchar(10) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` bigint(11) NOT NULL,
  `naiss` date NOT NULL,
  `classe` enum('1','2','3','4','5') NOT NULL,
  `sexe` enum('femme','homme','autre') NOT NULL,
  `role` enum('etudiant','enseignant','administrateur') NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `pic` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `email`, `tel`, `naiss`, `classe`, `sexe`, `role`, `mdp`, `pic`) VALUES
('123', 'aa', 'aa', 'aa@esprit.tn', 1234, '2023-08-29', '1', 'femme', 'enseignant', 'aaa', NULL),
('132132123', 'cc', 'ff', 'ss@esprit.tn', 12345677, '2023-08-29', '1', 'femme', 'enseignant', 'aa', NULL),
('181JFT3200', 'mohamed', 'aymen', 'aymen.mohamed@esprit.tn', 28100300, '2023-01-31', '2', 'homme', 'etudiant', 'Khalifaamen123', '89473186_1957461324386487_5104321447338180608_n.jpg'),
('191JMT0000', 'khomsi', 'fatiha', 'khmosi.fatiha@esprit.tn', 12345677, '2023-08-29', '1', 'femme', 'enseignant', 'Khalifaamen123', NULL),
('191JMT2350', 'Amen Allah', 'Ben Khalifa', 'amenallah.benkhalifa@esprit.tn', 50031324, '2000-10-13', '2', 'homme', 'etudiant', 'amen123', '81264365_1335182000023659_7467139504130752512_n.jpg'),
('191JMT2398', 'amine', 'mohamed', 'mohamedamine.hamzaoui@esprit.tn', 50031300, '2023-08-29', '2', 'homme', 'administrateur', 'Khalifaamen123', '89473186_1957461324386487_5104321447338180608_n.jpg'),
('211JFT1000', 'riahi', 'mayssa', 'riahi.mayssa@esprit.tn', 29300200, '2023-08-28', '1', 'femme', 'etudiant', 'Khalifaamen123', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `Idquiz` int(11) NOT NULL AUTO_INCREMENT,
  `Idcours` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `question_count` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  PRIMARY KEY (`Idquiz`),
  KEY `fk_livreur_livraison` (`Idcours`)
) ENGINE=InnoDB AUTO_INCREMENT=1238457 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`Idquiz`, `Idcours`, `title`, `question_count`, `duration`) VALUES
(111200, 123222, 'dd', 30, 7),
(111222, 123456, 'info', 30, 2),
(111248, 123222, 'ppppp', 40, 5);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `fk_livreur_livraison` FOREIGN KEY (`Idcours`) REFERENCES `cours` (`Idcours`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
