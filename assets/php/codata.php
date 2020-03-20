<?php
$bdd = null;
try{

    $bdd = new PDO('mysql:host=localhost;port=3306;charset=utf8;dbname=projet_git', 'root', 'root');
}catch (PDOException $ex){
    print($ex->getMessage());
}
?>