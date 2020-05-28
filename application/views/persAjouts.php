<div class="col-12">
    <div div class="row">
        <?php echo form_open_multipart("personnels/persAjouts", "class='container col-8'"); ?>
            <fieldset class="row">
                <legend>Ajouts</legend> 
                <div class="form-group text-center offset-3 w-50">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" class="form-control fontAwesome" placeholder="Nom..." value="<?php echo set_value('nom'); ?>">
                    <?php echo form_error('nom'); ?>
                </div>
                <div class="form-group text-center offset-3 w-50">
                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" class="form-control fontAwesome" placeholder="Prénom..." value="<?php echo set_value('prenom'); ?>">
                    <?php echo form_error('prenom'); ?>
                </div>
                <div class="form-group text-center offset-3 w-50">
                    <label for="service">Service</label>
                    <select name="service" id="service" class="form-control fontAwesome" placeholder="Service" value="<?php echo set_value('service'); ?>">
                        <option value="comptabilité"> Comptabilité </option>
                        <option value="gestion"> Gestion </option>
                        <option value="commercial"> Commercial </option>
                    </select>
                    <?php echo form_error('service'); ?>
                </div>
                <div class="form-group text-center offset-3 w-50">
                    <label for="email">E-mail</label>
                    <input type="text"name="email" id="email" class="form-control fontAwesome" placeholder="E-mail..." value="<?php echo set_value('email'); ?>">
                    <?php echo form_error('email'); ?>
                </div>
                <div class="form-group text-center offset-3 w-50">
                    <label for="matricule">Matricule</label>
                    <input type="text"name="matricule" id="matricule" class="form-control fontAwesome" placeholder="Matricule..." value="<?php echo set_value('matricule'); ?>">
                    <?php echo form_error('matricule'); ?>
                </div>
                <div class="form-group text-center offset-3 w-50">
                    <label for="coefficient">Coefficient</label>
                    <input type="number"name="coefficient" id="coefficient" class="form-control fontAwesome" placeholder="Coefficient..." value="<?php echo set_value('coefficient'); ?>">
                    <?php echo form_error('coeficient'); ?>
                </div>
                <div class="form-group text-center offset-3 w-50">
                    <label for="identifiant">Identifiant</label>
                    <input type="text"name="identifiant" id="identifiant" class="form-control fontAwesome" placeholder="Identifiant..." value="<?php echo set_value('identifiant'); ?>">
                    <?php echo form_error('identifiant'); ?>
                </div>
                <div class="form-group text-center offset-3 w-50">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" name="mdp" id="mdp" class="form-control fontAwesome" placeholder="Mot de passe..." value="<?php echo set_value('mdp'); ?>">
                    <?php echo form_error('mdp'); ?>
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                    <input class="btn btn-dark" type="submit" id="ok" name="ok" value="ajouter">
                </div>
            </fieldset>
        <?php echo form_close(); ?>
    </div>
</div>