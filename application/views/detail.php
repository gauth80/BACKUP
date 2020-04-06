<div class="container mt-5">
  <!--Section: Content-->
  <section class="mb-5">
    <div class="row">
      <!--Grid column-->
      <div class="col-md-12">
        <!--News card-->
        <div class="card">
          <div class="card-body">
            <div class="detail d-flex align-self-center">
                <div class="col-lg-6">
                  <img src="<?php echo base_url("assets/img/jarditou_photos/") . $detail->pro_id; ?>" alt="Image représentant le produit choisi" class="img-fluid">
                </div>
                <div class="col-lg-6">
                  <ul class="fa-ul mb-5 text-muted font-weight-light"><br>
                    <li class="mb-2"><label class="labeldetail">Référence:</label><span><?php echo $detail->pro_ref; ?></span></li>
                    <li class="mb-2"><label class="labeldetail">Libellé:</label><span><?php echo $detail->pro_libelle; ?></span></li>
                    <li class="mb-2"><label class="labeldetail">Prix:</label><span><?php echo $detail->pro_prix . ' €'; ?></span></li>
                  </ul>
                  <p class="text-muted font-weight-light ml-3 mb-5"><span><?php echo $detail->pro_description; ?></span></p>
                  <div class="d-flex justify-content-between ml-3">
                    <a href="<?php echo site_url("jarditou/liste"); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" title="Retour à la page précédente">Retour à la page précédente</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!--News card-->
    </div>
    <!--Grid column-->
</div>
</section>
<!--Section: Content-->
</div>