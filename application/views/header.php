<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/")."style.css";?>">
    <title>village green</title>
</head>

<body class="container root" style="background:url('<?php echo base_url('assets/img/background_village.png');?>')"><!-- :) -->
    <div class="wrap m-0 p-0">
        <header class="col-12 px-0">
            <div class="container p-0">
                <div class="col-12 p-0">
                    <div class="row m-0" style="background:url('<?php echo base_url('assets/img/3_bandes.png');?>');">
                        <figure class="col-md-2 col-lg-2 d-none d-md-block p-0 ">
                            <a class="navbar-brand" href="<?php echo base_url();?>" title="Vers l'accueil de Village Green">
                                <img class="d-inline-blocks" src="<?= base_url('assets/img/').'logo_village_green.png'?>" alt="logo de l'entreprise village green" title="logo">
                            </a>
                        </figure>
                        <div class="col-md-9 col-xs-12 p-0 ml-auto">
                            <nav class="navbar navbar-expand-sm firstNav pr-0 pl-0 pb-0">
                                <ul class="navbar-nav ml-auto pt-3">
                                    <li class="nav-item col-3">
                                        <a class="nav-link active" href="" title="Information du site">infos</a>
                                    </li>
                               
                                    <div class="dropdown nav-link col-4">
                                        <button type="button" data-toggle="dropdown">Espace Client<span class="void"></span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <form class="drop-connexion" method="post" action="/">
                                                <!--Cotée Gauche-->
                                                <span>Êtes-vous déjà clients chez nous ?</span>
                                                <input class="form-control" type="text" name="mail" placeholder="Adresse E-mail">
                                                <input class="form-control" type="text" name="password" placeholder="Mot de passe">
                                                <input class="form-check-control" type="checkbox" name="always_connexion">
                                                <label for="always_connexion">Rester connectée ?</label>
                                                <button name="connexion" class="btn btn-success">Se connecter maintenant</button>
                                                <label  class="text-center" for="connexion">
                                                    <a href="/" title="mot de passe perdue?">Vous avez oublié votre mot de passe?</a>
                                                </label>
                                            </form>
                                            <form class="drop-inscription" method="post" action="/">
                                                <!--Cotée Droite-->
                                                <span>Vous n'êtes pas encore inscript ?</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
                                                <button name="inscription" class="btn btn-success">S'inscrire</button>
                                                <label class="text-center" for="inscription">
                                                    <a href="/" title="plus d'information sur les modalitées d'inscription">Plus d'information</a>
                                                </label>
                                            </form> 
                                        </div>
                                    </div>

                                    <!--STORE-->
                                    <li class="nav-item col-2 pr-5">
                                        <a class="nav-link active" href="/">
                                            <img title="boutique de Village Green" src="<?= base_url('assets/img/').'icon/picto_panier.png'?>" alt="boutique">
                                        </a>
                                    </li>
                                    <!--menue bootstap lang-->
                                    <li class="nav-link col-3 mr-5"><img title="choisir sa langue" src="<?= base_url('assets/img/').'picto_pays.png'?>" alt="choisir sa langue">
                                    </li>
                                </ul>
                            </nav>
                            <nav class="navbar navbar-expand-sm navbar-dark secondNav pr-0 pl-0 ">
                                <ul class="navbar-nav ml-auto pl-0 pr-0">
                                    <li class="nav-item active col-xs-3"><a class="nav-link" href="">Produits</a></li>
                                    <li class="nav-item active col-xs-3"><a class="nav-link" href="">Service</a></li>
                                    <li class="nav-item active col-xs-3"><a class="nav-link" href="">Aide</a></li>
                                    <li class="nav-item active col-xs-3"><a class="nav-link" href="<?=site_url('structure/info');?>">A propos</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row ml-0 mr-0">
                        <nav class="navbar navbar-expand-xl navbar-dark thirdNav col-xl-12 align-bottom pr-0 pl-0">
                            <a class="navbar-brand" href="#"></a>
                            <button class="navbar-toggler mr-2 mb-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse pl-0" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto pl-0 pr-0 m-0">
                                    <div class="dropdown nav-link pl-4">
                                        <button type="button" data-toggle="dropdown">Guit/Basse
                                            <span class="void"></span>
                                        </button>
                                        <ul class="dropdown-menu col-md-1 px-2">
                                            <li class="nav-item active"><a class="drop-link" href="/" title="Guitares Electriques">Guitares Electriques</a></li>
                                            <li class="nav-item active"><a class="drop-link" href="/" title="Guitares classiques">Guitares classiques</a></li>
                                            <li class="nav-item active"><a class="drop-link" href="/" title="Guitares Acoustiques & Electro-Acoustiques">Guitares Acoustiques et Electro-Acoustiques</a></li>
                                            <li class="nav-item active"><a class="drop-link" href="/" title="Basses Electriques">Basses Electriques</a></li>
                                            <li class="nav-item active"><a class="drop-link" href="/" title="Basses Acoustiques">Basses Acoustiques</a></li>
                                            <li class="nav-item active"><a class="drop-link" href="/" title="Basses Semi-Acoustiques">Basses Semi-Acoustiques</a></li>
                                            <li class="nav-item active"><a class="drop-link" href="/" title="Ukulélés">Ukulélés</a></li>
                                            <li class="nav-item active"><a class="drop-link" href="/" title="Autres instruments à cordes pincées">Autres instruments à cordes pincées</a></li>
                                        </ul>
                                    </div>    
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="/" title="Batteries">Batteries</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="/" title="Clavier">Clavier</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="/" title="Studio">Studio</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="/" title="Eclairage">Eclairage</a> </li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="/" title="DJ">DJ</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="/" title="Cases">Cases</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="/" title="Accessoires">Accessoires</a></li>
                                    <li class="nav-item active col-xs-1"><a class="nav-link pl-4" href="/" title="Accessoires">Instrument à vent</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    