<?php
function est_vide($valeur) {
    return empty($valeur);
}

function est_entier($valeur) {
    return is_numeric($valeur);
}

function valid_champ(array &$arrayError, $valeur, string $key) {
    if (est_vide($valeur)) {
        $arrayError[$key] = "Champ obligatoire";
    } else if (!est_entier($valeur)) {
        $arrayError[$key] = "Veuillez saisir un nombre";
    }
}

 function valid_champ_user(array &$arrayError, $valeur, string $key) {
    if (est_vide($valeur)) {
        $arrayError[$key] = "Champ obligatoire";
    }
} 
function valide_password(array &$arrayError, $valeur , string $key, int $min=3, int $max=8){
    if (est_vide($valeur)) {
        $arrayError[$key]="Le password est obligatoire";
    } elseif (strlen($valeur) < $min || strlen($valeur) > $max) {
        $arrayError[$key]="Le password doit etre entre $min et $max";
    
        } 
      }
    



?>
