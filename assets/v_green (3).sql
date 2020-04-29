-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 29 avr. 2020 à 14:16
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `v_green`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `CAT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_LIBELLE` varchar(50) DEFAULT NULL,
  `Cat_cat_id` int(11) NOT NULL,
  `PER_ID` int(11) NOT NULL,
  PRIMARY KEY (`CAT_ID`),
  KEY `FK_cat_cat_id` (`Cat_cat_id`),
  KEY `FK_per_id` (`PER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `CLI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PER_ID` int(11) NOT NULL,
  `CLI_NOM` varchar(50) DEFAULT NULL,
  `CLI_PRENOM` varchar(50) DEFAULT NULL,
  `CLI_REF` varchar(50) DEFAULT NULL,
  `CLI_TYPE` bit(1) DEFAULT NULL,
  `CLI_ADRESSE_FACTURATION` varchar(50) DEFAULT NULL,
  `CLI_DATE_INSCRIPTION` datetime DEFAULT NULL,
  `CLI_COEFFICEINT` float DEFAULT NULL,
  PRIMARY KEY (`CLI_ID`),
  KEY `FK_per_id3` (`PER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PER_ID` int(11) NOT NULL,
  `CLI_ID` int(11) NOT NULL,
  `COM_ADRESSE_LIVRAISON` varchar(500) DEFAULT NULL,
  `COM_TYPE_PAIEMENT` bit(1) DEFAULT NULL,
  `COM_MONTANT_REMISE` float DEFAULT NULL,
  PRIMARY KEY (`COM_ID`),
  KEY `FK_cli_id` (`CLI_ID`),
  KEY `FK_per_id2` (`PER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fournir`
--

DROP TABLE IF EXISTS `fournir`;
CREATE TABLE IF NOT EXISTS `fournir` (
  `PRO_ID` int(11) NOT NULL,
  `FOU_ID` int(11) NOT NULL,
  PRIMARY KEY (`PRO_ID`,`FOU_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

DROP TABLE IF EXISTS `fournisseurs`;
CREATE TABLE IF NOT EXISTS `fournisseurs` (
  `FOU_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FOU_ADRESSE` varchar(50) DEFAULT NULL,
  `FOU_REF` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`FOU_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gerer2`
--

DROP TABLE IF EXISTS `gerer2`;
CREATE TABLE IF NOT EXISTS `gerer2` (
  `PRO_ID` int(11) NOT NULL,
  `PER_ID` int(11) NOT NULL,
  PRIMARY KEY (`PRO_ID`,`PER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_de_commande`
--

DROP TABLE IF EXISTS `ligne_de_commande`;
CREATE TABLE IF NOT EXISTS `ligne_de_commande` (
  `LIG_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_ID` int(11) NOT NULL,
  `PRO_ID` int(11) NOT NULL,
  `LIG_QUANTITE` int(11) DEFAULT NULL,
  PRIMARY KEY (`LIG_ID`),
  KEY `FK_com_id` (`COM_ID`),
  KEY `FK_pro_id2` (`PRO_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `LIV_ID` int(11) NOT NULL,
  `LIG_ID` int(11) NOT NULL,
  `LIV_DATE` datetime DEFAULT NULL,
  `LIV_QUANTITE` int(11) DEFAULT NULL,
  PRIMARY KEY (`LIV_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `livraisonsclients`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `livraisonsclients`;
CREATE TABLE IF NOT EXISTS `livraisonsclients` (
`LIV_DATE` datetime
,`CLI_REF` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

DROP TABLE IF EXISTS `personnels`;
CREATE TABLE IF NOT EXISTS `personnels` (
  `PER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PER_MATRICULE` varchar(50) DEFAULT NULL,
  `PER_SERVICE` varchar(50) DEFAULT NULL,
  `COEFICIENT_COMMERCIAL` float DEFAULT NULL,
  PRIMARY KEY (`PER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `PRO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CAT_ID` int(11) NOT NULL,
  `PRO_LIBELLE` varchar(50) DEFAULT NULL,
  `PRO_REF` varchar(50) DEFAULT NULL,
  `PRO_DESCRIPTION` varchar(500) DEFAULT NULL,
  `PRO_PRIX_ACHAT` float DEFAULT NULL,
  `PRO_PHOTO` varchar(255) DEFAULT NULL,
  `PRO_STOCK_PHYSIQUE` int(11) DEFAULT NULL,
  `PRO_STOCK_ALERTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`PRO_ID`),
  KEY `FK_cat_id` (`CAT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`PRO_ID`, `CAT_ID`, `PRO_LIBELLE`, `PRO_REF`, `PRO_DESCRIPTION`, `PRO_PRIX_ACHAT`, `PRO_PHOTO`, `PRO_STOCK_PHYSIQUE`, `PRO_STOCK_ALERTE`) VALUES
(1, 1, 'libelle001', NULL, 'exemple_desc', 100, NULL, 10, 5),
(2, 1, 'libelle001', NULL, 'exemple_desc', 100, NULL, 10, 5);

-- --------------------------------------------------------

--
-- Structure de la vue `livraisonsclients`
--
DROP TABLE IF EXISTS `livraisonsclients`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `livraisonsclients`  AS  select `livraison`.`LIV_DATE` AS `LIV_DATE`,`clients`.`CLI_REF` AS `CLI_REF` from (`clients` join `livraison` on(`livraison`.`LIV_ID` = `clients`.`CLI_ID`)) ;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `FK_cat_cat_id` FOREIGN KEY (`Cat_cat_id`) REFERENCES `categorie` (`CAT_ID`),
  ADD CONSTRAINT `FK_per_id` FOREIGN KEY (`PER_ID`) REFERENCES `categorie` (`CAT_ID`);

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `FK_per_id3` FOREIGN KEY (`PER_ID`) REFERENCES `clients` (`CLI_ID`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_cli_id` FOREIGN KEY (`CLI_ID`) REFERENCES `commande` (`COM_ID`),
  ADD CONSTRAINT `FK_per_id2` FOREIGN KEY (`PER_ID`) REFERENCES `commande` (`COM_ID`);

--
-- Contraintes pour la table `ligne_de_commande`
--
ALTER TABLE `ligne_de_commande`
  ADD CONSTRAINT `FK_com_id` FOREIGN KEY (`COM_ID`) REFERENCES `ligne_de_commande` (`LIG_ID`),
  ADD CONSTRAINT `FK_pro_id2` FOREIGN KEY (`PRO_ID`) REFERENCES `ligne_de_commande` (`LIG_ID`);

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `FK_cat_id` FOREIGN KEY (`CAT_ID`) REFERENCES `produits` (`PRO_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
