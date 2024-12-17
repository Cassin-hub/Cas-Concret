<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Bonjour, $username";
} else {
    header("location: connexion.php");
    exit();
}
// if (isset($_SESSION['username']) && $_SESSION['username'] !== null) {
//     header("location: deconnexion.php");
//     exit();
// }
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <?php 
 echo '<a href="deconnexion.php">Déconnexion</a>';
?>
</body>

</html>