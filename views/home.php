    
    <div class="row justify-content-center align-items-center g-2">
        <?php
            foreach ($tableauInfos as $key => $value) {
                foreach ($value as $key => $value) {
                    if($key == 'title'){
                        echo '<h2>'.$value.'</h2>';
                    }elseif ($key == 'link') {
                        echo '<a href='.$value.'>'.$value.'</a>';
                    }elseif ($key == 'desc') {
                        echo '<p>'.$value.'</p>';
                    }

                }
            }
        
        ?>
    </div>
   
          