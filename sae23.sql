-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 02 Juin 2023 à 10:35
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sae23`
--

-- --------------------------------------------------------

--
-- Structure de la table `Administration`
--

CREATE TABLE IF NOT EXISTS `Administration` (
  `login_admin` varchar(30) NOT NULL,
  `mdp_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Administration`
--

INSERT INTO `Administration` (`login_admin`, `mdp_admin`) VALUES
('sae23', 'patate');

-- --------------------------------------------------------

--
-- Structure de la table `Bâtiments`
--

CREATE TABLE IF NOT EXISTS `Bâtiments` (
  `id_bat` varchar(1) NOT NULL,
  `nom_bat` varchar(30) NOT NULL,
  `gestionnaire` varchar(30) NOT NULL,
  `login_gest` varchar(30) NOT NULL,
  `mdp_gest` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Capteurs`
--

CREATE TABLE IF NOT EXISTS `Capteurs` (
`id_cap` int(30) NOT NULL,
  `nom_cap` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `id_bat` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `Mesures`
--

CREATE TABLE IF NOT EXISTS `Mesures` (
`id_mes` int(30) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Valeur` double NOT NULL,
  `id_cap` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Bâtiments`
--
ALTER TABLE `Bâtiments`
 ADD PRIMARY KEY (`id_bat`);

--
-- Index pour la table `Capteurs`
--
ALTER TABLE `Capteurs`
 ADD PRIMARY KEY (`id_cap`), ADD KEY `id_bat` (`id_bat`);

--
-- Index pour la table `Mesures`
--
ALTER TABLE `Mesures`
 ADD PRIMARY KEY (`id_mes`), ADD KEY `id_cap` (`id_cap`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Capteurs`
--
ALTER TABLE `Capteurs`
MODIFY `id_cap` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Mesures`
--
ALTER TABLE `Mesures`
MODIFY `id_mes` int(30) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Capteurs`
--
ALTER TABLE `Capteurs`
ADD CONSTRAINT `Capteurs_ibfk_1` FOREIGN KEY (`id_cap`) REFERENCES `Mesures` (`id_cap`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `Capteurs_ibfk_2` FOREIGN KEY (`id_bat`) REFERENCES `Bâtiments` (`id_bat`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
