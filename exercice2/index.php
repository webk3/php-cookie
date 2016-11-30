<?php
session_start();


$_SESSION['nom']= 'kormann';
$_SESSION['prenom']= 'jean-charles';
$_SESSION['age'] = '23';

?>
<!DOCTYPE html>
<html>
<head>
    <title>exercice 2</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Exercice 2</h1>
    <a href="page2.php">page suivante</a>
</body>
</html>
