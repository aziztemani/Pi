-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 15 mai 2021 à 06:53
-- Version du serveur :  10.4.10-MariaDB
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
-- Base de données :  `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=7777779 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `Description`) VALUES
(1, 'Anim shop', 'Cherchez-vous une bonne affaire anim shop ? Explorez une large gamme des meilleurs anim shop sur AliExpress pour trouver le parfait article pour vous ! En plus des marques de qualitÃ©, vous bÃ©nÃ©ficierez de remises lors de vos achats de anim shop durant nos super promotions. N\'oubliez pas cette Ã©tape : filtrez les articles ayant des avantages comme la livraison et le retour gratuits, et profitez au maximum de votre expÃ©rience d\'achat en ligne !'),
(45, 'Promos', 'Profitez de nos remises tout au long de l\'annÃ©e pour faire plaisir Ã  votre compagnon.  Alimentation, produits de santÃ© et de bien-Ãªtre, accessoires... DÃ©couvrez toutes nos bonnes affaires !     '),
(123, 'Moments', 'Nous presentons des moments avec vos animaux comme toujours');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(255) NOT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `fk_commentaire_article` (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=4521380 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`nom`, `prenom`, `id_article`, `id_commentaire`, `commentaire`) VALUES
('user', 'user', 1, 4521375, 'bedoui'),
('user', 'user', 1, 4521379, 'c bien');

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
  `mdp` varchar(20) NOT NULL,
  `pic` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `email`, `tel`, `naiss`, `classe`, `sexe`, `mdp`, `pic`) VALUES
('191JMT2350', 'Amen Allah', 'Ben Khalifa', 'amenallah.benkhalifa@esprit.tn', 50031324, '2000-10-13', '2', 'homme', 'amen123', '81264365_1335182000023659_7467139504130752512_n.jpg'),
('191JMT2390', 'amen', 'Ben khalifa', 'amenallah.benkhalifa@esprit.tn', 50031324, '2000-10-13', '3', 'homme', 'amen123', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `dateE` date NOT NULL,
  `duree` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id`, `nom`, `dateE`, `duree`) VALUES
(2, 'fadhaln ', '2012-02-02', 21),
(3, 'spininig', '2012-10-10', 12),
(4, 'yoga', '2020-12-12', 5),
(5, 'race', '2020-10-10', 5),
(6, 'boxe', '2020-05-05', 7);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `Idlivraison` int(10) NOT NULL AUTO_INCREMENT,
  `prix` int(200) NOT NULL,
  `date` varchar(220) NOT NULL,
  `destinataire` varchar(200) NOT NULL,
  `codepostal` int(10) NOT NULL,
  PRIMARY KEY (`Idlivraison`),
  KEY `Idlivraison` (`Idlivraison`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483647 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`Idlivraison`, `prix`, `date`, `destinataire`, `codepostal`) VALUES
(123, 196, '12-02-2021', '15rueliberte,tunis', 2079),
(695, 136, '24-12-2021', '13rueparis,tunis', 2074),
(123654, 200, '10-05-2021', '1rueomar,benarous', 1075),
(191863, 63, '15-05-2021', '19ruechaker,sousse', 2088);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `Idlivreur` int(11) NOT NULL AUTO_INCREMENT,
  `Idlivraison` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`Idlivreur`),
  KEY `fk_livreur_livraison` (`Idlivraison`)
) ENGINE=InnoDB AUTO_INCREMENT=654124 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`Idlivreur`, `Idlivraison`, `nom`, `prenom`, `email`) VALUES
(111253, 191863, 'ben salem', 'eya', 'eya.bensalem@esprit.tn'),
(111695, 695, 'ben  khalifa', 'amen', 'amenallah.benkhalifa@esprit.tn'),
(122586, 123654, 'Chorfi', 'moune', 'mouna.chorfi@esprit.tn'),
(129632, 123, 'bedouii', 'mohamed', 'mohamed.bedoui@esprit.tn');

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `ref` int(11) NOT NULL AUTO_INCREMENT,
  `ide` int(50) NOT NULL,
  `datedeb` date NOT NULL,
  `datefin` date NOT NULL,
  `pourcentage` int(50) NOT NULL,
  PRIMARY KEY (`ref`),
  KEY `ide` (`ide`)
) ENGINE=MyISAM AUTO_INCREMENT=1246 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `promo`
--

INSERT INTO `promo` (`ref`, `ide`, `datedeb`, `datefin`, `pourcentage`) VALUES
(3, 1235, '2020-12-08', '2020-12-24', 32),
(1245, 2178, '2021-02-02', '2022-02-04', 22);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk_commentaire_article` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `livreur`
--
ALTER TABLE `livreur`
  ADD CONSTRAINT `fk_livreur_livraison` FOREIGN KEY (`Idlivraison`) REFERENCES `livraison` (`Idlivraison`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
