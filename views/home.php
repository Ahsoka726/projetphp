<div class="row justify-content-around">

    <?php foreach ($heading as $key => $headings){
    ?>
     <div class="card col-sm-12  mb-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$rss[$key][0]['title']?></h5>
            <p class="card-text">
                <?=$rss[$key][0]['desc']?>
            </p>
            <div class="card-footer text-center">
                <a href="#" class="btn btn-primary">Plus d'informations</a>
            </div>
        </div>
    </div>
   <?php  } ?>
  
</div>
