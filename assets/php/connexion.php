<?php
require_once "codata.php";
session_start();
if(isset($_POST['form_login'])) {
    $email = htmlspecialchars($_POST['Email']);
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $sql = "INSERT INTO users (prenom, nom, email) VALUES (:prenom, :nom, :email)";
    $sth=$bdd->prepare($sql, array(PDO::ATTR_CURSOR=>PDO::CURSOR_FWDONLY));
    $sth->execute(array(':prenom'=>$prenom, ':nom'=>$nom,':email'=>$email));
    header("Location: ../../index.html");
    exit();
}
?>