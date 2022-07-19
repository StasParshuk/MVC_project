
<?php

use core\View;

View::render("layout/header");
View::render("layout/navbar")?>




<div class="container card align-content-center justify-content-center">
    <div class="card-title align-content-center justify-content-center d-flex">create post
    </div>
    <form action="<?= SITEURL . "/posts/store" ?> " method="post" enctype="multipart/form-data">
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
                    <select name="category_id" class="form-select" id="floatingSelectGrid">
                        <option value="1">dogs</option>
                    </select>
                    <label for="floatingSelectGrid">Works with selects</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">create post</button>
    </form>
</div>
<?php View::render("layout/footer") ?>