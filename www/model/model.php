<?php

function getUser($login) {
    $db = dbConnect();

    $sql = "SELECT id, login, passw FROM users WHERE login = ?";
    $req = $db->prepare($sql);

    $req->execute([
        $login,
    ]);
    $user = $req->fetch();

    return $user;
}

function dbConnect() {
    $bdd = null;

    $host = 'localhost';
    $db = 'troistiers';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];

    try {
        $bdd = new PDO($dsn, $user, $pass, $options);

    } catch (Exception $e) {
        die('Erreur : '.$e->getMessage());

    }

    return $bdd;

}