-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 20 Mai 2022 à 17:37
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
-- Structure de la table `table_answer`
--

CREATE TABLE IF NOT EXISTS `table_answer` (
  `TITLE` text NOT NULL,
  `REPONSE` text NOT NULL,
  `LIKE` int(11) NOT NULL,
  `DISLIKE` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `PSEUDO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `table_answer`
--

INSERT INTO `table_answer` (`TITLE`, `REPONSE`, `LIKE`, `DISLIKE`, `DATE`, `PSEUDO`) VALUES
('vois je le pseuod ?', 'par pitier je veux le voir', 0, 0, '2022-05-18', 'test'),
('vois je le pseuod ?', 'salut', 2, 0, '2022-05-18', 'test'),
('vois je le pseuod ?', 'salut', 2, 0, '2022-05-18', 'test'),
('vois je le pseuod ?', 'cuà', 0, 0, '2022-05-18', 'test'),
('tes 1', 'test', 0, 0, '2022-05-18', 'sabrina'),
('vois je le pseuod ?', 'test voir si je peuc liker ma propre reponse', 0, 0, '2022-05-19', 'sabrina'),
('new quest', 'bonjour', 0, 0, '2022-05-20', 'test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
