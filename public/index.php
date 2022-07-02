<?php
require_once __DIR__ . "/setting.php";
use config\config;
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

use core\Model;

