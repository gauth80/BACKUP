


<div class="row my-0 py-0">
	<div class="col-11 offset-1">
		<p>Point mobile a faire <br>

	</div>
</div>
<section class="row py-5">
	<div class="wrap-produits my-5 row">

		<?php foreach ($data as $pro) { ?>
		
		<div class="card my-5 mx-auto">
			<div class="face revers1">
				<div class="contenue text-center">
					<img class="img-fluid" 

					src="<?php echo base_url() ;?>assets/img/produits/listes/<?php echo $pro->PRO_SLUG;?>.<?php echo $pro->PRO_PHOTO;?>" alt="<?php echo $pro->PRO_LIBELLE ;?>">

					<h3><?php echo $pro->PRO_LIBELLE ;?></h3>
				</div>
			</div>
			<div class="face revers2">
				<div class="contenue">
					<p>Produits disponible&nbsp;:&nbsp;<?php echo $pro->PRO_STOCK_PHYSIQUE ;?></p>

					<p><em><?php echo word_limiter($pro->PRO_DESCRIPTION,15) ;?></em></p>

					<p><u>REF</u>&nbsp;:&nbsp;<?php echo $pro->PRO_REF ;?></p>

					<a href="<?php echo site_url('/produits/details/').$pro->PRO_SLUG ;?>" class="btn">Lire plus</a>
					<p class="price"><?php echo $pro->PRO_PRIX_ACHAT ;?>&nbsp;€</p>
				</div>
			</div>
		</div>

	<?php } ;?>







		
	</div>
</section>
<section class="row bg-dark mt-5 mx-0 col-12 py-1">
	<p class="col-10 offset-1 text-center my-1">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint et neque quam officia, asperiores totam harum hic? Eum ipsam blanditiis, tempora nostrum sint voluptates quidem at dolorem, quas labore a. Odio voluptas fugiat, ut, consectetur culpa molestiae sunt quae minima saepe ducimus aut, accusamus consequuntur obcaecati voluptatem doloremque non ea!
	</p>
</section>
