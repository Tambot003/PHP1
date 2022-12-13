<h1 style="color: #00FF00;  ">
    Exercice 3
</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot «aujourd’hui» par le mot «demain». Afficher l’ancienne et la nouvelle phrase.</p>
<hr>
<?php

$string1 = "L'ANCIENNE   phrase----- ";
echo $string1;

$string = " Notre formation DL commence aujourd’hui";
echo $string;


echo "<hr>";

$str = " Notre formation DL commence aujourd’hui ";

echo str_replace("aujourd’hui", "demain", $str);
