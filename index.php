<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Bonjour, $username";
} else {
    header("location: connexion.php");
    exit();
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