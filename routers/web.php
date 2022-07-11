<?php
//$router->add("posts", ['controller' => \App\controller\PostsController::class, 'action'=> 'index', 'method'=> 'GET']);
$router->add(
    'posts/{id:\d+}'
    , ['controller' => \App\controller\PostsController::class,
        'action'=> 'show', 'method'=> 'GET']);
