<?php

require_once(__DIR__ . '/./constants.php');


$error = []; // tableau d'erreur

            // SECTION CHOIX D AFFICHAGE

        // je recupere mes article grace a la contante INPUT POST et je procede au nettoyage que j'inclus dans une variable $colors
$colors = filter_input(INPUT_POST, 'colors', FILTER_SANITIZE_SPECIAL_CHARS);
        // je fais ma condition
    if ($colors != 'Light' || $colors != 'Dark') {
    
}

            // FIN SECTION CHOIX D AFFICHAGE


            // SECTION CHOIX DE RUBRIQUE (checkbox)

 // je recupere mes article grace a la contante INPUT POST et je procede au nettoyage que j'inclus dans une variable $headings
$headings = filter_input(INPUT_POST, 'heading', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY) ?? [];


     // j'utilise la fonction native count pour conditionné qu'au moins 3 valeur sont entrés (3 cases cochés)
     if(!in_array($headings,HEADINGS)){
        // envoie ce message d'erreur
        $error['heading'] = "Veuillez entrez au moins trois valeur";
    }

            // SECTION CHOIX DE RUBRIQUE (checkbox) 



            // SECTION CHOIX NOMBRE D ARTICLE (radio)

    // je vais chercher mes article grace a la contante INPUT POST et je procede au nettoyage que j'inclus dans une variable $article
$articles = intval(filter_input(INPUT_POST, 'article', FILTER_SANITIZE_NUMBER_INT));

    // si $article est vide (aucune case cochée) 
if (empty($articles)) {
    // envoie ce message d'erreur
    $error['article'] = 'Veuillez selectionnez une valeur';
    // sinon si la valeur séléctionné n'est pas comprise entre 1 et 3
} else {
}

            // FIN SECTION CHOIX NOMBRE D ARTICLE (radio)


            // CREATION DE COOKIE 

            setcookie('article',$articles,(time()+3600*24));

            setcookie('heading',json_encode($headings),(time()+3600*24));

            // FIN CREATION DE COOKIE



include(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/parameters.php');

include(__DIR__ . '/../views/templates/footer.php');
