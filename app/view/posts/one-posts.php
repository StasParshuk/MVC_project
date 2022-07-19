
<?php

use core\View;


View::render("layout/header");
View::render("layout/navbar") ?>


<div class="row">


        <div class="card" style="width: 100rem;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e8/Vexillum_Ucrainae.svg/200px-Vexillum_Ucrainae.svg.png"
                 class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=  $_SESSION["posts"]->title  ?></h5>
                <p class="card-text"><?=  $_SESSION["posts"]->description  ?></p>
                <a href="<?= links("posts/") . $_SESSION["posts"]->id . "/edit" ?>" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>



</div>

<?php View::render("layout/footer") ?>