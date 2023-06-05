-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 06 juin 2023 à 14:50
-- Version du serveur : 8.0.33-0ubuntu0.22.04.2
-- Version de PHP : 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae23`
--

-- --------------------------------------------------------

--
-- Structure de la table `Administration`
--

CREATE TABLE `Administration` (
  `login_admin` varchar(30) NOT NULL,
  `mdp_admin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `Administration`
--

INSERT INTO `Administration` (`login_admin`, `mdp_admin`) VALUES
('sae23', 'patate');

-- --------------------------------------------------------

--
-- Structure de la table `Bâtiments`
--

CREATE TABLE `Bâtiments` (
  `id_bat` varchar(1) NOT NULL,
  `nom_bat` varchar(30) NOT NULL,
  `gestionnaire` varchar(30) NOT NULL,
  `login_gest` varchar(30) NOT NULL,
  `mdp_gest` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `Bâtiments`
--

INSERT INTO `Bâtiments` (`id_bat`, `nom_bat`, `gestionnaire`, `login_gest`, `mdp_gest`) VALUES
('1', 'E', 'mansaladier', 'mansal', 'saladier'),
('2', 'B', 'soutounir', 'soutou', 'tounir');

-- --------------------------------------------------------

--
-- Structure de la table `Capteurs`
--

CREATE TABLE `Capteurs` (
  `id_cap` int NOT NULL,
  `type` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `id_bat` varchar(1) NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `Capteurs`
--

INSERT INTO `Capteurs` (`id_cap`, `type`, `id_bat`, `nom`) VALUES
(1, 'température', '1', 'AM107-35'),
(2, 'humidité', '1', 'AM107-35'),
(3, 'co2', '1', 'AM107-35'),
(4, 'température', '2', 'AM107-16'),
(5, 'humidité', '2', 'AM107-16'),
(6, 'co2', '2', 'AM107-16');

-- --------------------------------------------------------

--
-- Structure de la table `Mesures`
--

CREATE TABLE `Mesures` (
  `id_mes` int NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Valeur` double NOT NULL,
  `id_cap` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `Mesures`
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
(12, '2023-06-06', '14:42:35.000000', 96, 3);

--
-- Index pour les tables déchargées
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
  ADD PRIMARY KEY (`id_cap`),
  ADD KEY `id_bat` (`id_bat`);

--
-- Index pour la table `Mesures`
--
ALTER TABLE `Mesures`
  ADD PRIMARY KEY (`id_mes`),
  ADD KEY `id_cap` (`id_cap`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Capteurs`
--
ALTER TABLE `Capteurs`
  MODIFY `id_cap` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `Mesures`
--
ALTER TABLE `Mesures`
  MODIFY `id_mes` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Capteurs`
--
ALTER TABLE `Capteurs`
  ADD CONSTRAINT `Capteurs_ibfk_4` FOREIGN KEY (`id_bat`) REFERENCES `Bâtiments` (`id_bat`);

--
-- Contraintes pour la table `Mesures`
--
ALTER TABLE `Mesures`
  ADD CONSTRAINT `Mesures_ibfk_1` FOREIGN KEY (`id_cap`) REFERENCES `Capteurs` (`id_cap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
