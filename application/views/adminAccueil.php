        <div class="admin container-fluid row" id="admin">
            <div class="row col-8"> 
                <div class="col-12 col-sm-6 col-md-6 col-lg-8 col-xl-12 offset-1">
                    <h1 class="text-dark">Partie Admin</h1>
                    <section>
                        <article>
                            <h4 >Les Fournisseurs</h4>
                            <p>Ici vous trouverez tous se qu'il y a à savoir sur les fournisseurs en cliquant sur le boutton ci-dessous</p>
                            <a href="<?php echo site_url("fournisseurs/fourni_list");?>" class="btn btnpers offset-2 col-auto ml-5" > Fournisseurs</a>
                        </article>
                    </section>
                    <section>
                        <article>
                            <h4 >Les produits</h4>
                            <p>Ici vous trouverez tous se qu'il y a à savoir sur les produits en cliquant sur le boutton ci-dessous</p>
                            <a href="<?php echo site_url("produits/list");?>" class="btn btnpers offset-2 col-auto ml-5"> Produits</a>
                        </article>
                    </section>
                    <section>
                        <article>
                            <h4 >Les catégories</h4>
                            <p>Ici vous trouverez tous se qu'il y a à savoir sur les catégories en cliquant sur le boutton ci-dessous</p>
                            <a href="<?php echo site_url("categories/cat_list");?>" class="btn btnpers offset-2 col-auto ml-5"> Categories</a>
                        </article>
                    </section>
                    <section>
                        <article>
                            <h4 >Les Clients</h4>
                            <p>Ici vous trouverez tous se qu'il y a à savoir sur les clients en cliquant sur le boutton ci-dessous</p>
                            <a href="<?php echo site_url("clients/cli_list");?>" class="btn btnpers offset-2 col-auto ml-5" > Clients</a>
                        </article>
                    </section>
                    <section class="mb-5">
                        <article>
                            <h4 >Le Personnel </h4>
                            <p>Ici vous trouverez tous se qu'il y a à savoir sur le personnel en cliquant sur le boutton ci-dessous</p>
                            <a href="<?php echo site_url("personnels/pers_list");?>" class="btn btnpers offset-2 col-auto ml-5" > Personnel</a>
                        </article>
                    </section>
                </div>
            </div>
            <div class="col-4">
                <img src="<?php echo base_url('assets/img/personnel/teste.png') ;?>" alt="lorem" class="img-personnel m-0 p-0 img-fluid d-sm-none"> 
            </div>        
        </div>