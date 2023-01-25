<?php

if(!isset($_COOKIE['test'])){
$nbrArticles = 6;
$heading= array(
'0',
'1',
'2',);
}
$rssGameLink = "https://www.eveonline.com/rss/news";
$rssSportLink = "https://rmcsport.bfmtv.com/rss/football/";
$rssNewsLink = "https://www.lemonde.fr/rss/une.xml";
$rssTechLink = "https://www.01net.com/actualites/feed/";
$rssMusicLink = "https://www.hits1radio.com/category/music/feed/";

$rssGameObject = simplexml_load_file($rssGameLink);
$rssSportObject = simplexml_load_file($rssSportLink);
$rssNewsObject = simplexml_load_file($rssNewsLink);
$rssTechObject = simplexml_load_file($rssTechLink);
$rssMusicObject = simplexml_load_file($rssMusicLink);
$rss = [];
$rss[0] = $rssGameArray = array();
$rss[1] = $rssSportArray = array();
$rss[2] = $rssNewsArray = array();
$rss[3] = $rssTechArray = array();
$rss[4] = $rssMusicArray = array();

foreach ($heading as $value) {
    switch ($value) {
        case '0':
            $rss[0] = RssFeed($rssGameObject,$nbrArticles,$rssGameArray);
            break;
        case '1':
            $rss[1] =  RssFeed($rssSportObject,$nbrArticles,$rssSportArray);
            break;
        case '2':
            $rss[2] = RssFeed($rssNewsObject,$nbrArticles,$rssNewsArray);
            break;
        case '3':
            $rss[3] =   RssFeed($rssTechObject,$nbrArticles,$rssTechArray);
            break;
        case '4':
            $rss[4] =   RssFeed($rssMusicObject,$nbrArticles,$rssMusicArray);
            break;
        default:
            $error['rssIncorrect'] = 'lien rss non trouvé';
        break;
    }
}

/**
 * @param object $rss Je récupére le liens du RSS que l'utilisateur à choisis
 * @param int $nbrArticles Je récupére le nombre d'article que l'utilisateur à choisis 
 * Ceux-ci doivent être 6 - 9 ou 12 défault 6
 * @param array $array Je stocke dans le tableau associé les données
 * 
 * @return array Je retourne le tableaux renseignez en entrée remplis des informations néccéssaires à l'affichage
 */
function rssFeed(object $rss,int $nbrArticles,array $array):array{
    for ($i=0; $i < $nbrArticles ; $i++) { 
        $array[$i]['title'] = $rss->channel->item[$i]->title;
        $array[$i]['link'] = $rss->channel->item[$i]->link;
        $array[$i]['desc'] = substr($rss->channel->item[$i]->description,0,200);
    }
    // var_dump($array);
    return $array;
}

include(__DIR__ . '/../views/templates/header.php');

include(__DIR__ . '/../views/home.php');


include(__DIR__.'/../views/templates/footer.php');