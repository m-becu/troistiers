<?php $title = "Bienvenue"; ?>

<?php ob_start(); ?>

<h1>Bonjour <?= $login ?>!</h1>
<h2><a href="/">Accueil</a></h2>
<h3>Here are some of your informations:</h3>
<p><?php var_dump($user); ?></p>

<?php $content = ob_get_clean(); ?>

<?php require_once("components/template.php"); ?>