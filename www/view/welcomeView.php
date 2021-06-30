<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <h1>Bonjour <?= $login ?>!</h1>
    <h2><a href="/">Accueil</a></h2>
    <h3>Here are some of your informations:</h3>
    <p>
        <?php var_dump($user); ?>
    </p>
</body>
</html>