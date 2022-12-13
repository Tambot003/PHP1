<h1 style="color: #00FF00;  ">
    Exercice 13
</h1>
</h1>
<p style="color: #229954; ">Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de
coefficient). Elle devra être affichée avec 2 décimales.</p>
<hr >
   
<?php

echo Cmo([10, 12, 8, 19, 3, 16, 11, 13, 9 ]);
function Cmo(array $notes) : float{

    $nbNotes = count($notes);
    $sommeNotes = array_sum($notes);
    $moyenne = round($sommeNotes / $nbNotes, 2);

    return $moyenne;
}