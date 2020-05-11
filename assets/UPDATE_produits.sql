-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 11 mai 2020 à 00:44
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

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
  `PRO_SLUG` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PRO_ID`),
  KEY `FK_cat_id` (`CAT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`PRO_ID`, `CAT_ID`, `PRO_LIBELLE`, `PRO_REF`, `PRO_DESCRIPTION`, `PRO_PRIX_ACHAT`, `PRO_PHOTO`, `PRO_STOCK_PHYSIQUE`, `PRO_STOCK_ALERTE`, `PRO_SLUG`) VALUES
(5, 1, 'Harley Benton', 'gui000', 'Harley Benton est une marque crée pour et distribuée par le détaillant allemand Thomann. Crée en 19971, elle propose des guitares, basses, banjos, mandolines, microphones, amplificateurs, pédales d\'effet, des cordes, des médiators, des pièces détachées, etc', 1860, 'png', 0, NULL, 'Harley_Benton'),
(6, 1, 'Delson Sevilla', 'gui001', 'La manche et la table de ce modèle d\'instrument sont faites en épicéa de Californie avec un dos et côté en érable', 394.99, 'png', 0, NULL, 'Delson_Sevilla'),
(7, 1, 'Gibson ES 335', 'gui003', 'L\'ES-335 était une tentative de trouver un terrain d\'entente: un ton plus chaud qu\'un corps solide produit avec presque aussi peu de rétroaction', 800, 'png', 2, NULL, 'Gibson_ES_335'),
(8, 1, 'Gibson Thunderbird', 'bass000', 'Le Thunderbird a été conçu par le concepteur automobile américain Raymond H. Dietrich (Chrysler, Lincoln, Checker)', 1999.99, 'png', 1, NULL, 'Gibson_Thunderbird'),
(9, 1, 'Gibson Lespaul', 'bass001', 'Le premier modèle simplement appelé \"Les Paul Bass\", avait quelques caractéristiques intéressantes, notamment des circuits basse impédance, spécialement conçus pour l\'enregistrement en studio.\r\n', 2039, 'png', 1, NULL, 'Gibson_Lespaul'),
(10, 1, 'Gipson pat martino', 'bass002', 'Basse semi acoustique en l\'honneur de Pat Martino.', 3449.99, 'png', 1, NULL, 'Gipson_pat_martino'),
(11, 1, 'SpongeBob', 'uku000', 'Who lives in a pineapple under the sea?\r\nSpongebob Squarepant!', 14.99, 'png', 1, NULL, 'SpongeBob'),
(12, 10, 'Stentor SR1500', 'cor000', 'un instru a vent', 128, 'png', 1, NULL, 'stentor_sr1500'),
(13, 2, 'Pearl', 'bat000', 'Les batteries pour débutants.', 550.5, 'png', 1, NULL, 'Pearl'),
(14, 3, 'Kawai ES-8 B', 'pia000', 'Un clavier électronique, un clavier portable ou un clavier numérique est un instrument de musique électronique.', 1256, 'png', 2, NULL, 'Kawai_ES-8_B'),
(15, 4, 'Trident audio', 'stu000', 'Les consoles analogiques de la série 68 ont été développées pour fournir l\'ensemble de fonctionnalités de base le plus souvent nécessaire pour l\'enregistrement analogique.', 9999.99, 'png', 1, NULL, 'Trident_audio'),
(16, 5, 'Projecteur LED DMX512', 'ecl000', 'éclairage led dmx512 classique.', 56.75, 'png', 4, NULL, 'Projecteur_LED_DMX512'),
(17, 6, 'FF-4000', 'tab000', 'une table de dj, houlala vive la description..', 1429, 'png', 1, NULL, 'FF-4000'),
(18, 7, 'Flyht pro case', 'cas000', 'c\'est une boite, voila.', 129, 'png', 4, NULL, 'Flyht_pro_case'),
(19, 8, 'Shure sm7b', 'acc000', 'etrange outil porteur de maladie mais qui permet d\'être audible, après tout dépend de celui qui l\'utilise.', 366.66, 'png', 0, NULL, 'Shure_sm7b'),
(20, 8, 'Cordial cfu 1.5', 'acc001', 'Un câble d’amplis', 14.99, 'png', 0, NULL, 'Cordial_cfu_1.5'),
(21, 9, 'Startone', 'ven000', 'Le saxophone est un instrument de musique à vent appartenant à la famille des bois. Il a été inventé par le Belge Adolphe Sax et breveté à Paris le 21 mars 1846.', 620, 'png', 4, NULL, 'Startone');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
