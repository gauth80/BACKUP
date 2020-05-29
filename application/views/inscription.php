
<!--TODO config->form_validation | js->infobulle() css->res pointbreak lg(992) && xs(-578)-->
<div class="row bk-form-ins col-12 m-0 px-0 py-2">
    <?= form_open('clients/inscription', ["class" => "col-sm-12 col-lg-4 mt-2"]); ?>

    <div class="form-group row <?= empty(form_error('lastname')) ? '' : 'has-error'; ?>">
        <label for="lastname" class="offset-sm-1 offset-lg-4 col-sm-9">Nom&nbsp;:&nbsp;*</label>
        <input type="text" name="lastname" id="lastname" class="form-control w-75 offset-sm-1 offset-lg-4" placeholder="Dupont">
        <span class="text-warning offset-sm-1 offset-lg-4"><?= form_error('lastname'); ?></span>
    </div>

    <div class="form-group row <?= empty(form_error('firstname')) ? '' : 'has-error'; ?>">
        <label for="firstname" class="offset-sm-1 offset-lg-2 col-sm-10">Prénom&nbsp;:&nbsp;*</label>
        <input type="text" name="firstname" id="firstname" class="form-control w-75 offset-sm-1 offset-lg-2" placeholder="Jean">
        <span class="text-warning offset-sm-1 offset-lg-2"><?= form_error('firstname'); ?></span>
    </div>

    <div class="form-group row <?= empty(form_error('city')) ? '' : 'has-error'; ?>">
        <label for="city" class="offset-1 col-sm-11">Ville&nbsp;:&nbsp;*</label>
        <input type="text" name="city" id="city" class="form-control w-75 offset-1" placeholder="Amiens">
        <span class="text-warning offset-1"><?= form_error('city'); ?></span>
    </div>

    <div class="form-group row <?= empty(form_error('street')) ? '' : 'has-error'; ?>">
        <label for="street" class="offset-sm-1 col-sm-9">Adresse&nbsp;:&nbsp;*</label>
        <input type="text" name="street" id="street" class="offset-sm-1 form-control w-75" placeholder="10 rue village green">
        <span class="text-warning offset-sm-1"><?= form_error('street'); ?></span>
    </div>

    <div class="form-group row <?= empty(form_error('zipcode')) ? '' : 'has-error'; ?>">
        <label for="zipcode" class="offset-sm-1 col-sm-9">Code postal&nbsp;:&nbsp;*</label>
        <input type="text" name="zipcode" id="zipcode" class="offset-sm-1 form-control w-75" placeholder="80000">
        <span class="text-warning offset-sm-1"><?= form_error('zipcode'); ?></span>
    </div>

    <div class="form-group row <?= empty(form_error('cell')) ? '' : 'has-error'; ?>">
        <label for="cell" class="offset-sm-1 col-sm-9">Numéro de téléphone&nbsp;:&nbsp;</label>
        <input type="text" name="cell" id="cell" class="offset-sm-1 form-control w-75" placeholder="0606060606">
        <span class="text-warning offset-sm-1"><?= form_error('cell'); ?></span>
    </div>

    <div class="form-group row <?= empty(form_error('mail')) ? '' : 'has-error'; ?>">
        <label for="mail" class="offset-1 col-sm-11">E-mail&nbsp;:&nbsp;*</label>
        <input type="email" name="mail" id="mail" class="form-control offset-1 w-75" placeholder="exemple@gmail.com">
        <span class="text-warning offset-1"><?= form_error('mail'); ?></span>
    </div>

    <div class="form-group row <?= empty(form_error('password')) ? '' : 'has-error'; ?>">
        <label for="password" class="offset-sm-1 offset-lg-2 col-sm-10">Entrez un mot de passe&nbsp;:&nbsp;</label>
        <input type="password" name="password" id="password" class="offset-sm-1 offset-lg-2 form-control w-75" placeholder="celadoitrestersecret">
        <span class="text-warning offset-sm-1 offset-lg-2"><?= form_error('password'); ?></span>
    </div>

    <div class="form-group row <?= empty(form_error('comfirm_password')) ? '' : 'has-error'; ?>">
        <label for="comfirm_password" class="offset-sm-1 offset-lg-4 col-sm-9">Retapez votre mot de passe&nbsp;:&nbsp;</label>
        <input type="password" name="comfirm_password" id="comfirm_password" class="offset-sm-1 offset-lg-4 form-control w-75" placeholder="celadoitrestersecret">
        <span class="text-warning offset-sm-1 offset-lg-4"><?= form_error('comfirm_password'); ?></span>
    </div>

    <div class="form-group row">
        <?= form_submit("send", "Envoyez", ["class" => "btn btn-custom my-2 mx-2"], ["type" => "submit"]); ?>
    </div>
    <?= form_close(); ?>

    <figure class="row d-sm-none d-lg-flex col-md-8 p-0 m-0">
        <img class="wrap-form img-fluid" src="<?php echo base_url('assets/img/form/note.png') ?>">
    </figure>
</div>

