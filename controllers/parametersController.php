<?php

require_once(__DIR__ . '/./constants.php');

include(__DIR__ . '/../views/templates/header.php');


$error = []; // tableau d'erreur


            // Conditions pour le choix de rubrique (checkbox)
$array_length = 0;
$headings = filter_input(INPUT_POST, 'heading', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];
     // si il n y a pas 3 valeur min msg error sinon
    foreach ($headings as $value) {
        $array_length++;
    }

    if ($array_length <= 3) {
        $error['heading'] = "Veuillez entrez au moins trois valeur";
    } else {
        foreach ($headings as $heading) {
            if ($heading < 0 || $heading > 5) {
                $error['heading'] = "Veuillez entrer une valeur existante";
            }else {
                
            }
    }               
    
}  


            // Fin de la conditions pour le choix de rubrique (checkbox)



            // Conditions pour le choix nombres d'article (radio)

$articles = intval(filter_input(INPUT_POST, 'article', FILTER_SANITIZE_NUMBER_INT));
if (empty($articles)) {
    $error['article'] = 'Veuillez selectionnez une valeur';
} else {
    if ($articles <0 || $articles >2) {
        $error['article'] = 'Selectionnez une valeur existante';
    }
}
var_dump($error);

            // Fin conditions pour le choix nombre d'article
















include(__DIR__ . '/../views/parameters.php');

include(__DIR__ . '/../views/templates/footer.php');
