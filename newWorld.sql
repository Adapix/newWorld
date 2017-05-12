-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 12 Mai 2017 à 20:02
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `newworld`
--

-- --------------------------------------------------------

--
-- Structure de la table `lieudeprod`
--

CREATE TABLE `lieudeprod` (
  `idLieuDeProduction` int(11) NOT NULL,
  `commune` varchar(45) DEFAULT NULL,
  `parcelle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lot`
--

CREATE TABLE `lot` (
  `idLot` int(11) NOT NULL,
  `poids` int(11) DEFAULT NULL,
  `aliment` enum('abricots','bananes','fraises','pêches','framboises','haricots vert','laitues','myrtilles','poivrons','pommes de terre') DEFAULT NULL,
  `modeDeProduction` enum('conventionnel','biologique','raisonné') DEFAULT NULL,
  `idLieuDeProduction` int(11) DEFAULT NULL,
  `dateRecolte` varchar(20) NOT NULL,
  `dlc` varchar(20) DEFAULT NULL,
  `qte` float NOT NULL,
  `prixAuKg` float DEFAULT NULL,
  `qteMinParVente` float DEFAULT NULL,
  `idRetrait` int(11) DEFAULT NULL,
  `idProducteur` int(11) DEFAULT NULL,
  `nomArticle` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pointderetrait`
--

CREATE TABLE `pointderetrait` (
  `idPointDeRetrait` int(11) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `ville` varchar(45) DEFAULT NULL,
  `codePostal` varchar(45) DEFAULT NULL,
  `numeroVoie` varchar(45) DEFAULT NULL,
  `voie` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `producteur`
--

CREATE TABLE `producteur` (
  `idProducteur` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `identifiant` varchar(45) DEFAULT NULL,
  `mdp` varchar(45) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `retrait`
--

CREATE TABLE `retrait` (
  `idRetrait` int(11) NOT NULL,
  `idPointDeRetrait` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idUser` bigint(20) NOT NULL,
  `nomUser` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `signup_date` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `lieudeprod`
--
ALTER TABLE `lieudeprod`
  ADD PRIMARY KEY (`idLieuDeProduction`);

--
-- Index pour la table `lot`
--
ALTER TABLE `lot`
  ADD PRIMARY KEY (`idLot`),
  ADD KEY `fk_lot_1_idx` (`idLieuDeProduction`),
  ADD KEY `fk_lot_2_idx` (`idProducteur`);

--
-- Index pour la table `pointderetrait`
--
ALTER TABLE `pointderetrait`
  ADD PRIMARY KEY (`idPointDeRetrait`);

--
-- Index pour la table `producteur`
--
ALTER TABLE `producteur`
  ADD PRIMARY KEY (`idProducteur`);

--
-- Index pour la table `retrait`
--
ALTER TABLE `retrait`
  ADD PRIMARY KEY (`idRetrait`,`idPointDeRetrait`),
  ADD KEY `fk_retrait_2_idx` (`idPointDeRetrait`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `lieudeprod`
--
ALTER TABLE `lieudeprod`
  MODIFY `idLieuDeProduction` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `lot`
--
ALTER TABLE `lot`
  MODIFY `idLot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `pointderetrait`
--
ALTER TABLE `pointderetrait`
  MODIFY `idPointDeRetrait` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `producteur`
--
ALTER TABLE `producteur`
  MODIFY `idProducteur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `lot`
--
ALTER TABLE `lot`
  ADD CONSTRAINT `fk_lot_1` FOREIGN KEY (`idLieuDeProduction`) REFERENCES `lieudeprod` (`idLieuDeProduction`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lot_2` FOREIGN KEY (`idProducteur`) REFERENCES `producteur` (`idProducteur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `retrait`
--
ALTER TABLE `retrait`
  ADD CONSTRAINT `fk_retrait_1` FOREIGN KEY (`idRetrait`) REFERENCES `lot` (`idLot`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_retrait_2` FOREIGN KEY (`idPointDeRetrait`) REFERENCES `pointderetrait` (`idPointDeRetrait`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
