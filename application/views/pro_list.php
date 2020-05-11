<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <tbody>
            <tr class="table-active row text-center">
                <th class="col-2">Commande</th>
                <th class="col-1">id</th>
                <th class="col-1">Référence</th>
                <th class="col-1">Libellé</th>
                <th class="col-3">Description</th>
                <th class="col-1">prix</th>
                <th class="col-1">Stock</th>
                <th class="col-2">Aperçue</th>
            </tr>
            <?php foreach ($data as $pro) { ?>
            <tr class="table-active row">
                <td class="col-2">
                    <a href="<?php echo site_url("produits/ajout");?>" class="btn btn-dark col-11 m-1"> Ajouts</a>
                    <a href="<?php echo site_url("produits/modif");?>" class="btn btn-dark col-11 m-1"> Modifiez</a>
                    <a href="<?php echo site_url("produits/del");?>" class="btn btn-dark col-11 m-1"> Suppression</a></td>
                <td class="col-1"><?php echo $pro->PRO_ID ;?></td>
                <td class="col-1"><?php echo $pro->PRO_REF ;?></td>
                <td class="col-1"><?php echo $pro->PRO_LIBELLE ;?></td>
                <td class="col-3"><?php echo $pro->PRO_DESCRIPTION ;?></td>
                <td class="col-1"><?php echo $pro->PRO_PRIX_ACHAT ;?></td>
                <td class="col-1"><?php echo $pro->PRO_STOCK_PHYSIQUE ;?></td>
                <td class="col-2">
                    <img class="img-fluid" src="<?php echo base_url() ;?>assets/img/produits/listes/<?php echo $pro->PRO_SLUG;?>.<?php echo $pro->PRO_PHOTO;?>" alt="<?php echo $pro->PRO_LIBELLE ;?>">
                </td>
            </tr>
            <?php } ;?>

        </tbody>
    </table>

</div>

