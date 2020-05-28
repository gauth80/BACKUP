<div class="col-12">
    <div class="row">
		<?php echo form_open("Personnels/persModif/".$personnel->PER_ID, "class='container col-8'"); ?>
						<fieldset class="row">
							<legend>Modification</legend> 
							<div class="form-group text-center offset-3 w-50">
								<label for="nom">Nom</label>
								<input type="text" name="nom" id="nom" class="form-control fontAwesome" placeholder="Nom..." value="<?php echo set_value('nom',$personnel->PER_NOM)?>">
								<?php echo form_error('nom'); ?>
							</div>
							<div class="form-group text-center offset-3 w-50">
								<label for="prenom">Prénom</label>
								<input type="text"name="prenom" id="prenom" class="form-control fontAwesome" placeholder="Prénom..." value="<?php echo set_value('prenom',$personnel->PER_PRENOM)?>">
								<?php echo form_error('prenom'); ?>
							</div>
							<div class="form-group text-center offset-3 w-50">
								<label for="service">Service</label>
								<select name="service" id="service" class="form-control fontAwesome" placeholder="Service..." value="<?php echo set_value('service',$personnel->PER_SERVICE)?>">
									<option value="comptabilité"> Comptabilité </option>
									<option value="gestion"> Gestion </option>
									<option value="commercial"> Commercial </option>
									<?php echo form_error('service'); ?>
								</select>
							</div>
							<div class="form-group text-center offset-3 w-50">
								<label for="email">E-mail</label>
								<input type="text"name="email" id="email" class="form-control fontAwesome" placeholder="E-mail..." value="<?php echo set_value('email',$personnel->PER_EMAIL)?>">
								<?php echo form_error('email'); ?>
							</div>
							<div class="form-group text-center offset-3 w-50">
								<label for="matricule">Matricule</label>
								<input type="text"name="matricule" id="matricule" class="form-control fontAwesome" placeholder="Matricule..." value="<?php echo set_value('matricule',$personnel->PER_MATRICULE)?>">
								<?php echo form_error('matricule'); ?>
							</div>
							<div class="form-group text-center offset-3 w-50">
								<label for="coefficient">Coefficient</label>
								<input type="number"name="coefficient" id="coefficient" class="form-control fontAwesome" placeholder="coefficient..." value="<?php echo set_value('coefficient',$personnel->PER_COEFICIENT)?>">
								<?php echo form_error('coeficient'); ?>
							</div>
							<div class="form-group text-center offset-3 w-50">
								<label for="identifiant">Identifiant</label>
								<input type="text"name="identifiant" id="identifiant" class="form-control fontAwesome" placeholder="Identifiant..." value="<?php echo set_value('identifiant',$personnel->PER_IDENTIFIANT)?>">
								<?php echo form_error('identifiant'); ?>
							</div>
							<div class="form-group text-center offset-3 w-50">
								<label for="mdp">Mot de passe</label>
								<input type="password" name="mdp" id="mdp" class="form-control fontAwesome" placeholder="mot de passe..." value="<?php echo set_value('mdp',$personnel->PER_MDP)?>">
								<?php echo form_error('mdp'); ?>
							</div>
							<div  class="form-group text-center offset-1.5 w-100">
								<input class="btn btn-dark" type="submit" id="ok" name="ok" value="Modifier">
							</div>
						</fieldset>
		<?php echo form_close(); ?>
	</div>
</div>