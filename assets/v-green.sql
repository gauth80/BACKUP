-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 avr. 2020 à 08:19
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `v-green`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `cl_id` int(11) NOT NULL AUTO_INCREMENT,
  `cl_nom` varchar(50) DEFAULT NULL,
  `cl_prenom` varchar(50) DEFAULT NULL,
  `cl_mail` varchar(50) DEFAULT NULL,
  `cl_tel` varchar(14) DEFAULT NULL,
  `cl_identif` varchar(50) DEFAULT NULL,
  `cl_mdp` char(60) DEFAULT NULL,
  `cl_ddn` date DEFAULT NULL,
  `cl_adresse` varchar(100) DEFAULT NULL,
  `cl_ville` varchar(50) DEFAULT NULL,
  `cl_cp` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `ldc_date` date DEFAULT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `fourni_id` int(11) NOT NULL AUTO_INCREMENT,
  `fourni_nom` varchar(100) DEFAULT NULL,
  `fourni_tel` varchar(14) DEFAULT NULL,
  `fourni_mail` varchar(100) DEFAULT NULL,
  `fourni_siret` int(14) DEFAULT NULL,
  `fourni_adresse` varchar(100) DEFAULT NULL,
  `fourni_ville` varchar(100) DEFAULT NULL,
  `fourni_pers_join` varchar(50) DEFAULT NULL,
  `fourni_prix` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`fourni_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_de_commande`
--

DROP TABLE IF EXISTS `ligne_de_commande`;
CREATE TABLE IF NOT EXISTS `ligne_de_commande` (
  `ldc_id` int(11) NOT NULL AUTO_INCREMENT,
  `ldc_date` date DEFAULT NULL,
  `co_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ldc_id`),
  KEY `FK_co_id` (`co_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `li_id` int(11) NOT NULL AUTO_INCREMENT,
  `cl_adresse` varchar(100) DEFAULT NULL,
  `cl_ville` varchar(100) DEFAULT NULL,
  `cl_cp` varchar(5) DEFAULT NULL,
  `cl_nom` varchar(100) DEFAULT NULL,
  `cl_prenom` varchar(100) DEFAULT NULL,
  `li_date_envoie` datetime DEFAULT NULL,
  PRIMARY KEY (`li_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

DROP TABLE IF EXISTS `personnels`;
CREATE TABLE IF NOT EXISTS `personnels` (
  `pers_id` int(11) NOT NULL AUTO_INCREMENT,
  `pers_nom` varchar(100) DEFAULT NULL,
  `pers_prenom` varchar(50) DEFAULT NULL,
  `pers_mail` varchar(50) DEFAULT NULL,
  `pers_tel` varchar(14) DEFAULT NULL,
  `pers_identif` varchar(20) DEFAULT NULL,
  `pers_mdp` char(60) DEFAULT NULL,
  PRIMARY KEY (`pers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`pers_id`, `pers_nom`, `pers_prenom`, `pers_mail`, `pers_tel`, `pers_identif`, `pers_mdp`) VALUES
(1, 'FOVIAUX', 'Nicolas', 'nico.foviaux@hotmail.fr', NULL, 'Nikthekiller', '$2y$10$kfUKR5PQEVYMzufd/jRGT.XKNWJ5thyNlV2DrhEaMWUpS6nmhzjaC'),
(2, 'Legris', 'Augustin', 'augustinlegris@outlook.fr', NULL, 'Ashkoort', '$2y$10$y6wrEetjtBF7ZVSBrxixresZw9slo2r0Uu9Q8Yj7iMSg5ZGkHqTC6'),
(3, 'pranloup', 'quentin', 'q.pranloup@laposte.net', NULL, 'urtaine', '$2y$10$LKQVYV3UtlMHtyVv8XEIW.aIpGNXW4Ck5VuBE26G0EJSRGY1aFeGa'),
(4, 'Boukraa', 'Gauthier', 'gaboukraa@laposte.net', NULL, 'claptrap', '$2y$10$0C4bLXKGSYeb1rkeBPJs3OGrXVl1sysxvKJvF8I69DYJkPzRweTYm'),
(5, 'Grillet', 'Stéphane', 'stephanegrillet18@gmail.com', NULL, 'Veno', '$2y$10$FGay8HSUN8mg5XpDfg/V6OpkNF2hzhPaI9M4oWCIm5Cez1e9yZdYi');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_ref` varchar(10) DEFAULT NULL,
  `prod_lib` varchar(50) DEFAULT NULL,
  `prod_desc` varchar(1000) DEFAULT NULL,
  `prod_prix` decimal(6,2) DEFAULT NULL,
  `prod_stock` int(11) DEFAULT NULL,
  `prod_ext` varchar(4) DEFAULT NULL,
  `prod_ajout` date DEFAULT NULL,
  `prod_modif` datetime DEFAULT NULL,
  `prod_bloque` tinyint(1) DEFAULT NULL,
  `prod_alt` varchar(200) DEFAULT NULL,
  `prod_title` varchar(100) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `fourni_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`prod_id`),
  KEY `FK_cat_id` (`cat_id`),
  KEY `FK_fourni_id` (`fourni_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`prod_id`, `prod_ref`, `prod_lib`, `prod_desc`, `prod_prix`, `prod_stock`, `prod_ext`, `prod_ajout`, `prod_modif`, `prod_bloque`, `prod_alt`, `prod_title`, `cat_id`, `fourni_id`) VALUES
(1, 'gui000', 'guitare acoustique', 'Harley Benton est une marque créée pour et distribuée par le détaillant allemand Thomann. Créée en 19971, elle propose des guitares, basses, banjos, mandolines, microphones, amplificateurs, pédales d\'effet, des cordes, des médiators, des pièces détachées, etc., souvent à des prix peu élevés (qui s\'expliquent en partie par une fabrication uniquement asiatique et donc très bon marché). Le succès de cette marque s\'inscrit dans une tendance de fond d\'amélioration de la qualité des instruments peu chers.', '75.00', 6, 'png', '2020-04-02', '2020-04-02 19:46:35', 1, 'Harley Benton D-120CE BK', 'Harley Benton D-120CE BK', 1, NULL),
(2, 'gui001', 'guitare classique', 'La manche et la table de ce modèle d\'instrument sont faites en épicéa de Californie avec un dos et côté en érable', '39.55', 2, 'png', '2020-04-02', '2020-04-02 19:46:40', 1, 'Delson Sevilla guitare classique', 'Delson Sevilla guitare classique', 1, NULL),
(3, 'gui003', 'electro acoustique', 'L\'ES-335 était une tentative de trouver un terrain d\'entente: un ton plus chaud qu\'un corps solide produit avec presque aussi peu de rétroaction', '267.50', 2, 'png', '2020-04-02', '2020-04-02 21:37:58', 1, 'Gibson ES 335', 'Gibson ES 335', 1, NULL),
(4, 'bass000', 'basse electrique', 'Le Thunderbird a été conçu par le concepteur automobile américain Raymond H. Dietrich (Chrysler, Lincoln, Checker)', '1999.99', 1, 'png', '2020-04-02', '2020-04-02 21:38:19', 1, 'Gibson Thunderbird', 'Gibson Thunderbird', 1, NULL),
(5, 'bass001', 'basse acoustique', 'Le premier modèle simplement appelé \"Les Paul Bass\", avait quelques caractéristiques intéressantes, notamment des circuits basse impédance, spécialement conçus pour l\'enregistrement en studio.\r\n', '2039.00', 0, 'png', '2020-04-02', '2020-04-02 21:37:21', 1, 'Gibson Lespaul', 'Gibson Lespaul', 1, NULL),
(6, 'bass002', 'basse semi acoustique', 'Basse semi acoustique en l\'honneur de Pat Martino.', '3449.99', 0, 'png', '2020-04-02', '2020-04-02 21:56:40', 1, 'gipson pat martino', 'gipson pat martino', 1, NULL),
(7, 'uku000', 'ukulélés', 'Who lives in a pineapple under the sea?\r\nSpongebob Squarepant!', '14.99', 0, 'png', '2020-04-02', '2020-04-02 22:07:53', 1, 'ukulélés', 'ukulélés', 1, NULL),
(8, 'vio000', 'other cord', 'Le violon est un instrument de musique à cordes frottées. Constitué de 71 éléments de bois collés ou assemblés les uns aux autres..', '155.00', 3, 'png', '2020-04-02', '2020-04-02 22:12:34', 1, 'Stentor SR1500', 'Stentor SR1500', 1, NULL),
(9, 'bat000', 'batterie', 'Les batteries pour débutants.', '550.50', 1, 'png', '2020-04-02', '2020-04-02 22:20:44', 1, 'batterie Pearl', 'batterie Pearl', 2, NULL),
(10, 'pia000', 'piano de scène', 'Un clavier électronique, un clavier portable ou un clavier numérique est un instrument de musique électronique.', '1256.00', 2, 'png', '2020-04-02', '2020-04-02 22:28:50', 1, 'Kawai ES-8 B', 'Kawai ES-8 B', 3, NULL),
(11, 'stu000', 'console de mixage', 'Les consoles analogiques de la série 68 ont été développées pour fournir l\'ensemble de fonctionnalités de base le plus souvent nécessaire pour l\'enregistrement analogique.', '9999.99', 1, 'png', '2020-04-02', '2020-04-02 22:41:16', 1, 'Trident audio', 'Trident audio', 4, NULL),
(12, 'ecl000', 'projecteur', 'éclairage led dmx512 classique.', '56.75', 4, 'png', '2020-04-02', '2020-04-02 23:09:45', 1, 'Projecteur LED DMX512', 'Projecteur LED DMX512', 5, NULL),
(13, 'tab000', 'table de dj', 'une table de dj, houlala vive la description..', '1429.00', 1, 'png', '2020-04-02', '2020-04-02 23:19:34', 1, 'FF-4000', 'FF-4000', 6, NULL),
(14, 'cas000', 'cases', 'c\'est une boite, voila.', '129.00', 4, 'png', '2020-04-02', '2020-04-02 23:27:54', 1, 'flyht pro case', 'flyht pro case', 7, NULL),
(15, 'acc000', 'micro', 'etrange outil porteur de maladie mais qui permet d\'être audible, après tout dépend de celui qui l\'utilise.', '366.66', 6, 'png', '2020-04-02', '2020-04-02 23:27:54', 1, 'micro shure sm7b', 'micro shure sm7b', 8, NULL),
(16, 'acc001', 'cable', 'Un câble d’amplis', '14.99', 12, 'png', '2020-04-02', '2020-04-02 23:30:53', 1, 'cordial cfu 1.5', 'cordial cfu 1.5', 8, NULL),
(17, 'ven000', 'saxophone', 'Le saxophone est un instrument de musique à vent appartenant à la famille des bois. Il a été inventé par le Belge Adolphe Sax et breveté à Paris le 21 mars 1846.', '620.00', 4, 'png', '2020-04-02', '2020-04-02 23:34:35', 1, 'startone sas-75 alto', 'startone sas-75 alto', 9, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
