<div class="col-12">
    <div div class="row">
    <?php echo form_open_multipart("personnels/persAjouts", "class='container col-8'"); ?>
            <div>
                <h5>Nom</h5>
                <input type="text" name="nom" id="nom">
                <?php echo form_error('nom'); ?>
            </div>
            <div>
                <h5>Prénom</h5>
                <input type="text"name="prenom" id="prenom">
                <?php echo form_error('prenom'); ?>
            </div>
            <div>
                <h5>Service</h5>
                <select name="service" id="service">
                    <option value="comptabilité"> Comptabilité </option>
                    <option value="gestion"> Gestion </option>
                    <option value="comercial"> Comercial </option>
                </select>
                <?php echo form_error('service'); ?>
            </div>
            <div>
                <h5>E-mail</h5>
                <input type="text"name="email" id="email">
                <?php echo form_error('email'); ?>
            </div>
             <div>
                <h5>Matricule</h5>
                <input type="text"name="matricule" id="matricule">
                <?php echo form_error('matricule'); ?>
            </div>
            <div>
                <h5>Coefficient</h5>
                <input type="number"name="coeficient" id="coeficient">
                <?php echo form_error('coeficient'); ?>
            </div>
            <div>
                <h5>Identifiant</h5>
                <input type="text"name="identifiant" id="identifiant">
                <?php echo form_error('identifiant'); ?>
            </div>
            <div>
                <h5>Mot de passe</h5>
                <input type="text"name="mdp" id="mdp">
                <?php echo form_error('mdp'); ?>
            </div>
            <button>Ajouter</button>
        <?php echo form_close(); ?>
    </div>
</div>