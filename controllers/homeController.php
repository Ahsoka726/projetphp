<?php

include(__DIR__.'/../views/templates/header.php');

$urlFeed = "https://www.eveonline.com/rss/news";

$nbrArticles = 6;

$rss = simplexml_load_file($urlFeed);
$rssSport = simplexml_load_file($urlFeed);
$rssTech = simplexml_load_file($urlFeed);

$tableauInfos = array();


/**
 * @param object $rss Je récupére les liens des RSS que l'utilisateur à choisis
 * @param int $nbrArticles Je récupére le nombre d'article que l'utilisateur à choisis 
 * Ceux-ci doivent être 6 - 9 ou 12
 * @param array $array Je stocke dans le tableau associé les données
 * 
 * @return array Je retourne le tableaux d'entrée remplis des informations néccéssaires à l'affichage
 */
function rssFeed(object $rss,int $nbrArticles,array $array):array{
    for ($i=0; $i < $nbrArticles ; $i++) { 
        $array[$i]['title'] = $rss->channel->item[$i]->title;
        $array[$i]['link'] = $rss->channel->item[$i]->link;
        $array[$i]['desc'] = $rss->channel->item[$i]->description;
    }
    // var_dump($array);
    return $array;
}

$tableauInfos = rssFeed($rss,$nbrArticles,$tableauInfos);
var_dump($tableauInfos);






include(__DIR__ . '/../views/home.php');


include(__DIR__.'/../views/templates/footer.php');
