<form class="cd-form" method="post" id="register-form">
    <div class="fieldset">
        <label class="image-replace cd-email" for="signup-email">E-mail</label>
        <input class="full-width has-padding has-border" name="user_email" id="user_email" type="email" placeholder="E-mail">
        <span id="check-e"></span>
    </div>

    <div class="fieldset">
        <label class="image-replace cd-password" for="signup-password">Mot de passe</label>
        <input class="full-width has-padding has-border" id="password" name ="password" type="password"  placeholder="Mot de passe">
    </div>

    <div class="fieldset">
        <label class="image-replace cd-password" for="signup-password">Répéter mot de passe</label>
        <input class="full-width has-padding has-border" id="cpassword" name ="cpassword" type="password"  placeholder="Répéter mot de passe">
    </div>
    <div id="error">
        <!-- error will be showen here ! -->
    </div>
    <p class="fieldset">
        <input class="full-width has-padding" type="submit" value="Créer un compte" name="btn-save" id="btn-submit">
    </p>
</form>
