<div class="col-12">
    <div class="row">

        <div class=" container col-8">
            <div class="col-12">
                <fieldset class="row">
                    <legend>Création d'une catégorie</legend>
                    <?= form_open("categories/catAjouts", 'class="form_control"'); ?>
                    <div class="form-group text-center">
                        <label for="libelle" class="sr-only">Libellé</label>
                        <input type="text" id="libelle" name="libelle" class="form-control text-center" placeholder="Libellé">
                        <?php echo form_error('libelle'); ?>
                        <br>
                        <label for="cat_cat" class="sr-only">Catégorie</label>
                        <select class="form-control" name="cat_cat" id="cat_cat">
                            <option disabled selected>Catégorie parente</option>
                            <?php
                            foreach ($select_cat as $row) {
                            ?>
                                <option value="<?= $row->CAT_ID ?>"><?= $row->CAT_LIBELLE ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" id="ajout" name="ajout" value="Créer cette catégorie">
                    </div>
                    <?= form_close(); ?>
                </fieldset>
            </div>
            <br>
        </div>
    </div>
</div>
<div class="text-center">
    <a href="<?php echo site_url("categories/cat_list"); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" title="Retour à la page précédente">Retour à la page précédente</a>
</div>
<br>