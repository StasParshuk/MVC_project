<?php

use core\View;
View::render("layout/header");
View::render("layout/navbar") ?>


    <div class="row">
        <?php foreach ($_SESSION["posts"] as $key => $value) : ?>

            <div class="card" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title"><?=  $value->id  ?></h5>
                    <p class="card-text"><?=  $value->tegs  ?></p>
                    <a href="category/<?=  $value->id  ?>" class="btn btn-primary">wiew</a>
                </div>
            </div>


        <?php endforeach ?>
    </div>

<?php View::render("layout/footer") ?>