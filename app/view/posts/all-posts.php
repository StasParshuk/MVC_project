<?php

use core\View;

View::render("layout/header");
View::render("layout/navbar") ?>


    <div class="row">
        <?php foreach ($_SESSION["posts"] as $key => $value) : ?>

            <div class="card" style="width: 18rem;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Vexillum_Ucrainae.svg/200px-Vexillum_Ucrainae.svg.png"
                     class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=  $value->title  ?></h5>
                    <p class="card-text"><?=  $value->description  ?></p>
                    <a href="posts/<?=  $value->id  ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>


        <?php endforeach ?>
    </div>

<?php View::render("layout/footer") ?>