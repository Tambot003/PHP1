<h1 style="color: #00FF00;  ">Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)</p>
<hr>

<?php

$quantité = 5;
$article = 9.99;
$taux = 0.2;

$facuter =  ($article + ($article *  $taux)) * $quantité;

echo "  -------------".$article;
echo "<br>";
echo "  -------------".$quantité;
echo "<br>";
echo "  -------------".$taux;
echo  "<br>";

echo " Total est:  ". $facuter;
