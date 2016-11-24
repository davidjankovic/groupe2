<?php

session_start();

require_once 'inc/functions.php';
require_once 'inc/dbConnection.php';

if(isset($_POST['login'])) {
    $user = getUserByLogin($pdo, $_POST['email']);

    if(!empty($user)) {
        // L'utilisateur existe
        if(password_verify($_POST['pass'], $user['password'])) {
            $_SESSION['user'] = [
                'login' => $user['login'],
                'lastname' => $user['lastname'],
                'firstname' => $user['firstname'],
                'role' => $user['role'],
            ];
        }
        else {
            // Message : connexion impossible
        }
    } else {
        // Message : connexion impossible
    }
}

?><!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<form action="#" method="post">
    <input type="text" name="email" placeholder="Login">
    <input type="password" name="pass" placeholder="Mot de passe">
    <button type="submit" name="login">Connexion</button>
</form>
</body>
</html>