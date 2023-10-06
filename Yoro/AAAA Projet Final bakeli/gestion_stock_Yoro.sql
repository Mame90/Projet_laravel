-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 03 oct. 2023 à 18:04
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits_preleves`
--

CREATE TABLE `produits_preleves` (
  `id` int(11) NOT NULL,
  `nom_produit` varchar(100) DEFAULT NULL,
  `quantite_prelevee` int(11) DEFAULT NULL,
  `date_prelevement` date DEFAULT NULL,
  `corbeille` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits_preleves`
--

INSERT INTO `produits_preleves` (`id`, `nom_produit`, `quantite_prelevee`, `date_prelevement`, `corbeille`) VALUES
(1, '1', 45, '2023-09-19', 0),
(2, '3', 60, '2023-10-03', 0);

-- --------------------------------------------------------

--
-- Structure de la table `produits_stockes`
--

CREATE TABLE `produits_stockes` (
  `id` int(11) NOT NULL,
  `nom_produit` varchar(100) DEFAULT NULL,
  `quantite_stock` int(11) DEFAULT NULL,
  `corbeille` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits_stockes`
--

INSERT INTO `produits_stockes` (`id`, `nom_produit`, `quantite_stock`, `corbeille`) VALUES
(1, 'Banane', 300, 0),
(2, 'Pomme', 350, 0),
(3, 'tomate', 260, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `profile` enum('ADMIN','BOUTIQUIER','CLIENT') DEFAULT NULL,
  `corbeille` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `tel`, `pwd`, `profile`, `corbeille`) VALUES
(1, 'sene', 'yero gallo', '777812474', 'vito50', 'CLIENT', 0),
(2, 'Gueye', 'Mantoucha', '771404893', 'bbeitou5', 'CLIENT', 0),
(3, 'Sow', 'Alioun', '770207202', 'sow12345', 'CLIENT', 0),
(4, 'BAYE', 'DIOP', '770404040', 'diop11', 'CLIENT', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits_preleves`
--
ALTER TABLE `produits_preleves`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits_stockes`
--
ALTER TABLE `produits_stockes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tel` (`tel`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits_preleves`
--
ALTER TABLE `produits_preleves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `produits_stockes`
--
ALTER TABLE `produits_stockes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
