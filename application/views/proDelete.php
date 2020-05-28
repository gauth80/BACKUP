

                <?= form_open('produits/delete_produits', ["class" => "col-sm-12 col-lg-9 p-2 m-5"]); ?>
                    <h3 class="titre-form-produits col-11 offset-1 mt-2">Supprimer un produits</h3>
                <div class="row col-11 offset-1">
                    <p class="text-muted"><i class="text-dark">PRUDENCE:</i>&nbsp;Il n' y pas de Javascripts pour vous avertir</p>
                </div>
                <div class="form-group row col-11 offset-1">

                    <label for="proExist" class=" col-11 offset-1">Choisir un produits existant *</label>
                    <select name="pro_exist" id="proExist" class="form-control w-75 offset-sm-1">
                        <?php foreach($data as $pro){?>
                        <option value="<?php echo $pro->PRO_ID;?>"><?php echo $pro->PRO_LIBELLE;?></option>
                        <?php };?>
                    </select>
                </div>



                <?= form_submit("delete_pro", "supprimer", ["class" => "btn btn-custom my-2 row col-sm-auto offset-2 px-2"], ["type" => "submit"]);?>
                <?= form_close(); ?>
