
<?php

use core\View;


View::render("layout/header");
View::render("layout/navbar") ?>


<div class="row">


    <div class="card" style="width: 100rem;">

        <div class="card-body">
            <h5 class="card-title"><?=  $_SESSION["category"]->id  ?></h5>
            <p class="card-text"><?=  $_SESSION["category"]->tegs  ?></p>
            <a href="<?= links("category/") . $_SESSION["category"]->id . "/edit" ?>" class="btn btn-primary">edit</a>
        </div>
    </div>



</div>

<?php View::render("layout/footer") ?>
