<?php
// si tu ne trouve pas le cookie qui contient le tableau heading
if (!isset($_COOKIE['heading'])) {
  // implémente les valeurs ci par defaut
  $headings = ['sport','gaming','news'];
}else{
  // sinon recupére toute les valeurs contenu dans le tableau headings et décode les
  $headings = json_decode($_COOKIE['heading']);
}

?>




<!doctype html>
<html lang="fr">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="../../public/assets/css/style.css">
</head>

<body>
  <header>
    
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <img src="/public/assets/img/Votre_savoir_est_votre_culture.png" alt="logo du site actualis">
    <h1 class="col-7">Actualis</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php 
        foreach ($headings as $heading){
         
          echo '<li class="nav-item">'.
          '<a class="nav-link active" href="../../controllers/pagesController.php?pages='.
          $heading.
          '" aria-current="page">'.
          $heading.'<a>';
        } ?>
        
        
        <!-- </li>
        <li class="nav-item">
        <a class="nav-link active" href="../../controllers/pagesController.php?pages=sport" aria-current="page">Sport</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../../controllers/pagesController.php?pages=news" aria-current="page">News</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../../controllers/pagesController.php?pages=tech" aria-current="page">Tech</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="../../controllers/pagesController.php?pages=music" aria-current="page">Musique</a>
        </li> -->
        <li class="nav-item">
        <a class="nav-link active" href="../../controllers/parametersController.php" aria-current="page">Paramètre</a>
        </li>
      </ul>
    </div>
  </div> 
</nav>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container-fluid">

