<?php

use core\View;

View::render("layout/header");
View::render("layout/navbar")?>

<div class="container card align-content-center justify-content-center">
    <div class="card-title align-content-center justify-content-center d-flex">registration
    </div>
    <form action="<?= SITEURL . "/users/store" ?> " method="post">

        <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email"
                       name="email"
                       class="form-control"
                       id="inputEmail3"
                       value="<?= !empty($data["email"]) ? $data["email"] : "" ?>"
                       required>
                <?php if (!empty($email_error)): ?>
                    <div class="alert alert-danger"><?=$email_error?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password"
                       name="password"
                       class="form-control"
                       id="inputPassword3"
                    value=" <?= !empty($data["password"]) ? $data["password"] : "" ?> "required>
                <?php if (!empty($password_error)): ?>
                    <div class="alert alert-danger"><?=$password_error?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="inputName" value=" <?= !empty($data["name"]) ? $data["name"] : "" ?>" required>
                <?php if (!empty($name_error)): ?>
                    <div class="alert alert-danger"><?=$name_error?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputSurname" class="col-sm-2 col-form-label">Surname</label>
            <div class="col-sm-10">
                <input type="text" name="surname" class="form-control" id="inputSurname" value=" <?= !empty($data["surname"]) ? $data["surname"] : "" ?>" required>
                <?php if (!empty($surname_error)): ?>
                    <div class="alert alert-danger"><?=$surname_error?></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row mb-3">
            <label for="inputData" class="col-sm-2 col-form-label" >Birthday</label>
            <div class="col-sm-10">
                <input type="date" name="birthdate" class="form-control" id="inputData"  required>
                <?php if (!empty($birthdata_error)): ?>
                    <div class="alert alert-danger"><?=$birthdata_error?></div>
                <?php endif; ?>
            </div>
        </div>



<div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1" required>
            <label class="form-check-label" for="gridCheck1">
                agree
            </label>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">Sign in</button>
<a class="text-dark" href="/login">registered?sign in </a>
</form>
</div>


<?php View::render("layout/footer") ?>
