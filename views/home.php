    <div class="row justify-content-center align-items-center g-2">
            <div class="card">
                <?php foreach ($rssGameArray as $key => $value) {    ?>
                    <img class="card-img-top" src="holder.js/100x180/" alt="Card image cap">
                    <?php foreach ($value as $key => $value) {       ?>

                        <div class="card-body">
                            <h5 class="card-title">
                                <span class="col-6"><?php if ($key == 'title') {
                                                        echo  $value  ?></span>
                            </h5>
                            <p class="card-text">
                            <?php  } elseif ($key == 'desc') {
                                                        echo '<p>' . $value . '</p>';; ?>
                            </p>
                            <a href="#" tabindex="-1" class="btn btn-primarycol-6">
                    <?php   } elseif ($key == 'link') {
                                                        echo '<a href=' . $value . '>' . $value . '</a>';
                                                    }
                                                    break;

                                                }
                                                break;
                                            }
                    ?>
                            </a>
                        </div>
            </div>
            <div class="card">
                <?php foreach ($rssSportArray  as $key => $value) {    ?>
                    <img class="card-img-top" src="holder.js/100x180/" alt="Card image cap">
                    <?php foreach ($value as $key => $value) {       ?>

                        <div class="card-body">
                            <h5 class="card-title">
                                <span class="col-6"><?php if ($key == 'title') {
                                                        echo  $value  ?></span>
                            </h5>
                            <p class="card-text">
                            <?php  } elseif ($key == 'desc') {
                                                        echo '<p>' . $value . '</p>';; ?>
                            </p>
                            <a href="#" tabindex="-1" class="btn btn-primarycol-6">
                    <?php   } elseif ($key == 'link') {
                                                        echo '<a href=' . $value . '>' . $value . '</a>';
                                                    }
                                                    break;

                                                }
                                                break;

                                            }
                    ?>
                            </a>
                        </div>
            </div>
            <div class="card">
                <?php foreach ($rssNewsArray  as $key => $value) {    ?>
                    <img class="card-img-top" src="holder.js/100x180/" alt="Card image cap">
                    <?php foreach ($value as $key => $value) {       ?>

                        <div class="card-body">
                            <h5 class="card-title">
                                <span class="col-6"><?php if ($key == 'title') {
                                                        echo  $value  ?></span>
                            </h5>
                            <p class="card-text">
                            <?php  } elseif ($key == 'desc') {
                                                        echo '<p>' . $value . '</p>';; ?>
                            </p>
                            <a href="#" tabindex="-1" class="btn btn-primarycol-6">
                    <?php   } elseif ($key == 'link') {
                                                        echo '<a href=' . $value . '>' . $value . '</a>';
                                                    }

                                                }
                                                break;

                                            }
                    ?>
                            </a>
                        </div>
            </div>
        <!-- <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div> -->


        <!-- <div class="col-3">
            <?php
            // foreach ($rssGameArray as $key => $value) {
            //     foreach ($value as $key => $value) {




            ?> -->


    </div>
    </div>