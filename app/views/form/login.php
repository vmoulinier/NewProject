<form class="cd-form" method="post" id="login-form">

    <p class="fieldset">
        <label class="image-replace cd-email" for="signin-email">E-mail</label>
        <input class="full-width has-padding has-border" type="email" name="user_email" id="user_email" placeholder="E-mail">
        <span id="check-e"></span>
    </p>

    <p class="fieldset">
        <label class="image-replace cd-password" for="signin-password">Mot de passe</label>
        <input class="full-width has-padding has-border" id="password" name="password" type="password"  placeholder="Mot de passe">
    </p>
    <div id="error1">
        <!-- error will be showen here ! -->
    </div>
    <p class="fieldset">
        <input class="full-width has-padding" type="submit" value="Se connecter" name="btn-save" id="btn-submit">    </p>
</form>