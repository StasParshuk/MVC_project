
<?php

use core\View;

View::render("layout/header");
View::render("layout/navbar")?>




<div class="container card align-content-center justify-content-center">
    <div class="card-title align-content-center justify-content-center d-flex">create category
    </div>
    <form action="<?= SITEURL . "/category/store" ?> " method="post">
        <div class="form-floating">
            <input type="text" name="tegs" class="form-control" id="floatingInputGrid"   required>
            <?php if (!empty($_SESSION["show_create"])): ?>
                <div class="alert alert-info"><?= "id created category-" . $_SESSION["show_create"]?></div>
            <?php endif; ?>
            <label for="floatingInputGrid">tegs</label>

        <button type="submit" class="btn btn-primary">create category</button>
    </form>

</div>
<div class="container card align-content-center justify-content-center">
    <div class="card-title align-content-center justify-content-center d-flex">delete
    </div>
    <form action="<?= SITEURL . "/category/delete" ?> " method="post">
        <div class="form-floating">
            <input type="number" name="id" class="form-control" id="floatingInputGrid"   required>
            <?php if (!empty($_SESSION["show_delete"])): ?>
                <div class="alert alert-info"><?= "deleted -" . $_SESSION["show_delete"] . "category "?></div>
            <?php endif; ?>
            <label for="floatingInputGrid">id category</label>

            <button type="submit" class="btn btn-primary">delete</button>
    </form>


</div>
<?php View::render("layout/footer") ?>
