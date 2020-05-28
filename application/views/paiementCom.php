<div class="col-12">
<div class="row">

<!----------------------------------------- Formulaire ajouts--------------------------------------------->
<div class=" container col-8">
    <div class="col-12">
            <fieldset class="row">
                <legend>Paiement</legend> 
                <form action="" method="POST">
                 <div  class="form-group text-center offset-1.5 w-100">
                <label for="cb">Numéro carte bancaire :</label>
                <input type="text" id="nom" name="nom" class="form-control fontAwesome" placeholder="Numéro..." >
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                <label for="Prenom">Prenom du titulaire :</label>
                <input type="text" id="Prenom" name="Prenom" class="form-control fontAwesome" placeholder="Prenom et Nom..." >
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                <label for="crypto">Cryptogramme :</label>
                <input type="text" id="crypto" name="crypto" class="form-control fontAwesome" placeholder="Exemple 000..." >
                </div>
                <div  class="form-group text-center offset-1.5 w-100">
                <label for="adresse">Adresse de facturation :</label>
                <input type="text" id="adresse" name="adresse" class="form-control fontAwesome" placeholder="Adresse..." >
                </div>
                </form>
                <div  class="form-group text-center offset-1.5 w-100">
                <a href="<?php echo site_url("admin/BonLiv");?>" class="btn btn-dark offset-1.5" target="_blank"> Valider le paiement</a>
                </fieldset>
</div>
</div>    
</div>
</div>

