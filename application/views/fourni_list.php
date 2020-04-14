<?php
    if(empty($fournisseur))
    {
    ?>
        <h1>tableaux vide</h1>
        <p>pour le remplir</p>
    <a href="<?= site_url('');?>"><button><i class="fas fa-pencil-alt"></i></button></a>
    
        <?php
    }
    else
    {
        ?>
        <h1>Fournisseur</h1>
        <p>pour ajouter un nouveau fournisseur</p>
    <a href="<?= site_url('');?>"><button><i class="fas fa-pencil-alt"></i></button></a>
    <hr>
    <table>
    <thead>
    <tr>
        <th> </th>
        <th>id</th>
        <th>Nom</th>
        <th>Téléphone</th>
        <th>Mail</th>
        <th>Siret</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>Personne joignable</th>
        <th>Prix</th>
    </tr>
    </thead>
    <tbody>
<?php
        foreach($fournisseur as $fourni)
        {
            ?>
                <tr>
                    <td><a href="<?= site_url(''.$fourni->fourni_id);?>"><button><i class="fas fa-pencil-alt"></i></button></a><a href="<?= site_url(''.$fourni->fourni_id);?>"><button><i class="fas fa-trash-alt"></i></button></a></td>
                    <td><?=$fourni->fourni_id?></td>
                    <td><?=$fourni->fourni_nom?></td>
                    <td><?=$fourni->fourni_tel?></td>
                    <td><?=$fourni->fourni_mail?></td>
                    <td><?=$fourni->fourni_siret?></td>
                    <td><?=$fourni->fourni_adresse?></td>
                    <td><?=$fourni->fourni_ville?></td>
                    <td><?=$fourni->fourni_pers_join?></td>
                    <td><?=$fourni->fourni_prix?></td>

                </tr>
            <?php
        }
?>
</tbody>
</table>
<?php
    }
?>