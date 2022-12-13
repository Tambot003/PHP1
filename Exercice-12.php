<h1 style="color: #00FF00;  ">
    Exercice 12
</h1>
</h1>
<p style="color: #229954; ">A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG</p>
<hr >
<?php 
$student = array ("Mickael"=> "FRA", " Marie Claire" => "ENG" ,"Vigile"=>"ESP"  );
foreach ($student as $prenom => $lang) {

    echo "<bold style ='font-weight: bold;' > $prenom   ->    $lang  ," , " </bold>";
    switch($lang){
        case "FRA":
            echo "Bonjour " . $prenom ."<br>";  
            break;
            case "ENG":
                echo "Hello" . $prenom."<br>";
                break;
        case "ESP":
            echo "Halo" . $prenom;        
    }
}
