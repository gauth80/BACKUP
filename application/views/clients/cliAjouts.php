<div class="col-12">
    <div class="row">

        <div class=" container col-8">
            <div class="col-12">
                <fieldset class="row">
                    <legend>Création d'un client</legend>
                    <?= form_open("clients/cliAjouts", 'class="form_control"'); ?>
                    <div class="form-group text-center">
                        <label for="lastname" class="sr-only">Nom</label>
                        <input type="text" id="lastname" name="lastname" class="form-control text-center" placeholder="Nom">
                        <?php echo form_error('lastname'); ?>
                    </div>
                    <div class="form-group text-center">
                        <label for="firstname" class="sr-only">Prénom</label>
                        <input type="text" id="firstname" name="firstname" class="form-control text-center" placeholder="Prénom">
                        <?php echo form_error('firstname'); ?>
                    </div>
                    <div class="form-group text-center">
                        <label for="city" class="sr-only">Ville</label>
                        <input type="text" id=city name=city class="form-control text-center" placeholder="Ville">
                        <?php echo form_error('city'); ?>
                    </div>
                    <div class="form-group text-center">
                        <label for="street" class="sr-only">Adresse (utilisé pour la facturation)</label>
                        <input type="text" id="street" name="street" class="form-control text-center" placeholder="Adresse">
                        <?php echo form_error('street'); ?>
                    </div>
                    <div class="form-group text-center">
                        <label for=zipcode class="sr-only">Code Postal</label>
                        <input type="text" id=zipcode name=zipcode class="form-control text-center" placeholder="Code Postal">
                        <?php echo form_error('zipcode'); ?>
                    </div>
                    <div class="form-group text-center">
                        <label for="ddn" class="sr-only">date de naissance</label>
                        <input type="date" id="ddn" name="ddn" class="form-control text-center" placeholder="Date de naissance">
                        <?php echo form_error('ddn'); ?>
                    </div>
                    <div class="form-group text-center">
                        <label for="cell" class="sr-only">Téléphone</label>
                        <input type="text" id="cell" name="cell" class="form-control text-center" placeholder="Téléphone">
                        <?php echo form_error('cell'); ?>
                    </div>
                    <div class="form-group text-center">
                        <label for="mail" class="sr-only">E-mail</label>
                        <input type="email" id="mail" name="mail" class="form-control text-center" placeholder="E-mail">
                        <?php echo form_error('mail'); ?>
                    </div>
                    <div class="form-group text-center">
                        <label for="password" class="sr-only">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-control text-center" placeholder="Mot de passe">
                        <?php echo form_error('password'); ?>
                    </div>
                    <div class="form-group text-center">
                        <label for="comfirm_password" class="sr-only">Confirmez le mot de passe</label>
                        <input type="password" name="comfirm_password" id="comfirm_password" class="form-control text-center" placeholder="Ré-entrez le mot de passe">
                        <?php echo form_error('comfirm_password'); ?>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" id="ajout" name="ajout" value="Créer ce client">
                    </div>
                    <?= form_close(); ?>
                </fieldset>
            </div>
            <br>
        </div>
    </div>
</div>
<div class="text-center">
    <a href="<?php echo site_url("Clients/cli_list"); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" title="Retour à la page précédente">Retour à la page précédente</a>
</div>
<br>