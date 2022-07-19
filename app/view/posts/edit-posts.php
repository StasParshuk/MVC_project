
<?php

use core\View;
View::render("layout/header");
View::render("layout/navbar")?>




<div class="container card align-content-center justify-content-center">
    <div class="card-title align-content-center justify-content-center d-flex">update
    </div>
    <form action="<?= SITEURL .   "/posts/" . $_SESSION["posts"]->id  ."/update" ?> " method="post" enctype="multipart/form-data">
        <div class="form-floating">
            <input type="text" name="title" class="form-control" id="floatingInputGrid"   required>
            <label for="floatingInputGrid">title</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>
        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating">
                    <input type="file" name="fileToUpload" class="form-control"  accept=".png,.jpeg" >
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <select name="categories" class="form-select" id="floatingSelectGrid">
                        <option value="0">Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <label for="floatingSelectGrid">Works with selects</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">update post</button>
    </form>
</div>
<div class="container card align-content-center justify-content-center">
    <div class="card-title align-content-center justify-content-center d-flex">delete
    </div>
    <form action="<?= links("posts/") . $_SESSION["posts"]->id . "/delete" ?> " method="POST">
        <div class="form-floating">

            <input type="number" name="id" class="form-control" id="floatingInputGrid" value="<?=$_SESSION["posts"]->id?>" required>
            <?php if (!empty($_SESSION["show_delete"])): ?>
                <div class="alert alert-info"><?= "deleted -" . $_SESSION["show_delete"] . "category " ?></div>
            <?php endif; ?>
            <label for="floatingInputGrid">id category</label>

            <button type="submit" class="btn btn-primary">delete category</button>
    </form>

</div>
<?php View::render("layout/footer") ?>
