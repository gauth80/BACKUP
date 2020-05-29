   <div class=" container col-8">
       <div class="col-12">
           <fieldset class="row">
               <legend>Modification d'un client</legend>
               <?= form_open("Clients/cliModif/" . $detail->CLI_ID, 'class="form_control"'); ?>
               <div class="form-group text-center">
                   <label for="lastname" class="sr-only">Nom</label>
                   <input type="text" id="lastname" name="lastname" class="form-control text-center" value="<?php echo set_value('lastname', $detail->CLI_NOM); ?>">
                   <?php echo form_error('lastname'); ?>
               </div>
               <div class="form-group text-center">
                   <label for="firstname" class="sr-only">Prénom</label>
                   <input type="text" id="firstname" name="firstname" class="form-control text-center" value="<?php echo set_value('firstname', $detail->CLI_PRENOM); ?>">
                   <?php echo form_error('firstname'); ?>
               </div>
               <div class="form-group text-center">
                   <label for="mail" class="sr-only">E-mail</label>
                   <input type="email" id="mail" name="mail" class="form-control text-center" value="<?php echo set_value('mail', $detail->CLI_MAIL); ?>">
                   <?php echo form_error('mail'); ?>
               </div>
               <div class="form-group text-center">
                   <label for="cell" class="sr-only">Téléphone</label>
                   <input type="text" id="cell" name="cell" class="form-control text-center" value="<?php echo set_value('cell', $detail->CLI_TEL); ?>">
                   <?php echo form_error('cell'); ?>
               </div>
               <div class="form-group text-center">
                   <label for="street" class="sr-only">Adresse (utilisé pour la facturation)</label>
                   <input type="text" id="street" name="street" class="form-control text-center" value="<?php echo set_value('street', $detail->CLI_ADRESSE_FACTURATION); ?>">
                   <?php echo form_error('street'); ?>
               </div>
               <div class="form-group text-center">
                   <label for="city" class="sr-only">Ville</label>
                   <input type="text" id=city name=city class="form-control text-center" value="<?php echo set_value('city', $detail->CLI_VILLE); ?>">
                   <?php echo form_error('city'); ?>
               </div>
               <div class="form-group text-center">
                   <label for=zipcode class="sr-only">Code Postal</label>
                   <input type="text" id=zipcode name=zipcode class="form-control text-center" value="<?php echo set_value('zipcode', $detail->CLI_CP); ?>">
                   <?php echo form_error('zipcode'); ?>
               </div>
               <div class="form-group text-center">
                   <input type="submit" id="modif" name="modif" value="Modifier cette catégorie">
               </div>
               <?= form_close(); ?>
           </fieldset>
       </div>
       <br>
   </div>
   <div class="text-center">
       <a href="<?php echo site_url("Clients/cli_list"); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true" title="Retour à la page précédente">Retour à la page précédente</a>
   </div>
   <br>