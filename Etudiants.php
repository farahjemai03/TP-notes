<?php

//tableau de départ
$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17,
"Yassine" => 8, "Ines" => 12];

//Afficher chaque étudiant et sa note avec foreach
echo "Liste des etudiants:<br>";
foreach ($notes as $nom => $valeur){
    echo "$nom: $valeur<br>";
}

//Calculer et afficher la moyenne de la classe avec array_sum
$somme = array_sum($notes);
$nombreEtudiants = count($notes);

function calculerMoyenne ($somme, $nombreEtudiants){
    return $somme/$nombreEtudiants;
}

$moyenne = calculerMoyenne($somme, $nombreEtudiants);

echo "La moyenne de la classe = $moyenne<br>";

//Obtenir les étudiants admis (note ≥ 10) avec array_filter
echo "Les etudiants admis:<br>";
$admis = array_filter($notes, fn($n) => $n >=10); // parcourir le tableau pour ne garder que les valeurs> 10
//fn($n) => $n >= 10 : C'est une fonction fléchée (arrow function, introduite en PHP 7.4). Elle prend chaque note (représentée par $n) et renvoie true si la note est de 10 ou plus, ou false si elle est inférieure.

//Trier les notes et afficher le résultat
print_r ($admis); //affichage lisible du tableau (humanreadable)

//Bonus : avec array_map, ajouter 1 point à toutes les notes
echo "<br>Notes après Bonus:<br>";
$bonus = array_map(fn($notes) => $notes + 1 ,$notes);
print_r ($bonus);

?>