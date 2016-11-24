<?php

// Connexion à la base de données

$options = array(
    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND    => 'SET NAMES \'UTF8\''
);

$strConnection = 'mysql:host=localhost;dbname=shop';

try {
    $pdo = new PDO($strConnection, 'Alex', 'admin', $options);
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}