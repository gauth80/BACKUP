CREATE TABLE IF NOT EXISTS `categorie` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
);

CREATE TABLE IF NOT EXISTS `clients` (
  `cl_id` int NOT NULL AUTO_INCREMENT,
  `cl_nom` varchar(50) DEFAULT NULL,
  `cl_prenom` varchar(50) DEFAULT NULL,
  `cl_mail` varchar(50) DEFAULT NULL,
  `cl_mdp` char(60) DEFAULT NULL,
  `cl_type` boolean,
  `cl_ref` varchar(50) DEFAULT NULL,
  `cl_date_inscription` date DEFAULT NULL,
  `cl_adresse_facturation` varchar(500) DEFAULT NULL,
  `cl_ville` varchar(50) DEFAULT NULL,
  `cl_cp` varchar(50) DEFAULT NULL,
  `cl_coefficient` float,
  PRIMARY KEY (`cl_id`)
);

CREATE TABLE IF NOT EXISTS `commande` (
  `com_id` int NOT NULL AUTO_INCREMENT,
  `com_adresse_livraison` varchar(500) DEFAULT NULL,
  `com_type_payement` boolean,
  PRIMARY KEY (`co_id`)
);

CREATE TABLE IF NOT EXISTS `fournisseurs` (
  `fou_id` int NOT NULL AUTO_INCREMENT,
  `fou_siret` int(14) DEFAULT NULL,
  `fou_nom` varchar(100) DEFAULT NULL,
  `fou_tel` varchar(14) DEFAULT NULL,
  `fou_mail` varchar(100) DEFAULT NULL,
  `fou_ref` varchar(50) DEFAULT NULL,
  `fou_adresse` varchar(500) DEFAULT NULL,
  `fou_ville` varchar(50) DEFAULT NULL,
  `fou_cp` varchar(50) DEFAULT NULL,
  `fou_pers_join` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`fou_id`)
);

CREATE TABLE IF NOT EXISTS `ligne_de_commande` (
  `ldc_id` int NOT NULL AUTO_INCREMENT,
  `ldc_quantite` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ldc_id`),
);

CREATE TABLE IF NOT EXISTS `livraison` (
  `li_id` int NOT NULL AUTO_INCREMENT,
  `li_date` datetime DEFAULT NULL,
  `li_quantite` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`li_id`)
);

CREATE TABLE IF NOT EXISTS `personnels` (
  `pers_id` int NOT NULL AUTO_INCREMENT,
  `pers_mail` varchar(50) DEFAULT NULL,
  `pers_mdp` char(60) DEFAULT NULL,
  `pers_service` varchar(50) DEFAULT NULL,
  `pers_matricule` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pers_id`)
);

CREATE TABLE IF NOT EXISTS `produits` (
  `prod_id` int NOT NULL AUTO_INCREMENT,
  `prod_ref` varchar(10) DEFAULT NULL,
  `prod_lib` varchar(50) DEFAULT NULL,
  `prod_desc` varchar(1000) DEFAULT NULL,
  `prod_prix` decimal(6,2) DEFAULT NULL,
  `prod_stock` int DEFAULT NULL,
  `prod_ext` varchar(4) DEFAULT NULL,
  `prod_ajout` date DEFAULT NULL,
  `prod_modif` datetime DEFAULT NULL,
  `prod_bloque` tinyint(1) DEFAULT NULL,
  `prod_alt` varchar(200) DEFAULT NULL,
  `prod_title` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`prod_id`),
);


INSERT INTO `personnels` (`pers_id`, `pers_mail`,`pers_mdp`,`pers_service`,`pers_matricule`) VALUES
(1, 'nico.foviaux@hotmail.fr', '$2y$10$kfUKR5PQEVYMzufd/jRGT.XKNWJ5thyNlV2DrhEaMWUpS6nmhzjaC',`Développement`),
(2, 'augustinlegris@outlook.fr', '$2y$10$y6wrEetjtBF7ZVSBrxixresZw9slo2r0Uu9Q8Yj7iMSg5ZGkHqTC6',`Développement`),
(3, 'q.pranloup@laposte.net', '$2y$10$LKQVYV3UtlMHtyVv8XEIW.aIpGNXW4Ck5VuBE26G0EJSRGY1aFeGa',`Développement`),
(4, 'gaboukraa@laposte.net', '$2y$10$0C4bLXKGSYeb1rkeBPJs3OGrXVl1sysxvKJvF8I69DYJkPzRweTYm',`Développement`),
(5, 'stephanegrillet18@gmail.com', '$2y$10$FGay8HSUN8mg5XpDfg/V6OpkNF2hzhPaI9M4oWCIm5Cez1e9yZdYi',`Développement`);


INSERT INTO `produits` (`prod_id`, `prod_ref`, `prod_lib`, `prod_desc`, `prod_prix`, `prod_stock`, `prod_ext`, `prod_ajout`, `prod_modif`, `prod_bloque`, `prod_alt`, `prod_title`, `cat_id`, `fou_id`) VALUES
(1, 'gui000', 'guitare acoustique', 'Harley Benton est une marque créée pour et distribuée par le détaillant allemand Thomann. Créée en 19971, elle propose des guitares, basses, banjos, mandolines, microphones, amplificateurs, pédales d\'effet, des cordes, des médiators, des pièces détachées, etc., souvent à des prix peu élevés (qui s\'expliquent en partie par une fabrication uniquement asiatique et donc très bon marché). Le succès de cette marque s\'inscrit dans une tendance de fond d\'amélioration de la qualité des instruments peu chers.', '75.00', 6, 'png', '2020-04-02', '2020-04-02 19:46:35', 1, 'Harley Benton D-120CE BK', 'Harley Benton D-120CE BK'),
(2, 'gui001', 'guitare classique', 'La manche et la table de ce modèle d\'instrument sont faites en épicéa de Californie avec un dos et côté en érable', '39.55', 2, 'png', '2020-04-02', '2020-04-02 19:46:40', 1, 'Delson Sevilla guitare classique', 'Delson Sevilla guitare classique'),
(3, 'gui003', 'electro acoustique', 'L\'ES-335 était une tentative de trouver un terrain d\'entente: un ton plus chaud qu\'un corps solide produit avec presque aussi peu de rétroaction', '267.50', 2, 'png', '2020-04-02', '2020-04-02 21:37:58', 1, 'Gibson ES 335', 'Gibson ES 335'),
(4, 'bass000', 'basse electrique', 'Le Thunderbird a été conçu par le concepteur automobile américain Raymond H. Dietrich (Chrysler, Lincoln, Checker)', '1999.99', 1, 'png', '2020-04-02', '2020-04-02 21:38:19', 1, 'Gibson Thunderbird', 'Gibson Thunderbird'),
(5, 'bass001', 'basse acoustique', 'Le premier modèle simplement appelé \"Les Paul Bass\", avait quelques caractéristiques intéressantes, notamment des circuits basse impédance, spécialement conçus pour l\'enregistrement en studio.\r\n', '2039.00', 0, 'png', '2020-04-02', '2020-04-02 21:37:21', 1, 'Gibson Lespaul', 'Gibson Lespaul'),
(6, 'bass002', 'basse semi acoustique', 'Basse semi acoustique en l\'honneur de Pat Martino.', '3449.99', 0, 'png', '2020-04-02', '2020-04-02 21:56:40', 1, 'gipson pat martino', 'gipson pat martino'),
(7, 'uku000', 'ukulélés', 'Who lives in a pineapple under the sea?\r\nSpongebob Squarepant!', '14.99', 0, 'png', '2020-04-02', '2020-04-02 22:07:53', 1, 'ukulélés', 'ukulélés'),
(8, 'vio000', 'other cord', 'Le violon est un instrument de musique à cordes frottées. Constitué de 71 éléments de bois collés ou assemblés les uns aux autres..', '155.00', 3, 'png', '2020-04-02', '2020-04-02 22:12:34', 1, 'Stentor SR1500', 'Stentor SR1500'),
(9, 'bat000', 'batterie', 'Les batteries pour débutants.', '550.50', 1, 'png', '2020-04-02', '2020-04-02 22:20:44', 1, 'batterie Pearl', 'batterie Pearl'),
(10, 'pia000', 'piano de scène', 'Un clavier électronique, un clavier portable ou un clavier numérique est un instrument de musique électronique.', '1256.00', 2, 'png', '2020-04-02', '2020-04-02 22:28:50', 1, 'Kawai ES-8 B', 'Kawai ES-8 B', 3),
(11, 'stu000', 'console de mixage', 'Les consoles analogiques de la série 68 ont été développées pour fournir l\'ensemble de fonctionnalités de base le plus souvent nécessaire pour l\'enregistrement analogique.', '9999.99', 1, 'png', '2020-04-02', '2020-04-02 22:41:16', 1, 'Trident audio', 'Trident audio'),
(12, 'ecl000', 'projecteur', 'éclairage led dmx512 classique.', '56.75', 4, 'png', '2020-04-02', '2020-04-02 23:09:45', 1, 'Projecteur LED DMX512', 'Projecteur LED DMX512'),
(13, 'tab000', 'table de dj', 'une table de dj, houlala vive la description..', '1429.00', 1, 'png', '2020-04-02', '2020-04-02 23:19:34', 1, 'FF-4000', 'FF-4000'),
(14, 'cas000', 'cases', 'c\'est une boite, voila.', '129.00', 4, 'png', '2020-04-02', '2020-04-02 23:27:54', 1, 'flyht pro case', 'flyht pro case'),
(15, 'acc000', 'micro', 'etrange outil porteur de maladie mais qui permet d\'être audible, après tout dépend de celui qui l\'utilise.', '366.66', 6, 'png', '2020-04-02', '2020-04-02 23:27:54', 1, 'micro shure sm7b', 'micro shure sm7b'),
(16, 'acc001', 'cable', 'Un câble d’amplis', '14.99', 12, 'png', '2020-04-02', '2020-04-02 23:30:53', 1, 'cordial cfu 1.5', 'cordial cfu 1.5'),
(17, 'ven000', 'saxophone', 'Le saxophone est un instrument de musique à vent appartenant à la famille des bois. Il a été inventé par le Belge Adolphe Sax et breveté à Paris le 21 mars 1846.', '620.00', 4, 'png', '2020-04-02', '2020-04-02 23:34:35', 1, 'startone sas-75 alto', 'startone sas-75 alto');



ALTER TABLE `produits`
ADD FOREIGN KEY (`cl_id`) REFERENCES `clients`(`cl_id`);
ALTER TABLE `produits`
ADD FOREIGN KEY (`fou_id`) REFERENCES `fournisseurs`(`fou_id`);
