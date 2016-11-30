<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>page2</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>page2</h1>
    <p>
        je suis <?php echo $_SESSION['nom'].' '.$_SESSION['prenom'];?> et jai <?php echo $_SESSION['age'];?> ans.
    </p>
</body>
</html>
