<div class="row col-12 m-0 p-0 wrap-detail">
	<div class="row col-12 m-0 pl-0 pr-0">
		<h2 class="col-6 text-center">
			<a href="<?php echo site_url('produits/index') ;?>" title="retour à l'accueil">Retour aux produits</a>
			<h2 class="col-6 text-center"><?php echo $detail->PRO_LIBELLE;?></h2>
		</h2>
		<hr class="hr-detail">
	</div>


	<figure class="row col-10 offset-1 p-0 m-0">
		<img src="" alt="" title="" class="img-fluid">
		<figcaption></figcaption>
	</figure>

	<div class="row">
		<p><?php echo $detail->PRO_STOCK_PHYSIQUE; ?></p>
		<p><?php echo $detail->PRO_DESCRIPTION; ?></p>
		<p><?php echo $detail->PRO_PRIX_ACHAT; ?></p>
	</div>

</div>