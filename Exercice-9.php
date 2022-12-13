<h1 style="color: #00FF00;  ">Exarcice 9</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de
    plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>
<hr>
<?php

$sex = "male";
$age = 2;

if ($age > 20   &&   $sex = "male") {

    echo  "<bold style ='font-weight: bold;' >this peron is Taxable </bold>";
} elseif ($age >= 18   &&  $age <= 35 && $sex  = "fammel") {
    echo  "you are a taxabale person !";
} else {
    echo "<bold style ='font-weight: bold;' >this person  is not Taxable</bold>";
}
