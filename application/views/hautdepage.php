<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Jarditou</title>
    <link rel="stylesheet" media="screen and (max-width: 576px)" href="<?php echo base_url("assets/css/") . "style.css"; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/") . "style.css"; ?>">
</head>

<body class="container-fluid">
    <header class="container-fluid">
        <a href="index">
            <img id="logo" src="<?php echo base_url('assets/img/') . "jarditou_logo.jpg"; ?>" alt="Logo de l'entreprise Jarditou représentant un jardinié poussant une brouette rempli" title="Logo de l'entreprise Jarditou représentant un jardinié poussant une brouette rempli">
        </a>
    </header>
    <div>
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo site_url("jarditou/index"); ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo site_url("jarditou/liste"); ?>">Magasin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo site_url("jarditou/contact"); ?>">Contact</a>
                    </li>
                    <li class="nav-item caché">
                        <a class="nav-link text-light" href="<?php echo site_url("jarditou/index"); ?>" class="text-light">Horaires</a>
                    </li>
                    <li class="nav-item caché">
                        <a class="nav-link text-light" href="<?php echo site_url("jarditou/index"); ?>" class="text-light">Plan du site</a>
                    </li>
                    <li class="nav-item caché">
                        <a class="nav-link text-light" href="<?php echo site_url("jarditou/index"); ?>" class="text-light">Mentions légales</a>
                    </li>
                    <div class="btn-group dropright">
                        <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gestion du site
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href='<?php echo site_url('jarditou/inscription') ?>'>Gestion des comptes</a>
                            <a class="dropdown-item" href='<?php echo site_url('jarditou/ajout_produits') ?>'>Ajout de produits</a>
                            <a class="dropdown-item" href='<?php echo site_url('jarditou/aff_modif_produits') ?>'>Modification de produits</a>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="container">
            <a href="index"><img src="<?php echo base_url('assets/img/') . "promotion.jpg"; ?>" id="promo" class="img-fluid mt-2" alt="Bord de piscine pleine d'eau bleu clair avec du beau parquet clair surplombé des mots Promotion sur lames de terrasse" title="Bord de piscine pleine d'eau bleu clair avec du beau parquet clair surplombé des mots Promotion sur lames de terrasse"></a>
        </div>
    </div>