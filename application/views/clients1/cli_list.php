<div class="table-responsive">
    <a href="<?php echo site_url("Clients/cliAjouts"); ?>"> Ajouter un nouveau client</a>
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Mail</th>
                <th>Téléphone</th>
                <th>Modification</th>
                <th>Suppression</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($select_cli as $row) : ?>
                <tr class="table-active">
                    <td><?php echo $row->CLI_ID ?></td>
                    <td><?php echo $row->CLI_NOM ?></td>
                    <td><?php echo $row->CLI_PRENOM ?></td>
                    <td><?php echo $row->CLI_MAIL ?></td>
                    <td><?php echo $row->CLI_TEL ?></td>
                    <td><a href="<?php echo site_url("Clients/cliModif/") . $row->CLI_ID; ?>" class="btn btn-dark">Modifier</a>
                    <td>
                        <?= form_open("Clients/cliSuppr/" . $row->CLI_ID) ?>
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