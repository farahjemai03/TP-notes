<?php

function AfficherNotes(array $notes): void{
    foreach ($notes as $nom => $valeur){
    echo "$nom: $valeur<br>";
    }
}

function calculerMoyenne ($notes){
    
    return array_sum($notes)/count($notes);
}

function TrierAdmis(array $notes, $seuil): array{
    return array_filter($notes, fn($n) => $n >= $seuil);
}

function AjouterBonus(array $notes, int $points): array{
    return array_map(fn($notes) => $notes + $points ,$notes);
}

?>