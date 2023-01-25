<div class="row justify-content-center align-items-center g-2">
    <?php
        foreach ($rss as $key => $value) {
           foreach ($value as $key => $value) {
            echo $value['title'].'<br>';
            echo $value['desc'].'<br>';
            echo '<br>';
            echo '<br>';
            echo '<br>';
           }
        }
    
    ?>



  
</div>