<?php
require_once "config.php";
require_once "fonctions.php";

$notes = ["Mohamed" => 14, "Sami" => 9, "Amel" => 17,"Yassine" => 8, "Ines" => 12];

//Afficher le tableau des étudiants
echo "Liste des etudiants:<br>";
AfficherNotes($notes);

//Moyenne de la classe
$moyenne = calculerMoyenne($notes);
echo "La moyenne de la classe = $moyenne<br>";

//Afficher les étudiants admis
echo "Les etudiants admis: <br>";
$admis = TrierAdmis($notes, SEUIL_ADMIS);
print_r($admis) ;

//Ajoutr Bonus
echo "<br> Notes après Bonus: <br>";
$bonus = AjouterBonus($notes,1);
print_r($bonus) ;

?>