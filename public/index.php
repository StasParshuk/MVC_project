<?php
require_once __DIR__ . "/setting.php";
use config\config;
use core\Model;
use App\model\User;

if (!session_id()){
    session_start();
}
try {
    $router = new \core\Router();
    require_once ROUTDIR . '/web.php';

    if (!preg_match('/assets/i', $_SERVER['REQUEST_URI'])) {
        $router->dispatch($_SERVER['REQUEST_URI']);
    }
} catch (Exception $e) {
 dd($e->getMessage());
}

