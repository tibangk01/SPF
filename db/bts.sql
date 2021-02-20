-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 20 fév. 2021 à 20:24
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
-- Structure de la table `editer`
--

CREATE TABLE `editer` (
  `date_edition_utilisateur` datetime NOT NULL DEFAULT current_timestamp(),
  `id_utilisateur_editeur` int(11) NOT NULL,
  `id_utilisateur_edite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `matricule_utilisateur` varchar(13) NOT NULL,
  `photo_profil_utilisateur` varchar(128) DEFAULT NULL,
  `nom_utilisateur` varchar(64) NOT NULL,
  `prenom_utilisateur` varchar(64) NOT NULL,
  `sexe_utilisateur` tinyint(1) NOT NULL,
  `pseudo_utilisateur` varchar(64) NOT NULL,
  `mot_de_passe_utilisateur` varchar(256) NOT NULL,
  `email_utilisateur` varchar(128) NOT NULL,
  `id_utilisateur_auteur_ajout` int(11) NOT NULL,
  `date_ajout_utilisateur` datetime NOT NULL DEFAULT current_timestamp(),
  `id_utilisateur_auteur_desactivation` int(11) DEFAULT NULL,
  `date_desactivation_utilisateur` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
