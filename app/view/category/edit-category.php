<?php

use core\View;

View::render("layout/header");
View::render("layout/navbar") ?>
    <div class="container card align-content-center justify-content-center">
    <div class="container card align-content-center justify-content-center">
        <div class="card-title align-content-center justify-content-center d-flex">create category <?=$_SESSION["category"]->id?>
        </div>
        <form action="<?= links("category/") . $_SESSION["category"]->id . "/update" ?>" method="post">
            <div class="form-floating">
                <input type="text" name="tegs" class="form-control" id="floatingInputGrid" <?=$_SESSION["category"]->tegs?> required>
                <?php if (!empty($_SESSION["show_create"])): ?>
                    <div class="alert alert-info"><?= "id created category-" . $_SESSION["show_create"] ?></div>
                <?php endif; ?>
                <label for="floatingInputGrid">tegs</label>

                <div class="form-floating">
                    <input type="number" name="id" class="form-control" id="floatingInputGrid" value="<?=$_SESSION["category"]->id?>" required>
                    <?php if (!empty($_SESSION["show_delete"])): ?>
                        <div class="alert alert-info"><?= "deleted -" . $_SESSION["show_delete"] . "category " ?></div>
                    <?php endif; ?>
                    <label for="floatingInputGrid">id category</label>


                    <button type="submit" class="btn btn-primary">update category</button>
        </form>

    </div>
    </div>
    <div class="container card align-content-center justify-content-center">
    <div class="card-title align-content-center justify-content-center d-flex">delete
    </div>
    <form action="<?= links("category/") . $_SESSION["category"]->id . "/delete" ?> " method="POST">
        <div class="form-floating">
            <input type="number" name="id" class="form-control" id="floatingInputGrid" value="<?=$_SESSION["category"]->id?>" required>
            <?php if (!empty($_SESSION["show_delete"])): ?>
                <div class="alert alert-info"><?= "deleted -" . $_SESSION["show_delete"] . "category " ?></div>
            <?php endif; ?>
            <label for="floatingInputGrid">id category</label>

            <button type="submit" class="btn btn-primary">delete category</button>
    </form>

    </div>
<?php View::render("layout/footer") ?>