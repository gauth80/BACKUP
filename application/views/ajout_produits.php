<?= form_open_multipart("jarditou/ajout_produits", 'class="form_control"'); ?>
<br>
<!--REFERENCE -->
<div class="form-group text-center offset-3 w-50">
    <label for="ref" class="sr-only">Référence</label>
    <input type="text" class="form-control" id="ref" name="ref" placeholder="Réference">
</div>
<!--CATEGORIE -->
<div class="form-group text-center offset-3 w-50">
    <label for="cat" class="sr-only">Catégorie</label>
    <select class="form-control" name="cat" id="cat">
        <option disabled selected>Catégorie</option>
        <?php
        foreach ($select_cat as $row) {
        ?>
            <option value="<?= $row->cat_id ?>"><?= $row->cat_nom ?></option>
        <?php
        }
        ?>
    </select>
</div>
<!--LIBELLE -->
<div class="form-group text-center offset-3 w-50">
    <label for="lib" class="sr-only">Libellé</label>
    <input type="text" class="form-control" name="lib" id="lib" placeholder="Libelle">
</div>
<!--DESCRIPTION -->
<div class="form-group text-center offset-3 w-50">
    <label for="desc" class="sr-only">Description</label>
    <textarea class="form-control" name="desc" id="desc" placeholder="Description"></textarea>
</div>
<!--PRIX -->
<div class="form-group text-center offset-3 w-50">
    <label for="prix" class="sr-only">Prix</label>
    <input type="number" class="form-control" step="0.01" name="prix" id="prix" placeholder="Prix">
</div>
<!--STOCK -->
<div class="form-group text-center offset-3 w-50">
    <label for="stock" class="sr-only">Stock</label>
    <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock">
</div>
<!--COULEUR -->
<div class="form-group text-center offset-3 w-50">
    <label for="couleur" class="sr-only">Couleur</label>
    <input type="text" class="form-control" name="couleur" id="couleur" placeholder="Couleur">
</div>
<!--FORMAT PHOTO -->
<div class="form-group text-center offset-3 w-50">
    <label for="photo" class="sr-only">Extension</label>
    <input type="file" class="form-control-file" name="ext" id="ext" placeholder="Extension">
</div>
<!--BLOQUAGE -->
<div class="form-group text-center offset-3 w-50">
    <label for="bloque">Bloqué à la vente:</label><br>
    <input type="radio" name="bloque" id="bloque" value="1"><span>Oui</span>
    <input type="radio" name="bloque" id="bloque" value="0" checked><span>Non</span>
</div>

<div class="form-group text-center offset-3 w-50">
    <input type="submit" class="form-control" name="ajout" value="Ajouter ce produit">
</div>
<?= form_close(); ?>