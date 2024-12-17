<?php
require_once 'config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username'] ?? "");

    $password = trim($_POST['password'] ?? "");

    $sql = "SELECT * FROM users WHERE username = :username";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([':username' => $username]);

    $user = $stmt->fetch();

    if (password_verify($password, $user['password'])) {

        $_SESSION['username'] = $username;

        header("location: index.php");
        exit();
    } else {
        echo "Mot de passe incorrect";
    }
}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>
    <form action="" method="POST">
        <div>
            <label for="username">veuillez saisir une nom d'utilasateur :</label>
            <input type="text" name="username" id="username" />
        </div>
        <div>
            <label for="password">Veuillez saisir un mot de passe :</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Connection</button>
    </form>
    <a href="inscription.php">S'inscrire</a>
</body>

</html>