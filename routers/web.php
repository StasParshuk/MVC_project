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
$router->add('logout', ['controller' => \App\controller\LoginController::class, 'action'=> 'logout', 'method'=> 'GET']);

$router->add('posts', ['controller' => \App\controller\admin\PostsController::class, 'action'=> 'index', 'method'=> 'GET']);
$router->add('posts/create', ['controller' => \App\controller\admin\PostsController::class, 'action'=> 'create', 'method'=> 'GET']);
$router->add('posts/store', ['controller' => \App\controller\admin\PostsController::class, 'action'=> 'store', 'method'=> 'POST']);
$router->add('posts/{id:\d+}', ['controller' => \App\controller\admin\PostsController::class, 'action'=> 'show', 'method'=> 'GET']);
$router->add('posts/{id:\d+}/edit', ['controller' => \App\controller\admin\PostsController::class, 'action'=> 'edit', 'method'=> 'GET']);
$router->add('posts/{id:\d+}/update', ['controller' => \App\controller\admin\PostsController::class, 'action'=> 'update', 'method'=> 'POST']);
$router->add('posts/{id:\d+}/destroy', ['controller' => \App\controller\admin\PostsController::class, 'action'=> 'destroy', 'method'=> 'POST']);

$router->add('true', ['controller' => \App\controller\admin\GodController::class, 'action'=> 'admin', 'method'=> 'GET']);
$router->add('false', ['controller' => \App\controller\admin\GodController::class, 'action'=> 'notadmin', 'method'=> 'GET']);

$router->add('category/create', ['controller' => \App\controller\categories\CategoriesController::class, 'action'=> 'create', 'method'=> 'GET']);
$router->add('category/store', ['controller' => \App\controller\categories\CategoriesController::class, 'action'=> 'store', 'method'=> 'POST']);
$router->add('category/delete', ['controller' => \App\controller\categories\CategoriesController::class, 'action'=> 'delete', 'method'=> 'POST']);
$router->add('category', ['controller' => \App\controller\categories\CategoriesController::class, 'action'=> 'index', 'method'=> 'GET']);

