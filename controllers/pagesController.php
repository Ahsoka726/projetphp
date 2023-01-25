<?php

require_once(__DIR__ . '/function.php');

$nbrArticles = 2;

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    header('Location: /controllers/homeController.php');
    die;
} else {
    $page = $_GET['pages'];
    include(__DIR__ . '/../views/templates/header.php');

    include(__DIR__ . '/../views/pages.php');

    switch ($page) {
        case 'gaming':
            
            break;
        case 'sport':
        
            break;
        case 'news':
    
            break;
        case 'tech':
    
            break;
        case 'music':
        
            break;

        default:
            header('Location: /controllers/homeController.php');
            die;
            break;
    }
}
include(__DIR__.'/../views/templates/footer.php');
