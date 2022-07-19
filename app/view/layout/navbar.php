
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= links("posts")  ?>">READ</a>
                </li>
                <?php if (!empty($_SESSION["user_data"]["id"]) & empty($_SESSION["god"]) ) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            user
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="category">show all categories</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">category?</a></li>
                        </ul>
                    </li>
                <?php endif ?>

                <?php if (!empty($_SESSION["user_data"]["id"]) & !empty($_SESSION["god"]) ) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            admin
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= links("category")  ?>">view category</a></li>

                            <li><a class="dropdown-item" href=" <?= links("category/create")  ?> ">create-delete category</a></li>

                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href=" <?= links("posts/create")  ?>" posts/create">create post</a></li>


                        </ul>
                    </li>
                <?php endif ?>


            </ul>
            <form class="d-flex" role="search">
                <?php if (!empty($_SESSION["user_data"]["id"])) : ?>
                <a class="navbar-brand" href=<?=(empty($_SESSION["god"])) ? "/true" : "/false" ?> ><?=(empty($_SESSION["god"])) ? "GODMOD" : "USERMOD" ?></a>
                <?php endif ?>

                <a class="navbar-brand" href=<?=(!empty($_SESSION["user_data"]["id"])) ? "/logout" : "/login" ?> ><?=(!empty($_SESSION["user_data"]["id"])) ? "logout" : "login" ?></a>
                <a class="navbar-brand" href="/registration">registrarion</a>
            </form>
        </div>
    </div>
</nav>



<?php

