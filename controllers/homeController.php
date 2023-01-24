<?php

include(__DIR__.'/../views/templates/header.php');

$rssGameLink = "https://www.eveonline.com/rss/news";
$rssSportLink = "https://rmcsport.bfmtv.com/rss/football/";
$rssNewsLink = "https://www.lemonde.fr/rss/une.xml";
$rssTechLink = "https://www.01net.com/actualites/feed/";
$rssMusicLink = "https://www.hits1radio.com/category/music/feed/";

$nbrArticles = 1;

$rssGameObject = simplexml_load_file($rssGameLink);
$rssSportObject = simplexml_load_file($rssSportLink);
$rssNewsObject = simplexml_load_file($rssNewsLink);
$rssTechObject = simplexml_load_file($rssTechLink);
$rssMusicObject = simplexml_load_file($rssMusicLink);

$rssGameArray = array();
$rssSportArray = array();
$rssNewsArray = array();
$rssTechArray = array();
$rssMusicArray = array();

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
        $array[$i]['desc'] = substr($rss->channel->item[$i]->description,0,250);
    }
    // var_dump($array);
    return $array;
}

$rssGameArray = rssFeed($rssGameObject,$nbrArticles,$rssGameArray);
$rssSportArray = rssFeed($rssSportObject,$nbrArticles,$rssSportArray);
$rssNewsArray = rssFeed($rssNewsObject,$nbrArticles,$rssNewsArray);

include(__DIR__ . '/../views/home.php');


include(__DIR__.'/../views/templates/footer.php');