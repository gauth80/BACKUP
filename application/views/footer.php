<footer>
        <p>Recevez <span>nos offres exclusives</span></p>
        <?= form_open("") ?>
        <input type="text" name="mailoffres" id="mailoffres" placeholder="Votre adresse e-mail">
        <input type="submit" name="valider" id="valider" value="Valider">
        <?= form_close(); ?>

        <p><span>Suivez-nous</span> par ici !</p>
        <img id="visuel" src="<?php echo base_url('assets/img/FOOTER/')?>"></footer>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>
</body>

</html>