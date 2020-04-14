<div class="col-12">
<div class="row">

<!----------------------------------------- Formulaire ajouts--------------------------------------------->
<?php  // echo  validation_errors ();  ?>
<?php echo form_open_multipart("fournisseurs/fourniAjouts", "class='container col-8'"); ?>
<div class=" container col-8">
    <div class="col-12">
            <fieldset class="row">
                <legend>Ajouts</legend> 
                                     
                 <div  class="form-group text-center offset-1.5 w-100">
                <label for="reference">Nom :</label>
                <input type="text" id="nom" name="nom" class="form-control fontAwesome" placeholder="&#xf1c6; Nom..." value="<?php echo set_value('nom'); ?>">
                <?php echo form_error('nom'); ?> <!-- affiche un message d'erreurs -->
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                <label for="telephone">Téléphone :</label>
                <input type="text" id="telephone" name="telephone" class="form-control fontAwesome" placeholder="&#xf1c6; Téléphone..." value="<?php echo set_value('telephone'); ?>">
                <?php echo form_error('telephone'); ?>
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                <label for="mail">E-mail :</label>
                <input type="text" id="mail" name="mail" class="form-control fontAwesome" placeholder="&#xf1c6; Mail..." value="<?php echo set_value('mail'); ?>">
                <?php echo form_error('mail'); ?>              
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                <label for="siret">Siret :</label>
                <input type="number" id="siret" name="siret" class="form-control fontAwesome" placeholder="&#xf1c6; Siret..." value="<?php echo set_value('siret'); ?>">
                <?php echo form_error('siret'); ?>
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                <label for="adresse">Adresse :</label>
                <input type="text" id="adresse" name="adresse" class="form-control fontAwesome" placeholder="&#xf1c6; Adresse..." value="<?php echo set_value('adresse'); ?>">
                <?php echo form_error('adresse'); ?>
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                <label for="ville">Ville :</label>
                <input type="text" id="ville" name="ville" class="form-control fontAwesome" placeholder="&#xf1c6; ville..." value="<?php echo set_value('ville'); ?>">
                <?php echo form_error('ville'); ?>
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                <label for="persJoin">Personne joignable :</label>
                <input type="text" id="persJoin" name="persJoin" class="form-control fontAwesome" placeholder="&#xf1c6; persJoin..." value="<?php echo set_value('persJoin'); ?>">
                <?php echo form_error('persJoin'); ?>
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                <label for="prix">Prix :</label>
                <input type="text" id="prix" name="prix" class="form-control fontAwesome" placeholder="&#xf1c6; prix..." value="<?php echo set_value('prix'); ?>">
                <?php echo form_error('prix'); ?>
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                <input type="submit" id="ok" name="ok" value="Envoyez">
                </div>
            </div>
        </fieldset>
        <?php echo form_close() ?>
       <br>
    </div>
</div>

