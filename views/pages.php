       
       
       <div class="row justify-content-around">

    <?php
            foreach ($rss->channel->item as $item) {

                $title       = (string) $item->title; // Title
                $link        = (string) $item->link; // Url Link
                $description = (string) $item->description; //Description
                $pubDate     = (string) $item->pubDate; // Date
                $date        = date('d-m-Y à H:i', strtotime($pubDate)); // Changement affichage date

                // remplacer par ... si la description dépasse 150 caractères
                if (strlen($description) > 150) {
                    $description = substr($description, 0, 150);
                    $position_espace = strrpos($description, " ");
                    $text = substr($description, 0, $position_espace);
                    $description = $text . "(...)";
                };
                // remplacer par ... si le titre dépasse 150 caractères
                if (strlen($title) > 70) {
                    $title = substr($title, 0, 70);
                    $position_espace = strrpos($title, " ");
                    $text = substr($title, 0, $position_espace);
                    $title = $text . "(...)";
                };
               
            ?>
                <div class="card col-sm-12 col-md-3 col-lg-5 mb-5 mt-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $title ?></h5>
                        <p class="card-text date"><?= $date ?></p>
                        <p class="card-text"><?= $description ?></p>
                        <a href="<?= $link ?>" target="_blank" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            <?php
            } ?>
        </div>