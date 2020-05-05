-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 avr. 2020 à 21:35
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18




--

-- Si sa rentre pas, se sont les clef de contraintes

INSERT INTO `produits` ( `PRO_REF`, `PRO_LIBELLE`, `PRO_DESCRIPTION`, `PRO_PRIX_ACHAT`, `PRO_STOCK_PHYSIQUE`, `PRO_PHOTO`,`CAT_ID`) VALUES
('gui000', 'Harley Benton', 'Harley Benton est une marque créée pour et distribuée par le détaillant allemand Thomann. Créée en 19971, elle propose des guitares, basses, banjos, mandolines, microphones, amplificateurs, pédales d\'effet, des cordes, des médiators, des pièces détachées, etc.', '75.00', 6, 'png', 1),

('gui001', 'Delson Sevilla', 'La manche et la table de ce modèle d\'instrument sont faites en épicéa de Californie avec un dos et côté en érable', '39.55', 2, 'png',1),
('gui003', 'Gibson ES 335', 'L\'ES-335 était une tentative de trouver un terrain d\'entente: un ton plus chaud qu\'un corps solide produit avec presque aussi peu de rétroaction', '267.50', 2, 'png',1),
('bass000', 'Gibson Thunderbird', 'Le Thunderbird a été conçu par le concepteur automobile américain Raymond H. Dietrich (Chrysler, Lincoln, Checker)', '1999.99', 1, 'png',1),
('bass001', 'Gibson Lespaul', 'Le premier modèle simplement appelé \"Les Paul Bass\", avait quelques caractéristiques intéressantes, notamment des circuits basse impédance, spécialement conçus pour l\'enregistrement en studio.\r\n', '2039.00', 0, 'png',1),
('bass002', 'Gipson pat martino', 'Basse semi acoustique en l\'honneur de Pat Martino.', '3449.99', 0, 'png',1),
('uku000', 'SpongeBob', 'Who lives in a pineapple under the sea?\r\nSpongebob Squarepant!', '14.99', 0, 'png',1),
('vio000', 'Stentor SR1500', 'Le violon est un instrument de musique à cordes frottées. Constitué de 71 éléments de bois collés ou assemblés les uns aux autres..', '155.00', 3, 'png',1),
('bat000', 'Pearl', 'Les batteries pour débutants.', '550.50', 1, 'png', 2),
('pia000', 'Kawai ES-8 B', 'Un clavier électronique, un clavier portable ou un clavier numérique est un instrument de musique électronique.', '1256.00', 2, 'png',3),
('stu000', 'Trident audio', 'Les consoles analogiques de la série 68 ont été développées pour fournir l\'ensemble de fonctionnalités de base le plus souvent nécessaire pour l\'enregistrement analogique.', '9999.99', 1, 'png',4),
('ecl000', 'Projecteur LED DMX512', 'éclairage led dmx512 classique.', '56.75', 4, 'png',5),
('tab000', 'FF-4000', 'une table de dj, houlala vive la description..', '1429.00', 1, 'png',6),
('cas000', 'Flyht pro case', 'c\'est une boite, voila.', '129.00', 4, 'png',7),
('acc000', 'Shure sm7b', 'etrange outil porteur de maladie mais qui permet d\'être audible, après tout dépend de celui qui l\'utilise.', '366.66', 6, 'png',8),
('acc001', 'Cordial cfu 1.5', 'Un câble d’amplis', '14.99', 12, 'png',8),
('ven000', 'Startone', 'Le saxophone est un instrument de musique à vent appartenant à la famille des bois. Il a été inventé par le Belge Adolphe Sax et breveté à Paris le 21 mars 1846.', '620.00', 4, 'png',9);


INSERT INTO `categorie` (`CAT_ID`, `CAT_LIBELLE`) VALUES
(1, 'guitare'),
(2, 'batterie'),
(3, 'piano'),
(4, 'studio'),
(5, 'eclairage'),
(6, 'dj'),
(7, 'cases'),
(8, 'accessoires'),
(9, 'instrument a vent');

/*
# TITRE 
'Delson Sevilla guitare classique'
'Gibson ES 335', 'Gibson ES 335'
'Gibson Thunderbird'
'Gibson Lespaul'
'gipson pat martino'
 'ukulélés'
 'Stentor SR1500'
 'batterie Pearl'
'Kawai ES-8 B'
'Trident audio'
'Projecteur LED DMX512'
'FF-4000'
'flyht pro case'
'micro shure sm7b'
'cordial cfu 1.5'
'startone sas-75 alto'


# cat
'guitare acoustique'
'guitare classique'
'electro acoustique'
'basse electrique'
'basse acoustique'
'basse semi acoustique'
'ukulélés'
'other cord'
'batterie'
'piano de scène'
'console de mixage'
'projecteur'
*/