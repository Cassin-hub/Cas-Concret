<?php

$dsn = 'mysql:host=localhost;dbname=exercice_auth;charset=utf8';
$admin = 'root';
$passAdmin = '';

try {
    $pdo = new PDO($dsn, $admin, $passAdmin);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !" . '<br>';
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
