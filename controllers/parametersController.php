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
$headings = filter_input(INPUT_POST, 'heading', FILTER_SANITIZE_NUMBER_INT, FILTER_REQUIRE_ARRAY) ?? [];


     // j'utilise la fonction native count pour conditionné qu'au moins 3 valeur sont entrés (3 cases cochés)
    if (count($headings) < 3) {
        // envoie ce message d'erreur
        $error['heading'] = "Veuillez entrez au moins trois valeur";
    } else {

        // sinon je boucle sur le tableau $headings pour m'assurré qu'aucune valeur inférieur a 0 ou superieur a 5 ne soit entré 
        foreach ($headings as $heading) {
            if ($heading < 0 || $heading > 5) {
        // envoie ce message d'erreur 
                $error['heading'] = "Veuillez entrer une valeur existante";
            }
    }               
    
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
    if ($articles < 1 || $articles >3) {
    // envoie ce message d'erreur
        $error['article'] = 'Selectionnez une valeur existante';
    }
}

            // FIN SECTION CHOIX NOMBRE D ARTICLE (radio)


            // CREATION DE COOKIE 

            setcookie('article',$articles,(time()+3600*24));


            // stocker l url dans le cookie en fonction de lavleur numerique go chercher l url correspondante
            setcookie('heading',json_encode($headings),(time()+3600*24));

            // FIN CREATION DE COOKIE



include(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/parameters.php');

include(__DIR__ . '/../views/templates/footer.php');
