<h1 style="color: #00FF00;  ">Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>
<hr>

<?php


$str = "Engage le jeu que je le gagne";
$str = str_replace(" ", "", $str); //enlever les espaces
$str = strtolower($str);          //Renvoie une chaîne en minuscules

$revert = strrev($str);           // Inverse une chaîne    

echo "<br>";
//créer une nouvelle variable $revert 

//if $str == $revert  
//c'est un palindorme
//sinon
//ce n'est pas un ^palindrome
if ($str == ($revert))
    echo "      C'EST UN PLINDROME";
else {
    echo "      C'EST PAS UN PALINDROME";
}
echo "<br>";
echo $str;
