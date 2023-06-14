-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 14 Juin 2023 à 16:46
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
`id_bat` int(1) NOT NULL,
  `nom_bat` varchar(30) NOT NULL,
  `gestionnaire` varchar(30) NOT NULL,
  `login_gest` varchar(30) NOT NULL,
  `mdp_gest` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `Bâtiments`
--

INSERT INTO `Bâtiments` (`id_bat`, `nom_bat`, `gestionnaire`, `login_gest`, `mdp_gest`) VALUES
(1, 'E', 'mansaladier', 'mansal', 'saladier'),
(2, 'B', 'soutounir', 'soutou', 'tounir');

-- --------------------------------------------------------

--
-- Structure de la table `Capteurs`
--

CREATE TABLE IF NOT EXISTS `Capteurs` (
`id_cap` int(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `id_bat` int(1) NOT NULL,
  `nom` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `Capteurs`
--

INSERT INTO `Capteurs` (`id_cap`, `type`, `id_bat`, `nom`) VALUES
(1, 'température', 1, 'AM107-35'),
(2, 'humidité', 1, 'AM107-35'),
(3, 'co2', 1, 'AM107-35'),
(4, 'température', 2, 'AM107-16'),
(5, 'humidité', 2, 'AM107-16'),
(6, 'co2', 2, 'AM107-16');

-- --------------------------------------------------------

--
-- Structure de la table `Mesures`
--

CREATE TABLE IF NOT EXISTS `Mesures` (
`id_mes` int(30) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Valeur` float NOT NULL,
  `id_cap` int(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `Mesures`
--

INSERT INTO `Mesures` (`id_mes`, `Date`, `Time`, `Valeur`, `id_cap`) VALUES
(1, '2023-06-06', '11:51:44.000000', 25.2, 4),
(2, '2023-06-06', '11:51:44.000000', 55, 5),
(3, '2023-06-06', '11:51:44.000000', 72, 6),
(4, '2023-06-06', '14:32:35.000000', 25.5, 1),
(5, '2023-06-06', '14:32:35.000000', 53.5, 2),
(6, '2023-06-06', '14:32:35.000000', 2, 3),
(7, '2023-06-06', '14:41:44.000000', 26, 4),
(8, '2023-06-06', '14:41:44.000000', 53.5, 5),
(9, '2023-06-06', '14:41:44.000000', 0, 6),
(10, '2023-06-06', '14:42:35.000000', 25.7, 1),
(11, '2023-06-06', '14:42:35.000000', 53, 2),
(12, '2023-06-06', '14:42:35.000000', 96, 3),
(13, '2023-06-06', '14:51:44.000000', 26, 4),
(14, '2023-06-06', '14:51:44.000000', 53.5, 5),
(15, '2023-06-06', '14:51:44.000000', 0, 6),
(16, '2023-06-06', '14:52:35.000000', 25.8, 1),
(17, '2023-06-06', '14:52:35.000000', 52.5, 2),
(18, '2023-06-06', '14:52:35.000000', 56, 3);

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
-- AUTO_INCREMENT pour la table `Bâtiments`
--
ALTER TABLE `Bâtiments`
MODIFY `id_bat` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `Capteurs`
--
ALTER TABLE `Capteurs`
MODIFY `id_cap` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `Mesures`
--
ALTER TABLE `Mesures`
MODIFY `id_mes` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Capteurs`
--
ALTER TABLE `Capteurs`
ADD CONSTRAINT `sae231` FOREIGN KEY (`id_bat`) REFERENCES `Bâtiments` (`id_bat`);

--
-- Contraintes pour la table `Mesures`
--
ALTER TABLE `Mesures`
ADD CONSTRAINT `sae232` FOREIGN KEY (`id_cap`) REFERENCES `Capteurs` (`id_cap`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
