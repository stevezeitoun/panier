<?php
// on declare la session
session_start();
// on verifie si il y a une session
if (isset($_SESSION["panier"])) {
    # code...
// on prend en compte l'éventuelle supression d'un élément du tableau
    if (isset($_GET["delete"])) {
// permet de supprimer élément tableau http://php.net/manual/fr/function.array-splice.php
        array_splice($_SESSION["panier"],$_GET["delete"], 1);
        }
// l'éventuelle supression a eu lieu et le panier est à jour
    foreach ($_SESSION["panier"] as $key => $value) {
        # code...
// on l'affiche
    echo "tu as dans ton panier ". $value. " <a href='panier.php?delete=$key'>supprimer</a>".  '<br />';
    }

}

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>panier</title>
    </head>
    <body>

        <a href="index.php">retour a l'acceuil</a><br>


    </body>
</html>
