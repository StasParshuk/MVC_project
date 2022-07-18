<?php

use core\View;
var_dump( $data["password"]);
  View::render("layout/header");
View::render("layout/navbar")?>
<div class="container card align-content-center justify-content-center">
    <div class="card-title align-content-center justify-content-center d-flex">login
    </div>
<form action="<?= SITEURL . "/auth/verify" ?> " method="post">
    <div class="row mb-3">
        <label for="inputEmail3"  class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control" id="inputEmail3"  value="<?= !empty($data["email"]) ? $data["email"] : "" ?>" required>
            <?php if (!empty($email_error)): ?>
                <div class="alert alert-danger"><?=$email_error?></div>
            <?php endif; ?>

        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword3"  class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" name="password" class="form-control" id="inputPassword3" value=" <?= !empty($data["password"]) ? $data["password"] : "" ?> "required>
            <?php if (!empty($password_error)): ?>
                <div class="alert alert-danger"><?=$password_error?></div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                   remember me
                </label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
    <a class="text-dark" href="/registration">registrarion </a>
</form>
</div>




<?php  View::render("layout/footer") ?>
