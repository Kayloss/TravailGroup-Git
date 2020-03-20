<?php
require_once "codata.php";
session_start();
if(isset($_POST['form_login'])) {
    $email = htmlspecialchars($_POST['Email']);
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $sql = "INSERT INTO users (prenom, nom, email) VALUES ('$prenom', '$nom', '$email')";

    if ($bdd->query($sql) == TRUE) {
        echo "Message enregistré";

    } else {
        echo "Erreur: " . $sql . "<br>" . $bdd->error;
    }
    header("location : ../../index.html");
    exit();
}
?>