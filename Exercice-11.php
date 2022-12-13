<h1 style="color: #00FF00;  ">Exercice 11</h1>
<p style="color: #229954; ">Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.Exemple: tableau ➔«Peugeot», «Renault», «BMW», «Mercedes»</p>
<hr>

<?php

/*
key = $variable (Boite dont on stock la veleur)
valeur = ""; (Valeur stocké dans la boite)
string = "Hello"; (Chaine de caractères)
integer = 1; (Entier)

*/


$marques = ["Peogeut", " Renualt", " BMW", " Mercedes"];
$nbMarques= count($marques);
echo "Il y a . $nbMarques  marques de voitures dans le tableau " ;
// []  cest une tablue 
    foreach ($marques as $marque ){
        echo $marque;
    }
  
