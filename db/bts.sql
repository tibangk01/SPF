-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 11 fév. 2021 à 01:50
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bts`
--

-- --------------------------------------------------------

--
-- Structure de la table `requetes_visiteurs`
--

CREATE TABLE `requetes_visiteurs` (
  `id_requete` int(11) NOT NULL,
  `email_visiteur` varchar(64) NOT NULL,
  `nom_visiteur` varchar(64) NOT NULL,
  `sujet_requete` varchar(128) NOT NULL,
  `contenue_requete` varchar(1024) NOT NULL,
  `consulte_le` datetime DEFAULT NULL,
  `consulte_par` tinyint(5) NOT NULL,
  `repondu_le` datetime DEFAULT NULL,
  `repondu_par` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `requetes_visiteurs`
--
ALTER TABLE `requetes_visiteurs`
  ADD PRIMARY KEY (`id_requete`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `requetes_visiteurs`
--
ALTER TABLE `requetes_visiteurs`
  MODIFY `id_requete` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
