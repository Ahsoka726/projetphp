<?php

require(__DIR__ . '/constants.php');


$rssGameLink = "https://www.eveonline.com/rss/news";
$rssSportLink = "https://rmcsport.bfmtv.com/rss/football/";
$rssNewsLink = "https://www.lemonde.fr/rss/une.xml";
$rssTechLink = "https://www.01net.com/actualites/feed/";
$rssMusicLink = "https://www.hits1radio.com/category/music/feed/";

if (!isset($_GET['pages'])) {
    header('Location: /homeController.php');
    die;
} else {
    if (!in_array($_GET['pages'], HEADINGS)) {
        header('Location: /homeController.php');
        die;
    } else {
        $pages = $_GET['pages'];

    }
}

switch ($pages) {
    case 'gaming':
        $rss = simplexml_load_file($rssGameLink);
        break;
    case 'sport':
        $rss = simplexml_load_file($rssSportLink);
        break;
    case 'news':
        $rss = simplexml_load_file($rssNewsLink);
        break;
    case 'tech':
        $rss = simplexml_load_file($rssTechLink);
        break;
    case 'music':
        $rss = simplexml_load_file($rssMusicLink);
        break;

    default:
        header('Location: /../../404.php');
        die;
    break;
}








include(__DIR__ . '/../views/templates/header.php');
include(__DIR__ . '/../views/pages.php');
include(__DIR__ . '/../views/templates/footer.php');
