<div class="table-responsive">
        <h1 class="text-dark">Pour ajouter du personel</h1>
        <a href="<?php echo site_url('personnels/persAjouts');?>"><button class="btn btn-dark offset-2"><i class="fas fa-pencil-alt"></i> Ajouts</button></a>

	<h1 class="text-dark">Liste du personnel</h1>
        <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <td>ID</td>
                    <td>Nom</td>
                    <td>Prenom</td>
                    <td>Service</td>
                    <td>email</td>
                    <td>Matricule</td>
                    <td>Coeficient</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($personnel as $row)
                    {
                 ?>
                        <tr class="table-active">
                            <td><?php $row->PER_ID ?></td>
                            <td><?php $row->PER_NOM ?></td>
                            <td><?php $row->PER_PRENOM ?></td>
                            <td><?php $row->PER_SERVICE ?></td>
                            <td><?php $row->PER_EMAIL ?></td>
                            <td><?php $row->PER_MATRICULE ?></td>
                            <td><?php $row->PER_COEFICIENT ?></td>
                            <td><a href=<?php echo site_url('personnels/persDel/'.$row->PER_ID)?>><button class='btn btn-danger'><i class='fas fa-pencil-alt'></i> Supprimer</button></a></td>
                            <td><a href=<?php echo site_url('personnels/persModif/'.$row->PER_ID)?>><button class='btn btn-dark'><i class='fas fa-pencil-alt'></i> Modification</button></a></td>
                        </tr>
                <?php
                     }
                ?>
            </tbody>
        </table>
</div>
