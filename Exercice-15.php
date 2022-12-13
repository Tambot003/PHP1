<h1 style="color: #00FF00;  ">
    Exercice 15
</h1>
</h1>
<p style="color: #229954; ">Créer une classe Personne (nom, prénom et date de naissance).Instancier 2 personnes et afficher leurs informations: nom, prénom et âge.$p1 = new Personne("DUPONT","Michel", "1980-02-19");$p2 =new Personne("DUCHEMIN","Alice", "1985-01-17");</p>
<hr >
<?php
$person1 = "DUPONT". "Michel";
$person2 = "DUCHEMIN" . "Alice";

$birt1 =  "1980-02-19";
$birth2 = "1985-01-17";
if ($birt1 = $person1 ){
    echo $person1 ." -" . $birt1;

} elseif{
    echo $person2 . " -" . $birth2;

} else {
    echo "cette person est nexist pas";
}

