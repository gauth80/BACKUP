    <main class="col-12">
        <div class="vitrine">
            <div class="row pl-4 my-4 res-vitrine">
                <figure class="col-12 col-sm-9 res-offre">


                    <a class="" href="">
                        <img src="<?php echo base_url('assets/img/accueil/pub_guitare.png'); ?>" alt="Gibson Ibanez -15%" title="Réduction sur les Gibson">
                    </a>
                </figure>
                <figure class="col-2 d-none d-sm-block">
                    <a href="">
                        <img src="<?php echo base_url('assets/img/accueil/banniere_droite_prix.png'); ?>" alt="information livraison" title="Livraison gratuite à partir de 19€ d'achat">
                </figure>
            </div>
            <div class="row">
                <figure class="col-sm-12 my-5 p-0 res-condition">
                    <a href="">
                        <img src="<?= base_url('assets/img/accueil/') . 'banniere_centre_4_pictos' ?>" alt="conditions">
                    </a>
                </figure>
            </div>
        </div>

        <div class="row">
            <h2 class="res-title col-auto">Nos catégories</h2>
        </div>
        <div class="row my-4 section-categories">
            <figure class="col-sm-6 col-lg-4 text-center col-xl-3 py-0 px-0">
                <a class="ventes-link" href="<?php echo site_url("produits/list");?>">
                    <img src="<?php echo base_url('assets/img/produits/cat_gui.png'); ?>" onmouseover="this.src='assets/img/wrapper/cat_h_gui.png'" onmouseout="this.src='assets/img/produits/cat_gui.png'" title="catégorie guitare" alt="catégorie guitare" class="thumbnail">
                </a>
            </figure>
            <figure class="col-sm-6 col-lg-4 text-center col-xl-3 py-0 px-0">
                <a class="ventes-link" href="<?php echo site_url("produits/list");?>">
                    <img src="<?php echo base_url('assets/img/produits/cat_bat.png'); ?>" onmouseover="this.src='assets/img/wrapper/cat_h_bat.png'" onmouseout="this.src='assets/img/produits/cat_bat.png'" title="catégorie batterie" alt="catégorie batterie" class="thumbnail">
                </a>
            </figure>
            <figure class="col-sm-6 col-lg-4 text-center col-xl-3 py-0 px-0">
                <a class="ventes-link" href="<?php echo site_url("produits/list");?>">
                    <img src="<?php echo base_url('assets/img/produits/cat_pia.png'); ?>" onmouseover="this.src='assets/img/wrapper/cat_h_pia.png'" onmouseout="this.src='assets/img/produits/cat_pia.png'" title="catégorie piano" alt="catégorie piano" class="thumbnail">
                </a>
            </figure>
            <figure class="col-sm-6 col-lg-4 text-center col-xl-3 py-0 px-0">
                <a class="ventes-link" href="<?php echo site_url("produits/list");?>">
                    <img src="<?php echo base_url('assets/img/produits/cat_mic.png'); ?>" onmouseover="this.src='assets/img/wrapper/cat_h_mic.png'" onmouseout="this.src='assets/img/produits/cat_mic.png'" title="catégorie micro" alt="catégorie micro" class="thumbnail">
                </a>
            </figure>
            <!--range2-->
            <figure class="col-sm-6 col-lg-4 text-center col-xl-3 py-0 px-0">
                <a class="ventes-link" href="<?php echo site_url("produits/list");?>">
                    <img src="<?php echo base_url('assets/img/produits/cat_son.png'); ?>" onmouseover="this.src='assets/img/wrapper/cat_h_son.png'" onmouseout="this.src='assets/img/produits/cat_son.png'" title="catégorie sono" alt="catégorie sono" class="thumbnail">
                </a>
            </figure>
            <figure class="col-sm-6 col-lg-4 text-center col-xl-3 py-0 px-0">
                <a class="ventes-link" href="<?php echo site_url("produits/list");?>">
                    <img src="<?php echo base_url('assets/img/produits/cat_cas.png'); ?>" onmouseover="this.src='assets/img/wrapper/cat_h_cas.png'" onmouseout="this.src='assets/img/produits/cat_cas.png'" title="catégorie cases" alt="catégorie cases" class="thumbnail">
                </a>
            </figure>
            <figure class="col-sm-6 col-lg-4 text-center col-xl-3 py-0 px-0">
                <a class="ventes-link" href="<?php echo site_url("produits/list");?>">
                    <img src="<?php echo base_url('assets/img/produits/cat_acc.png'); ?>" onmouseover="this.src='assets/img/wrapper/cat_h_acc.png'" onmouseout="this.src='assets/img/produits/cat_acc.png'" title="catégorie accessoire" alt="catégorie accessoire" class="thumbnail">
                </a>
            </figure>
            <figure class="col-sm-6 col-lg-4 text-center col-xl-3 py-0 px-0">
                <a class="ventes-link" href="<?php echo site_url("produits/list");?>">
                    <img src="<?php echo base_url('assets/img/produits/cat_sax.png'); ?>" onmouseover="this.src='assets/img/wrapper/cat_h_sax.png'" onmouseout="this.src='assets/img/produits/cat_sax.png'" title="catégorie saxo" alt="catégorie saxo" class="thumbnail">
                </a>
            </figure>
        </div>

        <div class="row">
            <h2 class="col-12 col-sm-6 res-title">Nos meilleurs ventes</h2>
            <h2 class="d-none d-sm-block col-sm-6 res-title">Nos partenaires</h2>
        </div>
        <div class="row my-0 my-sm-4 res-top">

            <figure class="col-auto col-sm-2">
                <a class="ventes-link" href="<?php echo site_url("produits/detail");?>">
                    <img class="mx-4" src="<?php echo base_url('assets/img/produits/TOP_VENTES_guitare.png'); ?>" onmouseover="this.src='assets/img/TOP_VENTES_ROLL_OVER_guitare.png'" onmouseout="this.src='assets/img/produits/TOP_VENTES_guitare.png'" title="top guitare" alt="">
                </a>
            </figure>
            <figure class="col-auto col-sm-2">
                <a class="ventes-link" href="<?php echo site_url("produits/detail");?>">
                    <img class="mx-4" src="<?= base_url('assets/img/produits/TOP_VENTES_saxo.png') ?>" onmouseover="this.src='assets/img/TOP_VENTES_ROLL_OVER_saxo.png'" onmouseout="this.src='assets/img/produits/TOP_VENTES_saxo.png'" title="top saxo" alt="">
                </a>
            </figure>

            <figure class="col-auto col-sm-2">
                <a class="ventes-link" href="<?php echo site_url("produits/detail");?>">
                    <img class="mx-4" src="<?= base_url('assets/img/produits/TOP_VENTES_piano.png'); ?>" onmouseover="this.src='assets/img/TOP_VENTES_ROLL_OVER_piano.png'" onmouseout="this.src='assets/img/produits/TOP_VENTES_piano.png'" title="top piano" alt="">
                </a>
            </figure>
            <figure class="d-none d-sm-block col-sm-6">
                <a class="partenaires-link" href="">
                    <img class="mx-4" src="<?= base_url('assets/img/accueil/partenaires_4_logos.png'); ?>" title="nos partenaires" alt="partenaires" ref="nofollow">
                </a>
            </figure>
        </div>
    </main>