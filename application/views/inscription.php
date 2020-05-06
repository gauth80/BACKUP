
<!--TODO config->form_validation | js->infobulle() css->res pointbreak lg(992) && xs(-578)-->
<div class="row bk-form-ins col-12 m-0 px-0 py-2">
    <?= form_open('structure/inscription', ["class" => "col-sm-12 col-lg-4 mt-2"]); ?>

        <div class="form-group row <?= empty(form_error('name')) ? '' : 'has-error';?>">
            <label for="nom" class="offset-sm-1 offset-lg-4 col-sm-9">Votre nom&nbsp;:&nbsp;*</label>
            <input type="text" name="name" id="nom" class="form-control w-75 offset-sm-1 offset-lg-4" placeholder="dupont">
            <span class="text-warning offset-sm-1 offset-lg-4"><?= form_error('name');?></span>
        </div>

        <div class="form-group row <?= empty(form_error('username')) ? '' : 'has-error';?>">
            <label for="prenom" class="offset-sm-1 offset-lg-2 col-sm-10">Votre prénom&nbsp;:&nbsp;*</label>
            <input type="text" name="username" id="prenom" class="form-control w-75 offset-sm-1 offset-lg-2" placeholder="jean">
            <span class="text-warning offset-sm-1 offset-lg-2"><?= form_error('username');?></span>
        </div>

        <div class="form-group row <?= empty(form_error('city')) ? '' : 'has-error';?>">
            <label for="ville" class="offset-1 col-sm-11">Votre ville&nbsp;:&nbsp;*</label>
            <input type="text" name="city" id="ville" class="form-control w-75 offset-1" placeholder="Amiens">
            <span class="text-warning offset-1"><?= form_error('city');?></span>
        </div>

        <div class="form-group row <?= empty(form_error('street')) ? '' : 'has-error';?>">
            <label for="adresse" class="offset-sm-1 col-sm-9">Votre adresse&nbsp;:&nbsp;*</label>
            <input type="text" name="street" id="adresse" class="offset-sm-1 form-control w-75" placeholder="10 rue village green">
            <span class="text-warning offset-sm-1"><?= form_error('street');?></span>
        </div>

        <div class="form-group row <?= empty(form_error('zipcode')) ? '' : 'has-error';?>">
            <label for="codePostal" class="offset-sm-1 col-sm-9">Votre code postal&nbsp;:&nbsp;*</label>
            <input type="text" name="zipcode" id="codePostal" class="offset-sm-1 form-control w-75" placeholder="80000">
            <span class="text-warning offset-sm-1"><?= form_error('zipcode');?></span>
        </div>

        <div class="form-group row <?= empty(form_error('cell')) ? '' : 'has-error';?>">
            <label for="tel" class="offset-sm-1 col-sm-9">Votre numéro de téléphone&nbsp;:&nbsp;</label>
            <input type="text" name="cell" id="tel" class="offset-sm-1 form-control w-75" placeholder="06060606">
            <span class="text-warning offset-sm-1"><?= form_error('cell');?></span>
        </div>

        <div class="form-group row <?= empty(form_error('mail')) ? '' : 'has-error';?>">
            <label for="email" class="offset-1 col-sm-11">Votre email&nbsp;:&nbsp;*</label>
            <input type="text" name="mail" id="email" class="form-control offset-1 w-75" placeholder="exemple@outlook.com">
            <span class="text-warning offset-1"><?= form_error('mail');?></span>
        </div>

        <div class="form-group row <?= empty(form_error('password')) ? '' : 'has-error';?>">
            <label for="mdp" class="offset-sm-1 offset-lg-2 col-sm-10">Entrez un mot de passe&nbsp;:&nbsp;</label>
            <input type="password" name="password" id="mdp" class="offset-sm-1 offset-lg-2 form-control w-75" placeholder="celadoitrestersecret">
            <span class="text-warning offset-sm-1 offset-lg-2"><?= form_error('password');?></span>
        </div>

        <div class="form-group row <?= empty(form_error('comfirm_password')) ? '' : 'has-error';?>">
            <label for="mdp2" class="offset-sm-1 offset-lg-4 col-sm-9">Comfirmation du mot de passe&nbsp;:&nbsp;</label>
            <input type="password" name="comfirm_password" id="mdp2" class="offset-sm-1 offset-lg-4 form-control w-75" placeholder="celadoitrestersecret">
            <span class="text-warning offset-sm-1 offset-lg-4"><?= form_error('comfirm_password');?></span>
        </div>

        <?= form_submit("send", "Envoyez", ["class" => "btn btn-custom my-2 mx-2"], ["type" => "submit"]);?>
    <?= form_close(); ?>

    <figure class="row d-sm-none d-lg-flex col-md-8 p-0 m-0">
        <img class="wrap-form img-fluid" src="<?php echo base_url('assets/img/form/note.png')?>">   
    </figure>
</div>
