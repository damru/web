-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: sql-users.ece.fr:3305
-- Généré le : Ven 08 Avril 2011 à 17:55
-- Version du serveur: 5.0.13
-- Version de PHP: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `drubio`
--

-- --------------------------------------------------------

--
-- Structure de la table `df_favoris`
--
-- Création: Ven 08 Avril 2011 à 04:58
--

DROP TABLE IF EXISTS `df_favoris`;
CREATE TABLE IF NOT EXISTS `df_favoris` (
  `idFavoris` int(11) NOT NULL auto_increment,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `fidUser` int(11) NOT NULL,
  `rayon` int(11) NOT NULL,
  `nomFavoris` varchar(32) NOT NULL,
  PRIMARY KEY  (`idFavoris`),
  KEY `fidUser` (`fidUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `df_favoris`
--

INSERT INTO `df_favoris` (`idFavoris`, `latitude`, `longitude`, `fidUser`, `rayon`, `nomFavoris`) VALUES
(1, 37.422005, -15, 2, 50, 'test'),
(2, 48.8519345, 2.28764136, 2, 400, 'qg');

-- --------------------------------------------------------

--
-- Structure de la table `df_messages`
--
-- Création: Ven 01 Avril 2011 à 17:39
--

DROP TABLE IF EXISTS `df_messages`;
CREATE TABLE IF NOT EXISTS `df_messages` (
  `idMessage` int(11) NOT NULL auto_increment,
  `body` varchar(120) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `fidUser` int(11) NOT NULL,
  PRIMARY KEY  (`idMessage`),
  KEY `f_idUser` (`fidUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `df_messages`
--

INSERT INTO `df_messages` (`idMessage`, `body`, `date`, `latitude`, `longitude`, `fidUser`) VALUES
(1, 'happy hour au piano fou', '2011-04-08 06:05:39', 35, 35, 3),
(2, 'beer rocks', '2011-04-08 06:05:50', 35, 35, 3),
(3, 'metro crimee 7 en panne', '2011-04-08 06:06:18', 35.015, 35, 4),
(4, 'bobby is in town/', '2011-04-08 06:12:47', 35.012, 35.0065, 2),
(5, 'so am i dude\Zim with caprica6\n ;p', '2011-04-08 06:13:05', 35.007, 35, 1),
(6, 'h-30 min avant la présentation', '2011-04-08 09:27:44', 48.85217022, 2.28796776, 2),
(7, 'on arrive', '2011-04-08 09:29:11', 48.8520320666667, 2.28820651666667, 2),
(8, 'super partie de ping pong ', '2011-04-08 09:40:19', 48.85198352, 2.28753147, 3),
(9, 'bonjour\n', '2011-04-08 10:26:34', 48.85193352, 2.28767256, 2),
(10, 'test scroll', '2011-04-08 10:34:14', 48.85201046, 2.28715064, 3),
(11, 'nimporte quoi', '2011-04-08 10:34:16', 48.8522744178772, 2.28674411773682, 2),
(12, 'file manager', '2011-04-08 10:35:10', 48.85201046, 2.28715064, 3),
(13, 'en pleine soutenance en 314', '2011-04-08 10:35:22', 48.851819, 2.2853835, 2);

-- --------------------------------------------------------

--
-- Structure de la table `df_tags`
--
-- Création: Ven 25 Mars 2011 à 00:02
--

DROP TABLE IF EXISTS `df_tags`;
CREATE TABLE IF NOT EXISTS `df_tags` (
  `idTag` int(11) NOT NULL auto_increment,
  `libelleTag` varchar(32) NOT NULL,
  PRIMARY KEY  (`idTag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `df_tags`
--


-- --------------------------------------------------------

--
-- Structure de la table `df_users`
--
-- Création: Ven 01 Avril 2011 à 16:58
--

DROP TABLE IF EXISTS `df_users`;
CREATE TABLE IF NOT EXISTS `df_users` (
  `idUser` int(11) NOT NULL auto_increment,
  `nom` varchar(16) NOT NULL,
  `prenom` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `login` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` enum('M','F','N') NOT NULL default 'N',
  `rayon` int(11) NOT NULL,
  PRIMARY KEY  (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `df_users`
--

INSERT INTO `df_users` (`idUser`, `nom`, `prenom`, `email`, `login`, `password`, `age`, `sexe`, `rayon`) VALUES
(1, 'Ramandiamanana', 'Fenonandrianina', 'ramandia@ece.fr', 'Dada', 'a', 22, 'M', 10),
(2, 'Sponge', 'Bob', 'bob@gmail.com', 'Bob', 'bad', 6, 'N', 50),
(3, 'Dark', 'Os', 'dar', 'Darcos', 'a', 18, 'M', 1000),
(4, 'A', 'B', 'C', 'RATP', 'a', 90, 'N', 5000);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `df_favoris`
--
ALTER TABLE `df_favoris`
  ADD CONSTRAINT `df_favoris_ibfk_1` FOREIGN KEY (`fidUser`) REFERENCES `df_users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `df_messages`
--
ALTER TABLE `df_messages`
  ADD CONSTRAINT `df_messages_ibfk_1` FOREIGN KEY (`fidUser`) REFERENCES `df_users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
