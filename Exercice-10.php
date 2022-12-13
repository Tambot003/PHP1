<h1 style="color: #00FF00;  ">Exercice 10</h1>
<p style="color: #229954; ">A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</p>
<hr>

<body>
    <style style="background-color: #00FF00;"></style>
</body>

<?php

$payer =  152;
$verse = 200;
$reste = $verse - $payer;

$dix = floor($reste / 10);   //floor ===  Arrondit à l'entier inférieur
$reste = $reste % 10;

$cinq = floor($reste / 5);
$reste = $reste % 5;

$deux  = floor($reste / 2);
$reste = $reste % 2;

$un = floor($reste / 1);
$reste = $reste % 1;


echo "Billet de 10€ : $dix<br>" . "billet de 5€ : $cinq<br>" . "Billet de 2€ : $deux<br>" . "billet de 1€ : $un";
