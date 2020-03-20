<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <meta name="referrer" content="origin">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="robots" content="index,follow">
    <title>Page de login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style-loggin.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body >

<?php
require "header.php"
?>

<div>
    <form  class="box"  action="assets/php/connexion.php" method="post">
        <h1>Inscription</h1>
        <div>
            <input id="nameField" onkeyup="verifInput(this)"  type="text" name="nom"
                   pattern="^([^0-9]*)$" placeholder="Name">
        </div>
        <div>
            <input id="firstnameField" onkeyup="verifInput(this)"  type="text" name="prenom"
                   pattern="^([^0-9]*)$" placeholder="Firstname">
        </div>
        <div>
            <input id="emailField" onkeyup="verifInput(this)"  type="Email" name="Email"
                   pattern="^([a-z0-9,!#\$%&'\*\+/=\?\^_`\{\|}~-]+(\.[a-z0-9,!#\$%&'\*\+/=\?\^_`\{\|}~-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,})){1}(;[a-z0-9,!#\$%&'\*\+/=\?\^_`\{\|}~-]+(\.[a-z0-9,!#\$%&'\*\+/=\?\^_`\{\|}~-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*\.([a-z]{2,}))*$" placeholder="Email">
        </div>
        <div>
            <button id="okey" name="form_login" onclick="envoye(this)" type="submit" disabled>Valider</button>
            <button id="stop" onclick="erase(this)" type="reset">Effacer</button>
        </div>
    </form>
</div>
</main>
<?php
require "footer.php"
?>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
