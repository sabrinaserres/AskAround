-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 20 Mai 2022 à 17:38
-- Version du serveur: 5.5.29-0ubuntu0.12.04.2
-- Version de PHP: 5.3.10-1ubuntu3.26

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `zhmima`
--

-- --------------------------------------------------------

--
-- Structure de la table `table_ask2`
--

CREATE TABLE IF NOT EXISTS `table_ask2` (
  `TITLE` text NOT NULL,
  `DATE` date NOT NULL,
  `QUESTION` text NOT NULL,
  `PSEUDO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `table_ask2`
--

INSERT INTO `table_ask2` (`TITLE`, `DATE`, `QUESTION`, `PSEUDO`) VALUES
('TITRE AUTRE', '2022-05-20', 'new quest', 'sabrina'),
('lol', '2022-05-20', 'pourquoi sabrina est elle la plus belle?', 'sabrina'),
('test', '2022-05-20', 'pk je vois plus le pseudo ???', ''),
('MERCI', '2022-05-20', 'merci', 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
