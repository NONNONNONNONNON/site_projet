-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 30 Octobre 2016 à 15:24
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `animes`
--
CREATE DATABASE IF NOT EXISTS `animes` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `animes`;

-- --------------------------------------------------------

--
-- Structure de la table `animes`
--

CREATE TABLE `animes` (
  `animeName` text COLLATE utf8_bin NOT NULL,
  `episode` text COLLATE utf8_bin NOT NULL,
  `titre` text COLLATE utf8_bin NOT NULL,
  `lien` text COLLATE utf8_bin NOT NULL,
  `synopsis` text COLLATE utf8_bin NOT NULL,
  `APPRECIATION` int(11) NOT NULL,
  `NB_VOTE` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
