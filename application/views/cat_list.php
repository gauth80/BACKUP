<div class="table-responsive">
    <a href="<?php echo site_url("categories/catAjouts"); ?>"> Ajouter une nouvelle catégorie</a>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID de la catégorie</th>
                <th>Libellé</th>
                <th>Modification</th>
                <th>Suppression</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($select_cat as $row) : ?>
                <tr class="table-active">
                    <td><?= $row->CAT_ID ?></td>
                    <td><?= $row->CAT_LIBELLE ?></td>
                    <td><a href="<?php echo site_url("categories/catModif/") . $row->CAT_ID; ?>" class="btn btn-dark">Modifier</a>
                    <td>
                        <?= form_open("categories/catSuppr/" . $row->CAT_ID) ?>
                        <input type="submit" name="sup" id="sup" class="btn btn-dark" value="Supprimer">
                        <?= form_close(); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="text-center">
    <a href="<?php echo site_url("admin/adminAccueil"); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" title="Retour à la page précédente">Retour à la page précédente</a>
</div>
<br>