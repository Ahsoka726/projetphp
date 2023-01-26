<div class="row justify-content-around">
    <?php foreach ($headings as $key => $heading){
    ?>
     <div class="card col-sm-12  mb-5 mt-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?=$rss[$key][0]['title']?></h5>
            <p class="card-text">
                <?=$rss[$key][0]['desc']?>
            </p>
            <div class="text-center">
                <a href="<?=$heading?>" class="btn btn-primary">Plus d'infos</a>
            </div>
        </div>
    </div>
   <?php  } ?>
</div>
