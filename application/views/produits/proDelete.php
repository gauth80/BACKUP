
                <h3 class="text-dark col-auto h3-produits">Supprimer un produits</h3>
                <?= form_open('produits/delete_produits', ["class" => "col-sm-12 col-lg-9 mt-2 form-produits"]); ?>

                <div class="row">
                    <p class="col-10 offset-1 mt-3"><i>PRUDENCE:</i>&nbsp;&lt;!&gt;&nbsp;Il n' y pas de Javascripts pour vous avertir</p>
                </div>
                <div class="form-group row">

                    <label for="proExist" class="offset-sm-1">Choisir un produits existant *</label>
                    <select name="pro_exist" id="proExist" class="form-control w-75 offset-sm-1">
                        <?php foreach($data as $pro){?>
                        <option value="<?php echo $pro->PRO_ID;?>"><?php echo $pro->PRO_LIBELLE;?></option>
                        <?php };?>
                    </select>
                </div>



                <?= form_submit("delete_pro", "supprimer", ["class" => "btn btn-custom my-2 mx-2 col-auto"], ["type" => "submit"]);?>
                <?= form_close(); ?>
