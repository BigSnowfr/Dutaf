-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 10 Mai 2016 à 10:45
-- Version du serveur :  5.5.44-0+deb8u1
-- Version de PHP :  5.6.12-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `basemmi15b08`
--

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `fournisseur_id` int(11) NOT NULL,
  `fournisseur_nom` char(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fournisseur_numero` char(14) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fournisseur_ville` char(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`fournisseur_id`, `fournisseur_nom`, `fournisseur_numero`, `fournisseur_ville`) VALUES
(1, 'BigBoss', '03.25.41.41.41', 'Troyes'),
(2, 'TopMatos', '04.22.41.43.43', 'Sens'),
(3, 'Bluecheap', '01.13.55.41.22', 'Paris'),
(4, 'minigrole', '07.21.11.41.66', 'Lyon'),
(5, 'Maxiboutique', '03.25.33.44.55', 'Troyes'),
(6, 'MadeInPasCher', '01.12.41.11.26', 'Paris'),
(7, 'PilouSport', '09.25.12.13.14', 'Sens'),
(8, 'BolDair', '03.25.22.33.11', 'Troyes');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`fournisseur_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `fournisseur_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
