<?php
require_once 'config.php';

if (isset($_POST['password']) && isset($_POST['username'])) {

    $username = $_POST['username'];

    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password)

VALUES (:username, :password)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([':username' => $username, ':password' => $hashedPassword]);

    header("location: connexion.php");
    exit();
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
        <button type="submit">Entrer</button>
    </form>
</body>

</html>