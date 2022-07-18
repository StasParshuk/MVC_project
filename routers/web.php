<?php
//$router->add("posts", ['controller' => \App\controller\PostsController::class, 'action'=> 'index', 'method'=> 'GET']);
$router->add(
    'posts/{id:\d+}'
    , ['controller' => \App\controller\PostsController::class,
        'action'=> 'show', 'method'=> 'GET']);
$router->add('', ['controller' => \App\controller\HomeController::class, 'action'=> 'home', 'method'=> 'GET']);
$router->add('login', ['controller' => \App\controller\LoginController::class, 'action'=> 'login', 'method'=> 'GET']);
$router->add('registration', ['controller' => \App\controller\LoginController::class, 'action'=> 'registration', 'method'=> 'GET']);
$router->add('auth/verify', ['controller' => \App\controller\LoginController::class, 'action'=> 'verify', 'method'=> 'POST']);
$router->add('users/store', ['controller' => \App\controller\UsersController::class, 'action'=> 'store', 'method'=> 'POST']);

