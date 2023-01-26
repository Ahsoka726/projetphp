<?php


$rss = array(
    'Cinema',
    'International',
    'Space',
    'VideoGames',
    'Sexo'
);

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



include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/pages.php');
include(__DIR__ . '/../views/templates/footer.php');


include(__DIR__.'/../views/pages.php');




















include(__DIR__.'/../views/templates/footer.php');
