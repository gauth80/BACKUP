<?= form_open("jarditou/contact", 'class="form_control"'); ?>
<br>
<!-- Nom -->
<div class="form-group text-center offset-3 w-50">
    <label for="nom" class="sr-only">Nom</label>
    <input type="text" id="nom" class="form-control mb-4" name="nom" placeholder="Nom">
</div>
<!-- Prénom -->
<div class="form-group text-center offset-3 w-50">
    <label for="prenom" class="sr-only">Prénom</label>
    <input type="text" id="prenom" class="form-control" name="prenom" placeholder="Prénom">
</div>
<!-- Sexe -->
<div class="form-group text-center offset-3 w-50">
    <label for="sexe" class="sr-only">Sexe:</label>
    <input type="radio" class="sexe" name="sexe" id="sexe" value="Femme"><label for="sexe">Femme
        <input type="radio" class="sexe" name="sexe" id="sexe" value="Homme" checked><label for="sexe">Homme
</div>
<!-- Date de naissance -->
<div class="form-group text-center offset-3 w-50">
    <label for="ddn" class="sr-only">Date de naissance</label>
    <input type="date" class="form-control" id="ddn" name="ddn" placeholder="Date de naissance">
</div>
<!-- Code postal -->
<div class="form-group text-center offset-3 w-50">
    <label for="cpostal" class="sr-only">Code postal</label>
    <input type="text" class="form-control" id="cpostal" name="cpostal" placeholder="Code postal">
</div>
<!-- Adresse -->
<div class="form-group text-center offset-3 w-50">
    <label for="adresse" class="sr-only">Adresse</label>
    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
</div>
<!-- Ville -->
<div class="form-group text-center offset-3 w-50">
    <label for="ville" class="sr-only">Ville</label>
    <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">
</div>
<!-- Adresse mail -->
<div class="form-group text-center offset-3 w-50">
    <label for="email" class="sr-only">Adresse mail</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@exemple.fr">
</div>
<!-- Sujet -->
<div class="form-group text-center offset-3 w-50">
    <label for="sujet" class="sr-only">Sujet</label>
    <select id="sujet" class="form-control" name="sujet">
        <option value="0" selected disabled>-- Veuillez choisir un sujet --
        <option value="1">Mes commandes
        <option value="2">Question sur le produit
        <option value="3">Réclamation
        <option value="4">Autres
        </option>
    </select>
</div>
<!-- Question -->
<div class="form-group text-center offset-3 w-50">
    <label for="question" class="sr-only">Question</label>
    <textarea name="question" class="form-control" id="question" placeholder="Votre question"></textarea>
</div>
<!-- Checkbox -->
<div class="form-group text-center offset-3 w-50">
    <label for="check"> J'accepte le traitement informatique de ce formulaire.</label>
    <input type="checkbox" id="check" name="checkbox" value="Coché" required>
</div>
<div class="row align-items-center">
    <div class="form-group ml-auto mr-auto text-center offset-3 w-50">
        <input type="submit" class="form-control" id="ok" name="ok" value="Envoyez">
        <input type="reset" class="form-control" id="cancel" name="cancel" value="Annuler">
    </div>
</div>
<?= form_close(); ?>