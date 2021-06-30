<?php
require_once("model/model.php");

function connect() {
    $login = $_POST['login'];
    $passw = $_POST['passw'];

    $user = getUser($login);

    if ($user) {

        $hash = password_hash($passw, PASSWORD_DEFAULT);

        if (password_verify($passw, $user['passw'])) {
            $_SESSION['login'] = $user['login'];
            $_SESSION['id'] = $user['id'];

            $user["passw"] = null;

            require_once("view/welcomeView.php");

        } else showIndex("Mot de passe incorrect.");

    } else showIndex("Ce compte n'existe pas.");
}

function showIndex($error="") {
    $errorMsg = $error;
    require_once("view/indexView.php");
}