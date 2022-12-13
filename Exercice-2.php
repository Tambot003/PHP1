<h1 style="color: #00FF00;  ">
    Exercice 2
</h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci.</p>
<hr>
<?php
$echo = "vous avez cette number des MOTE: ";
$string = " Notre formation DL commence aujourd’hui ";
echo $echo;
echo  str_word_count($string);
