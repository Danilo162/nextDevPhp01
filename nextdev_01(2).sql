-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 sep. 2019 à 22:14
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nextdev_01`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_complet` varchar(300) NOT NULL,
  `prenom` varchar(200) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `nom_complet`, `prenom`, `contact`, `email`, `photo`) VALUES
(1, 'danilo', NULL, '5464664545', 'merci@gmail.com', NULL),
(2, 'danilo ', 'julient kou', '5464664545 qqsq', 'merc11i@gmail.com', NULL),
(3, 'n\'guessan yoboue jule', NULL, '5454545444', 'aaaaa@gmail.com', NULL),
(4, 'n\'goran yoboue jule', NULL, '5454545444', 'aaaaak@gmail.com', NULL),
(5, 'danilo16 on di koi ', NULL, '54545454', 'gqgqs@gmail.com', NULL),
(6, 'daaaa', ' merci man', 'ok ok', 'bdbdbdb@gmail.com', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
