<?php
require_once __DIR__ . "/setting.php";
use config\config;
use core\Model;
use App\model\User;

try {
    $router = new \core\Router();
    require_once ROUTDIR . '/web.php';
$columnOperatorValue = [
    "select"=>"*",
    "column"=>"email",
    "operator"=>"=",
    "value"=>"1234@sdf"

];
dd(user::select()->where($columnOperatorValue));
//    if (!preg_match('/assets/i', $_SERVER['REQUEST_URI'])) {
//        $router->dispatch($_SERVER['REQUEST_URI']);
//    }
} catch (Exception $e) {
 dd($e->getMessage());
}

//update_users("name","stas","1234@sdf1111111","12345657","2022-07-29")
