<h1 style="color: #00FF00;  ">Exarcice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
<hr>
</p>

<?php
$prenome1 ="pouissin";
$age1    = 7;


$prenome2 ="Pupimlle";
$age2    = 8-9;



$prenome3 ="Minime";
$age3    = 10-11;


$prenome4 ="Codet";
$age4    = 12;

$resulteManier = "cest des MINUER";
$resultAdult = "cest des ADULT";

if($age1 . '<br>'. $age2 . '<br>'. $age3 . '<br>' .$age4 < 10)

    echo $resulteManier ;
else{
    echo $resultAdult;
}
   


