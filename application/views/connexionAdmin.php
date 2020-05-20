<?= form_open("personnels/new_session_admin", 'class="form_control"'); ?>
<br>
<!-- Adresse mail -->
<div class="form-group text-center offset-3 w-50">
    <label for="email" class="sr-only">Adresse mail</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@exemple.fr">
</div>
<!-- Mot de passe -->
<div class="form-group text-center offset-3 w-50">
    <label for="mdp" class="sr-only">Mot de passe</label>
    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="mot de passe">
</div>
<div class="row align-items-center">
    <div class="form-group text-center offset-3 w-50">
        <input type="submit" class="form-control" id="ok" name="ok" value="Envoyez">
    </div>
</div>
<br>
<?= form_close(); ?>