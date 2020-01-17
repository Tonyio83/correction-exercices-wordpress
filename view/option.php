<div class="wrap">
    <form method="post" action="options.php">
        <?php 
            settings_fields('LAMANU_settings_cookie');
            do_settings_sections('config-cookie');
        ?>
        <label for="googleID">ID de suivi</label>
        <input type="text" name="googleID" id="googleID" placeholder="UA-XXXXXXXX-X" value="<?= get_option('googleID', 'UA-XXXXXXXX-X'); ?>">
        <?php submit_button('Envoyer'); ?>
    </form>
</div>