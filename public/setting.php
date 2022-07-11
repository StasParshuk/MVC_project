<?php
ini_set('display_errors', 1);//вывод ошибок
ini_set('display_startup_errors', 1);//вывод ошибок
error_reporting(E_ALL);//вывод ошибок
require_once __DIR__ . "/../config/const.php";
require MAINDIR . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));// для env
$dotenv->load();//для env


