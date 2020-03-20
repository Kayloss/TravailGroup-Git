<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Groupe B2</title>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>
    <nav>
        <h1>LEBONCOINCOIN</h1>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="form_contact.php">Contact</a></li>
            <li><a href="#">Shop</a></li>
            <?php
            if(isset($_SESSION['id'])){
                echo '<li><a href="#">Logout</a></li>';
            }else{
                echo '<li><a href="#">Login</a></li>';
            }
            ?>
            <ul>
    </nav>
</header>