<h1 style="color: #00FF00;  ">
    Exercice 14
</h1>
</h1>
<p style="color: #229954; ">Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>
<hr >
<?php

$birthDate = "8-10-1998";

$currentDate = date("d-m-Y");

$age = date_diff(date_create($birthDate), date_create($currentDate));

echo $birthDate . "<br>";
echo "Current age is ".$age->format("%y");


