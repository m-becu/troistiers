<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
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
</body>
</html>