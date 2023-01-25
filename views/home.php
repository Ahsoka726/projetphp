<div class="row justify-content-center g-2">

    <?php foreach ($heading as $headings){
$i=0;
    ?>
     <div class="card col-4 mb-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$headings?></h5>
            <p class="card-text">
                <?= $rss[$i][0]['desc']?>
            </p>
            <div class="text-center">
                <a href="#" class="btn btn-primary">Plus d'infos</a>
            </div>
        </div>
    </div>
   <?php $i++; } ?>
  
</div>
