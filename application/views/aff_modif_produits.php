<div class="row">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="colN">Photo</th>
                        <th class="colN">ID</th>
                        <th class="colN">Référence</th>
                        <th class="colN">Catégorie</th>
                        <th class="colN">Libellé</th>
                        <th class="colN">Prix</th>
                        <th class="colN">Couleur</th>
                        <th class="colN">Stock</th>
                        <th class="colN">Extension</th>
                        <th class="colN">Date d'ajout</th>
                        <th class="colN">Date de modification</th>
                        <th class="colN">Supprimer le produit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($afficher as $row) : ?>
                        <tr>
                            <td class="colAdmin"><a href="<?php echo site_url("jarditou/modif_produits/") . $row->pro_id; ?>"><img id="visuel" class="img-thumbnail img-fluid rounded" src="<?php echo base_url('assets/img/jarditou_photos/') . $row->pro_id; ?>"></td>
                            <td class="colAdmin"><?= $row->pro_id ?></td>
                            <td class="colAdmin"><?= $row->pro_ref ?></td>
                            <td class="colAdmin"><?= $row->pro_cat_id ?></td>
                            <td class="colAdmin"><a href="<?php echo site_url("jarditou/modif_produits/") . $row->pro_id; ?>"><?= $row->pro_libelle ?></td>
                            <td class="colAdmin"><?= $row->pro_prix ?></td>
                            <td class="colAdmin"><?= $row->pro_couleur ?></td>
                            <td class="colAdmin"><?= $row->pro_stock ?></td>
                            <td class="colAdmin"><?= $row->pro_photo ?></td>
                            <td class="colAdmin"><?= $row->pro_d_ajout ?></td>
                            <td class="colAdmin"><?= $row->pro_d_modif ?></td>
                            <td class="colAdmin">
                                <?= form_open("jarditou/suppr_produits/" . $row->pro_id) ?>
                                <input type="submit" name="sup" id="sup" value="Supprimer">
                                <?= form_close(); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>