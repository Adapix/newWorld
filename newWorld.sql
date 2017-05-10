-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 10 Mai 2017 à 17:30
-- Version du serveur :  5.5.52-0+deb8u1
-- Version de PHP :  5.6.29-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `newWorld`
--

-- --------------------------------------------------------

--
-- Structure de la table `lieuDeProd`
--

CREATE TABLE IF NOT EXISTS `lieuDeProd` (
`idLieuDeProduction` int(11) NOT NULL,
  `commune` varchar(45) DEFAULT NULL,
  `parcelle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `lot`
--

CREATE TABLE IF NOT EXISTS `lot` (
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `lot`
--

INSERT INTO `lot` (`idLot`, `poids`, `aliment`, `modeDeProduction`, `idLieuDeProduction`, `dateRecolte`, `dlc`, `qte`, `prixAuKg`, `qteMinParVente`, `idRetrait`, `idProducteur`, `nomArticle`) VALUES
(1, NULL, 'abricots', 'biologique', NULL, '03/02/17', '05/03/17', 125, 1.85, 2, NULL, NULL, 'Les pommes rambo'),
(2, NULL, 'laitues', 'biologique', NULL, '15/03//17', '20/03/17', 20, 8, 2, NULL, NULL, 'Iceberg'),
(3, NULL, 'fraises', 'biologique', NULL, '05/04/17', '20/04/17', 20, 3, 1, NULL, NULL, 'Guariguettes'),
(4, NULL, 'abricots', 'conventionnel', NULL, '45', '4', 44, 4, 0.5, NULL, NULL, 'Les');

-- --------------------------------------------------------

--
-- Structure de la table `pointDeRetrait`
--

CREATE TABLE IF NOT EXISTS `pointDeRetrait` (
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

CREATE TABLE IF NOT EXISTS `producteur` (
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

CREATE TABLE IF NOT EXISTS `retrait` (
  `idRetrait` int(11) NOT NULL,
  `idPointDeRetrait` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`idUser` bigint(20) NOT NULL,
  `nomUser` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `signup_date` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idUser`, `nomUser`, `password`, `email`, `admin`, `signup_date`) VALUES
(1, 'Nicolas', 'lecode01', 'lemail@mail.fr', 1, 7032017),
(20, 'kevin', 'blbl', 'kevin@gmail.com', 0, 26042017),
(21, 'Joe', 'lol', 'joe@lui.fr', 0, 27042017),
(22, 'Maxime', 'test', 'maxime.iori@gmail.com', 0, 3052017);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `lieuDeProd`
--
ALTER TABLE `lieuDeProd`
 ADD PRIMARY KEY (`idLieuDeProduction`);

--
-- Index pour la table `lot`
--
ALTER TABLE `lot`
 ADD PRIMARY KEY (`idLot`), ADD KEY `fk_lot_1_idx` (`idLieuDeProduction`), ADD KEY `fk_lot_2_idx` (`idProducteur`);

--
-- Index pour la table `pointDeRetrait`
--
ALTER TABLE `pointDeRetrait`
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
 ADD PRIMARY KEY (`idRetrait`,`idPointDeRetrait`), ADD KEY `fk_retrait_2_idx` (`idPointDeRetrait`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `lieuDeProd`
--
ALTER TABLE `lieuDeProd`
MODIFY `idLieuDeProduction` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `lot`
--
ALTER TABLE `lot`
MODIFY `idLot` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `pointDeRetrait`
--
ALTER TABLE `pointDeRetrait`
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
MODIFY `idUser` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `lot`
--
ALTER TABLE `lot`
ADD CONSTRAINT `fk_lot_1` FOREIGN KEY (`idLieuDeProduction`) REFERENCES `lieuDeProd` (`idLieuDeProduction`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_lot_2` FOREIGN KEY (`idProducteur`) REFERENCES `producteur` (`idProducteur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `retrait`
--
ALTER TABLE `retrait`
ADD CONSTRAINT `fk_retrait_1` FOREIGN KEY (`idRetrait`) REFERENCES `lot` (`idLot`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_retrait_2` FOREIGN KEY (`idPointDeRetrait`) REFERENCES `pointDeRetrait` (`idPointDeRetrait`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
