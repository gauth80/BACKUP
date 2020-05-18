<?php echo form_open("Personnels/persModif/".$personnel->PER_ID); ?>
<div>
	<h5>Nom</h5>
	<input type="text" name="nom" id="nom" value="<?=$personnel->PER_NOM?>">
</div>
<div>
	<h5>Prenom</h5>
	<input type="text"name="prenom" id="prenom" value="<?=$personnel->PER_PRENOM?>">
</div>
<div>
	<h5>Service</h5>
	<select name="service" id="service" value="<?=$personnel->PER_SERVICE?>">personnel
		<option value="comptabilité"> Comptabilité </option>
		<option value="gestion"> Gestion </option>
		<option value="comercial"> Comercial </option>
	</select>
</div>
<div>
	<h5>Email</h5>
	<input type="text"name="email" id="email" value="<?=$personnel->PER_EMAIL?>">
	<?php echo form_error('email'); ?>
</div>
<div>
	<h5>Matricule</h5>
	<input type="text"name="matricule" id="matricule" value="<?=$personnel->PER_MATRICULE?>">
	<?php echo form_error('matricule'); ?>
</div>
<div>
	<h5>Coeficient</h5>
	<input type="number"name="coeficient" id="coeficient" value="<?=$personnel->PER_COEFICIENT?>">
	<?php echo form_error('coeficient'); ?>
</div>
<div>
	<h5>Identifiant</h5>
	<input type="text"name="identifiant" id="identifiant" value="<?=$personnel->PER_IDENTIFIANT?>">
	<?php echo form_error('identifiant'); ?>
</div>
<div>
	<h5>Mot de passe</h5>
	<input type="text"name="mdp" id="mdp">
	<?php echo form_error('mdp'); ?>
</div>
<button>Modifier</button>
<?php echo form_close(); ?>