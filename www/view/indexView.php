<?php $title = "Bienvenue"; ?>

<?php ob_start(); ?>

<?php
if ($errorMsg != "") {
    echo("<div class=error><p>$errorMsg</p></div>");
}
?>
<h1>Bonjour!</h1>
<fieldset>
    <legend>Formulaire de connexion</legend>
    <form method="POST" action="/?action=connect">
        <label>
            Login
            <input type="text" name="login" id="login-input">
        </label>
        <br>
        <label>
            Password
            <input type="password" name="passw" id="passw-input">
        </label>
        <br>
        <input type="submit" value="Envoyer">
    </form>
</fieldset>

<?php $content = ob_get_clean(); ?>

<?php require_once("components/template.php"); ?>