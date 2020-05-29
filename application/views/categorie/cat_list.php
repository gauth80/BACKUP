<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <h1 class="text-dark titre-liste text-center py-3 m-0">Ajouter une nouvelle catégorie</h1>
        <a href="<?php echo site_url("categories/catAjouts"); ?>">
                <button class="btn btnordi offset-xs-6 offset-md-6 offset-lg-6 col-auto">
                    <i class="fas fa-pencil-alt"></i> Ajouts
                </button>
        </a>
            <thead>
                <tr>
                    <th>Catégorie</th>
                    <th>Catégorie parente</th>
                    <th>Modification</th>
                    <th>Suppression</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($select_cat as $row) : ?>
                    <tr class="table-active">
                        <td class="text-center d-sm-none btnportable"><a href="<?php echo site_url("categories/catModif/") . $row->CAT_ID; ?>" class="btn btnpers"><i class="fas fa-pencil-alt"></i>Ajouter</a>
                        <td class="text-center"><a href="<?php echo site_url("categories/catModif/") . $row->CAT_ID; ?>" class="btn btnpers"><i class="fas fa-pencil-alt"></i>Modifier</a>
                        <td class="text-center">
                            <?= form_open("categories/catSuppr/" . $row->CAT_ID) ?>
                            <input type="submit" name="sup" id="sup" class="btn btnpers" value="Supprimer"><i class="fas fa-pencil-alt"></i>
                            <?= form_close(); ?>
                        </td>
                        <td data-label="Catégorie"><?= $row->CAT_ID ?> - <?= $row->CAT_LIBELLE ?></td>
                        <td data-label="Catégorie parente"><?= $row->CAT_CAT_ID ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
</div>
<div class="text-center">
    <a href="<?php echo site_url("admin/adminAccueil"); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" title="Retour à la page précédente">Retour à la page précédente</a>
</div>
<br>