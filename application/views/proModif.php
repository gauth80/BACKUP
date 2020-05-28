  

                <?= form_open_multipart('produits/modifiez_produits', ["class" => "col-sm-12 col-lg-9 p-2 m-5"]); ?>
                    <h3 class="titre-form-produits col-11 offset-1 mt-2">Mis à jour du produits</h3>
                <?php validation_errors();?>
                    <div class="form-group row col-11 offset-1">
                        <label for="proExist" class="offset-1 col-11">Choisir un produits existant *</label>
                        <select name="pro_exist" id="proExist" class="form-control w-75 offset-sm-1">
                            <?php foreach($data as $pro){?>
                            <option value="<?php echo $pro->PRO_ID ;?>"><?php echo $pro->PRO_LIBELLE;?></option>
                            <?php };?>
                        </select>
                    </div>

                    <div class="form-group row col-11 offset-1">
                        <label for="catExist" class="offset-sm-1 col-11">Choisir une catégorie *</label>
                        <select name="cat_exist" id="catExist" class="form-control w-75 offset-sm-1">
                            <?php foreach($cat_exist as $cat){?>
                            <option value="<?php echo $cat->CAT_ID;?>"><?php echo $cat->CAT_LIBELLE;?></option>
                            <?php };?>
                        </select>
                    </div>

                    <div class="form-group row col-11 offset-1 <?= empty(form_error('pro_lib')) ? '' : 'has-error';?>">
                        <label for="libelle" class="offset-sm-1 col-11">Le libelle&nbsp;:&nbsp;*</label>
                        <input type="text" name="pro_lib" id="libelle" class="form-control w-75 offset-sm-1" placeholder="Gipson">
                        <span class="text-danger offset-sm-1"><?= form_error('pro_lib');?></span>
                    </div>

                    <div class="form-group row col-11 offset-1 <?= empty(form_error('pro_ref')) ? '' : 'has-error';?>">
                        <label for="ref" class="offset-sm-1 col-11">La ref&nbsp;:&nbsp;*</label>
                        <input type="text" name="pro_ref" id="ref" class="form-control w-75 offset-sm-1" placeholder="gui000">
                        <span class="text-danger offset-sm-1"><?= form_error('pro_ref');?></span>
                    </div>



                    <div class="form-group row col-11 offset-1 <?= empty(form_error('pro_prix')) ? '' : 'has-error';?>">
                        <label for="prix" class="offset-sm-1 col-11">Définir un prix&nbsp;:&nbsp;*</label>
                        <input name="pro_prix" id="prix" class="form-control w-75 offset-sm-1" placeholder="99.99" min-size="0" max-size="99999.99">
                        <span class="text-danger offset-sm-1"><?= form_error('pro_prix');?></span>
                    </div>

                    <div class="form-group row col-11 offset-1 <?= empty(form_error('pro_stock')) ? '' : 'has-error';?>">
                        <label for="stock" class="offset-sm-1 col-11">Entrer un stock&nbsp;:&nbsp;*</label>
                        <input name="pro_stock" id="stock" class="form-control w-75 offset-sm-1" min-size="0" max-size="500" placeholder="10">
                        <span class="text-danger offset-sm-1"><?= form_error('pro_stock');?></span>
                    </div>

                    <div class="form-group row col-11 offset-1 <?= empty(form_error('pro_desc')) ? '' : 'has-error';?>">
                        <label for="desc" class="offset-sm-1 col-11">Indiquez une inscription&nbsp;:&nbsp;*</label>
                        <textarea name="pro_desc" id="desc" class="form-control w-75 offset-sm-1" min-size="0" max-size="500" placeholder="Il étais une fois.."></textarea>
                        <span class="text-danger offset-sm-1"><?= form_error('pro_desc');?></span>
                    </div>
     
                    <div class="form-group row col-11 offset-1 <?= empty(form_error('err_img')) ? '' : 'has-error';?>">
                        <label for="stock" class="offset-sm-1 col-11">Modifiez l'image&nbsp;:&nbsp;*</label>
                        <input type="file" name="img" id="stock" class="form-control offset-sm-1 w-75">
                        <span class="text-danger offset-sm-1"><?= form_error('err_img');?></span>
                    </div>

                <?= form_submit("modifiez_pro", "Modifiez", ["class" => "btn btn-custom my-2 col-sm-auto  offset-2 px-2"], ["type" => "submit"]);?>
                <?= form_close(); ?>
 