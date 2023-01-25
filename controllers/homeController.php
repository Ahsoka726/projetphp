<?php

require(__DIR__ . '/function.php');

if (!isset($_COOKIE['article']) && !isset($_COOKIE['heading'])) {
    $nbrArticles = 6;
    $heading = [0,1,2];
} else {
    $nbrArticles = $_COOKIE['article'];
    switch ($nbrArticles) {
        case '1':
            $nbrArticles = 6;
            break;
        case '2':
            $nbrArticles = 9;
            break;
        case '3':
            $nbrArticles = 12;
            break;
        default:
            
            break;
    }
    $heading = json_decode($_COOKIE['heading']);
    var_dump($heading);
}
foreach ($heading as $value) {
    $i=0;
    switch ($value) {
        case '0':
            $rss[$i] = RssFeed($rssGameObject, $nbrArticles, $rssGameArray);
            $i++;
            break;
        case '1':
            $rss[$i] =  RssFeed($rssSportObject, $nbrArticles, $rssSportArray);
            $i++;
            break;
        case '2':
            $rss[$i] = RssFeed($rssNewsObject, $nbrArticles, $rssNewsArray);
            $i++;
            break;
        case '3':
            $rss[$i] =   RssFeed($rssTechObject, $nbrArticles, $rssTechArray);
            $i++;
            break;
        case '4':
            $rss[$i] =   RssFeed($rssMusicObject, $nbrArticles, $rssMusicArray);
            $i++;
            break;
        default:
            $error['rssIncorrect'] = 'lien rss non trouvé';
            break;
    }
}






include(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/home.php');


include(__DIR__ . '/../views/templates/footer.php');
