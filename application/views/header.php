<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Village Green</title>
    <link rel="stylesheet" media="screen and (max-width: 576px)" href="<?php echo base_url("assets/css/") . "style.css"; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("/assets/css/style.css"); ?>">
</head>

<body class="container">
    <header>
        <div>
            <a href="<?php echo site_url(""); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" title="Infos">Infos</a>
        </div>
        <div>
            <a href="<?php echo site_url(""); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" title="Espace Client">Espace Client</a>
        </div>
        <a>
            <img id="logo" src="<?php echo base_url('assets/img/HEADER/') . ".jpg"; ?>" alt="Logo de l'entreprise" title="Logo de l'entreprise">
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
                        <a class="nav-link text-light" href="<?php echo site_url(""); ?>">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo site_url(""); ?>">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo site_url(""); ?>">Aide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo site_url(""); ?>">A propos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>