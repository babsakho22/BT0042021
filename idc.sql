-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 17 jan. 2022 à 11:06
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `idc`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(11) NOT NULL,
  `Nom_utilisateur` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Age` int(11) NOT NULL,
  `Genre` varchar(250) NOT NULL,
  `Niveau` varchar(250) NOT NULL,
  `Tel` int(11) NOT NULL,
  `Adresse` varchar(250) NOT NULL,
  `Mot_passe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `Nom_utilisateur`, `Nom`, `Prenom`, `Email`, `Age`, `Genre`, `Niveau`, `Tel`, `Adresse`, `Mot_passe`) VALUES
(7, 'fatashi', 'Gueye ', 'Fatou Binetou', 'fatashi2003@gmail.com', 19, 'f', 'l3', 7706060, 'Rufisque', '123'),
(9, 'ndaye22', 'ndaye', 'diop', 'ndayd@gmail.com', 25, 'f', 'm1', 7754525, 'Rufisque', '789'),
(10, 'mdou', 'modou', 'gueye', 'mgueye12@gmail.com', 25, 'f', 'l1', 772128375, 'Rufisque', '123456'),
(11, 'oumym', 'Gueye ', 'Babacar', 'babasakho22@hotmail.fr', 14, 'm', 'm1', 12, 'Rufisque', '123'),
(13, 'faya', 'faye', 'adama', 'mifa12@gmail.com', 25, 'm', 'l1', 772870130, 'Rufisque', '789'),
(15, 'ablaye12', 'Ndiaye', 'Ablaye', 'andiay@gmail.com', 24, 'M', 'L1', 775452, 'thies', '456'),
(18, 'mama12', 'Maman', 'MBAYE', 'mama@gmail.com', 23, 'F', 'l3', 755452, 'mbour', '852'),
(19, 'Paw02', 'Pawlish', 'MBAYE', 'pawlish02@gmail.com', 27, 'M', 'L3', 7721283, 'DAKAR', '963'),
(21, 'Cheikh22', 'khaya', 'Cheikh', 'cheikhkahya@gmail.com', 24, 'M', 'L3', 7554558, 'Rufisque', '123'),
(22, 'Ndoum', 'Ndoumbé', 'Diop', 'diopn@gmail.com', 22, 'M', 'L3', 785546, 'guediawaye', '014');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
