<?php
// on déclare une session
session_start();
// pour verifier si il y a un article
if (isset($_GET["article"])) {
// pour verifier si il y a une session , si il n'ya pas de session
    if(!isset($_SESSION["panier"])) {
// on crée une session qui contient un tableau vide
    $_SESSION["panier"] = [];
    }
// on rajoute les articles dans le tableau de cette session
    array_push($_SESSION["panier"],$_GET["article"]);
}

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>ma boutique</h1>
        <ul>
            <li><a href="index.php?article=basket">basket</a></li>
            <li><a href="index.php?article=chaussure">chaussure</a></li>
            <li><a href="index.php?article=chaussette">chaussette</a></li>
        </ul>
        <p><a href="panier.php">Panier</a></p>
    </body>
</html>
