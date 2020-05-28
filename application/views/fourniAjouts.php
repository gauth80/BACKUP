<div class="col-12">
    <div class="row">

        <!----------------------------------------- Formulaire ajouts--------------------------------------------->
        <?php echo form_open_multipart("fournisseurs/fourniAjouts", "class='container col-8'"); ?>
            <div class=" container col-8">
                <div class="col-12">
                        <fieldset class="row">
                                <legend>Ajouts</legend> 
                                <div  class="form-group text-center offset-3 w-50">
                                    <label for="adresse">Adresse :</label>
                                    <input type="text" id="adresse" name="adresse" class="form-control fontAwesome" placeholder="Adresse..." value="<?php echo set_value('adresse'); ?>">
                                    <?php echo form_error('adresse'); ?>
                                </div>
                                <div  class="form-group text-center offset-3 w-50">
                                    <label for="ref">Références :</label>
                                    <input type="text" id="ref" name="ref" class="form-control fontAwesome" placeholder="références..." value="<?php echo set_value('ref'); ?>">
                                    <?php echo form_error('ref'); ?>
                                </div>
                                <div  class="form-group text-center offset-1.5 w-100">
                                    <input class="btn btn-dark" type="submit" id="ok" name="ok" value="ajouter">
                                </div>
                        
                        </fieldset>
                    <?php echo form_close() ?>
                    <br>
                </div>
            </div>
    </div>
</div>

