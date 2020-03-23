<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <meta name="referrer" content="origin">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="robots" content="index,follow">
    <title>Page de contact</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body >

<?php
require "header.php"
?>

<div class="containerBis">
  <div style="text-align:center">
    <h2>Contactez-nous</h2>
    <p>Laissez-nous un message, nous nous ferons un plaisir de l'ignorer.. ou non</p>
  </div>
  <div class="row">
    <div class="column">
        <img src="assets/img/Finger-Duck-You.jpg" style="width:100%; padding-top:30px; padding-right:30px">
    <!--  <img src="assets/img/Finger-Duck-You.jpg" style="width:100%; vertical-align:bottom"> -->
    </div>
    <div class="column">
<!--      <form action="/action_page.php"> -->
        <label for="fname">Prénom</label>
        <input type="text" id="fname" name="firstname" placeholder="Votre prénom..">
        <label for="lname">Nom</label>
        <input type="text" id="lname" name="lastname" placeholder="Votre nom..">
        <label for="country">Localisation</label>
<!--        <input type="text" id="country" name="country" placeholder="Votre pays.."> -->
        <select id="country" name="country">
          <option value="france">France</option>
          <option value="baignoire">Baignoire</option>
          <option value="yourgirl">YourGirl</option>
      </select>
        <label for="subject">Message</label>
        <textarea id="subject" name="subject" placeholder="Ecrire ici.." style="height:170px"></textarea>
        <input type="submit" value="Envoyer">
      </form>
    </div>
  </div>
</div>
</main>
<?php
require "footer.php"
?>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
