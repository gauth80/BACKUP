<div class="tableau table-responsive">
    <table class="table table-striped table-hover table-bordered">

        <h1 class="text-dark titre-liste text-center py-3 m-0">Pour ajouter un nouveau Fournisseur</h1>
        <a class="m-3" href="<?= site_url('fournisseurs/fourniAjouts/');?>">
            <button class="btn btnordi offset-xs-6 offset-md-6 offset-lg-6 col-auto">
                <i class="fas fa-pencil-alt"></i> Ajouts
            </button>
        </a>

        <thead>
            <tr>
                <th>Cliquez pour Modifier</th>
                <th>Cliquez pour supprimer</th>
                <th>id</th>
                <th>Adresse</th>
                <th>Référence</th>
            </tr>
        </thead>
        <h1 class="text-dark titre-liste text-center py-3 m-0"> Consultez le tableau des fournisseurs</h1>
        <tbody>
            <?php
                foreach($fournisseurs as $fourni)
                {
            ?>
                <tr class="table-active">
                    <td class="text-center d-sm-none btnportable"><a href="<?= site_url('fournisseurs/fourniAjouts/'.$fourni->FOU_ID);?>"><button class="btn btnpers"><i class="fas fa-pencil-alt"></i> Ajouter</button></a></td>
                    <td class="text-center"><a href="<?= site_url('fournisseurs/fourniModif/'.$fourni->FOU_ID);?>"><button class="btn btnpers"><i class="fas fa-pencil-alt"></i> Modification</button></a></td>
                    <td class="text-center"><a href="<?= site_url('fournisseurs/fourniDel/'.$fourni->FOU_ID);?>"><button class="btn btnpers "><i class="fas fa-pencil-alt"></i> Supprimer</button></a></td>
                    <td data-label="ID"><?=$fourni->FOU_ID?></td>
                    <td data-label="Adresse"><?=$fourni->FOU_ADRESSE?></td>
                    <td data-label="Référence"><?=$fourni->FOU_REF?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>