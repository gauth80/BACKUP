<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">

        <h1 class="text-dark">Pour ajouter un nouveau Fournisseur</h1>
        <a href="<?= site_url('fournisseurs/fourniAjouts/');?>"><button class="btn btn-dark offset-2"><i class="fas fa-pencil-alt"></i> Ajouts</button></a>
        <thead>
            <tr>
                <th> </th>
                <th>id</th>
                <th>Adresse</th>
                <th>Référence</th>
            </tr>
        </thead>
        <h1 class="text-dark"> Consultez le tableau des fournisseurs</h1>
        <tbody>
            <?php
                foreach($fournisseurs as $fourni)
                {
            ?>
                <tr class="table-active">
                    <td><a href="<?= site_url('fournisseurs/fourniModif/'.$fourni->FOU_ID);?>"><button class="btn btn-dark"><i class="fas fa-pencil-alt"></i> Modification</button></a><a href="<?= site_url('fournisseurs/fourniDel/'.$fourni->FOU_ID);?>"><button class="btn btn-dark"><i class="fas fa-pencil-alt"></i> supprimer</button></a></td>
                    <td><?=$fourni->FOU_ID?></td>
                    <td><?=$fourni->FOU_ADRESSE?></td>
                    <td><?=$fourni->FOU_REF?></td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>